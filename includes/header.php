<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Application Web Sécurité</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <style>
        body
        {
            padding-top: 70px;
        }
    </style>
</head>
<body class="container-fluid">
    <nav class="navbar navbar-default navbar-fixed-top">
        <?php
            if(isset($_SESSION['pseudo']))
            {
                ?>
                <div class="container-fluid">
                    <div class="navbar-header">
                        <a class="navbar-brand" href="#"><?php echo $_SESSION['pseudo']; ?></a>
                    </div>
                    <div class="collapse navbar-collapse">
                        <ul class="nav navbar-nav navbar-left">
                            <li>
                                <?php
                                if(isset($_GET['thread_id']))
                                {
                                    ?>
                                    <a href="../"><span class="glyphicon glyphicon-chevron-left"></span> Back</a>
                                    <?php
                                }
                                else
                                {
                                    ?>
                                    <a href="#">New thread</a>
                                    <?php
                                }
                                ?>
                            </li>
                        </ul>
                        <ul class="nav navbar-nav navbar-right">
                            <li><a href="/api/users/logout.php">Logout</a></li>
                        </ul>
                    </div>
                </div>
                <?php
            }
        ?>
    </nav>