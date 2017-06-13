<div class="panel panel-default">
    <div class="panel-heading">
        <h3 class="panel-title">
            Register
        </h3>
    </div>
    <div class="panel-body">
        <form action="/api/users/register.php" method="post">
            <div class="form-group">
                <label for="pseudo">Pseudo</label>
                <input type="text" name="pseudo" class="form-control" id="pseudo" placeholder="Pseudo">
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" name="password" class="form-control" id="password" placeholder="Password">
            </div>
            <div class="form-group">
                <label for="passwordCheck">Password check</label>
                <input type="password" class="form-control" id="passwordCheck" placeholder="Password check">
            </div>
            <button type="submit" class="btn btn-default col-md-12">Register</button>
        </form>
    </div>
</div>
<?php
if(isset($_GET) and count($_GET) > 0)
{
    ?>
    <div class="panel panel-danger">
        <div class="panel-heading">
            <h3 class="panel-title">
                Erreur(s)
            </h3>
        </div>
        <div class="panel-body">
            <ul>
                <?php
                $errors = [];
                $errors['passwordtooshort'] = 'Mot de passe trop court.';
                $errors['pseudotooshort'] = 'Pseudo trop court.';

                foreach($_GET as $key => $value)
                    echo '<li>' . $errors[$key] . '</li>';
                ?>
            </ul>
        </div>
    </div>
    <?php
}
?>