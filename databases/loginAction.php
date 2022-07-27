<?php
require('./databases/listefilm.php');


// Validation du formulaire
if (isset($_POST['validate'])) {

    // Vérifier si le user a bien complété tout les champs
    if (!empty($_POST['email']) and !empty($_POST['mdp'])) {

        // Evité que l'utilisateur malveillant utilise attaque SQL | Donnée USER
        $user_email = htmlspecialchars($_POST['email']);
        $user_mdp = htmlspecialchars($_POST['mdp']);

        // vérifier si l'utilisateur existe (si le pseudo est correct)
        $checkIfuserExists = $objConnect->prepare('SELECT * FROM users WHERE email = ?');
        $checkIfuserExists->execute(array($user_email));

        // la méthode rowCount permet de compter les récupérer lors de la requête
        if ($checkIfuserExists->rowCount() > 0) {

            // Récuperé les donnée de l'utilisateur
            $usersInfos = $checkIfuserExists->fetch();

            // Vérifier si le mot de passe est correct
            if (password_verify($user_mdp, $usersInfos['mdp'])) {

                # vérifier si le user est authentifier sur le site puis récupérer ses donnée à travers des variable globales sessions
                $_SESSION['auth'] = true;
                $_SESSION['id'] = $usersInfos['idUser'];
                $_SESSION['prenom'] = $usersInfos['prénoms'];
                $_SESSION['email'] = $usersInfos['email'];

                // Redirige l'utilisateur vers la page d'accueil
                header('Location: index.php');
            } else {
                $Msgerrors = "Votre mot de passe est incorrect...";
            }
        } else {
            $Msgerrors = "Votre E-mail est incorrect...";
        }
    } else {
        $Msgerrors = "Veuillez remplir tout les champs SVP...";
    }
}
