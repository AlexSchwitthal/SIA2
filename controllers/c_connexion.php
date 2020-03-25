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
            $login = $_REQUEST['login'];
            $mdp = $_REQUEST['mdp'];

            /* TO DO :
            Gestion erreurs */
            $_SESSION['logs'] = $login;

            include("views/v_connexionValide.php");
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
