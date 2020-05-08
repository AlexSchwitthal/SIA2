<?php
if (!isset($_REQUEST['action'])) {
    $_REQUEST['action'] = 'demandeconnexion';
}
$action = $_REQUEST['action'];
switch ($action) {
    case 'demandeConnexion': {
            include("views/connexion/v_connexion.php");
            break;
        }
    case 'valideConnexion': {
      		$verification = $pdo->verifierLogin($_REQUEST['login'], $_REQUEST['mdp']);
      		if($verification == 1) {
         		$_SESSION['logs'] = $_REQUEST['login'];
         		$_SESSION['groupe'] = $pdo->getGroupe($_REQUEST['login'], $_REQUEST['mdp']);
            $_SESSION['statut'] = 1;
            if(userGroupe(2)) {
                $_SESSION['statut'] = $pdo->getStatutAdherentByMail($_SESSION['logs']);;
            }
         		include("views/connexion/v_connexionValide.php");
      		}
          else {
            echo '<div class="col-md-12"><div class="marge"><div class="alert alert-danger"><b>Votre identifiant ou votre mot de passe est invalide !</b></div</div></div>';
            include("views/connexion/v_connexion.php");
      		}
            break;
        }
    case 'demandeDeconnexion': {
        session_destroy();
        session_start();
        include("views/connexion/v_deconnexion.php");
        break;
    }
    default : {
        include("views/connexion/v_connexion.php");
        break;
    }
}
?>
