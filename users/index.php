<?php
/**
 * Created by PhpStorm.
 * User: Simon
 * Date: 02/05/2017
 * Time: 15:09
 */
session_start();

include('../includes/header.php');

if(isset($_SESSION['pseudo']))
{
    header('Location: /messages/index.php');
}
else
{
    ?>
    <div class="row">
        <div class="col-md-3 col-md-offset-2">
            <?php include('view.login-form.html'); ?>
        </div>
        <div class="col-md-3 col-md-offset-2">
            <?php include('view.register-form.php'); ?>
        </div>
    </div>
    <?php
}

