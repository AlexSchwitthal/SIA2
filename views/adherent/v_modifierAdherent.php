<?php
  echo $erreur;
?>
<div class="col-md-10">
<table class="marge">
  <form name="form" method="post" action="index.php?uc=gestionAdherent&action=validerModificationAdherent">
    <tr>
      <td> ID : </td>
      <td><input type="text" id="id" name="id" value="<?php echo $lAdherent['id'] ?>"> </td>
    </tr>

    <tr>
      <td> Nom : </td>
      <td><input type="text" id="nom" name="nom" value="<?php echo $lAdherent['nom'] ?>"> </td>
    </tr>

    <tr>
      <td> Prenom : </td>
      <td><input type="text" id="prenom" name="prenom" value="<?php echo $lAdherent['prenom'] ?>"> </td>
    </tr>

    <tr>
      <td>&lrm;</td>
    </tr>

    <tr>
      <td> Ville : </td>
      <td><input type="text" id="ville" name="ville" value="<?php echo $lAdherent['ville'] ?>"> </td>
    </tr>
    <tr>
      <td> Code postal : </td>
      <td><input type="text" id="cp" name="cp" value="<?php echo $lAdherent['cp'] ?>" onkeypress="validate(event)" maxlength="5"></td>
    </tr>
    <tr>
      <td> Adresse : </td>
      <td><input type="text" id="adresse" name="adresse" value="<?php echo $lAdherent['adresse'] ?>"></td>
    </tr>

    <tr>
      <td>&lrm;</td>
    </tr>

    <tr>
      <td> Tel : </td>
      <td><input type="tel" id="tel" name="tel" value="<?php echo $lAdherent['tel'] ?>"> </td>
    </tr>

    <tr>
      <td> E-mail : </td>
      <td><input type="text" id="email" name="email" value="<?php echo $lAdherent['email'] ?>"> </td>
    </tr>

    <input type="checkbox" id="cgv" name="cgv" style="display:none" checked>
    <tr>
      <td colspan="2">
        <input type="submit">
      </td>
    </tr>
 </form>
</table>
</div>
