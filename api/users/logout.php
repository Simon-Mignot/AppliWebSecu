<?php
/**
 * Created by PhpStorm.
 * User: Simon
 * Date: 02/05/2017
 * Time: 15:12
 */

session_start();

session_unset();

session_destroy();

header('Location: /users/index.php');
