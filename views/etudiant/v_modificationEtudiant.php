        <div id="contentPage" class="col-md-9">
            <h2 class="pageTitle">Modifier mes informations</h2>
            <form name="form" method="post" action="index.php?uc=gestionEtudiant&action=updateEtudiant" onsubmit="return confirm('Validez les modifications ?');">
                <div class="formDiv">
                    <h4>Informations personnelles</h4>
                    <table style="width: 100%">
                        <col style="width:24%">
                        <col style="width:24%">
                        <col style="width:4%">
                        <col style="width:18%">
                        <col style="width:30%">

                        <tr>
                            <td>Nom : </td>
                            <td><input type="text" id="nom" name="nom" value="<?php echo $etudiant['nom'] ?>" required> </td>
                            <td></td>
                            <td>Sexe : </td>
                            <td>
                                <?php if($etudiant['sexe']=='homme'){ ?>
                                <input type="radio" name="sexe" value="homme" checked> Homme
                                <input type="radio" name="sexe" value="femme"> Femme
                                <?php } else { ?>
                                <input type="radio" name="sexe" value="homme"> Homme
                                <input type="radio" name="sexe" value="femme" checked> Femme
                                <?php }?>
                            </td>
                        </tr>
                        <tr>
                            <td>Prénom :</td>
                            <td><input type="text" id="prenom" name="prenom" value="<?php echo $etudiant['prenom'] ?>" required> </td>
                            <td></td>
                            <td>Nationnalité :</td>
                            <td>
                                <select id="nation" name="nation">
                                    <option value="<?php echo $etudiant['nation'] ?>"><?php echo $etudiant['nation'] ?></option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td> Date de naissance : </td>
                            <td><input type="date" id="ddn" name="ddn" value="<?php echo $etudiant['ddn'] ?>" required ></td>
                            <td>&nbsp;&nbsp;&nbsp;&nbsp;</td>
                            <td> Langues : </td>
                            <td>
                                <select name="langue">
                                    <option value="<?php echo $etudiant['langue'] ?>"><?php echo $etudiant['langue'] ?></option>
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
                            <td><input type="text" id="tel" name="tel" value="<?php echo $etudiant['tel'] ?>" required> </td>
                            <td></td>
                            <td>Mot de passe :</td>
                            <td><input type="password" id="pw1" name="pw1" value="<?php echo $utilisateur['password'] ?>" required> </td>
                        </tr>
                        <tr>
                            <td>E-mail :</td>
                            <td><input type="text" id="email" name="email" value="<?php echo $etudiant['email'] ?>"> </td>
                            <td>&nbsp;&nbsp;&nbsp;&nbsp;</td>
                            <td>Confirmation MDP :</td>
                            <td><input type="password" id="pw2" name="pw2" value="<?php echo $utilisateur['password'] ?>" required> </td>
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
                            <td>Date d'arrivée :</td>
                            <td><input type="date" id="dap" name="dap" value="<?php echo $etudiant['dap'] ?>" required> </td>
                            <td></td>
                            <td>Date de départ :</td>
                            <td><input type="date" id="ddp" name="ddp" value="<?php echo $etudiant['ddp'] ?>" required> </td>
                        </tr>

                        <tr>
                            <td> Motif du séjour ? </td>
                            <td colspan="3">
                                <ul>
                                    <?php if ($etudiant['motif']=='stage'){ ?>
                                        <li><input type="radio" name="motif" value="stage" checked> Stage</li>
                                        <li><input type="radio" name="motif" value="etude"> Études</li>
                                        <li>
                                            <input type="radio" name="motif" value="autre"> Autres
                                            <input type="text" name="motif_autre"></textarea>
                                        </li>
                                    <?php } elseif($etudiant['motif']=='etude'){?>
                                        <li><input type="radio" name="motif" value="stage"> Stage</li>
                                        <li><input type="radio" name="motif" value="etude" checked> Études</li>
                                        <li>
                                            <input type="radio" name="motif" value="autre"> Autres
                                            <input type="text" name="motif_autre"></textarea>
                                        </li>
                                    <?php } else{?>
                                        <li><input type="radio" name="motif" value="stage"> Stage</li>
                                        <li><input type="radio" name="motif" value="etude" checked> Études</li>
                                        <li>
                                            <input type="radio" name="motif" value="autre" checked> Autres
                                            <input type="text" name="motif_autre" value="<?php echo $etudiant['motif'] ?>">
                                        </li>
                                    <?php }?>
                                </ul>
                            </td>
                        </tr>
                        <tr>
                            <td> Besoins </td>
                            <td colspan="3">
                                <ul>
                                    <?php if($etudiant['besoin_hebergement']=='oui'){ ?>
                                        <li><input type="checkbox" name="besoin_hebergement" value="oui" checked> Hébergement provisoire</li>
                                    <?php } else { ?>
                                        <li><input type="checkbox" name="besoin_hebergement" value="oui"> Hébergement provisoire</li>
                                    <?php } ?>

                                    <?php if($etudiant['besoin_accompagnement']=='oui'){ ?>
                                        <li><input type="checkbox" name="besoin_accompagnement" value="oui" checked> Accompagnement</li>
                                    <?php } else { ?>
                                        <li><input type="checkbox" name="besoin_accompagnement" value="oui"> Accompagnement</li>
                                    <?php } ?>

                                    <?php if($etudiant['besoin_transport']=='oui'){ ?>
                                        <li><input type="checkbox" name="besoin_transport" value="oui" checked> Recherche de moyens de transport</li>
                                    <?php } else { ?>
                                        <li><input type="checkbox" name="besoin_transport" value="oui"> Recherche de moyens de transport</li>
                                    <?php } ?>

                                    <?php if($etudiant['besoin_autres_check']=='oui'){ ?>
                                        <li>
                                            <input type="checkbox" name="besoin_autres_check" value="oui" checked> Autres :
                                            <input type="text" name="besoin_autres" value="<?php echo $etudiant['besoin_autres'] ?>">
                                        </li>
                                    <?php } else { ?>
                                        <li>
                                            <input type="checkbox" name="besoin_autres_check" value="oui"> Autres :
                                            <input type="text" name = "besoin_autres">
                                        </li>
                                    <?php } ?>
                                </ul>
                            </td>
                        </tr>
                    </table>
                </div>

                <?php if($etudiant['autor1']=='oui'){ ?>
                <input type="checkbox" name="autor1" value="oui" checked> Vous autorisez l’association EPA à stocker les informations vous concernant. <br>
                <?php } else { ?>
                <input type="checkbox" name="autor1" value="oui"> Vous autorisez l’association EPA à stocker les informations vous concernant. <br>
                <?php } ?>

                <?php if($etudiant['autor2']=='oui'){ ?>
                <input type="checkbox" name="autor2" value="oui" checked> Vous autorisez les membres de l’association EPA à consulter vos informations. <br>
                <?php } else { ?>
                <input type="checkbox" name="autor2" value="oui"> Vous autorisez les membres de l’association EPA à consulter vos informations. <br>
                <?php } ?>

                <input id="submitBouton" type="submit" value="Modifier">
                <input type="submit" value="Annuler" onClick="erase();return false;"> <br>
            </form>
            <script>
                generateNationality();
            </script>
        </div>
