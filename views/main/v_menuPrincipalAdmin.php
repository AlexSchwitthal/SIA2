            <div id="menuBar">
                <ul>

                    <li <?php if (!isset($_REQUEST['uc']) || $_REQUEST['uc'] == 'accueil') { ?> class="active"<?php } ?>>
                        <a href="index.php"><p>Accueil</p></a>
                    </li>

                    <li <?php if (isset($_REQUEST['uc']) && $_REQUEST['uc'] == 'gestionAdherent') { ?> class="active"<?php } ?>>
                        <a href="index.php?uc=gestionAdherent&action=accueilAdherent"><p>Gestion des adhérents</p></a>
                        <ul class="dropDownContent">
                            <li><a href="./index.php?uc=gestionAdherent&action=listeAdherent">Liste des adhérents</a></li>
                            <li><a href="./index.php?uc=gestionAdherent&action=ajouterAdherent">Ajouter un adhérent</a></li>
                            <li><a href="./index.php?uc=gestionAdherent&action=accesFormulaires">Accès formulaires</a></li>
                            <li><a href="./index.php?uc=gestionAdherent&action=donneesAssociation">Données association</a></li>
                        </ul>
                    </li>

                    <li <?php if (isset($_REQUEST['uc']) && $_REQUEST['uc'] == 'gestionEtudiant') { ?> class="active"<?php } ?>>
                        <a href="index.php?uc=gestionEtudiant"><p>Accueil étudiant</p></a>
                        <ul class="dropDownContent">
                            <li><a href="./index.php?uc=gestionEtudiant&action=affichageEtudiant">Liste des étudiants</a></li>
                            <li><a href="./index.php?uc=gestionEtudiant&action=messagerie">Messagerie</a></li>
                            <li><a href="./index.php?uc=gestionEtudiant&action=redactionNews">Rédiger une news</a></li>
                        </ul>
                    </li>

                    <li <?php if (isset($_REQUEST['uc']) && $_REQUEST['uc'] == 'don') { ?> class="active"<?php } ?>>
                        <a href="index.php?uc=don"><p>Faire un don</p></a>
                    </li>

                    <li <?php if (isset($_REQUEST['uc']) && $_REQUEST['uc'] == 'forum') { ?> class="active"<?php } ?>>
                        <a href="index.php?uc=forum"><p>Forum</p></a>
                    </li>

                    <li>
                        <a href="index.php?uc=connexion&action=demandeDeconnexion"><p>Deconnexion</p></a>
                    </li>
                </ul>
            </div>
