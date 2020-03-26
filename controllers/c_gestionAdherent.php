<?php
include("views/v_menuAdherent.php");
$action = $_REQUEST['action'];

switch ($action) {
    case 'listeAdherent': {
            $lesAdherents = $pdo->getAdherents();
            include("views/v_listeAdherent.php");
            break;
    }
    case 'ajouterAdherent': {
            $erreur = '';
            include("views/v_ajoutAdherent.php");
            break;
    }
    case 'validerAdherent' : {
            $erreur = nbErreurs($_REQUEST);
            if(strlen($erreur) == 0) {
              $pdo->creerAdherent(
                $_REQUEST['nom'],
                $_REQUEST['prenom'],
                $_REQUEST['ville'],
                $_REQUEST['cp'],
                $_REQUEST['adresse'],
                $_REQUEST['tel'],
                $_REQUEST['email']
              );
              include("views/v_validationAdherent.php");
            }
            else {
              include("views/v_ajoutAdherent.php");
            }
            break;
    }
}
?>
