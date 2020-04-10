<!DOCTYPE html>
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta charset="UTF-8" />
    <title>EPA</title>
    <meta name="description" content="" />
    <meta name="author" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="./css/style.css" rel="stylesheet" type="text/css" />
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css" rel="stylesheet">
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

                            <?php if(userGroupe(3)) /* ADMIN */ {
                              ?>
                              <li <?php if (isset($_REQUEST['uc']) && $_REQUEST['uc'] == 'gestionAdherent') { ?> class="active"<?php } ?>><a href="index.php?uc=gestionAdherent&action=listeAdherent">Gestion des adhérents</a></li>
                              <li <?php if (isset($_REQUEST['uc']) && $_REQUEST['uc'] == 'gestionEtudiant') { ?> class="active"<?php } ?>><a href="index.php?uc=gestionEtudiant">Gestion des étudiants</a></li>
                              <li <?php if (isset($_REQUEST['uc']) && $_REQUEST['uc'] == 'baseDocumentaire') { ?> class="active"<?php } ?>><a href="index.php?uc=baseDocumentaire">Base documentaire</a></li>
                              <?php
                            }

                            else if(userGroupe(2)) /* Adhérent */ {
                              $id = $pdo->getIDAdherentByMail($_SESSION['logs']);
                              ?>
                              <li <?php if (isset($_REQUEST['uc']) && $_REQUEST['uc'] == 'gestionAdherent') { ?> class="active"<?php } ?>><a href="index.php?uc=gestionAdherent&action=pageAdherent&id=<?php echo $id; ?>">Voir mes informations</a></li>
                              <?php
                            }

                            else if(userGroupe(1)) /* étudiant */ {
                              ?>
                              <li <?php if (isset($_REQUEST['uc']) && $_REQUEST['uc'] == 'gestionEtudiant') { ?> class="active"<?php } ?>><a href="index.php?uc=gestionEtudiant">Voir étudiants</a></li>
                              <?php
                            }

                            else /* non connecté */ {
                              ?>
                              <li <?php if (isset($_REQUEST['uc']) && $_REQUEST['uc'] == 'gestionAdherent') { ?> class="active"<?php } ?>><a href="index.php?uc=gestionAdherent&action=ajouterAdherent">Devenir adhérent</a></li>
                              <li <?php if (isset($_REQUEST['uc']) && $_REQUEST['uc'] == 'gestionEtudiant') { ?> class="active"<?php } ?>><a href="index.php?uc=gestionEtudiant&action=inscriptionEtudiant">Demander un accompagnement</a></li>
                              <?php
                            }
                            ?>
                            <li <?php if (isset($_REQUEST['uc']) && $_REQUEST['uc'] == 'don') { ?> class="active"<?php } ?>><a href="index.php?uc=don">Faire un don</a></li>
                            <li <?php if (isset($_REQUEST['uc']) && $_REQUEST['uc'] == 'forum') { ?> class="active"<?php } ?>><a href="index.php?uc=forum">Forum</a></li>

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
                <div>
                  <?php if(isset($_SESSION["logs"])) {
                    echo "connecté en tant que : ".$_SESSION['logs']. " (".getTypeUtilisateurs($_SESSION['groupe']).")";
                  }
                  else {
                    echo "mode invité";
                  }
                  ?>
               </div>
            </div>
