<div class="col-md-10">
  <h1> <?php echo "adhérent n°".$lAdherent['id']." : "?> </h1>
  <p> nom : <?php echo $lAdherent['nom'] ?> </p>
  <p> prenom : <?php echo $lAdherent['prenom'] ?> </p>
  <p> ville : <?php echo $lAdherent['ville'] ?> </p>
  <p> code postal : <?php echo $lAdherent['cp'] ?> </p>
  <p> adresse : <?php echo $lAdherent['adresse'] ?> </p>
  <p> numéro de téléphone : <?php echo $lAdherent['tel'] ?> </p>
  <p> adresse e-mail : <?php echo $lAdherent['email'] ?> </p>

  <?php
  echo '<p><a href="index.php?uc=gestionAdherent&action=supprimerAdherent&id='. $lAdherent['id'] . '" class="btn btn-danger btn-lg"> supprimer </a></td>';
  ?>
</div>
