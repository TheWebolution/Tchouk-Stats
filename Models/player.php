<?php
class Player {
    private $id;
    public $firstname;
    public $lastname;
    public $nickname;
    public $number;
    public $team;

    public function __construct($id) {
        if ($id !== null) {
            $this->id = $id;
            $select = "
                SELECT
                    p.firstname,
                    p.lastname,
                    p.nickname,
                    tp.number,
                    tt.name teamname,
                    tt.id teamid
                FROM
                    tournaments_players tp INNER JOIN
                    players p ON tp.player_FK = p.id LEFT JOIN
                    tournaments_teams tt ON tp.tournament_team_FK = tt.id LEFT JOIN
                    teams t ON tt.team_FK = t.id
                WHERE
                    tp.id = ".$this->id;

            $query = new Query($select);
            foreach ($query->result as $row) {
                $this->firstname = $row['firstname'];
                $this->lastname = $row['lastname'];
                $this->nickname = $row['nickname'];
                $this->number = $row['number'];
                $this->team["name"] = $row['teamname'];
                $this->team["id"] = $row['teamid'];
            }
        }
    }
}
?>
