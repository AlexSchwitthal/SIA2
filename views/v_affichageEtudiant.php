<div class="col-md-10">
  <div class="marge">
    <table class="table table-bordered table-responsive table-striped">
      <tr>
        <td> Nom </td>
        <td> Prenom </td>
        <td> Date </td>
        <td> Besoin </td>
        <td> Contacter </td>
      </tr>
      <?php
      foreach ($lesEtudiants as $etudiant) {
        ?>
        <tr>
          <td> <?php echo $etudiant['nom'] ?></td>
          <td> <?php echo $etudiant['prenom'] ?></td>
          <td>Du <?php echo $etudiant['dap'] ?> au <?php echo $etudiant['ddp'] ?></td>
          <td> Besoin hebergement : <?php echo $etudiant['besoin_hebergement'] ?> <br>
               Besoin accompagnement : <?php echo $etudiant['besoin_accompagnement'] ?> <br>
               Besoin transport : <?php echo $etudiant['besoin_transport'] ?> <br>
               Besoin autres : <?php echo $etudiant['besoin_autres'] ?>
          
          </td>
          <td><button type="button" onclick="alert('You pressed the button!')">Contacter</button> </td>
          
        </tr>
        <?php
      }
      ?>
    </table>
  </div>
</div>
