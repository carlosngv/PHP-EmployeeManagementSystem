<?php
    class Database {
        private $host = DB_HOST;
        private $password = DB_PASSWORD;
        private $user = DB_USER;
        private $dbname = DB_NAME;

        // Handlers
        private $dbh;
        private $errh;
        private $stmt; // ? statement handler

        public function __construct() {
            $dsn = 'mysql:host:=' . $this -> host . ';dbname=' . $this -> dbname . ';'; // ? Data Source Name
            $options = array(
                PDO::ATTR_PERSISTENT => true,
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
            );
            try {
                $this -> dbh = new PDO($dsn, $this -> user, $this -> password, $options);
            } catch(PDOException $e) {
                $this -> errh = $e -> getMessage();
            }
        }

        public function query($query) {
            $this -> stmt = $this -> dbh -> prepare($query);
        }

        public function bind($param, $value, $type = null) {
            if(is_null($type)) {
                switch(true) {
                    case is_int($value):
                        $type = PDO::PARAM_INT;
                        break;
                    case is_bool($value):
                        $type = PDO::PARAM_BOOL;
                        break;
                    case is_null($value):
                        $type = PDO::PARAM_NULL;
                        break;
                    default:
                        $type = PDO::PARAM_STR;
                        break;
                }
            }


            // ? bindValue() binds the VALUE of the variable to the query.
            // ? bindParam() binds the VARIABLE to the query.
            $this -> stmt -> bindValue($param, $value, $type);

        }

        public function execute() {
            return $this -> stmt -> execute();
        }

        public function fetchResults(){
            $this -> stmt -> execute();
            return $this -> stmt -> fetchAll(PDO::FETCH_OBJ);
        }

        public function fetchSingle(){
            // ? Only fetches single row
            $this -> stmt -> execute();
            return $this -> stmt -> fetch(PDO::FETCH_OBJ);
        }

    }
?>
