<?php
/**
 * Page d'accueil
 * Point d'entrée unique de l'application
 *
 * @author  Alexandre SCHWITTHAL
 */

// inclure les bibliothèques de fonctions
require_once("config.php");
require_once("model/pdoepa.class.php");
require_once("model/function.php");

// début de session
session_start();

$pdo = PdoEpa::getPdoEpa();

include("views/main/v_entete.php");


if (empty($_REQUEST['uc'])) {
    $_REQUEST['uc'] = 'accueil';
}

$uc = $_REQUEST['uc'];

switch ($uc) {
    case 'accueil': {
            include("controllers/c_accueil.php");
            break;
        }
    case 'connexion': {
            include("controllers/c_connexion.php");
            break;
      }
    case 'gestionAdherent': {
            include("controllers/c_gestionAdherent.php");
            break;
        }
    case 'gestionEtudiant': {
            include("controllers/c_gestionEtudiant.php");
            break;
    }
    default: {
            include("controllers/c_accueil.php");
            break;
    }
}

include("views/main/v_pied.php");
?>
