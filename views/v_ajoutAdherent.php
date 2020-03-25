  <table>
    <form name="form" method="post" action="">
      <tr>
        <td> Nom : </td>
        <td><input type="text" id="nom"> </td>
      </tr>

      <tr>
        <td> Prenom : </td>
        <td><input type="text" id="prenom"> </td>
      </tr>

      <tr>
        <td>&lrm;</td>
      </tr>

      <tr>
        <td> Ville : </td>
        <td><input type="text" id="ville"> </td>
      </tr>
      <tr>
        <td> Code postal : </td>
        <td><input type="text" id="cp" onkeypress="validate(event)" maxlength="5"></td>
      </tr>
      <tr>
        <td> Adresse : </td>
        <td><input type="text" id="adresse"></td>
      </tr>

      <tr>
        <td>&lrm;</td>
      </tr>

      <tr>
        <td> Tel : </td>
        <td><input type="tel" id="tel"> </td>
      </tr>

      <tr>
        <td> E-mail : </td>
        <td><input type="text" id="e-mail"> </td>
      </tr>

      <tr>
        <td>
          <input type="submit" onClick="isValid();return false;">
          <input type="submit" value="Annuler" onClick="erase();return false;">
        </td>
      </tr>
   </form>
 </table>
