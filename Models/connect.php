<?php
class query {
    private $dbhost = "HOSTNAME";
    private $dbuser = "USERNAME";
    private $dbpass = "DBPASSWORD";
    private $dbname = "DBNAME";
    private $dbconn;
    public $status = "IDLE";
    public $error = "";
    public $result;

    public function __construct($dbquery, $type) {
        $this->dbconn = new mysqli($this->dbhost, $this->dbuser, $this->dbpass, $this->dbname);

        if ($this->dbconn->connect_error) {
            $this->status = "ERROR::CONNECTION";
            $this->error = $this->dbconn->error;
        }
        else {
            $this->$type($dbquery);
        }
    }

    public function insert($dbquery) {
        if ($this->dbconn->query($dbquery) === TRUE) {
            $this->status = "SUCCESS";
        }
        else {
            $this->status = "ERROR::QUERY";
            $this->error = $this->dbconn->error;
        }
        $this->dbconn->close();
    }

    public function select($dbquery) {
        $this->result = $this->dbconn->query($dbquery);
        if ($this->result->num_rows > 0) {
            $this->status = "SUCCESS";
        }
        else {
            $this->status = "ERROR::QUERY";
            $this->error = $this->dbconn->error;
        }
        $this->dbconn->close();
    }

    public function update($dbquery) {
        if ($this->dbconn->query($dbquery) === TRUE) {
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
