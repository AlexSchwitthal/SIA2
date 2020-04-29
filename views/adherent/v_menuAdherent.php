<?php
if(userGroupe(3)) {
  ?>
  <div class="col-md-2">
    <div id="nav">
          <div id="menuGauche">
              <ul id="menuList">
                  <li>
                      <a href="./index.php?uc=gestionAdherent&action=listeAdherent">Liste des adhérents</a>
                  </li>
                  <li>
                      <a href="./index.php?uc=gestionAdherent&action=ajouterAdherent">Ajouter un adhérent</a>
                  </li>
                  <li>
                      <a href="./index.php?uc=gestionAdherent&action=accesFormulaires">Accès formulaires</a>
                  </li>
                  <li>
                      <a href="./index.php?uc=gestionAdherent&action=donneesAssociation">Données de l'association</a>
                  </li>
              </ul>
          </div>
      </div>
  </div>
  <?php
}
?>
