<?php
/**
 * Created by PhpStorm.
 * User: Simon
 * Date: 30/05/2017
 * Time: 14:59
 */

session_start();

if(!isset($_GET['thread_id']))
    header('Location: /messages/index.php');

require_once('../api/database.php');

$threads =
[
    [
        'id' => '1234',
        'author' => 'guest1',
        'messages' =>
        [
            [
                'author' => 'guest1',
                'content' => 'Hello'
            ],
            [
                'author' => 'guest2',
                'content' => 'afdsfsd'
            ]
        ]
    ]
];

$thread =

include('../includes/header.php');