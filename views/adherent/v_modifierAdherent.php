<?php
  echo $erreur;
?>
<div class="col-md-10">
<form name="form" method="post" action="index.php?uc=gestionAdherent&action=validerModificationAdherent">
  <table class="marge">
    <tr>
      <td> Nom, Prénom :</td>
      <td><input type="text" id="nom" name="nom" value="<?php echo $lAdherent['nom'] ?>"> </td>
      <td><input type="text" id="prenom" name="prenom" value="<?php echo $lAdherent['prenom'] ?>"> </td>
    </tr>

    <tr>
      <td> Adresse : </td>
      <td colspan="2"><input type="text" id="adresse" name="adresse" value="<?php echo $lAdherent['adresse'] ?>" style="width:100%"></td>
    </tr>

    <tr>
      <td>&lrm;</td>
    </tr>

    <tr>
      <td> Ville : </td>
      <td colspan="2"><input type="text" id="ville" name="ville" value="<?php echo $lAdherent['ville'] ?>" style="width:100%"> </td>
    </tr>

    <tr>
      <td>&lrm;</td>
    </tr>

    <tr>
      <td> Code postal : </td>
      <td colspan="2"><input type="text" id="cp" name="cp" onkeypress="validate(event)" maxlength="5" value="<?php echo $lAdherent['cp'] ?>" style="width:100%"></td>
    </tr>


    <tr>
      <td>&lrm;</td>
    </tr>

    <tr>
      <td> Tel : </td>
      <td>
        <select id ="indicatif" name="indicatif">
          <option value="+1">+1 (Etat-Unis)</option>
          <option value="+7">+7 (Russie)</option>
          <option value="+20">+20 (Egypte)</option>
          <option value="+27">+27 (Afrique du Sud)</option>
          <option value="+30">+30 (Grèce)</option>
          <option value="+31">+31 (Pays-Bas)</option>
          <option value="+32">+32 (Belgique)</option>
          <option value="+33" selected>+33 (France)</option>
          <option value="+34">+34 (Espagne)</option>
          <option value="+36">+36 (Hongrie)</option>
          <option value="+39">+39 (Italie)</option>
          <option value="+40">+40 (Roumanie)</option>
          <option value="+41">+41 (Suisse)</option>
          <option value="+43">+43 (Autriche)</option>
          <option value="+44">+44 (Royaume-Uni)</option>
          <option value="+45">+45 (Danemark)</option>
          <option value="+46">+46 (Suède)</option>
          <option value="+47">+47 (Norvège)</option>
          <option value="+48">+48 (Pologne)</option>
          <option value="+49">+49 (Allemagne)</option>
          <option value="+51">+51 (Pérou)</option>
          <option value="+52">+52 (Mexique)</option>
          <option value="+53">+53 (Cuba)</option>
          <option value="+54">+54 (Argentine)</option>
          <option value="+55">+55 (Brésil)</option>
          <option value="+56">+56 (Chilie)</option>
          <option value="+57">+57 (Colombie)</option>
          <option value="+58">+58 (Venezuela)</option>
          <option value="+60">+60 (Malaisie)</option>
          <option value="+61">+61 (Australie)</option>
          <option value="+62">+62 (Indonésie)</option>
          <option value="+63">+63 (Philippines)</option>
          <option value="+64">+64 (Nouvelle-Zélande)</option>
          <option value="+65">+65 (Singapour</option>
          <option value="+66">+66 (Thaïlande)</option>
          <option value="+81">+81 (Japon)</option>
          <option value="+82">+82 (Corée du Sud)</option>
          <option value="+84">+84 (Vietnam)</option>
          <option value="+86">+86 (Chine)</option>
          <option value="+90">+90 (Turquie)</option>
          <option value="+91">+91 (Inde)</option>
          <option value="+92">+92 (Pakistan)</option>
          <option value="+93">+93 (Afghanistan)</option>
          <option value="+94">+94 (Sri Lanka)</option>
          <option value="+95">+95 (Birmanie)</option>
          <option value="+98">+98 (Iran)</option>
          <option value="+211">+211 (Soudan du Sud)</option>
          <option value="+212">+212 (Maroc)</option>
          <option value="+213">+213 (Algérie)</option>
          <option value="+216">+216 (Tunisie)</option>
          <option value="+218">+218 (Libye)</option>
          <option value="+220">+220 (Gambie)</option>
          <option value="+221">+221 (Sénégal)</option>
          <option value="+222">+222 (Mauritanie)</option>
          <option value="+223">+223 (Mali)</option>
          <option value="+224">+224 (Guinée)</option>
          <option value="+225">+225 (Côte d'Ivoire)</option>
          <option value="+226">+226 (Burkina Faso)</option>
          <option value="+227">+227 (Niger)</option>
          <option value="+228">+228 (Togo)</option>
          <option value="+229">+229 (Bénin)</option>
          <option value="+230">+230 (Maurice)</option>
          <option value="+231">+231 (Liberia)</option>
          <option value="+232">+232 (Sierra Leone)</option>
          <option value="+233">+233 (Ghana)</option>
          <option value="+234">+234 (Nigeria)</option>
          <option value="+235">+235 (Tchad)</option>
          <option value="+236">+236 (République centrafricaine)</option>
          <option value="+237">+237 (Cameroun)</option>
          <option value="+238">+238 (Cap-Vert)</option>
          <option value="+239">+239 (Sao Torné-et-Principe)</option>
          <option value="+240">+240 (Guinée équatoriale)</option>
          <option value="+241">+241 (Gabon)</option>
          <option value="+242">+242 (Birmanie)</option>
          <option value="+243">+243 (République démocratique du Congo)</option>
          <option value="+244">+244 (Angola)</option>
          <option value="+245">+245 (Guinée-Bissau)</option>
          <option value="+246">+246 (Diego Garcia)</option>
          <option value="+247">+247 (Ascension)</option>
          <option value="+248">+248 (Seychelles)</option>
          <option value="+249">+249 (Soudan)</option>
          <option value="+250">+250 (Rwanda)</option>
          <option value="+251">+251 (Ethiopie)</option>
          <option value="+252">+252 (Somalie)</option>
          <option value="+253">+253 (Djibouti)</option>
          <option value="+254">+254 (Kenya)</option>
          <option value="+255">+255 (Tanzanie)</option>
          <option value="+256">+256 (Ouganda)</option>
          <option value="+257">+257 (Burundi)</option>
          <option value="+258">+258 (Mozambique)</option>
          <option value="+261">+261 (Madagascar)</option>
          <option value="+262">+262 (La Réunion)</option>
          <option value="+263">+263 (Zimbabwe)</option>
          <option value="+264">+264 (Namibie)</option>
          <option value="+265">+265 (Malawi)</option>
          <option value="+266">+266 (Lesotho)</option>
          <option value="+267">+267 (Botswana)</option>
          <option value="+268">+268 (Eswatini)</option>
          <option value="+269">+269 (Comores)</option>
          <option value="+290">+290 (Sainte-Hélène)</option>
          <option value="+291">+291 (Erythrée)</option>
          <option value="+297">+297 (Aruba)</option>
          <option value="+298">+298 (Îles Féroé)</option>
          <option value="+299">+299 (Groenland)</option>
          <option value="+350">+350 (Gibraltar)</option>
          <option value="+351">+351 (Portugal)</option>
          <option value="+352">+352 (Luxembourg)</option>
          <option value="+353">+353 (Irlande)</option>
          <option value="+354">+354 (Islande)</option>
          <option value="+355">+355 (Albanie)</option>
          <option value="+356">+356 (Malte)</option>
          <option value="+357">+357 (Chypre)</option>
          <option value="+358">+358 (Finlande)</option>
          <option value="+359">+359 (Bulgarie)</option>
          <option value="+370">+370 (Lituanie)</option>
          <option value="+371">+371 (Lettonie)</option>
          <option value="+372">+372 (Estonie)</option>
          <option value="+373">+373 (Moldavie)</option>
          <option value="+374">+374 (Arménie)</option>
          <option value="+375">+375 (Biélorussie)</option>
          <option value="+376">+376 (Andorre)</option>
          <option value="+377">+377 (Monaco)</option>
          <option value="+378">+378 (Saint-Marin)</option>
          <option value="+380">+380 (Ukraine)</option>
          <option value="+381">+381 (Serbie)</option>
          <option value="+382">+382 (Monténégro)</option>
          <option value="+383">+383 (Kosovo)</option>
          <option value="+385">+385 (Croatie)</option>
          <option value="+386">+386 (Slovénie)</option>
          <option value="+387">+387 (Bosnie-Herzégovine)</option>
          <option value="+389">+389 (Macédoine du nord)</option>
          <option value="+420">+420 (République tchèque)</option>
          <option value="+421">+421 (Slovaquie)</option>
          <option value="+423">+423 (Liechtenstein)</option>
          <option value="+500">+500 (Malouines)</option>
          <option value="+501">+501 (Belize)</option>
          <option value="+502">+502 (Guatemala)</option>
          <option value="+503">+503 (Salvador)</option>
          <option value="+504">+504 (Honduras)</option>
          <option value="+505">+505 (Nicaragua)</option>
          <option value="+506">+506 (Costa Rica)</option>
          <option value="+507">+507 (Panama)</option>
          <option value="+508">+508 (Saint-Pierre-et-Miquelon)</option>
          <option value="+509">+509 (Haïti)</option>
          <option value="+590">+590 (Guadeloupe)</option>
          <option value="+591">+591 (Bolivie)</option>
          <option value="+592">+592 (Guyana)</option>
          <option value="+593">+593 (Equateur)</option>
          <option value="+594">+594 (Guyane)</option>
          <option value="+595">+595 (Paraguay)</option>
          <option value="+596">+596 (Martinique)</option>
          <option value="+597">+597 (Suriname)</option>
          <option value="+598">+598 (Uruguay)</option>
          <option value="+599">+599 (Curaçao)</option>
          <option value="+670">+670 (Timor oriental)</option>
          <option value="+672">+672 (Île Christmas)</option>
          <option value="+673">+673 (Brunei)</option>
          <option value="+674">+674 (Nauru)</option>
          <option value="+675">+675 (Papouasie-Nouvelle-Guinée)</option>
          <option value="+676">+676 (Tonga)</option>
          <option value="+677">+677 (Salomon)</option>
          <option value="+678">+678 (Vanuatu)</option>
          <option value="+679">+679 (Fidji)</option>
          <option value="+680">+680 (Palaos)</option>
          <option value="+681">+681 (Wallis-et-Futuna)</option>
          <option value="+682">+682 (Îles Cook)</option>
          <option value="+683">+683 (Niue)</option>
          <option value="+685">+685 (Samoa)</option>
          <option value="+686">+686 (Kiribati)</option>
          <option value="+687">+687 (Nouvelle-Calédonie)</option>
          <option value="+688">+688 (Tuvalu)</option>
          <option value="+689">+689 (Polynésie française)</option>
          <option value="+690">+690 (Tokelau)</option>
          <option value="+691">+691 (Etats fédérés de Micronésie)</option>
          <option value="+692">+692 (Îles Marshall)</option>
          <option value="+850">+850 (Corée du Nord)</option>
          <option value="+852">+852 (Hong Kong)</option>
          <option value="+853">+853 (Macao)</option>
          <option value="+855">+855 (Cambodge)</option>
          <option value="+856">+856 (Laos)</option>
          <option value="+880">+880 (Bangladesh)</option>
          <option value="+886">+886 (Taïwan)</option>
          <option value="+960">+960 (Maldives)</option>
          <option value="+961">+961 (Liban)</option>
          <option value="+962">+962 (Jordanie)</option>
          <option value="+963">+963 (Syrie)</option>
          <option value="+964">+964 (Irak)</option>
          <option value="+965">+965 (Koweït)</option>
          <option value="+966">+966 (Arabie saoudite)</option>
          <option value="+967">+967 (Yémen)</option>
          <option value="+968">+968 (Oman)</option>
          <option value="+970">+970 (Palestine)</option>
          <option value="+971">+971 (Emirats arabes unis)</option>
          <option value="+972">+972 (Israël)</option>
          <option value="+973">+973 (Bahreïn)</option>
          <option value="+974">+974 (Qatar)</option>
          <option value="+975">+975 (Bhoutan)</option>
          <option value="+976">+976 (Mongolie)</option>
          <option value="+977">+977 (Népal)</option>
          <option value="+992">+992 (Tadjikistan)</option>
          <option value="+993">+993 (Turkménistan)</option>
          <option value="+994">+994 (Azerbaïdjan)</option>
          <option value="+995">+995 (Géorgie)</option>
          <option value="+996">+996 (Kirghizstan)</option>
          <option value="+998">+998 (Ouzbékistan)</option>
          <option value="+1242">+1242 (Bahamas)</option>
          <option value="+1246">+1246 (Barbade)</option>
          <option value="+1264">+1264 (Anguilla)</option>
          <option value="+1268">+1268 (Antigua-et-Barbuda)</option>
          <option value="+1284">+1284 (Îles Vierges britanniques)</option>
          <option value="+1340">+1340 (Îles Vierges des Etats-Unis)</option>
          <option value="+1345">+1345 (Îles Caïmans)</option>
          <option value="+1441">+1441 (Bermudes)</option>
          <option value="+1473">+1473 (Grenade)</option>
          <option value="+1649">+1649 (Îles Turques-et-Caïques)</option>
          <option value="+1664">+1664 (Montserrat)</option>
          <option value="+1670">+1670 (Îles Mariannes du Nord)</option>
          <option value="+1671">+1671 (Guam)</option>
          <option value="+1684">+1684 (Samoa américaines)</option>
          <option value="+1758">+1758 (Sainte-Lucie)</option>
          <option value="+1767">+1767 (Dominique)</option>
          <option value="+1784">+1784 (Saint-Vincent-et-les-Grenadines)</option>
          <option value="+1868">+1868 (Trinité-et-Tobago)</option>
          <option value="+1869">+1869 (Saint-Crhistophe-et-Niévès)</option>
          <option value="+1876">+1876 (Jamaïque)</option>
        </select>
      </td>
      <td><input type="tel" id="tel" name="tel" value="<?php echo $telephone ?>"></td>
    </tr>

    <tr>
      <td> Mail : </td>
      <td colspan="2"><input type="text" id="email" name="email" value="<?php echo $lAdherent['email'] ?>" style="width:100%"> </td>
    </tr>

    <tr>
      <td> Sexe : </td>
      <td>
          <input type="radio" id="homme" name="sexe" value="homme" <?php if($lAdherent['sexe'] == 'homme') { echo "checked";} ?>>
          <label for="homme">Homme</label>
          <input type="radio" id="femme" name="sexe" value="femme" <?php if($lAdherent['sexe'] == 'femme') { echo "checked";} ?>>
          <label for="homme">Femme</label>
      </td>
    </tr>

    <tr>
      <td> Date de naissance : </td>
      <td>
        <select name="jour">
          <option value="" selected> JJ</option>
          <?php
          for($it = 1; $it <= 31; $it++) {
            if($it == $jour) {
              echo '<option value="'.$it.'" selected>'.$it.'</option>';
            }
            else {
              echo '<option value="'.$it.'">'.$it.'</option>';
            }
          }
          ?>
        </select>

        <select name="mois">
          <option value="" selected> MM</option>
          <?php
          for($it = 1; $it <= 12; $it++) {
            if($it == $mois) {
              echo '<option value="'.$it.'" selected>'.$it.'</option>';
            }
            else {
              echo '<option value="'.$it.'">'.$it.'</option>';
            }
          }
          ?>
        </select>

        <select name="annee">
          <option value="" selected> AAAA</option>
          <?php
          for($it = 1900; $it <= 2010; $it++) {
            if($it == $annee) {
              echo '<option value="'.$it.'" selected>'.$it.'</option>';
            }
            else {
              echo '<option value="'.$it.'">'.$it.'</option>';
            }
          }
          ?>
        </select>
      </td>
    </tr>

    <tr>
      <td> Vous êtes : </td>
      <td>
        <input type="radio" id="etudiant" name="type" value="etudiant" <?php if($lAdherent['type'] == "etudiant") { echo 'checked';} ?>>
        <label for="homme">Etudiant</label>
        <input type="radio" id="stagiaire" name="type" value="stagiaire" <?php if($lAdherent['type'] == "stagiaire") { echo 'checked';} ?>>
        <label for="homme">Stagiaire</label>
        <input type="radio" id="autres" name="type" value="autres" <?php if($lAdherent['type'] == "autres") { echo 'checked';} ?>>
        <label for="homme">Autres</label>
      </td>
    </tr>

    <tr>
      <td> Montant de l'adhésion : </td>
      <td>
          <span id="valeur">..</span>/an
      </td>
    </tr>
  </table>
  <br>
  <input type="hidden" id="id" name="id" value="<?php echo $lAdherent['id'] ?>">
  <input type="submit">
</form>
<script>
document.getElementById('indicatif').value= '<?php echo $indicatif; ?>';
</script>
</div>
