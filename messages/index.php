<?php
/**
 * Created by PhpStorm.
 * User: Simon
 * Date: 02/05/2017
 * Time: 15:10
 */
session_start();

if(!isset($_SESSION['pseudo']))
    header('Location: /users/index.php');

$threads =
[
    [
        'id' => '1234',
        'author' => 'guest1',
        'title' => 'Title 1'
    ],
    [
        'id' => '1854',
        'author' => 'guest2',
        'title' => 'My title'
    ]
];
$messages =
[
    [
        'author' => 'guest1',
        'content' => 'Hello'
    ],
    [
        'author' => 'guest2',
        'content' => 'Hello'
    ],
    [
        'author' => 'guest3',
        'content' => 'Hello'
    ]
];

include('../includes/header.php');

?>
<table class="table table-striped">
    <thead>
        <tr>
            <th>Title</th>
            <th>Author</th>
        </tr>
    </thead>
    <tbody>
<?php
foreach($threads as $thread)
{
    ?>
    <tr>
        <td><a href="/messages/thread.php?thread_id=<?php echo $thread['id']; ?>"><?php echo $thread['title']; ?></a></td>
        <td><?php echo $thread['author']; ?></td>
    </tr>
    <?php
}
?>
    </tbody>
</table>
<?php

/*

 <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title">
            <?php echo $message['author'];
            if($_SESSION['pseudo'] === $message['author'])
            {
                ?>
                <div class="btn btn-primary">
                    <span class="glyphicon glyphicon-edit"></span>
                    Edit
                </div>
                <div class="btn btn-danger">
                    <span class="glyphicon glyphicon-remove"></span>
                    Delete
                </div>
                <?php
            }
            ?>
            </h3>
        </div>
        <div class="panel-body">
            <?php echo $message['content']; ?>
        </div>
    </div>



 */

include('../includes/footer.html');