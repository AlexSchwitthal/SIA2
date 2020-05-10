<div id="contentPage" class="col-md-9">
  <h2 class="pageTitle">Vos informations</h2>
  <div class="marge">
    <table class="table table-bordered table-responsive table-striped">
      <tbody>
        <tr>
          <td class="h-entete"> ID : </td>
          <td class="h-valeur"><?php echo $lAdherent['id'] ?></td>
        </tr>
        <tr>
          <td class="h-entete"> Nom : </td>
          <td class="h-valeur"><?php echo $lAdherent['nom'] ?></td>
        </tr>
        <tr>
          <td class="h-entete"> Prenom : </td>
          <td class="h-valeur"><?php echo $lAdherent['prenom'] ?></td>
        </tr>
        <tr>
          <td class="h-entete"> Adresse : </td>
          <td class="h-valeur"><?php echo $lAdherent['adresse'] ?></td>
        </tr>
        <tr>
          <td class="h-entete"> Ville : </td>
          <td class="h-valeur"><?php echo $lAdherent['ville'] ?></td>
        </tr>
        <tr>
          <td class="h-entete"> Code postal : </td>
          <td class="h-valeur"><?php echo $lAdherent['cp'] ?></td>
        </tr>
        <tr>
          <td class="h-entete"> Adresse e-mail : </td>
          <td class="h-valeur"><?php echo $lAdherent['email'] ?></td>
        </tr>
        <tr>
          <td class="h-entete"> Numéro de téléphone : </td>
          <td class="h-valeur"><?php echo $lAdherent['tel'] ?></td>
        </tr>
        <tr>
          <td class="h-entete"> Sexe : </td>
          <td class="h-valeur"><?php echo $lAdherent['sexe'] ?></td>
        </tr>
        <tr>
          <td class="h-entete"> Date de naissance : </td>
          <td class="h-valeur"><?php echo  date('d-m-Y', strtotime($lAdherent['dateNaissance'])); ?></td>
        </tr>
        <tr>
          <td class="h-entete"> Date de l'adhésion : </td>
          <td class="h-valeur"><?php echo  date('d-m-Y', strtotime($lAdherent['dateAdhesion'])); ?></td>
        </tr>
        <tr>
          <td class="h-entete"> Statut : </td>
          <td class="h-valeur"><?php echo $lAdherent['type'] ?></td>
        </tr>

      </tbody>
    </table>
  </div>


  <?php

  echo '<p><a href="index.php?uc=gestionAdherent&action=modifierAdherent&id='. $lAdherent['id'] . '" class="btn btn-danger btn-lg"> modifier les informations </a> ';

  if(userGroupe(2)) {
      echo '<a href="index.php?uc=gestionAdherent&action=changerMDP&id='. $lAdherent['id'] . '" class="btn btn-danger btn-lg"> changer de mot de passe </a> ';
  }
  echo '<a href="index.php?uc=gestionAdherent&action=supprimerAdherent&id='. $lAdherent['id'] . '" class="btn btn-danger btn-lg" onclick="return confirm(\'êtes-vous sûr de vouloir supprimer le compte ?\')"> supprimer le compte </a> ';
  echo '</p>';
  ?>
</div>
