<?php
class Query {
    private $dbhost = "localhost";
    private $dbuser = "root";
    private $dbpass = "";
    private $dbname = "tchouk_stats";
    private $dbconn;
    public $dbquery;
    public $type;
    public $status = "IDLE";
    public $error = "";
    public $result;

    public function __construct($dbquery) {
        $this->dbquery = $dbquery;
        $this->dbconn = new mysqli($this->dbhost, $this->dbuser, $this->dbpass, $this->dbname);
        $this->type = trim(preg_replace('/\s\s+/', ' ', $this->dbquery));
        $this->type = strtolower(explode(" ", $this->type)[0]);

        if ($this->dbconn->connect_error) {
            $this->status = "ERROR::CONNECTION";
            $this->error = $this->dbconn->error;
        }
        else {
            $this->{$this->type}();
        }
    }

    public function insert() {
        if ($this->dbconn->query($this->dbquery) === TRUE) {
            $this->status = "SUCCESS";
        }
        else {
            $this->status = "ERROR::QUERY";
            $this->error = $this->dbconn->error;
        }
        $this->dbconn->close();
    }

    public function select() {
        $this->result = $this->dbconn->query($this->dbquery);
        if ($this->result->num_rows > 0) {
            $this->status = "SUCCESS";
        }
        else {
            $this->status = "ERROR::QUERY";
            $this->error = $this->dbconn->error;
        }
        $this->dbconn->close();
    }

    public function update() {
        if ($this->dbconn->query($this->dbquery) === TRUE) {
            $this->status = "SUCCESS";
        }
        else {
            $this->status = "ERROR::QUERY";
            $this->error = $this->dbconn->error;
        }
        $this->dbconn->close();
    }
}
?>
