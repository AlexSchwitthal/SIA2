<div class="col-md-2">
  <div id="nav">
      <div id="menuGauche">
          <ul id="menuList">
              <li>
                  <a href="./index.php?uc=gestionEtudiant&action=inscriptionEtudiant">Inscrire un étudiant</a>
              </li>

              <?php if(estConnecte() && $_SESSION['groupe']==3){ ?>
              <li>
                  <a href="./index.php?uc=gestionEtudiant&action=affichageEtudiant">Liste des étudiants</a>
              </li>
              <?php } ?>

              <li>
                  <a href="./index.php?uc=gestionEtudiant&action=redactionNews">Rédiger une news</a>
              </li>
          </ul>
      </div>
  </div>
</div>
