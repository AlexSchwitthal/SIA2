
<div  id="contentPage" class="col-md-9">
  <h2 class="pageTitle">Liste des adhérents</h2>
  <form name="form" method="post" action="index.php?uc=gestionAdherent&action=listeAdherentTrier">
    <h2>Rechercher :</h2>
      <table style="border-collapse: collapse;">
      <tr style="font-weight: bold; line-height: 0">
        <td>Prenom</td>
        <td>Nom </td>
        <td>Cotisation payé</td>
       </tr>
       <tr style="line-height: 0">
        <td><input type="text" id="prenom" name="prenom"></td>
        <td><input type="text" id="nom" name="nom"></td>
        <td><select id="cotisation" name="cotisation">
              <option value="default">-- Sélectionner --</option>
              <option value="oui"> Oui </option>
              <option value="non"> Non </option>
            </select>
        </td>
        <td><input type="submit" value="Rechercher" style="line-height: 1"></td>
      </tr>
    </table>
  </form>
  <br>
  <h2>Adhérents inscrits : </h2>
  <div class="marge">
    <table class="table table-bordered table-responsive table-striped" id="adherentsInscrits">
      <thead>
        <tr>
          <th> ID </th>
          <th> Prenom </th>
          <th> Nom </td>
          <th> mail </th>
          <th> Tel </th>
        </tr>
      </thead>
      <tbody>
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
      </tbody>
    </table>
  </div>
  <br>
  <h2>Adhérents en attente : </h2>
  <div class="marge">
    <table class="table table-bordered table-responsive table-striped" id="adherentsAttente">
      <thead>
        <tr>
          <th> ID </th>
          <th> Prenom </th>
          <th> Nom </td>
          <th> mail </th>
          <th> Tel </th>
          <th></th>
        </tr>
      </thead>
      <tbody>
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
                <input type="submit" value="Accepter" onclick="return confirm('Voulez-vous vraiment ajouter cet adherent ?')" name="accepter" id="accepter" style="width: 90px; margin: 0; ">
                <input type="submit" value="Refuser" onclick="return confirm('Voulez-vous vraiment refuser cet adherent ?')" name="refuser" id="refuser" style="width: 90px; margin: 0;">
              </form>
            </td>
          </tr>
          <?php
        }
        ?>
      </tbody>
    </table>
  </div>
</div>
