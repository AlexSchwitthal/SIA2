            <div id="menuBar">
                <ul>

                    <li <?php if (!isset($_REQUEST['uc']) || $_REQUEST['uc'] == 'accueil') { ?> class="active"<?php } ?>>
                        <a href="index.php"><p>Accueil</p></a>
                    </li>

                    <li <?php if (isset($_REQUEST['uc']) && $_REQUEST['uc'] == 'gestionEtudiant') { ?> class="active"<?php } ?>>
                        <a href="index.php?uc=gestionEtudiant"><p>Voir étudiants</p></a>
                        <ul class="dropDownContent">
                            <li><a href="./index.php?uc=gestionEtudiant&action=affichageEtudiant">Liste des étudiants</a></li>
                            <li><a href="./index.php?uc=gestionEtudiant&action=messagerie">Messagerie</a></li>
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
