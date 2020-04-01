<?php
include("views/v_menuEtudiant.php");
$action = $_REQUEST['action'];

switch ($action) {
    case 'inscriptionEtudiant': {
		  include("views/v_inscriptionEtudiant.php");
    	break;
    }
    case 'affichageEtudiant': {
    	if(estConnecte() && $_SESSION['groupe']==3){
    		$lesEtudiants = $pdo->getEtudiants();
		  	include("views/v_affichageEtudiant.php");
    	}
    	else{
    		echo "Connexion requise";
    	}
    	break;
    }
    case 'redactionNews' : {
  		include("views/v_redactionNews.php");
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

    case 'ajoutNews':{
    	$pdo->creerNews(
        	$_REQUEST['nom'],
            $_REQUEST['description']
        );
        include("views/v_validationNews.php");
        break;
    }

    default: {
      $lesEtudiants = $pdo->getEtudiants();
      include("views/v_affichageEtudiant.php");
      break;
    }
}
?>
