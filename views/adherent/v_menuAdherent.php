<?php
if(userGroupe(3)) {
  ?>
  <div class="col-md-2">
    <div id="nav">
          <div id="menuGauche">
              <ul id="menuList">
                  <li>
                      <a href="./index.php?uc=gestionAdherent&action=listeAdherent">liste des adhérents</a>
                  </li>
                  <li>
                      <a href="./index.php?uc=gestionAdherent&action=ajouterAdherent">ajouter un adhérent</a>
                  </li>
                  <li>
                      <a href="./index.php?uc=gestionAdherent&action=accesFormulaires">accès formulaires</a>
                  </li>
                  <li>
                      <a href="./index.php?uc=gestionAdherent&action=donneesAssociation">données de l'association</a>
                  </li>
              </ul>
          </div>
      </div>
  </div>
  <?php
}
?>
