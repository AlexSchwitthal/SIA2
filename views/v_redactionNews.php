<div class="col-md-10">
  <table>
    <form name="form" method="post" action="index.php?uc=gestionEtudiant&action=ajoutNews">
      <tr>
        <td> Nom de la news : </td>
        <td><input type="text" id="nom" name="nom"> </td>
      </tr>

      <tr>
        <td>&lrm;</td>
      </tr>

      <tr>
        <td> News : </td>
        <td><textarea rows = "5" cols = "60" name = "description"> Entrer la news...</textarea></td>
      </tr>

      <tr>
        <td>&lrm;</td>
      </tr>

      <tr>
        <td>
          <input type="submit" value="Envoyer">
          <input type="submit" value="Annuler" onClick="erase();return false;">
        </td>
      </tr>

   </form>
 </table>
</div>
