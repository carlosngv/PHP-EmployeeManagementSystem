<?php
    require_once 'config.php';
    require_once ROOTPATH . 'helpers/system_notification.php';

    if(session_id() == '' || !isset($_SESSION) || session_status() === PHP_SESSION_NONE) {
        // session isn't started
        session_start();
    }

    // ? Autoload helps us to automatically require once each instance of classes
    function auto_loader($class_name){
        if(is_file(ROOTPATH.'lib/'. $class_name . '.php')) {
            require_once(ROOTPATH . 'lib/'. $class_name . '.php');
        } else {
            die(ROOTPATH . 'lib/'. $class_name . '.php does not exists');
        }
    }

    // ? Alternative of __autoload, since it is deprecated.
    spl_autoload_register('auto_loader');


?>
