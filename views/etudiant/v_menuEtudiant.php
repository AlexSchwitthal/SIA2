		<div id="menuVertical" class="col-md-3">
    
                <ul id="menuList">
                    <?php if(!isset($_SESSION['groupe'])) { ?>

                        <li <?php if (isset($_REQUEST['uc']) && $_REQUEST['uc'] == 'gestionEtudiant') { ?> class="active"<?php } ?>>
                            <div id="menu3"><a href="#"><p>Accueil étudiant</p></a></div>
                            <ul class="subMenu">
                                <li><a href="index.php?uc=gestionEtudiant&action=inscriptionEtudiant">Formulaire Primo Arrivant</a></li>
                                <li><a href="index.php">Informations Vie Étudiante</a></li>
                                <li><a href="#">FAQ</a></li>
                            </ul>
                        </li>
                        
                    <?php } ?>

                    <?php if(userGroupe(3) || userGroupe(2) || userGroupe(1) ){ ?>
                        <li>
                            <div id="menu3"><a href="#"><p>Espace étudiant</p></a></div>
                            <ul class="subMenu">
                                <li><a href="index.php?uc=gestionEtudiant&action=modifierEtudiant">Mon compte</a></li>
                                <li><a href="index.php?uc=gestionEtudiant&action=messagerie">Messagerie</a></li>
                            </ul>
                        </li>
                    <?php } ?>

                    <?php if(userGroupe(3)) { ?>
                    <li>
                        <a href="./index.php?uc=gestionEtudiant&action=redactionNews">Rédiger une news</a>
                    </li>
                    <?php } ?>
                </ul>
		</div>
