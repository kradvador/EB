<?php
$page = $_SERVER['REQUEST_URI'];
$page = str_replace('/EB/','',$page);
//recuperation de l'url apres le slash pour passer la classe en active ensuite pour la nav
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>L'échappée belle - Adoption de chats</title>

    <link rel="icon" type="image/x-icon" href="img/favicon.ico" />
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="js/bootstrap.js"></script>

</head>
<body>

<header class="row">

    <div class="container-fluid nav_wrapper">

        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a href="accueil">
                        <img src="img/logo.png" alt="logo" class="navbar-brand">
                    </a>
                    <span class="navbar-brand" id="main_title">L'échappée belle</span>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav navbar-right">
                        <li <?php if($page == 'accueil') echo ('class=active'); ?>><a href="accueil">ACCUEIL</a></li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">ADOPTION <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="#">Moins de 6 mois</a></li>
                                <li><a href="#">6 mois à 1 an</a></li>
                                <li><a href="#">1 an à 3 ans</a></li>
                                <li><a href="#">plus de 3 ans</a></li>
                                <li role="separator" class="divider"></li>
                                <li><a href="#">Les difficiles</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">CONSEILS <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="#">Alimentation</a></li>
                                <li><a href="#">FIV et idées reçues</a></li>
                                <li><a href="#">FIV, la FAQ</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">NOUS AIDER <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="#">Adhérer/Donner/Parrainer</a></li>
                                <li><a href="#">Etre famille d'accueil</a></li>
                                <li><a href="#">Devenir bénévole</a></li>
                                <li><a href="#">Nos partenaires</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">BOUTIQUE <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="#">Porte-clés et bijoux de sac</a></li>
                                <li><a href="#">Figurine et bougie</a></li>
                                <li><a href="#">Bijoux</a></li>
                                <li><a href="#">Photos</a></li>
                            </ul>
                        </li>
                        <li class="inactive"><a href="#">CONTACT</a></li>
                        <li class="inactive"><a href="#">A PROPOS</a></li>
                        <li <?php if($page == 'login') echo ('class=active'); ?> ><a href="login">LOGIN</a></li>
                    </ul>
                </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
        </nav>

    </div>

</header>

<div class="container"> <!-- container -->

    <?php echo $content;?>


</div> <!-- /.container -->


<div class="row footer" id="footer">

    <div class="col-lg-12 col-md-12 col-xs-12">

        Tous droits réservés l'échappée belle | Réalisation : <a href="http://gleboeuf.me" target="_blank">Guillaume Leboeuf</a>

    </div>

</div>

<script src="js/script.js"></script>
</body>
</html>