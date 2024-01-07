<?php include_once 'config/init.php' ?>


<?php
    $positionsDB = new Position;
    $positionsIndexTemplate = new Template('sections/positions/index.php');

    $positionsIndexTemplate -> positions = $positionsDB -> getPositions();

    echo $positionsIndexTemplate;
?>
