<div id="menuVertical" class="col-md-3">
  <ul id="menuList">
    <?php if(!isset($_SESSION['groupe'])) { ?>
      <div id="menu3"><a href="#"><p>Devenir adhérent</p></a></div>
        <ul class="subMenu">
          <li><a href="index.php?uc=gestionAdherent&action=ajouterAdherent"><p>Bulletin d'adhésion</p></a></li>
        </ul>
    <?php } ?>

    <?php if(userGroupe(3)) { ?>
      <div id="menu3"><a href="#"><p>Gestion des adhérents</p></a></div>
        <ul class="subMenu">
          <li><a href="./index.php?uc=gestionAdherent&action=listeAdherent">Liste des adhérents</a></li>
          <li><a href="./index.php?uc=gestionAdherent&action=ajouterAdherent">Ajouter un adhérent</a></li>
        </ul>
      <?php } if(userGroupe(2)) { ?>
        <div id="menu3"><a href="#"><p>Espace adhérent</p></a></div>
          <ul class="subMenu">
            <li><a href="index.php?uc=gestionAdherent&action=pageAdherent&id=<?php echo $id; ?>"><p>Voir mes informations</p></a></li>
          </ul>
      <?php } if(userGroupe(3) || userGroupe(2)) { ?>
        <ul class="subMenu">
          <li><a href="./index.php?uc=gestionAdherent&action=accesFormulaires">Accès formulaires</a></li>
          <li><a href="./index.php?uc=gestionAdherent&action=donneesAssociation">Données de l'association</a></li>
        </ul>
      <?php } ?>
  </ul>
</div>

