<?php
//On vérifie que le Pseudo existe dans la BDD et que le mot de passe est le bon

if (isset($_SESSION['logged'])) {
    include ('views/admin.php');
    }

    else if (isset($_POST['login']) AND isset($_POST['password'])) {
    $tm = new taskManager();
    $donnees = $tm->checkLog();


    // Je teste la valeur de $data['membre_valide']

    if($donnees == 1 OR isset($_SESSION['logged']))
    { // On as trouvé un membre avec ce couple mdp, login


        if (!isset($_SESSION['logged'])) {
            $_SESSION['logged'] = 1;
        }

        include ('views/admin.php');

    }
    else
    { // Personne n'existe dans la table avec ce couple mdp, login
        $_SESSION['log_invalid'] = 1;
        header('location:login');
        // renvoi vers le formulaire de login avec passage en session de la variable d'erreur qui va permettre d'afficher le msg qui va bien

        echo '<p>le login et/ou le mot de passe rentrés sont invalides</p>';
    }

}


else
{
    header('location:accueil'); //renvoi auto a l'accueil si on tente d'accéder à la page
}
?>