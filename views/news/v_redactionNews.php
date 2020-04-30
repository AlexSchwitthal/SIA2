        <div id="contentPage" class="col-md-9">
            <h2 class="pageTitle">Ajouter une information Vie Étudiante</h2>
            <form name="form" method="post" action="index.php?uc=gestionEtudiant&action=ajoutNews">
                <div class="formDiv">
                    <table>
                        <col style="width:25%">
                        <col style="width:75%">
                        <tr>
                            <td>Titre de la publication :</td>
                            <td><input type="text" id="titre" name="titre" size="50" maxlength="100" required> </td>
                        </tr>
                        <tr>
                            <td>Catégorie :</td>
                            <td>
                                <ul>
                                    <?php
                                    foreach ($categories as $categorie) {
                                      ?>
                                      <li><input type="checkbox" name="categorie<?php echo $categorie['id'] ?>" value="<?php echo $categorie['id'] ?>"> <?php echo $categorie['nom'] ?></li>
                                      <?php
                                    }
                                    ?>
                                <ul>
                            </td>
                        </tr>
                        <tr>
                            <td>Contenu de la publication :</td>
                        </tr>
                        <tr>
                            <td colspan="2"><textarea rows="8" name = "description" placeholder="Rédiger le contenu de la publication ..." required></textarea></td>
                        </tr>
                    </table>
                </div>
                <p>(*) Champ obligatoire</p>
                <input type="submit" value="Annuler" onClick="erase();return false;">
                <input id="submitBouton" type="submit" value="Publier">
            </form>
        </div>
