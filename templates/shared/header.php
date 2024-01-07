<?php
    // ? Base URL to avoid relative paths get mixed

    $base_url = 'http://localhost:3000/';

?>

<!doctype html>
<html lang="en">

    <head>
        <title>Front Page</title>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS v5.2.1 -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

        <link href="../../styles/styles.css" rel="stylesheet" />
    </head>

    <body>
        <header>
            <nav class="navbar navbar-expand-lg bg-body-tertiary">
                <div class="container-fluid">
                    <a class="navbar-brand" href="#">System</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link" aria-current="page" href="<?php echo $base_url; ?>employees.php">Employees</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="<?php echo $base_url; ?>positions.php">Positions</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="<?php echo $base_url; ?>users.php">Users</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Logout</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </header>
        <br/>
        <main class="container">
        <?php display_message(); ?>
