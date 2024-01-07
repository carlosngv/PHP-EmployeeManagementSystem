
<?php
    class Employee {
        private $db;

        public function __construct(){
            $this -> db = new Database();
        }

        public function getAllEmployees() {
            $this -> db -> query("
                SELECT * FROM employees;
            ");

            return $this -> db -> fetchResults();
        }

        public function createEmployee($data) {
            $this -> db -> query("
            INSERT INTO
                employees(name, lastname, photo, cv, position_id, entry_date)
            VALUES(:name, :lastname, :photo, :cv, :position_id, :entry_date)
            ");

            $this -> db -> bind(':name', $data['name']);
            $this -> db -> bind(':lastname', $data['lastname']);
            $this -> db -> bind(':photo', $this -> moveFile($data['photo']));
            $this -> db -> bind(':cv', $this -> moveFile($data['cv']));
            $this -> db -> bind(':position_id', $data['position_id']);
            $this -> db -> bind(':entry_date', $data['entry_date']);

            if($this -> db -> execute()) {
                return true;
            }

            return false;
        }

        public function moveFile($file){
            // ? $file = $data['foto'] || $data['cv']

             // ? Defining file and name
             $file_date = new DateTime();
             $file_name = ($file != '') ? $file_date -> getTimestamp() . "_" . $file['name'] : '';

             $tmp = $file['tmp_name'];

             if($tmp != '') {
                 if(!is_dir('./files/')) {
                    mkdir('./files/');
                 }
                 move_uploaded_file($tmp, './files/' . $file_name);
             }


             return $file_name;
        }
    }

?>
