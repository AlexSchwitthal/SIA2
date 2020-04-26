        <?php
            echo $erreur;
        ?>

        <div id="contentPage" class="col-md-9">
            <h2 class="pageTitle">Formulaire d'accompagnement</br>Primo Arrivant</h2>
            <form id="primoArrivantForm" name="form" method="post" action="index.php?uc=gestionEtudiant&action=ajoutEtudiant">
                <div class="formDiv">
                    <h4>Informations personnelles</h4>
                    <table style="width: 100%">
                        <col style="width:24%">
                        <col style="width:24%">
                        <col style="width:4%">
                        <col style="width:15%">
                        <col style="width:33%">
                        <tr>
                            <td>Nom :</td>
                            <td><input type="text" id="nom" name="nom" size="15"> </td>
                            <td></td>
                            <td>Sexe : </td>
                            <td>
                                <input type="radio" name="sexe" value="homme" checked> Homme
                                <input type="radio" name="sexe" value="femme"> Femme
                            </td>
                        </tr>
                        <tr>
                            <td>Prénom : </td>
                            <td><input type="text" id="prenom" name="prenom" size="15"> </td>
                            <td></td>
                            <td>Nationnalité : </td>
                            <td> 
                                <select id="nation" name="nation">
                                    <option value="">-- Sélectionner --</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td> Date de naissance : </td>
                            <td>
                                <input type="date" id="ddn" name="ddn" placeholder="DD/MM/YYYY">
                            </td>
                            <td></td>
                            <td> Langues : </td>
                            <td> 
                                <select name="langue">
                                    <option value="">-- Sélectionner --</option>
                                </select> 
                            </td>
                        </tr>
                        <tr>
                            <td> Téléphone : </td>
                            <td><input type="text" id="tel" name="tel" size="15"> </td>
                        </tr>
                        <tr>
                            <td> E-mail : </td>
                            <td><input type="text" id="email" name="email" size="15"> </td>
                        </tr>
                    </table>
                    </br>
                    <h4> Informations séjour </h4>
                    <table>
                        <col style="width:24%">
                        <col style="width:24%">
                        <col style="width:4%">
                        <col style="width:15%">
                        <col style="width:33%">
                        <tr>
                            <td> Date d'arrivée : </td>
                            <td>
                                <input type="date" id="dap" name="dap" placeholder="DD / MM / YYYY">
                            </td>
                            <td></td>
                            <td> Date de départ : </td>
                            <td>
                                <input type="date" id="ddp" name="ddp" placeholder="DD / MM / YYYY">
                            </td>
                        </tr>
                        <tr>
                            <td> Motif principal du séjour : </td>
                            <td colspan="3">
                                <ul>
                                    <li><input type="radio" name="motif" value="stage" checked> Stage</li>
                                    <li><input type="radio" name="motif" value="etude"> Études</li>
                                    <li>
                                        <input type="radio" name="motif" value="autre"> Autres : 
                                        <input type="text" name = "motif_autre" onfocus="this.value=''">
                                    </li>
                                </ul>
                            </td>
                        </tr>
                        <tr>
                            <td>Besoins : </td>
                            <td colspan="3">
                                <ul>
                                    <li><input type="checkbox" name="besoin_hebergement" value="oui"> Hébergement provisoire</li>
                                    <li><input type="checkbox" name="besoin_accompagnement" value="oui"> Accompagnement</li>
                                    <li><input type="checkbox" name="besoin_transport" value="oui"> Recherche de moyens de transport</li>
                                    <li>
                                        <input type="checkbox" name="besoin_autres_check" value="oui"> Autres :
                                        <input type="text" name = "besoin_autres" onfocus="this.value=''">
                                    </li>
                                <ul>
                            </td>
                        </tr>
                    </table>
                </div>
                <p>(*) Champ obligatoire</p>
                <input type="checkbox" name="autor1" value="oui"> Vous autorisez l’association EPA à stocker les informations vous concernant. </br>
                <input type="checkbox" name="autor2" value="oui"> Vous autorisez les membres de l’association EPA à consulter vos informations. </br></br>
                <input id="submitBouton" type="submit" value="S'inscrire"> 
                <input type="submit" value="Annuler" onClick="erase();return false;">
            </form>
            <script>
                generateNationality();
            </script>
        </div>
