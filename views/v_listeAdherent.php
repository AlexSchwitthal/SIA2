
<div class="col-md-10">

  <form name="form" method="post" action="index.php?uc=gestionAdherent&action=listeAdherentTrier">
    <table>
      <tr>
        <td> Rechercher : </td>
        <td> Prenom </td>
        <td> Nom </td>
        <td> Cotisation payé </td>
      <tr>
      <tr>
        <td></td>
        <td><input type="text" id="prenom" name="prenom"></td>
        <td><input type="text" id="nom" name="nom"></td>
        <td><select id="cotisation" name="cotisation">
              <option value="default">-- Sélectionner --</option>
              <option value="oui"> Oui </option>
              <option value="non"> Non </option>
            </select>
        </td>
        <td><input type="submit" value="Rechercher"></td>
      </tr>
    </table>
  </form>
  <br>
  <h2>Adhérents inscrits : </h2>
  <div class="marge">
    <table class="table table-bordered table-responsive table-striped">
      <tr>
        <td> ID </td>
        <td> Prenom </td>
        <td> Nom </td>
        <td> mail </td>
        <td> Tel </td>
      </tr>
      <?php
      foreach ($adherentsInscrits as $adherent) {
        ?>
        <tr>
          <?php
          echo '<td><a href="index.php?uc=gestionAdherent&action=pageAdherent&id='. $adherent['id'] . '">' . $adherent['id'] . '</a></td>';
          ?>
          <td> <?php echo $adherent['prenom'] ?></td>
          <td> <?php echo $adherent['nom'] ?></td>
          <td> <?php echo $adherent['email'] ?></td>
          <td> <?php echo $adherent['tel'] ?></td>
        </tr>
        <?php
      }
      ?>
    </table>
  </div>
  <br>
  <h2>Adhérents en attente : </h2>
  <div class="marge">
    <table class="table table-bordered table-responsive table-striped">
      <tr>
        <td> ID </td>
        <td> Prenom </td>
        <td> Nom </td>
        <td> mail </td>
        <td> Tel </td>
        <td></td>
      </tr>
      <?php
      foreach ($adherentsNonInscrits as $adherent) {
        ?>
        <tr>
          <?php
          echo '<td><a href="index.php?uc=gestionAdherent&action=pageAdherent&id='. $adherent['id'] . '">' . $adherent['id'] . '</a></td>';
          ?>
          <td> <?php echo $adherent['prenom'] ?></td>
          <td> <?php echo $adherent['nom'] ?></td>
          <td> <?php echo $adherent['email'] ?></td>
          <td> <?php echo $adherent['tel'] ?></td>
          <td>
            <?php
            echo '<form name="form" method="post" action="index.php?uc=gestionAdherent&action=validerAdhesion&id='. $adherent['id'] .'">';
            ?>
              <input type="submit" value="Accepter" name="accepter" id="accepter">
              <input type="submit" value="Refuser" name="refuser" id="refuser">
            </form>
          </td>
        </tr>
        <?php
      }
      ?>
    </table>
  </div>
</div>
