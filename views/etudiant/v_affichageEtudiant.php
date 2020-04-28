        <div id="contentPage" class="col-md-9">
            <h2 class="pageTitle">Liste primo arrivant</br>demandant un accompagnement</h2>
            <table class="table table-bordered table-responsive table-striped" id="etudiants">
                <col style="width:15%">
                <col style="width:15%">
                <col style="width:15%">
                <col style="width:30%">
                <col style="width:15%">
                <thead>
                    <tr>
                    <th> Nom </th>
                    <th> Prenom </th>
                    <th> Date </th>
                    <th> Besoin </th>
                    <th> Contacter </th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    if(isset($lesEtudiants)){
                        foreach ($lesEtudiants as $etudiant) {
                    ?>
                    <tr>
                        <td> <?php echo $etudiant['nom'] ?></td>
                        <td> <?php echo $etudiant['prenom'] ?></td>
                        <td>Du <?php echo $etudiant['dap'] ?></br>au <?php echo $etudiant['ddp'] ?></td>
                        <td> Besoin hebergement : <?php echo $etudiant['besoin_hebergement'] ?> <br>
                            Besoin accompagnement : <?php echo $etudiant['besoin_accompagnement'] ?> <br>
                            Besoin transport : <?php echo $etudiant['besoin_transport'] ?> <br>
                            Besoin autres : <?php echo $etudiant['besoin_autres'] ?>

                        </td>
						<?php
							$dest=$etudiant['ref_users'];
							$expe=$pdo->getUserConnecte($_SESSION['logs']);
							echo "<td><button type=\"button\" onclick=\"window.location='./index.php?uc=gestionEtudiant&action=conversation&id_destinataire={$dest}&id_expediteur={$expe['id']}';\">Contacter</button> </td>" 
						?>
                    </tr>
                    <?php
                        }
                    }
                    elseif(isset($etudiant)){
                    ?>
                    <tr>
                        <td> <?php echo $etudiant['nom'] ?></td>
                        <td> <?php echo $etudiant['prenom'] ?></td>
                        <td>Du <?php echo $etudiant['dap'] ?> au <?php echo $etudiant['ddp'] ?></td>
                        <td> Besoin hebergement : <?php echo $etudiant['besoin_hebergement'] ?> <br>
                            Besoin accompagnement : <?php echo $etudiant['besoin_accompagnement'] ?> <br>
                            Besoin transport : <?php echo $etudiant['besoin_transport'] ?> <br>
                            Besoin autres : <?php echo $etudiant['besoin_autres'] ?>

                        </td>
                        <td><button type="button" onclick="window.location.href = './index.php?uc=gestionEtudiant&action=modifierEtudiant';">Modifier</button> </td>

                    </tr>
                    <?php
                        }
                    ?>
                </tbody>
            </table>
        </div>
