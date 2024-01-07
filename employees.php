<?php include_once 'config/init.php' ?>


<?php

    $employeeDB = new Employee;
    $positionDB = new Position;


    $employeeIndexTemplate = new Template('sections/employees/index.php');
    $employeeIndexTemplate -> positionDB = $positionDB;

    $employeeIndexTemplate -> employees = $employeeDB -> getAllEmployees();

    echo $employeeIndexTemplate;
?>
