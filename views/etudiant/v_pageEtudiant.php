<div id="contentPage" class="col-md-9">
  <h2 class="pageTitle">Vos informations</h2>
  <div class="marge">
    <table class="table table-bordered table-responsive table-striped">
      <tbody>
        <tr>
          <td class="h-entete"> ID : </td>
          <td class="h-valeur"><?php echo $etudiant['id'] ?></td>
        </tr>
        <tr>
          <td class="h-entete"> Nom : </td>
          <td class="h-valeur"><?php echo $etudiant['nom'] ?></td>
        </tr>
        <tr>
          <td class="h-entete"> Prenom : </td>
          <td class="h-valeur"><?php echo $etudiant['prenom'] ?></td>
        </tr>
        <tr>
          <td class="h-entete"> Adresse e-mail : </td>
          <td class="h-valeur"><?php echo $etudiant['email'] ?></td>
        </tr>
        <tr>
          <td class="h-entete"> Numéro de téléphone : </td>
          <td class="h-valeur"><?php echo $etudiant['tel'] ?></td>
        </tr>
        <tr>
          <td class="h-entete"> Sexe : </td>
          <td class="h-valeur"><?php echo $etudiant['sexe'] ?></td>
        </tr>
        <tr>
          <td class="h-entete"> Date de naissance : </td>
          <td class="h-valeur"><?php echo date('d-m-Y', strtotime($etudiant['ddn'])) ?></td>
        </tr>
        <tr>
          <td class="h-entete"> Durée du sejour : </td>
          <td class="h-valeur"><?php echo 'du '.date('d-m-Y', strtotime($etudiant['dap'])).' au '
          .date('d-m-Y', strtotime($etudiant['ddp'])); ?></td>
        </tr>
        <tr>
          <td class="h-entete"> Motif du sejour : </td>
          <td class="h-valeur"><?php echo $etudiant['motif'] ?></td>
        </tr>

      </tbody>
    </table>
  </div>


  <?php
  echo '<p><a href="index.php?uc=gestionEtudiant&action=modifierEtudiant&id='. $etudiant['id'] . '" class="btn btn-danger btn-lg"> modifier mes informations </a> ';
  echo '<a href="index.php?uc=gestionEtudiant&action=supprimerEtudiant&id='. $etudiant['id'] . '" class="btn btn-danger btn-lg" onclick="return confirm(\'êtes-vous sûr de vouloir supprimer votre compte ?\')"> supprimer mon compte </a> ';
  echo '</p>';
  ?>
</div>
