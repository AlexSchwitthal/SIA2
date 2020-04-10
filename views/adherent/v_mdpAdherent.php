<?php
  echo $erreur;
?>
<div class="col-md-10">
<table class="marge">
  <form name="form" method="post" action="index.php?uc=gestionAdherent&action=validerModicationMDP&id=<?php echo $lAdherent['id'] ?>">
    <tr>
      <td> nouveau mot de passe : </td>
      <td><input type="password" id="nouveauMdp" name="nouveauMdp"> </td>
    </tr>

    <tr>
      <td> Confirmer le nouveau mot de passe : </td>
      <td><input type="password" id="nouveaumdpConfirmation" name="nouveauMdpConfirmation"> </td>
    </tr>
    <tr>
      <td> <input type="submit"> </td>
    </tr>
 </form>
</table>
</div>
