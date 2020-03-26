  <?php
    echo $erreur;
  ?>
  <table>
    <form name="form" method="post" action="index.php?uc=gestionAdherent&action=validerAdherent">
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

      <tr>
        <td>
          <input type="submit">
          <input type="submit" value="Annuler" onClick="erase();return false;">
        </td>
      </tr>
   </form>
 </table>
