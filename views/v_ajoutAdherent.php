  <?php
    echo $erreur;
  ?>
<div class="col-md-10">
  <form name="form" method="post" action="index.php?uc=gestionAdherent&action=validerAdherent">
    <table class="marge">
      <tr>
        <td> Nom : </td>
        <td><input type="text" id="nom" name="nom"> </td>
      </tr>

      <tr>
        <td> Prenom : </td>
        <td><input type="text" id="prenom" name="prenom"> </td>
      </tr>

      <tr>
        <td>&lrm;</td>
      </tr>

      <tr>
        <td> Ville : </td>
        <td><input type="text" id="ville" name="ville"> </td>
      </tr>
      <tr>
        <td> Code postal : </td>
        <td><input type="text" id="cp" name="cp" onkeypress="validate(event)" maxlength="5"></td>
      </tr>
      <tr>
        <td> Adresse : </td>
        <td><input type="text" id="adresse" name="adresse"></td>
      </tr>

      <tr>
        <td>&lrm;</td>
      </tr>

      <tr>
        <td> Tel : </td>
        <td><input type="tel" id="tel" name="tel"> </td>
      </tr>

      <tr>
        <td> E-mail : </td>
        <td><input type="text" id="email" name="email"> </td>
      </tr>
    </table>
    <br>
    <p>L’adhésion implique le respect des statuts et du règlement intérieur,
      à la disposition de l’adhérent <a href="index.php">ici</a>.<p>

    <p><input type="checkbox" id="cgv" name="cgv"> Vous autorisez l’association EPA à stocker les informations vous concernant.</p>
    <input type="submit">
    <input type="submit" value="Annuler" onClick="erase();return false;">
  </form>
</div>
