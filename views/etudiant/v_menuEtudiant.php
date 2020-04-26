		<div class="col-md-3">
		<div id="nav">
			<div id="menuGauche">
				<ul id="menuList">
					<?php if(!isset($_SESSION['groupe'])) { ?>
					<li>
						<a href="./index.php?uc=gestionEtudiant&action=inscriptionEtudiant">Inscrire un étudiant</a>
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
			</div>
		</div>
		</div>
