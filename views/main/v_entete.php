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
    <header style="border: 1px solid green">
		<div id="banniere" class="col-md-12">
			<img id="logo" src="./img/logo.jpg" alt="logo" title="logo">
			<p id="banniere-name">Association EPA</p>
		</div>
		<!-- menu bar-->
		<div id="menu-bar" class="col-md-12">
			<ul>
				<li <?php if (!isset($_REQUEST['uc']) || $_REQUEST['uc'] == 'accueil') { ?> class="active"<?php } ?>>
					<a href="index.php"><p>Accueil</p></a>
				</li>

				<?php if(userGroupe(3)) /* ADMIN */ {
					?>
					<li <?php if (isset($_REQUEST['uc']) && $_REQUEST['uc'] == 'gestionAdherent') { ?> class="active"<?php } ?>>
						<a href="index.php?uc=gestionAdherent&action=listeAdherent"><p>Gestion des adhérents</p></a>
					</li>
					<li <?php if (isset($_REQUEST['uc']) && $_REQUEST['uc'] == 'gestionEtudiant') { ?> class="active"<?php } ?>>
						<a href="index.php?uc=gestionEtudiant"><p>Gestion des étudiants</p></a>
					</li>
					<li <?php if (isset($_REQUEST['uc']) && $_REQUEST['uc'] == 'baseDocumentaire') { ?> class="active"<?php } ?>>
						<a href="index.php?uc=baseDocumentaire"><p>Base documentaire</p></a>
					</li>
					<?php
				}

				else if(userGroupe(2)) /* Adhérent */ {
					$id = $pdo->getIDAdherentByMail($_SESSION['logs']);
					?>
					<li <?php if (isset($_REQUEST['uc']) && $_REQUEST['uc'] == 'gestionAdherent') { ?> class="active"<?php } ?>>
						<a href="index.php?uc=gestionAdherent&action=pageAdherent&id=<?php echo $id; ?>"><p>Voir mes informations</p></a>
					</li>
					<?php
				}

				else if(userGroupe(1)) /* étudiant */ {
					?>
					<li <?php if (isset($_REQUEST['uc']) && $_REQUEST['uc'] == 'gestionEtudiant') { ?> class="active"<?php } ?>>
						<a href="index.php?uc=gestionEtudiant"><p>Voir étudiants</p></a>
					</li>
					<?php
				}

				else /* non connecté */ {
					?>
					<li <?php if (isset($_REQUEST['uc']) && $_REQUEST['uc'] == 'gestionAdherent') { ?> class="active"<?php } ?>>
                        <a href="index.php?uc=gestionAdherent&action=ajouterAdherent"><p>Devenir adhérent</p></a>
                    </li>
					<li <?php if (isset($_REQUEST['uc']) && $_REQUEST['uc'] == 'gestionEtudiant') { ?> class="active"<?php } ?>>
                        <a href="index.php?uc=gestionEtudiant&action=inscriptionEtudiant"><p>Accueil étudiant</p></a>
                    </li>
					<?php
				}
				?>
				<li <?php if (isset($_REQUEST['uc']) && $_REQUEST['uc'] == 'don') { ?> class="active"<?php } ?>>
                    <a href="index.php?uc=don"><p>Faire un don</p></a>
                </li>
				<li <?php if (isset($_REQUEST['uc']) && $_REQUEST['uc'] == 'forum') { ?> class="active"<?php } ?>>
                    <a href="index.php?uc=forum"><p>Forum</p></a>
                </li>

				<?php if(isset($_SESSION["logs"])) { ?>
					<li>
                        <a href="index.php?uc=connexion&action=demandeDeconnexion"><p>Deconnexion</p></a>
                    </li>
				<?php
				}
				else { ?>
					<li style="float:right" <?php if (isset($_REQUEST['uc']) && $_REQUEST['uc'] == 'connexion') { ?> class="active"<?php } ?>>
                        <a href="index.php?uc=connexion&action=demandeConnexion"><p>Connexion</p></a>
					</li>
				<?php
				}
				?>
			</ul>
		</div>
	
		<!--<div>
			<?php if(isset($_SESSION["logs"])) {
			echo "connecté en tant que : ".$_SESSION['logs']. " (".getTypeUtilisateurs($_SESSION['groupe']).")";
			}
			else {
			echo "mode invité";
			}
			?>
		</div>-->
	</header>
