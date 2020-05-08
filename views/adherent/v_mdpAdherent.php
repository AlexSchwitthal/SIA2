<?php
  echo $erreur;
?>
<div id="contentPage" class="col-md-9">
  <h2 class="pageTitle">Modifier votre mot de passe</h2>
  <br>
<table class="table table-bordered table-responsive table-striped">
  <form name="form" method="post" action="index.php?uc=gestionAdherent&action=validerModicationMDP&id=<?php echo $lAdherent['id'] ?>" onsubmit="return confirm('êtes vous sûr de votre nouveau mot de passe ?');">
    <tr>
      <td class="h-entete"> Nouveau mot de passe : </td>
      <td><input type="password" id="nouveauMdp" name="nouveauMdp"> </td>
    </tr>

    <tr>
      <td class="h-entete"> Confirmer le nouveau mot de passe : </td>
      <td><input type="password" id="nouveaumdpConfirmation" name="nouveauMdpConfirmation"> </td>
    </tr>
    <tr>
      <td> <input type="submit"> </td>
    </tr>
 </form>
</table>
</div>
