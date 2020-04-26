        <div id="contentPage" class="col-md-9">
            <h2 class="pageTitle">Ajouter une information Vie Étudiante</h2>
            <form name="form" method="post" action="index.php?uc=gestionEtudiant&action=ajoutNews">
                <div class="formDiv">
                    <table>
                        <col style="width:25%">
                        <col style="width:75%">
                        <tr>
                            <td>Titre de la publication :</td>
                            <td><input type="text" id="nom" name="nom" size="50"> </td>
                        </tr>
                        <tr>
                            <td>Catégorie :</td>
                            <td>
                                <ul>
                                    <li><input type="checkbox" name="" value="oui"> Cité universitaire dédiée aux étudiants étrangers</li>
                                    <li><input type="checkbox" name="" value="oui"> Références de la vie associative étudiante</li>
                                    <li><input type="checkbox" name="" value="oui"> Mutuelles étudiantes</li>
                                    <li><input type="checkbox" name="" value="oui"> CROUS</li>
                                    <li><input type="checkbox" name="" value="oui"> Lieux d'hébergement</li>
                                    <li><input type="checkbox" name="" value="oui"> Maisons des associations de Paris</li>
                                    <li><input type="checkbox" name="" value="oui"> Autres</li>
                                <ul>
                            </td>
                        </tr>
                        <tr>
                            <td>Contenu de la publication :</td>
                        </tr>
                        <tr>
                            <td colspan="2"><textarea rows="8" name = "description" onfocus="this.value=''"> Rédiger le contenu de la publication ...</textarea></td>
                        </tr>
                    </table>
                </div>
                <p>(*) Champ obligatoire</p>
                <input type="submit" value="Annuler" onClick="erase();return false;">
                <input id="submitBouton" type="submit" value="Publier">
            </form>
        </div>
