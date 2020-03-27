<?php
include("views/v_menuEtudiant.php");
$action = $_REQUEST['action'];

switch ($action) {
    case 'inscriptionEtudiant': {
		include("views/v_inscriptionEtudiant.php");
    	break;
    }
    case 'affichageEtudiant': {
    	$lesEtudiants = $pdo->getEtudiants();
		include("views/v_affichageEtudiant.php");
    	break;
    }
    case 'redactionNews' : {
		echo "redactionNews";
		break;
    }
    case 'affichageNews': {
		echo "affichageNews";
		break;
    }
    
    case 'ajoutEtudiant': {
              $pdo->creerEtudiant(
                $_REQUEST['nom'],
                $_REQUEST['prenom'],
                $_REQUEST['sexe'],
                $_REQUEST['ddn'],
                $_REQUEST['nation'],
                $_REQUEST['es'],
                $_REQUEST['dap'],
                $_REQUEST['langue'],
                $_REQUEST['tel'],
                $_REQUEST['email'],
                $_REQUEST['pec']
              );
              include("views/v_validationEtudiant.php");
           	  break;
    }
    
}
?>
