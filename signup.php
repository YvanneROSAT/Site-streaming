<?php
require('./databases/signupAction.php');
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <title>Inscription</title>
</head>

<body>



    <br><br><br><br><br>
    <form class="container" method="POST">
        <?php
        if (isset($Msgerrors)) {
            echo '<p>' . $Msgerrors . '</p';
        }
        ?>

        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Prénom</label>
            <input type="text" class="form-control" name="prenom">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">E-mail</label>
            <input type="email" class="form-control" name="email">
            <div id="emailHelp" class="form-text">exemple@gmail.com</div>
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Mot de passe</label>
            <input type="password" class="form-control" name="mdp">
        </div>
        <a href="login.php">
            <p>J'ai déjà un compte, je me connecte</p>
        </a>
        <button type="submit" class="btn btn-primary" name="validate">S'inscrire</button>
    </form>

    <?php
    require('./headerFooter/footer.php');
    ?>