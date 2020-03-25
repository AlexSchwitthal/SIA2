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

                            <?php if(isset($_SESSION["logs"])) { ?>
                              <li><a href="index.php?uc=connexion&action=demandeDeconnexion">Deconnexion</a></li>
                            <?php
                            }
                            else { ?>
                                <li <?php if (isset($_REQUEST['uc']) && $_REQUEST['uc'] == 'connexion') { ?> class="active"<?php } ?>><a href="index.php?uc=connexion&action=demandeConnexion">Connexion</a></li>
                            <?php
                            }
                            ?>
                        </ul>
                    </div>
                </div>
                <div class="float-xs-left">
                  <?php if(isset($_SESSION["logs"])) {
                    echo "connecté en tant que : ".$_SESSION['logs'];
                  }
                  else {
                    echo "mode invité";
                  }
                  ?>
               </div>
            </div>
