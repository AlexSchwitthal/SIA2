//select nation
var nations = ["afghan",
    "albanian",
    "algerian",
    "american",
    "andorran",
    "angolan",
    "antiguans",
    "argentinean",
    "armenian",
    "australian",
    "austrian",
    "azerbaijani",
    "bahamian",
    "bahraini",
    "bangladeshi",
    "barbadian",
    "barbudans",
    "batswana",
    "belarusian",
    "belgian",
    "belizean",
    "beninese",
    "bhutanese",
    "bolivian",
    "bosnian",
    "brazilian",
    "british",
    "bruneian",
    "bulgarian",
    "burkinabe",
    "burmese",
    "burundian",
    "cambodian",
    "cameroonian",
    "canadian",
    "cape verdean",
    "central african",
    "chadian",
    "chilean",
    "chinese",
    "colombian",
    "comoran",
    "congolese",
    "costa rican",
    "croatian",
    "cuban",
    "cypriot",
    "czech",
    "danish",
    "djibouti",
    "dominican",
    "dutch",
    "east timorese",
    "ecuadorean",
    "egyptian",
    "emirian",
    "equatorial guinean",
    "eritrean",
    "estonian",
    "ethiopian",
    "fijian",
    "filipino",
    "finnish",
    "french",
    "gabonese",
    "gambian",
    "georgian",
    "german",
    "ghanaian",
    "greek",
    "grenadian",
    "guatemalan",
    "guinea-bissauan",
    "guinean",
    "guyanese",
    "haitian",
    "herzegovinian",
    "honduran",
    "hungarian",
    "icelander",
    "indian",
    "indonesian",
    "iranian",
    "iraqi",
    "irish",
    "israeli",
    "italian",
    "ivorian",
    "jamaican",
    "japanese",
    "jordanian",
    "kazakhstani",
    "kenyan",
    "kittian and nevisian",
    "kuwaiti",
    "kyrgyz",
    "laotian",
    "latvian",
    "lebanese",
    "liberian",
    "libyan",
    "liechtensteiner",
    "lithuanian",
    "luxembourger",
    "macedonian",
    "malagasy",
    "malawian",
    "malaysian",
    "maldivan",
    "malian",
    "maltese",
    "marshallese",
    "mauritanian",
    "mauritian",
    "mexican",
    "micronesian",
    "moldovan",
    "monacan",
    "mongolian",
    "moroccan",
    "mosotho",
    "motswana",
    "mozambican",
    "namibian",
    "nauruan",
    "nepalese",
    "new zealander",
    "ni-vanuatu",
    "nicaraguan",
    "nigerien",
    "north korean",
    "northern irish",
    "norwegian",
    "omani",
    "pakistani",
    "palauan",
    "panamanian",
    "papua new guinean",
    "paraguayan",
    "peruvian",
    "polish",
    "portuguese",
    "qatari",
    "romanian",
    "russian",
    "rwandan",
    "saint lucian",
    "salvadoran",
    "samoan",
    "san marinese",
    "sao tomean",
    "saudi",
    "scottish",
    "senegalese",
    "serbian",
    "seychellois",
    "sierra leonean",
    "singaporean",
    "slovakian",
    "slovenian",
    "solomon islander",
    "somali",
    "south african",
    "south korean",
    "spanish",
    "sri lankan",
    "sudanese",
    "surinamer",
    "swazi",
    "swedish",
    "swiss",
    "syrian",
    "taiwanese",
    "tajik",
    "tanzanian",
    "thai",
    "togolese",
    "tongan",
    "trinidadian or tobagonian",
    "tunisian",
    "turkish",
    "tuvaluan",
    "ugandan",
    "ukrainian",
    "uruguayan",
    "uzbekistani",
    "venezuelan",
    "vietnamese",
    "welsh",
    "yemenite",
    "zambian",
    "zimbabwean"
]

function generateNationality() {
    var nation = document.getElementById("nation");
    for (var i = 0; i < nations.length; i++) {
        var childOption = document.createElement("option");
        childOption.setAttribute("value", nations[i]);
        childOption.innerHTML = nations[i];
        nation.appendChild(childOption);
    }
}
/*
  //langues
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
  <option value="XH">Xhosa</option>*/
