<?php
/**
 * Created by PhpStorm.
 * User: Simon
 * Date: 02/05/2017
 * Time: 15:12
 */

if(!isset($_POST) or !isset($_POST['pseudo'], $_POST['password']))
{
    header('Location: /');
    exit;
}

$errors = [];
if(strlen($_POST['pseudo']) < 4)
    $errors[] = 'pseudotooshort';
// TODO: check if pseudo already used
if(strlen($_POST['password']) < 7)
    $errors[] = 'passwordtooshort';

$errorURL = '';
foreach($errors as $err)
    $errorURL .= $err . '&';
if(strlen($errorURL) > 0)
{
    $errorURL = substr($errorURL, 0, -1);
    header('Location: /users/index.php?' . $errorURL);
    exit;
}

var_dump($_POST);