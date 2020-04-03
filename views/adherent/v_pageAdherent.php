<div class="col-md-10">
  <div class="marge">
    <table class="tableauPersonne">
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
          <td class="h-entete"> Ville : </td>
          <td class="h-valeur"><?php echo $lAdherent['ville'] ?></td>
        </tr>
        <tr>
          <td class="h-entete"> Code postal : </td>
          <td class="h-valeur"><?php echo $lAdherent['cp'] ?></td>
        </tr>
        <tr>
          <td class="h-entete"> Adresse : </td>
          <td class="h-valeur"><?php echo $lAdherent['adresse'] ?></td>
        </tr>
        <tr>
          <td class="h-entete"> Numéro de téléphone : </td>
          <td class="h-valeur"><?php echo $lAdherent['tel'] ?></td>
        </tr>
        <tr>
          <td class="h-entete"> Adresse e-mail : </td>
          <td class="h-valeur"><?php echo $lAdherent['email'] ?></td>
        </tr>
      </tbody>
    </table>
  </div>


  <?php
  echo '<p><a href="index.php?uc=gestionAdherent&action=modifierAdherent&id='. $lAdherent['id'] . '" class="btn btn-danger btn-lg"> modifier </a>
  <a href="index.php?uc=gestionAdherent&action=supprimerAdherent&id='. $lAdherent['id'] . '" class="btn btn-danger btn-lg"> supprimer </a>
  </p>';
  ?>
</div>
