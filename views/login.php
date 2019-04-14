<?php ob_start();?>

//si utilisateur deja conencte, renvoie vers le formulaire directement
<?php if (isset($_SESSION['logged'])) {
    header ('location:valid');
} ?>


<div class="row">

    <div class="col-lg-12">

        <form action="valid" method="post">

            <div class="form-group">
                <label for="login">Login :</label>
                <input type="text" class="form-control" id="login" placeholder="Login" name="login" required>
            </div>
            <div class="form-group">
                <label for="password">Password :</label>
                <input type="password" class="form-control" id="password" placeholder="Password" name="password" required>
            </div>

            <button type="submit" class="btn btn-primary" name="submit">Log !</button>


        </form>

        <?php

        if (isset($_SESSION['log_invalid'])) {
            echo ('<br/>');
            echo ("le login et/ou le mot de passe rentrés sont invalides");
            unset($_SESSION['log_invalid']);
        }
        ?>


    </div>

</div>


<?php $content = ob_get_clean();?>

<?php include('views/layout.php');?>


