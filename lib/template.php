<?php
    class Template {

        protected $vars = array();
        protected $template;

        public function __construct($template) {
            $this -> template = $template;
        }

        public function __set($key, $value) {
            $this -> vars[$key] = $value;
        }

        public function __get($key) {
            return $this -> vars[$key];
        }

        public function __toString() {
            // ? Init values using the associative array.
            extract($this -> vars);

            chdir(dirname($this -> template));
            ob_start();

            include basename($this -> template);
            // ? If $this -> template = "templates/shared/frontpage.php"
            // ? basename function will return: "frontpage". The basename of the file.

            $output = ob_get_clean(); // ? Get current buffer contents and delete current output
            return $output;
        }

    }
?>
