<?php
include("views/adherent/v_menuAdherent.php");

$action = $_REQUEST['action'];

switch ($action) {
    case 'listeAdherent': {
            $adherentsInscrits = $pdo->getAdherentsInscrits(1);
            $adherentsNonInscrits = $pdo->getAdherentsInscrits(0);
            include("views/adherent/v_listeAdherent.php");
            break;
    }
    case 'listeAdherentTrier': {
            $adherentsInscrits = $pdo->getAdherentsInscritsRestriction(
              1,
              $_REQUEST['prenom'],
              $_REQUEST['nom'],
              $_REQUEST['cotisation']
            );

            $adherentsNonInscrits = $pdo->getAdherentsInscritsRestriction(
              0,
              $_REQUEST['prenom'],
              $_REQUEST['nom'],
              $_REQUEST['cotisation']
            );

            include("views/adherent/v_listeAdherent.php");
            break;
    }
    case 'ajouterAdherent': {
            $erreur = '';
            include("views/adherent/v_ajoutAdherent.php");
            break;
    }

    case 'accueilAdherent': {
            $erreur = '';
            include("views/adherent/v_accueilAdherent.php");
            break;
    }

    case 'accesFormulaires': {
            $erreur = '';
            include("views/adherent/v_accesFormulaires.php");
            break;
    }
    case 'donneesAssociation': {
            $erreur = '';


            if(!empty($_FILES)){
                $file_name = $_FILES['fichier']['name'];
                $file_tmp_name = $_FILES['fichier']['tmp_name'];
                $file_dest = './files/'.$file_name;

                if(move_uploaded_file($file_tmp_name, $file_dest)){
                    echo 'Fichier envoyé avec succès';
                    $pdo->ajoutFichier(
                      $file_name,
                      $file_dest
                    );
                } else {
                    echo "Une erreur est survenue lors de l'envoi du fichier";
                }
            }

            $fichiersAssociation = $pdo->getFichiersAssociation();
            include("views/adherent/v_donneesAssociation.php");
            break;
    }

    case 'validerAdherent' : {
            $erreur = nbErreurs($_REQUEST);
            if(strlen($erreur) == 0) {
              $dateNaissance = $_REQUEST['annee'].'-'.$_REQUEST['mois'].'-'.$_REQUEST['jour'];
              $tel = $_REQUEST['indicatif'].' '.$_REQUEST['tel'];
              $pdo->creerAdherent(
                $_REQUEST['nom'],
                $_REQUEST['prenom'],
                $_REQUEST['adresse'],
                $_REQUEST['ville'],
                $_REQUEST['cp'],
                $tel,
                $_REQUEST['email'],
                $_REQUEST['sexe'],
                $dateNaissance,
                $_REQUEST['type'],
                $_REQUEST['mdp']
              );
             include("views/adherent/v_validationAdherent.php");
            }
            else {
              include("views/adherent/v_ajoutAdherent.php");
            }
            break;
    }

    case 'pageAdherent' : {
          if (!(empty($_REQUEST['id']))) {
              $lAdherent = $pdo->getAdherentById($_REQUEST['id']);
              if (is_array($lAdherent)) {
                include("views/adherent/v_pageAdherent.php");
              }
              else {
                header("Location: ./index.php?uc=gestionAdherent&action=listeAdherent");
              }
          }
          break;
    }

    case 'changerMDP' : {
      if(userGroupe(2)) {
        $id = $pdo->getIDAdherentByMail($_SESSION['logs']);
        if($id == $_REQUEST['id']) {
          $lAdherent = $pdo->getAdherentById($id);
          $erreur = '';
          include("views/adherent/v_mdpAdherent.php");
        }
      }
      break;
    }

    case 'validerModicationMDP' : {
      if (strlen($_REQUEST['nouveauMdp']) == 0) {
        $lAdherent = $pdo->getAdherentById($_REQUEST['id']);
        $erreur = '<div class="col-md-10"><div class="marge"><div class="alert alert-danger"><b>les deux mots de passe doivent être non-vide !</b></div></div></div> ';
        include("views/adherent/v_mdpAdherent.php");
      }
      else if($_REQUEST['nouveauMdp'] != $_REQUEST['nouveauMdpConfirmation']) {
        $lAdherent = $pdo->getAdherentById($_REQUEST['id']);
        $erreur = '<div class="col-md-10"><div class="marge"><div class="alert alert-danger"><b>les deux mots de passe doivent être identiques !</b></div></div></div> ';
        include("views/adherent/v_mdpAdherent.php");
      }
      else {
        $pdo->modifierMDPUsers($_REQUEST['id'], $_REQUEST['nouveauMdp']);
        include("views/adherent/v_validationMDPAdherent.php");
      }
      break;
    }


    case 'supprimerAdherent' : {
          if (!(empty($_REQUEST['id']))) {
              $pdo->supprimerAdherent($_REQUEST['id']);
              include("views/adherent/v_suppressionAdherent.php");
          }
          break;
    }

    case 'modifierAdherent' : {
      $erreur = '';
      if (!(empty($_REQUEST['id']))) {
          $lAdherent = $pdo->getAdherentById($_REQUEST['id']);

          $dateNaissance = explode("-", $lAdherent['dateNaissance']);
          $annee = $dateNaissance[0];
          $mois = $dateNaissance[1];
          $jour = $dateNaissance[2];

          $telephone = explode(' ', $lAdherent['tel']);
          $indicatif = $telephone[0];
          $telephone = $telephone[1];

          if (is_array($lAdherent)) {
            include("views/adherent/v_modifierAdherent.php");
          }
          else {
            header("Location: ./index.php?uc=gestionAdherent&action=listeAdherent");
          }
          break;
      }
    }

    case 'validerModificationAdherent' : {
      $erreur = nbErreursModificationAdherent($_REQUEST);
      if(strlen($erreur) == 0) {
        $dateNaissance = $_REQUEST['annee'].'-'.$_REQUEST['mois'].'-'.$_REQUEST['jour'];
        $tel = $_REQUEST['indicatif'].' '.$_REQUEST['tel'];
        $pdo->modifierAdherent(
          $_REQUEST['id'],
          $_REQUEST['nom'],
          $_REQUEST['prenom'],
          $_REQUEST['adresse'],
          $_REQUEST['ville'],
          $_REQUEST['cp'],
          $tel,
          $_REQUEST['email'],
          $dateNaissance,
          $_REQUEST['type']
        );
        include("views/adherent/v_validationModificationAdherent.php");
      }
      else {
        if (!(empty($_REQUEST['id']))) {
            $lAdherent = $pdo->getAdherentById($_REQUEST['id']);
            if (is_array($lAdherent)) {
              $dateNaissance = explode("-", $lAdherent['dateNaissance']);
              $annee = $dateNaissance[0];
              $mois = $dateNaissance[1];
              $jour = $dateNaissance[2];

              $telephone = explode(' ', $lAdherent['tel']);
              $indicatif = $telephone[0];
              $telephone = $telephone[1];
              include("views/adherent/v_modifierAdherent.php");
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
                include("views/adherent/v_validationAdherent.php");
            }
            else {
                $pdo->supprimerAdherent($_REQUEST['id']);
                include("views/adherent/v_suppressionAdherent.php");
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
        include("views/adherent/v_listeAdherent.php");
        break;
    }
}
?>
