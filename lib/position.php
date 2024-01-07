<?php
    class Position {
        private $db;

        public function __construct(){
            $this -> db = new Database;
        }

        public function getPositions() {
            $this -> db -> query('
                SELECT
                    *
                FROM
                    positions
            ');

            return $this -> db -> fetchResults();
        }

        public function getPositionByID($position_id) {
            $this -> db -> query('
                SELECT
                    position_name
                FROM
                    positions
                WHERE
                    id = :position_id
            ');

            $this -> db -> bind(':position_id', $position_id);

            return $this -> db -> fetchSingle();
        }

        public function createPosition($position_name) {
            $this -> db -> query("
                INSERT INTO
                    positions(position_name)
                VALUES
                    (:position_name)
            ");

            $this -> db -> bind(':position_name', $position_name);

            if($this -> db -> execute()) {
                return true;
            }
            return false;
        }
    }
?>
