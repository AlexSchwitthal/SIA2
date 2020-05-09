        <?php
            echo $erreur;
        ?>

        <div id="contentPage" class="col-md-9 pull-right">
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
                            <td><input type="text" id="nom" name="nom" size="15" value="<?php echo isset($_POST['nom']) ? htmlspecialchars($_POST['nom'], ENT_QUOTES) : ''; ?>" required> </td>
                            <td></td>
                            <td>Sexe : </td>
                            <td>
                                <input type="radio" name="sexe" value="homme" checked> Homme
                                <input type="radio" name="sexe" value="femme"> Femme
                            </td>
                        </tr>
                        <tr>
                            <td>Prénom : </td>
                            <td><input type="text" id="prenom" name="prenom" value="<?php echo isset($_POST['prenom']) ? htmlspecialchars($_POST['prenom'], ENT_QUOTES) : ''; ?>" size="15" required> </td>
                            <td></td>
                            <td>Nationnalité : </td>
                            <td>
                                <select id="nation" name="nation">
                                    <option value="">-- Sélectionner --</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                          <td>Date de naissance : </td>
                          <td>
                            <select name="jourNaissance">
                              <option value="" selected> JJ</option>
                              <?php
                              for($it = 1; $it <= 31; $it++) {
                                $selected = '';
                                if(isset($_POST['jourNaissance'])) {
                                  if($_POST['jourNaissance'] == $it) {
                                  $selected = 'selected';
                                  }
                                }
                                echo '<option value="'.$it.'"'.$selected.'>'.$it.'</option>';
                              }
                              ?>
                            </select>

                            <select name="moisNaissance">
                              <option value="" selected> MM</option>
                              <?php
                              for($it = 1; $it <= 12; $it++) {
                                $selected = '';
                                if(isset($_POST['moisNaissance'])) {
                                  if($_POST['moisNaissance'] == $it) {
                                  $selected = 'selected';
                                  }
                                }
                                echo '<option value="'.$it.'"'.$selected.'>'.$it.'</option>';
                              }
                              ?>
                            </select>

                            <select name="anneeNaissance">
                              <option value="" selected> AAAA</option>
                              <?php
                              for($it = 2010; $it >= 1900; $it--) {
                                $selected = '';
                                if(isset($_POST['anneeNaissance'])) {
                                  if($_POST['anneeNaissance'] == $it) {
                                  $selected = 'selected';
                                  }
                                }
                                echo '<option value="'.$it.'"'.$selected.'>'.$it.'</option>';
                              }
                              ?>
                            </select>
                          </td>
                            <td></td>
                            <td>Langues :</td>
                            <td>
                                <select name="langue" id="langue">
                                    <option value="">-- Sélectionner --</option>
                                    <option value="AF">Afrikaans</option>
                                    <option value="SQ">Albanian</option>
                                    <option value="AR">Arabic</option>
                                    <option value="HY">Armenian</option>
                                    <option value="EU">Basque</option>
                                    <option value="BN">Bengali</option>
                                    <option value="BG">Bulgarian</option>
                                    <option value="CA">Catalan</option>
                                    <option value="KM">Cambodian</option>
                                    <option value="ZH">Chinese (Mandarin)</option>
                                    <option value="HR">Croatian</option>
                                    <option value="CS">Czech</option>
                                    <option value="DA">Danish</option>
                                    <option value="NL">Dutch</option>
                                    <option value="EN">English</option>
                                    <option value="ET">Estonian</option>
                                    <option value="FJ">Fiji</option>
                                    <option value="FI">Finnish</option>
                                    <option value="FR">French</option>
                                    <option value="KA">Georgian</option>
                                    <option value="DE">German</option>
                                    <option value="EL">Greek</option>
                                    <option value="GU">Gujarati</option>
                                    <option value="HE">Hebrew</option>
                                    <option value="HI">Hindi</option>
                                    <option value="HU">Hungarian</option>
                                    <option value="IS">Icelandic</option>
                                    <option value="ID">Indonesian</option>
                                    <option value="GA">Irish</option>
                                    <option value="IT">Italian</option>
                                    <option value="JA">Japanese</option>
                                    <option value="JW">Javanese</option>
                                    <option value="KO">Korean</option>
                                    <option value="LA">Latin</option>
                                    <option value="LV">Latvian</option>
                                    <option value="LT">Lithuanian</option>
                                    <option value="MK">Macedonian</option>
                                    <option value="MS">Malay</option>
                                    <option value="ML">Malayalam</option>
                                    <option value="MT">Maltese</option>
                                    <option value="MI">Maori</option>
                                    <option value="MR">Marathi</option>
                                    <option value="MN">Mongolian</option>
                                    <option value="NE">Nepali</option>
                                    <option value="NO">Norwegian</option>
                                    <option value="FA">Persian</option>
                                    <option value="PL">Polish</option>
                                    <option value="PT">Portuguese</option>
                                    <option value="PA">Punjabi</option>
                                    <option value="QU">Quechua</option>
                                    <option value="RO">Romanian</option>
                                    <option value="RU">Russian</option>
                                    <option value="SM">Samoan</option>
                                    <option value="SR">Serbian</option>
                                    <option value="SK">Slovak</option>
                                    <option value="SL">Slovenian</option>
                                    <option value="ES">Spanish</option>
                                    <option value="SW">Swahili</option>
                                    <option value="SV">Swedish </option>
                                    <option value="TA">Tamil</option>
                                    <option value="TT">Tatar</option>
                                    <option value="TE">Telugu</option>
                                    <option value="TH">Thai</option>
                                    <option value="BO">Tibetan</option>
                                    <option value="TO">Tonga</option>
                                    <option value="TR">Turkish</option>
                                    <option value="UK">Ukrainian</option>
                                    <option value="UR">Urdu</option>
                                    <option value="UZ">Uzbek</option>
                                    <option value="VI">Vietnamese</option>
                                    <option value="CY">Welsh</option>
                                    <option value="XH">Xhosa</option>
                                </select>
                            </td>

                        </tr>
                        <tr>
                            <td>Téléphone :</td>
                            <td><input type="text" id="tel" name="tel" size="15" value="<?php echo isset($_POST['tel']) ? htmlspecialchars($_POST['tel'], ENT_QUOTES) : ''; ?>" required> </td>
                            <td></td>
                            <td>Mot de passe :</td>
                            <td><input type="password" id="pw1" name="pw1" required> </td>
                        </tr>
                        <tr>
                            <td>E-mail :</td>
                            <td><input type="text" id="email" name="email" size="15" value="<?php echo isset($_POST['email']) ? htmlspecialchars($_POST['email'], ENT_QUOTES) : ''; ?>" required> </td>
                            <td></td>
                            <td>Confirmation MDP :</td>
                            <td><input type="password" id="pw2" name="pw2" value="" required> </td>
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
                          <td>Date d'arrivé : </td>
                          <td>
                            <select name="jourArrive">
                              <option value="" selected> JJ</option>
                              <?php
                              for($it = 1; $it <= 31; $it++) {
                                $selected = '';
                                if(isset($_POST['jourArrive'])) {
                                  if($_POST['jourArrive'] == $it) {
                                  $selected = 'selected';
                                  }
                                }
                                echo '<option value="'.$it.'"'.$selected.'>'.$it.'</option>';
                              }
                              ?>
                            </select>

                            <select name="moisArrive">
                              <option value="" selected> MM</option>
                              <?php
                              for($it = 1; $it <= 12; $it++) {
                                $selected = '';
                                if(isset($_POST['moisArrive'])) {
                                  if($_POST['moisArrive'] == $it) {
                                  $selected = 'selected';
                                  }
                                }
                                echo '<option value="'.$it.'"'.$selected.'>'.$it.'</option>';
                              }
                              ?>
                            </select>

                            <select name="anneeArrive">
                              <option value="" selected> AAAA</option>
                              <?php
                              for($it = 2020; $it <= 2030; $it++) {
                                $selected = '';
                                if(isset($_POST['anneeArrive'])) {
                                  if($_POST['anneeArrive'] == $it) {
                                  $selected = 'selected';
                                  }
                                }
                                echo '<option value="'.$it.'"'.$selected.'>'.$it.'</option>';
                              }
                              ?>
                            </select>
                          </td>
                            <td></td>
                            <td>Date de départ : </td>
                            <td>
                              <select name="jourDepart">
                                <option value="" selected> JJ</option>
                                <?php
                                for($it = 1; $it <= 31; $it++) {
                                  $selected = '';
                                  if(isset($_POST['jourDepart'])) {
                                    if($_POST['jourDepart'] == $it) {
                                    $selected = 'selected';
                                    }
                                  }
                                  echo '<option value="'.$it.'"'.$selected.'>'.$it.'</option>';
                                }
                                ?>
                              </select>

                              <select name="moisDepart">
                                <option value="" selected> MM</option>
                                <?php
                                for($it = 1; $it <= 12; $it++) {
                                  $selected = '';
                                  if(isset($_POST['moisDepart'])) {
                                    if($_POST['moisDepart'] == $it) {
                                    $selected = 'selected';
                                    }
                                  }
                                  echo '<option value="'.$it.'"'.$selected.'>'.$it.'</option>';
                                }
                                ?>
                              </select>

                              <select name="anneeDepart">
                                <option value="" selected> AAAA</option>
                                <?php
                                for($it = 2020; $it <= 2030; $it++) {
                                  $selected = '';
                                  if(isset($_POST['anneeDepart'])) {
                                    if($_POST['anneeDepart'] == $it) {
                                    $selected = 'selected';
                                    }
                                  }
                                  echo '<option value="'.$it.'"'.$selected.'>'.$it.'</option>';
                                }
                                ?>
                              </select>
                            </td>
                        </tr>
                        <tr>
                            <td> Motif du séjour : </td>
                            <td colspan="3">
                                <ul>
                                    <li><input type="radio" name="motif" value="stage" <?php if((!(isset($_POST['motif'])) OR (isset($_POST['motif']) AND $_POST['motif'] == 'stage'))) { echo 'checked'; } ?> > Stage</li>
                                    <li><input type="radio" name="motif" value="etude" <?php if(isset($_POST['motif']) and $_POST['motif'] == 'etude') { echo 'checked'; } ?> > Études</li>
                                    <li>
                                        <input type="radio" name="motif" value="autre" <?php if(isset($_POST['motif']) and $_POST['motif'] == 'autre') { echo 'checked'; } ?> > Autres :
                                        <input type="text" name = "motif_autre" value="<?php echo isset($_POST['motif_autre']) ? htmlspecialchars($_POST['motif_autre'], ENT_QUOTES) : ''; ?>">
                                    </li>
                                </ul>
                            </td>
                        </tr>
                        <tr>
                            <td>Besoins : </td>
                            <td colspan="3">
                                <ul>
                                    <li><input type="checkbox" name="besoin_hebergement" value="oui"  <?php if(isset($_POST['besoin_hebergement'])) { echo 'checked'; } ?> > Hébergement provisoire</li>
                                    <li><input type="checkbox" name="besoin_accompagnement" value="oui" <?php if(isset($_POST['besoin_accompagnement'])) { echo 'checked'; } ?> > Accompagnement</li>
                                    <li><input type="checkbox" name="besoin_transport" value="oui" <?php if(isset($_POST['besoin_transport'])) { echo 'checked'; } ?> > Recherche de moyens de transport</li>
                                    <li>
                                        <input type="checkbox" name="besoin_autres_check" value="oui" <?php if(isset($_POST['besoin_autres_check'])) { echo 'checked'; } ?> > Autres :
                                        <input type="text" name = "besoin_autres" value="<?php echo isset($_POST['besoin_autres']) ? htmlspecialchars($_POST['besoin_autres'], ENT_QUOTES) : ''; ?>">
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
            <script type="text/javascript">
              document.getElementById('langue').value = "<?php echo $_POST['langue'];?>";
              document.getElementById('nation').value = "<?php echo $_POST['nation'];?>";
            </script>
        </div>
