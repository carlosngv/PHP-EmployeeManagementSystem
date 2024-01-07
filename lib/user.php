
<?php
    class User {
        private $db;

        public function __construct(){
            $this -> db = new Database();
        }

        public function getAllUsers() {
            $this -> db -> query("
                SELECT * FROM users;
            ");

            return $this -> db -> fetchResults();
        }


        public function createUser($data) {
            $this -> db -> query('
                INSERT INTO
                    users(username, user_password, email)
                VALUES
                    (:username, :password, :email)
            ');

            $this -> db -> bind(':username', $data['username']);
            $this -> db -> bind(':password', $data['password']);
            $this -> db -> bind(':email', $data['email']);

            if($this -> db -> execute()) {
                return true;
            }
            return false;
        }
    }

?>
