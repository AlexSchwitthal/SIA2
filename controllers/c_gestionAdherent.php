<?php
include("views/v_menuAdherent.php");
$action = $_REQUEST['action'];

switch ($action) {
    case 'listeAdherent': {
            $adherentsInscrits = $pdo->getAdherentsInscrits(1);
            $adherentsNonInscrits = $pdo->getAdherentsInscrits(0);
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

    case 'pageAdherent' : {
          if (!(empty($_REQUEST['id']))) {
              $lAdherent = $pdo->getAdherentById($_REQUEST['id']);
              if (is_array($lAdherent)) {
                include("views/v_pageAdherent.php");
              }
              else {
                header("Location: ./index.php?uc=gestionAdherent&action=listeAdherent");
              }
          }
          break;
    }

    case 'supprimerAdherent' : {
          if (!(empty($_REQUEST['id']))) {
              $pdo->supprimerAdherent($_REQUEST['id']);
              include("views/v_suppressionAdherent.php");
          }
          break;
    }

    case 'modifierAdherent' : {
      $erreur = '';
      if (!(empty($_REQUEST['id']))) {
          $lAdherent = $pdo->getAdherentById($_REQUEST['id']);
          if (is_array($lAdherent)) {
            include("views/v_modifierAdherent.php");
          }
          else {
            header("Location: ./index.php?uc=gestionAdherent&action=listeAdherent");
          }
          break;
      }
    }

    case 'validerModificationAdherent' : {
      $erreur = nbErreurs($_REQUEST);
      if(strlen($erreur) == 0) {
        $pdo->modifierAdherent(
          $_REQUEST['id'],
          $_REQUEST['nom'],
          $_REQUEST['prenom'],
          $_REQUEST['ville'],
          $_REQUEST['cp'],
          $_REQUEST['adresse'],
          $_REQUEST['tel'],
          $_REQUEST['email']
        );
        include("views/v_validationModificationAdherent.php");
      }
      else {
        if (!(empty($_REQUEST['id']))) {
            $lAdherent = $pdo->getAdherentById($_REQUEST['id']);
            if (is_array($lAdherent)) {
              include("views/v_modifierAdherent.php");
            }
            else {
              header("Location: ./index.php?uc=gestionAdherent&action=listeAdherent");
            }
        }
      }
      break;
    }

    case 'validerAdhesion' : {
      if (!(empty($_REQUEST['id']))) {
          $lAdherent = $pdo->getAdherentById($_REQUEST['id']);
          if (is_array($lAdherent)) {
            if (isset($_POST['accepter'])) {
                $pdo->validerAdherent($_REQUEST['id']);
                include("views/v_validationAdherent.php");    
            }
            else {
                $pdo->supprimerAdherent($_REQUEST['id']);
                include("views/v_suppressionAdherent.php");
            }
          }
          else {
            header("Location: ./index.php?uc=gestionAdherent&action=listeAdherent");
          }
      }
      break;
    }
    default: {
        $adherentsInscrits = $pdo->getAdherentsInscrits(1);
        $adherentsNonInscrits = $pdo->getAdherentsInscrits(0);
        include("views/v_listeAdherent.php");
        break;
    }
}
?>
