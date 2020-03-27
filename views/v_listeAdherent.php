<div class="col-md-10">
      <form name="form" method="post" action="">
        <input type="submit" onClick="isValid();return false;">
        <input type="submit" value="Annuler" onClick="erase();return false;">
  </form>

  <table class="table table-bordered table-responsive table-striped">
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
    foreach ($lesAdherents as $adherent) {
      ?>
      <tr>
        <td> <?php echo $adherent['id'] ?></td>
        <td> <?php echo $adherent['nom'] ?></td>
        <td> <?php echo $adherent['prenom'] ?></td>
        <td> <?php echo $adherent['ville'] ?></td>
        <td> <?php echo $adherent['cp'] ?></td>
        <td> <?php echo $adherent['adresse'] ?></td>
        <td> <?php echo $adherent['tel'] ?></td>
        <td> <?php echo $adherent['email'] ?></td>
      </tr>
      <?php
    }
    ?>
  </table>
</div>
