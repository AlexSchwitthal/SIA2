<?php
include("views/v_menuEtudiant.php");
$action = $_REQUEST['action'];

switch ($action) {
    case 'inscriptionEtudiant': {
		  include("views/v_inscriptionEtudiant.php");
    	break;
    }
    case 'affichageEtudiant': {
    	if(userGroupe(3)) {
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
              if(strcmp($_REQUEST['motif'],'autre')==0){
    	$motif = $_REQUEST['motif_autre'];
    }else{
    	$motif = $_REQUEST['motif'];
    }
    
    if(strcmp($_REQUEST['besoin_autres_check'],'oui')==0){
    	$besoin_autres = $_REQUEST['besoin_autres'];
    }else{
    	$besoin_autres = 'non';
    }
    
    if(strcmp($_REQUEST['besoin_hebergement'],'oui')==0){
    	$besoin_hebergement = $_REQUEST['besoin_hebergement'];
    }else{
    	$besoin_hebergement = 'non';
    }
    
    if(strcmp($_REQUEST['besoin_accompagnement'],'oui')==0){
    	$besoin_accompagnement = $_REQUEST['besoin_accompagnement'];
    }else{
    	$besoin_accompagnement = 'non';
    }
    
    if(strcmp($_REQUEST['besoin_transport'],'oui')==0){
    	$besoin_transport = $_REQUEST['besoin_transport'];
    }else{
    	$besoin_transport = 'non';
    }
    
    if(strcmp($_REQUEST['autor1'],'oui')==0){
    	$autor1 = $_REQUEST['autor1'];
    }else{
    	$autor1 = 'non';
    }
    
    if(strcmp($_REQUEST['autor2'],'oui')==0){
    	$autor2 = $_REQUEST['autor2'];
    }else{
    	$autor2 = 'non';
    }
    
    
              $pdo->creerEtudiant(
                $_REQUEST['nom'],
                $_REQUEST['sexe'],
                $_REQUEST['prenom'],
                $_REQUEST['nation'],
                $_REQUEST['ddn'],
                $_REQUEST['langue'],
                $_REQUEST['tel'],
                $_REQUEST['email'],
                $_REQUEST['dap'],
                $_REQUEST['ddp'],
                $motif,
                $besoin_hebergement,
                $besoin_accompagnement,
                $besoin_transport,
                $besoin_autres,
                $autor1,
                $autor2
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
