  <table class="table table-bordered table-responsive table-striped">
    <tr>
      <td> ID </td>
      <td> Nom </td>
      <td> Prenom </td>
      <td> Sexe </td>
      <td> Date de naissance </td>
      <td> Nationnalité </td>
      <td> Stage / Études ? </td>
      <td> Date arrivée à Paris </td>
      <td> Langue parlée </td>
      <td> Téléphone </td>
      <td> Email </td>
      <td> Prise en charge ? </td>
    </tr>
    <?php
    foreach ($lesEtudiants as $etudiant) {
      ?>
      <tr>
        <td> <?php echo $etudiant['id'] ?></td>
        <td> <?php echo $etudiant['nom'] ?></td>
        <td> <?php echo $etudiant['prenom'] ?></td>
        <td> <?php echo $etudiant['sexe'] ?></td>
        <td> <?php echo $etudiant['ddn'] ?></td>
        <td> <?php echo $etudiant['nation'] ?></td>
        <td> <?php echo $etudiant['es'] ?></td>
        <td> <?php echo $etudiant['dap'] ?></td>
        <td> <?php echo $etudiant['langue'] ?></td>
        <td> <?php echo $etudiant['tel'] ?></td>
        <td> <?php echo $etudiant['email'] ?></td>
        <td> <?php echo $etudiant['pec'] ?></td>
      </tr>
      <?php
    }
    ?>
  </table>
