<?php ob_start();?>

<div class="row">

        <div class="col-lg-4 col-md-4 col-xs-12">

            <h1>Bienvenue sur le site de l'association L'Échappée Belle</h1>

        </div>

        <div class="col-lg-8 col-md-8 col-xs-12">
            <img src="img/accueil_chatons.png" alt="chatons" class="img-responsive" id="accueil-chatons">
        </div>

    </div>

    <div class="row">

        <div class="col-lg-12">

            Notre association, nouvellement créée, est majoritairement constituée de bénévoles expérimentées en matière de protection animale.<br/>
            <br/>
            Fortes de leurs expériences passées, elles ont décidé, pour diverses raisons, de créer leur propre association afin de poursuivre une action efficace auprès des chats en détresse.<br/>
            <br/>
            L'association s'est fixée pour principale mission la stérilisation et l'indentification des chats errants afin de leur permettre d'acquierir le statut de chat libre.<br/>
            <br/>
            Nous prenons en charge au sein de nos familles d'accueil les chats abandonnés ou "socialisables" qui sont sur ces sites.<br/>
            <br/>
            Vous y trouverez nos chats et chatons à l'adoption, nos actualités et tous les conseils pour bien vivre avec votre chat.


        </div>

    </div>


    <div class="row">

        <div class="col-lg-12">
            <a href="https://www.facebook.com/lechappeebelleassociation?fref=ts" target="_blank"><h2>Rejoignez-nous aussi sur Facebook !</h2></a><br/>
        </div>

    </div>


<?php $content = ob_get_clean();?>

<?php include('views/layout.php');?>


