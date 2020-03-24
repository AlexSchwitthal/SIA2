  <form name="form" method="post" action="">
        <input type="submit" onClick="isValid();return false;">
        <input type="submit" value="Annuler" onClick="erase();return false;">
  </form>

  <table border="1">
    <tr>
      <td> ID </td>
      <td> Nom </td>
      <td> Prenom </td>
      <td> Ville </td>
      <td> CP </td>
      <td> Adresse </td>
      <td> Tel </td>
      <td> E-mail </td>
    </tr>
    <?php
    // var_dump($lesAdherents);
    // foreach ($lesAdherents as $adherent) {
    //   //var_dump($adherent);
    // }
    ?>
  </table>
