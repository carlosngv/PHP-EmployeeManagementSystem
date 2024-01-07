<?php include_once 'config/init.php' ?>


<?php

    $userDB = new User;

    $usersIndexTemplate = new Template('sections/users/index.php');
    $usersIndexTemplate -> users = $userDB -> getAllUsers();

    echo $usersIndexTemplate;
?>
