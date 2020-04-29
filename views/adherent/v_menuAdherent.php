  <div class="col-md-3">
    <div id="nav">
          <div id="menuGauche">
              <ul id="menuList">
                  <?php if(!isset($_SESSION['groupe'])) { ?>
                    <li>
                        <a href="index.php?uc=gestionAdherent&action=ajouterAdherent"><p>Devenir adhérent</p></a>
                    </li>
                  <?php } ?>

                  <?php if(userGroupe(3)) { ?>
                  <li>
                      <a href="./index.php?uc=gestionAdherent&action=listeAdherent">Liste des adhérents</a>
                  </li>
                  <li>
                      <a href="./index.php?uc=gestionAdherent&action=ajouterAdherent">Ajouter un adhérent</a>
                  </li>
                  <?php }
                   if(userGroupe(2)) { 
                  ?>
                  <li>
                    <a href="index.php?uc=gestionAdherent&action=pageAdherent&id=<?php echo $id; ?>"><p>Voir mes informations</p></a>
                  </li>
                  <?php }
                    if(userGroupe(3) || userGroupe(2)) { 
                  ?>
                  <li>
                      <a href="./index.php?uc=gestionAdherent&action=accesFormulaires">Accès formulaires</a>
                  </li>
                  <li>
                      <a href="./index.php?uc=gestionAdherent&action=donneesAssociation">Données de l'association</a>
                  </li>
                  <?php }
                  ?>
              </ul>
          </div>
      </div>
  </div>
