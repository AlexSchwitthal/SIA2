<!DOCTYPE html>
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta charset="UTF-8" />
    <title>EPA</title>
    <meta name="description" content="" />
    <meta name="author" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="./css/style.css" rel="stylesheet" type="text/css" />
</head>
<body>
    <div class="container">
            <div class="header">
                <div class="row vertical-align">
                    <div class="col-md-4">
                        <h1><img src="./img/logo.jpg" class="img-responsive" alt="logo" title="logo"></h1>
                    </div>
                    <div class="col-md-8">
                        <ul class="nav nav-pills pull-right" role="tablist">
                            <li <?php if (!isset($_REQUEST['uc']) || $_REQUEST['uc'] == 'accueil') { ?> class="active"<?php } ?>><a href="index.php">Accueil</a></li>
                            <li <?php if (isset($_REQUEST['uc']) && $_REQUEST['uc'] == 'gestionAdherent') { ?> class="active"<?php } ?>><a href="index.php?uc=gestionAdherent&action=listeAdherent">Gestion des adhérents</a></li>
                            <li <?php if (isset($_REQUEST['uc']) && $_REQUEST['uc'] == 'gestionEtudiant') { ?> class="active"<?php } ?>><a href="index.php?uc=gestionEtudiant&action=osef">Gestion des étudiants</a></li>

                            <?php /* if ($_SESSION["idVisiteur"] == directeur) { ?>
                                <li <?php if (isset($_REQUEST['uc']) && $_REQUEST['uc'] == 'statVisiteur') { ?> class="active"<?php } ?>><a href="index.php?uc=statVisiteur&action=selectionnerVisiteur">Statistiques par visiteur</a></li>
                                <li <?php if (isset($_REQUEST['uc']) && $_REQUEST['uc'] == 'statFrais') { ?> class="active"<?php } ?>><a href="index.php?uc=statFrais&action=selectionnerFrais">Statistiques par frais</a></li>
                            <?php } */ ?>
                            <!-- <li <?php  //if (isset($_REQUEST['uc']) && $_REQUEST['uc'] == 'deconnexion') { ?> class="active"<?php /*}*/ ?>><a href="index.php?uc=deconnexion&action=demandeDeconnexion">Déconnexion</a></li> -->
                        </ul>
                         <!-- Visiteur : --> <?php // echo $_SESSION['prenom'] . " " . $_SESSION['nom'] ?>
                    </div>
                </div>
            </div>
