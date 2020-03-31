<?php
if (!isset($_REQUEST['action'])) {
    $_REQUEST['action'] = 'demandeconnexion';
}
$action = $_REQUEST['action'];
switch ($action) {
    case 'demandeConnexion': {
            include("views/v_connexion.php");
            break;
        }
    case 'valideConnexion': {
			$verification = $pdo->verifierLogin($_REQUEST['login'], $_REQUEST['mdp']);

      		if($verification == 1) {
      			echo "OK";
         		$_SESSION['logs'] = $_REQUEST['login'];
         		include("views/v_connexionValide.php");
      		}
          else {
            echo '<div class="col-md-10"><div class="marge"><div class="alert alert-danger"><b>Votre identifiant ou votre mot de passe est invalide !</b></div</div></div>';
            include("views/v_connexion.php");
      		}
            break;
        }
    case 'demandeDeconnexion': {
        session_destroy();
        session_start();
        include("views/v_deconnexion.php");
        break;
    }
    default : {
        include("views/v_connexion.php");
        break;
    }
}
?>
