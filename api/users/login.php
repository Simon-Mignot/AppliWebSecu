<?php
/**
 * Created by PhpStorm.
 * User: Simon
 * Date: 02/05/2017
 * Time: 15:12
 */

session_start();

if(isset($_POST['pseudo']))
    $_SESSION['pseudo'] = $_POST['pseudo'];

header('Location: /users/index.php');
