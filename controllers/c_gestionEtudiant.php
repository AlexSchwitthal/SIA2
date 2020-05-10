<?php
include("views/etudiant/v_menuEtudiant.php");


if (empty($_REQUEST['action'])) {
    $_REQUEST['action'] = 'affichageEtudiant';
}
$action = $_REQUEST['action'];

switch ($action) {
    case 'accueilPrimoArrivant': {
        // a compléter en fonction des droits ?
		include("views/etudiant/v_accueilPrimoArrivant.php");
		break;
    }
    case 'inscriptionEtudiant': {
      $erreur = '';
    	if(isset($_SESSION['groupe'])) {
    		echo "Vous êtes déjà inscrit";
    	}
    	else{
    		include("views/etudiant/v_inscriptionEtudiant.php");
    	}
    	break;
    }

    case 'affichageEtudiant': {
    	if(userGroupe(3) || userGroupe(2)) {
        if($_SESSION['statut'] == 0) {
          echo 'vous n\'avez pas encore accès à la liste des étudiants, vous devez attendre d\'être confirmé par les administrateurs de l\'association';
        }
        else {
          // Vue tous les étudiants
          $lesEtudiants = $pdo->getEtudiants();
          include("views/etudiant/v_affichageEtudiant.php");
        }
    	}
    	else if(userGroupe(1)){
    		 //Vue uniquement de l'utilisateur connecté
    		$etudiant = $pdo->getEtudiantConnecte($_SESSION['logs']);
    		include("views/etudiant/v_pageEtudiant.php");
    	}
    	else{
    		echo "Connexion requise";
    	}
    	break;
    }

    case 'modifierEtudiant':{
    	if(userGroupe(1)) {
    		$etudiant = $pdo->getEtudiantConnecte($_SESSION['logs']);
		    $utilisateur = $pdo->getUserConnecte($_SESSION['logs']);

        $dateNaissance = explode("-", $etudiant['ddn']);
        $anneeNaissance = $dateNaissance[0];
        $moisNaissance = $dateNaissance[1];
        $jourNaissance = $dateNaissance[2];

        $dateArrive = explode("-", $etudiant['dap']);
        $anneeArrive = $dateArrive[0];
        $moisArrive = $dateArrive[1];
        $jourArrive = $dateArrive[2];

        $dateDepart = explode("-", $etudiant['ddp']);
        $anneeDepart = $dateDepart[0];
        $moisDepart = $dateDepart[1];
        $jourDepart = $dateDepart[2];

    		include("views/etudiant/v_modificationEtudiant.php");
    	}
    	else{
    		echo "Erreur";

    	}
    	break;

    }

  case 'updateEtudiant':{
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

    	if($_REQUEST['pw1']!=$_REQUEST['pw2']){
    		echo "<script>alert(\"Le mot de passe n'est pas identique\")</script>";
    		include("views/etudiant/v_modificationEtudiant.php");
    	}

      $dateNaissance = $_REQUEST['anneeNaissance'].'-'.$_REQUEST['moisNaissance'].'-'.$_REQUEST['jourNaissance'];
    //  var_dump($dateNaissance);
      $dateDepart = $_REQUEST['anneeDepart'].'-'.$_REQUEST['moisDepart'].'-'.$_REQUEST['jourDepart'];
    //  var_dump($dateDepart);
      $dateArrive = $_REQUEST['anneeArrive'].'-'.$_REQUEST['moisArrive'].'-'.$_REQUEST['jourArrive'];
    //  var_dump($dateArrive);

  	$id = $pdo->getIDEtudiantByEmail($_SESSION['logs']);
  	$utilisateur = $pdo->getEtudiantConnecte($_SESSION['logs']);

  	// Changement Mdp
  	if( ($_REQUEST['pw1']==$_REQUEST['pw2']) && ($utilisateur['password'] != $_REQUEST['pw1']) ){
  		$pdo->modifierMDPUsersEtudiant($utilisateur['ref_users'], $_REQUEST['pw1']);
  	}

              $pdo->modifierEtudiant(
                $id,
                $_REQUEST['nom'],
                $_REQUEST['sexe'],
                $_REQUEST['prenom'],
                $_REQUEST['nation'],
                $dateNaissance,
                $_REQUEST['langue'],
                $_REQUEST['tel'],
                $_REQUEST['email'],
                $dateArrive,
                $dateDepart,
                $motif,
                $besoin_hebergement,
                $besoin_accompagnement,
                $besoin_transport,
                $besoin_autres,
                $autor1,
                $autor2
              );

	      //echo "<script>alert(\"OK\")</script>";
              include("views/etudiant/v_validationModifEtudiant.php");
              break;

    }

    case 'ajoutEtudiant': {
      $erreur = nbErreursAjoutEtudiant($_REQUEST);
      if(strlen($erreur) == 0) {
        if(strcmp($_REQUEST['motif'],'autre')==0){
        	$motif = $_REQUEST['motif_autre'];
        } else {
        	$motif = $_REQUEST['motif'];
        }

        if(strcmp($_REQUEST['besoin_autres_check'],'oui')==0){
        	$besoin_autres = $_REQUEST['besoin_autres'];
        } else {
        	$besoin_autres = 'non';
        }

        if(strcmp($_REQUEST['besoin_hebergement'],'oui')==0){
        	$besoin_hebergement = $_REQUEST['besoin_hebergement'];
        } else {
        	$besoin_hebergement = 'non';
        }

        if(strcmp($_REQUEST['besoin_accompagnement'],'oui')==0){
        	$besoin_accompagnement = $_REQUEST['besoin_accompagnement'];
        } else {
        	$besoin_accompagnement = 'non';
        }

        if(strcmp($_REQUEST['besoin_transport'],'oui')==0){
        	$besoin_transport = $_REQUEST['besoin_transport'];
        } else {
        	$besoin_transport = 'non';
        }

        if(strcmp($_REQUEST['autor1'],'oui')==0){
        	$autor1 = $_REQUEST['autor1'];
        } else {
        	$autor1 = 'non';
        }

        if(strcmp($_REQUEST['autor2'],'oui')==0){
        	$autor2 = $_REQUEST['autor2'];
        } else {
        	$autor2 = 'non';
        }

	if($_REQUEST['pw1']!=$_REQUEST['pw2']){
    		echo "<script>alert(\"Le mot de passe n'est pas identique\")</script>";
    		include("views/etudiant/v_inscriptionEtudiant.php");
    	}

        $dateNaissance = $_REQUEST['anneeNaissance'].'-'.$_REQUEST['moisNaissance'].'-'.$_REQUEST['jourNaissance'];
      //  var_dump($dateNaissance);
        $dateDepart = $_REQUEST['anneeDepart'].'-'.$_REQUEST['moisDepart'].'-'.$_REQUEST['jourDepart'];
      //  var_dump($dateDepart);
        $dateArrive = $_REQUEST['anneeArrive'].'-'.$_REQUEST['moisArrive'].'-'.$_REQUEST['jourArrive'];
      //  var_dump($dateArrive);
        $pdo->creerEtudiant(
          $_REQUEST['nom'],
          $_REQUEST['sexe'],
          $_REQUEST['prenom'],
          $_REQUEST['nation'],
          $dateNaissance,
          $_REQUEST['langue'],
          $_REQUEST['tel'],
          $_REQUEST['email'],
          $dateArrive,
          $dateDepart,
          $motif,
          $besoin_hebergement,
          $besoin_accompagnement,
          $besoin_transport,
          $besoin_autres,
          $autor1,
          $autor2,
          $_REQUEST['pw1']
        );
        include("views/etudiant/v_validationEtudiant.php");
      }
      else {
        include("views/etudiant/v_inscriptionEtudiant.php");
      }

      break;
    }

    case 'supprimerEtudiant' : {
      if (!(empty($_REQUEST['id']))) {
          $pdo->supprimerEtudiant($_REQUEST['id']);
          session_destroy();
          session_start();
          include("views/etudiant/v_suppressionEtudiant.php");
      }
      else {
        echo 'erreur';
      }
      break;
    }

    case 'redactionNews' : {
      $categories = $pdo->getCategorie();
  		include("views/news/v_redactionNews.php");
  		break;
    }

    case 'ajoutNews':{
      $listeCategories = getListeCategoriesCheck($_REQUEST, $pdo->getNbCategories()[0]);
    	$pdo->creerNews(
        	$_REQUEST['titre'],
          nl2br($_REQUEST['description']),
          $listeCategories
        );
        include("views/news/v_validationNews.php");
        break;
    }


    case 'messagerie' : {
      if($_SESSION['statut'] == 0) {
        echo 'vous n\'avez pas encore accès à la messagerie, vous devez attendre d\'être confirmé par les administrateurs de l\'association';
      }
      else {
        $id_destinataire = $pdo->getUserConnecte($_SESSION['logs']);
        $lesMessages = $pdo->getListeMessages($id_destinataire['id']);
        include("views/etudiant/v_messagerie.php");
      }
    	break;
    }

    case 'conversation' : {
		$dest = $_REQUEST['id_destinataire'];
    	$expe = $_REQUEST['id_expediteur'];
    	$laConversation = $pdo->getConversation($dest,$expe);
    	include("views/etudiant/v_conversation.php");
    	break;
    }

    case 'envoyerMessage' : {
    	$pdo->ajoutMessage(
        	$_REQUEST['dest'],
            $_REQUEST['expe'],
            $_REQUEST['message']
        );

		// Refresh de la conversation
    	$dest = $_REQUEST['dest'];
    	$expe = $_REQUEST['expe'];
    	$laConversation = $pdo->getConversation($dest,$expe);
    	include("views/etudiant/v_conversation.php");
    	break;
    }

    default: {
      $categories = $pdo->getCategorie();
      $categoriesDesNews = $pdo->getLibelleCategoriesNews();
      $lesNews = $pdo->getNews();
  	  include("views/news/v_affichageNews.php");
      break;
    }
}
?>
