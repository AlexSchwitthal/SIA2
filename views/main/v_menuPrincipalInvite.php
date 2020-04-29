            <div id="menuBar">
                <ul>

                    <li <?php if (!isset($_REQUEST['uc']) || $_REQUEST['uc'] == 'accueil') { ?> class="active"<?php } ?>>
                        <a href="index.php"><p>Accueil</p></a>
                    </li>

                    <li <?php if (isset($_REQUEST['uc']) && $_REQUEST['uc'] == 'gestionAdherent') { ?> class="active"<?php } ?>>
                        <a href="index.php?uc=gestionAdherent&action=ajouterAdherent"><p>Devenir adhérent</p></a>
                    </li>

                    <li <?php if (isset($_REQUEST['uc']) && $_REQUEST['uc'] == 'gestionEtudiant') { ?> class="active"<?php } ?>>
                        <a href="index.php?uc=gestionEtudiant&action=accueilPrimoArrivant"><p>Accueil étudiant</p></a>
                        <ul class="dropDownContent">
                            <li><a href="index.php?uc=gestionEtudiant&action=inscriptionEtudiant">Formulaire Primo Arrivant</a></li>
                            <li><a href="#">Informations Vie Étudiante</a></li>
                            <li><a href="#">FAQ</a></li>
                        </ul>
                    </li>

                    <li <?php if (isset($_REQUEST['uc']) && $_REQUEST['uc'] == 'don') { ?> class="active"<?php } ?>>
                        <a href="index.php?uc=don"><p>Faire un don</p></a>
                    </li>

                    <li <?php if (isset($_REQUEST['uc']) && $_REQUEST['uc'] == 'forum') { ?> class="active"<?php } ?>>
                        <a href="index.php?uc=forum"><p>Forum</p></a>
                    </li>

                    <li <?php if (isset($_REQUEST['uc']) && $_REQUEST['uc'] == 'connexion') { ?> class="active"<?php } ?>>
                        <a href="index.php?uc=connexion&action=demandeConnexion"><p>Connexion</p></a>
                    </li>

                </ul>
            </div>
