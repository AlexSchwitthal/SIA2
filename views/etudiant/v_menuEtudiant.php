		<div id="menuVertical" class="col-md-3">
            <script language="javascript" type="text/javascript" src="views/etudiant/etudiant.js"></script>
                <ul id="menuList">
                    <?php if(!isset($_SESSION['groupe'])) { ?>
                        <li <?php if (!isset($_REQUEST['uc']) || $_REQUEST['uc'] == 'accueil') { ?> class="active"<?php } ?>>
                            <div id="menu1" onclick="showSubMenu('menu1')"><a href="#"><p>Accueil</p></a></div>
                            <ul class="subMenu">
                                <li><a href="#">Link 1</a></li>
                                <li><a href="#">Link 2</a></li>
                                <li><a href="#">Link 3</a></li>
                            </ul>
                        </li>

                        <li <?php if (isset($_REQUEST['uc']) && $_REQUEST['uc'] == 'gestionAdherent') { ?> class="active"<?php } ?>>
                            <div id="menu2" onclick="showSubMenu('menu2')"><a href="#"><p>Devenir adhérent</p></a></div>
                            <ul class="subMenu">
                                <li><a href="#">Link 1</a></li>
                                <li><a href="#">Link 2</a></li>
                                <li><a href="#">Link 3</a></li>
                            </ul>
                        </li>

                        <li <?php if (isset($_REQUEST['uc']) && $_REQUEST['uc'] == 'gestionEtudiant') { ?> class="active"<?php } ?>>
                            <div id="menu3" onclick="showSubMenu('menu3')"><a href="#"><p>Accueil étudiant</p></a></div>
                            <ul class="subMenu">
                                <li><a href="index.php?uc=gestionEtudiant&action=inscriptionEtudiant">Formulaire Primo Arrivant</a></li>
                                <li><a href="#">Informations Vie Étudiante</a></li>
                                <li><a href="#">Link 3</a></li>
                            </ul>
                        </li>

                        <li <?php if (isset($_REQUEST['uc']) && $_REQUEST['uc'] == 'don') { ?> class="active"<?php } ?>>
                            <div id="menu4" onclick="showSubMenu('menu4')"><a href="#"><p>Faire un don</p></a></div>
                            <ul class="subMenu">
                                <li><a href="#">Link 1</a></li>
                                <li><a href="#">Link 2</a></li>
                                <li><a href="#">Link 3</a></li>
                            </ul>
                        </li>

                        <li <?php if (isset($_REQUEST['uc']) && $_REQUEST['uc'] == 'forum') { ?> class="active"<?php } ?>>
                            <div id="menu5" onclick="showSubMenu('menu5')"><a href="#"><p>Forum</p></a></div>
                            <ul class="subMenu">
                                <li><a href="#">Link 1</a></li>
                                <li><a href="#">Link 2</a></li>
                                <li><a href="#">Link 3</a></li>
                            </ul>
                        </li>

                        <li <?php if (isset($_REQUEST['uc']) && $_REQUEST['uc'] == 'connexion') { ?> class="active"<?php } ?>>
                            <div id="menu6" onclick="showSubMenu('menu6')"><a href="#"><p>Connexion</p></a></div>
                            <ul class="subMenu">
                                <li><a href="#">Link 1</a></li>
                                <li><a href="#">Link 2</a></li>
                                <li><a href="#">Link 3</a></li>
                            </ul>
                        </li>
                    <?php } ?>

                    <?php if(userGroupe(3) || userGroupe(2) || userGroupe(1) ){ ?>
                    <li>
                        <a href="./index.php?uc=gestionEtudiant&action=affichageEtudiant">Liste des étudiants</a>
                    </li>
                    <?php } ?>

                    <?php if(userGroupe(3)) { ?>
                    <li>
                        <a href="./index.php?uc=gestionEtudiant&action=redactionNews">Rédiger une news</a>
                    </li>
                    <?php } ?>
                </ul>
                <script>
                    hideAllSubMenus();
                </script>
		</div>
