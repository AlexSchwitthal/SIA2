<?php

function nbErreurs($request) {
  $erreurs = false;
  $messageErreur = '<div class="col-md-10"><div class="marge"><div class="alert alert-danger"><b>Le ou les champs suivants n\'ont pas été saisis ou sont incorrect : ';

  if (empty($request['nom'])) {
    $messageErreur .= '<br />- Le nom';
    $erreurs = true;
  }
  else if(!preg_match('/^([A-Za-zàèìòùÀÈÌÒÙáéíóúýÁÉÍÓÚÝâêîôûÂÊÎÔÛãñõÃÑÕäëïöüÿÄËÏÖÜŸçÇßØøÅåÆæœ \-"])+/', $request['nom'])) {
    $messageErreur .= '<br />- Le nom doit être valide';
    $erreurs = true;
  }


  if (empty($request['prenom'])) {
    $messageErreur .= '<br />- Le prénom';
    $erreurs = true;
  }
  else if(!preg_match('/^([A-Za-zàèìòùÀÈÌÒÙáéíóúýÁÉÍÓÚÝâêîôûÂÊÎÔÛãñõÃÑÕäëïöüÿÄËÏÖÜŸçÇßØøÅåÆæœ \-"])+/', $request['prenom'])) {
    $messageErreur .= '<br />- Le prénom doit être valide';
    $erreurs = true;
  }


  if (empty($request['adresse'])) {
    $messageErreur .= '<br />- L\'adresse';
    $erreurs = true;
  }

  if (empty($request['ville'])) {
    $messageErreur .= '<br />- La ville';
    $erreurs = true;
  }
  else if(!preg_match('/^([A-Za-zàèìòùÀÈÌÒÙáéíóúýÁÉÍÓÚÝâêîôûÂÊÎÔÛãñõÃÑÕäëïöüÿÄËÏÖÜŸçÇßØøÅåÆæœ \-"])+/', $request['ville'])) {
    $messageErreur .= '<br />- Le nom de la ville doit être valide';
    $erreurs = true;
  }


  if (empty($request['cp'])) {
    $messageErreur .= '<br />- Le code postal';
    $erreurs = true;
  }
  else if(!preg_match('/^[0-9]{5}$/', $request['cp'])) {
    $messageErreur.= '<br />- Le code postal doit être valide (5 chiffres)';
    $erreurs = true;
  }

  if (empty($request['tel'])) {
    $messageErreur .= '<br />- Le numéro de téléphone';
    $erreurs = true;
  }
  else if(!preg_match('/[0-9]/', $request['tel'])) {
    $messageErreur .='<br />- Le numéro de téléphone ne doit contenir que des chiffres';
    $erreurs = true;
  }

  if (empty($request['email'])) {
    $messageErreur .= '<br />- L\'adresse e-mail';
    $erreurs = true;

  }
  else if(!mb_ereg('^[-!#$%&\'*+\\./0-9=?A-Z^_`a-z{|}~]+'.
      '@'.
      '[-!#$%&\'*+\\/0-9=?A-Z^_`a-z{|}~]+\.'.
      '[-!#$%&\'*+\\./0-9=?A-Z^_`a-z{|}~]+$',
      $request['email'])) {
    $messageErreur .= '<br />- L\'adresse e-mail doit être valide';
    $erreurs = true;
  }

  if(empty($request['sexe'])) {
    $messageErreur .= '<br />- Le sexe';
    $erreurs = true;
  }

  if(empty($request['jour'])) {
    $messageErreur .= '<br />- Le jour de naissance';
    $erreurs = true;
  }

  if(empty($request['mois'])) {
    $messageErreur .= '<br />- Le mois de naissance';
    $erreurs = true;
  }

  if(empty($request['annee'])) {
    $messageErreur .= '<br />-  L\'année de naissance';
    $erreurs = true;
  }

  if(empty($request['type'])) {
    $messageErreur .= '<br />-  Le type';
    $erreurs = true;
  }

  if(empty($request['mdp'])) {
    $messageErreur .= '<br />-  Le mot de passe';
    $erreurs = true;
  }
  else if($request['mdp'] != $request['mdpconfirm']) {
    $messageErreur .= '<br />-  Les deux mots de passes saisies sont différent';
    $erreurs = true;
  }

  if(!(isset($request['cgv']))) {
    $messageErreur .= '<br />- Les conditions générales doivent être accepté';
    $erreurs = true;
  }
  // RETURN //
  if($erreurs) {
      $messageErreur .= '</b></div></div>';
      return $messageErreur;
  }
  else {
    return '';
  }
}

function nbErreursModificationAdherent($request) {
  $erreurs = false;
  $messageErreur = '<div class="col-md-10"><div class="marge"><div class="alert alert-danger"><b>Le ou les champs suivants n\'ont pas été saisis ou sont incorrect : ';

  if (empty($request['nom'])) {
    $messageErreur .= '<br />- Le nom';
    $erreurs = true;
  }
  else if(!preg_match('/^([A-Za-zàèìòùÀÈÌÒÙáéíóúýÁÉÍÓÚÝâêîôûÂÊÎÔÛãñõÃÑÕäëïöüÿÄËÏÖÜŸçÇßØøÅåÆæœ \-"])+/', $request['nom'])) {
    $messageErreur .= '<br />- Le nom doit être valide';
    $erreurs = true;
  }


  if (empty($request['prenom'])) {
    $messageErreur .= '<br />- Le prénom';
    $erreurs = true;
  }
  else if(!preg_match('/^([A-Za-zàèìòùÀÈÌÒÙáéíóúýÁÉÍÓÚÝâêîôûÂÊÎÔÛãñõÃÑÕäëïöüÿÄËÏÖÜŸçÇßØøÅåÆæœ \-"])+/', $request['prenom'])) {
    $messageErreur .= '<br />- Le prénom doit être valide';
    $erreurs = true;
  }


  if (empty($request['adresse'])) {
    $messageErreur .= '<br />- L\'adresse';
    $erreurs = true;
  }

  if (empty($request['ville'])) {
    $messageErreur .= '<br />- La ville';
    $erreurs = true;
  }
  else if(!preg_match('/^([A-Za-zàèìòùÀÈÌÒÙáéíóúýÁÉÍÓÚÝâêîôûÂÊÎÔÛãñõÃÑÕäëïöüÿÄËÏÖÜŸçÇßØøÅåÆæœ \-"])+/', $request['ville'])) {
    $messageErreur .= '<br />- Le nom de la ville doit être valide';
    $erreurs = true;
  }


  if (empty($request['cp'])) {
    $messageErreur .= '<br />- Le code postal';
    $erreurs = true;
  }
  else if(!preg_match('/^[0-9]{5}$/', $request['cp'])) {
    $messageErreur.= '<br />- Le code postal doit être valide (5 chiffres)';
    $erreurs = true;
  }

  if (empty($request['tel'])) {
    $messageErreur .= '<br />- Le numéro de téléphone';
    $erreurs = true;
  }
  else if(!preg_match('/[0-9]/', $request['tel'])) {
    $messageErreur .='<br />- Le numéro de téléphone ne doit contenir que des chiffres';
    $erreurs = true;
  }

  if (empty($request['email'])) {
    $messageErreur .= '<br />- L\'adresse e-mail';
    $erreurs = true;

  }
  else if(!mb_ereg('^[-!#$%&\'*+\\./0-9=?A-Z^_`a-z{|}~]+'.
      '@'.
      '[-!#$%&\'*+\\/0-9=?A-Z^_`a-z{|}~]+\.'.
      '[-!#$%&\'*+\\./0-9=?A-Z^_`a-z{|}~]+$',
      $request['email'])) {
    $messageErreur .= '<br />- L\'adresse e-mail doit être valide';
    $erreurs = true;
  }

  if(empty($request['sexe'])) {
    $messageErreur .= '<br />- Le sexe';
    $erreurs = true;
  }

  if(empty($request['jour'])) {
    $messageErreur .= '<br />- Le jour de naissance';
    $erreurs = true;
  }

  if(empty($request['mois'])) {
    $messageErreur .= '<br />- Le mois de naissance';
    $erreurs = true;
  }

  if(empty($request['annee'])) {
    $messageErreur .= '<br />-  L\'année de naissance';
    $erreurs = true;
  }

  if(empty($request['type'])) {
    $messageErreur .= '<br />-  Le type';
    $erreurs = true;
  }

  // RETURN //
  if($erreurs) {
      $messageErreur .= '</b></div></div>';
      return $messageErreur;
  }
  else {
    return '';
  }
}


function nbErreursAjoutEtudiant($request) {
  $erreurs = false;
  $messageErreur = '<div class="col-md-10"><div class="marge"><div class="alert alert-danger"><b>Le ou les champs suivants n\'ont pas été saisis ou sont incorrect : ';

  if (empty($request['nom'])) {
    $messageErreur .= '<br />- Le nom';
    $erreurs = true;
  }
  else if(!preg_match('/^([A-Za-zàèìòùÀÈÌÒÙáéíóúýÁÉÍÓÚÝâêîôûÂÊÎÔÛãñõÃÑÕäëïöüÿÄËÏÖÜŸçÇßØøÅåÆæœ \-"])+/', $request['nom'])) {
    $messageErreur .= '<br />- Le nom doit être valide';
    $erreurs = true;
  }


  if (empty($request['prenom'])) {
    $messageErreur .= '<br />- Le prénom';
    $erreurs = true;
  }
  else if(!preg_match('/^([A-Za-zàèìòùÀÈÌÒÙáéíóúýÁÉÍÓÚÝâêîôûÂÊÎÔÛãñõÃÑÕäëïöüÿÄËÏÖÜŸçÇßØøÅåÆæœ \-"])+/', $request['prenom'])) {
    $messageErreur .= '<br />- Le prénom doit être valide';
    $erreurs = true;
  }

  if (empty($request['nation']) || $request['nation'] = '') {
    $messageErreur .= '<br />- La nationalité';
    $erreurs = true;
  }

  if (empty($request['langue']) || $request['langue'] = '') {
    $messageErreur .= '<br />- La langue';
    $erreurs = true;
  }

  if (empty($request['tel'])) {
    $messageErreur .= '<br />- Le numéro de téléphone';
    $erreurs = true;
  }
  else if(!preg_match('/[0-9]/', $request['tel'])) {
    $messageErreur .='<br />- Le numéro de téléphone ne doit contenir que des chiffres';
    $erreurs = true;
  }

  if (empty($request['email'])) {
    $messageErreur .= '<br />- L\'adresse e-mail';
    $erreurs = true;

  }
  else if(!mb_ereg('^[-!#$%&\'*+\\./0-9=?A-Z^_`a-z{|}~]+'.
      '@'.
      '[-!#$%&\'*+\\/0-9=?A-Z^_`a-z{|}~]+\.'.
      '[-!#$%&\'*+\\./0-9=?A-Z^_`a-z{|}~]+$',
      $request['email'])) {
    $messageErreur .= '<br />- L\'adresse e-mail doit être valide';
    $erreurs = true;
  }

  if(empty($request['sexe'])) {
    $messageErreur .= '<br />- Le sexe';
    $erreurs = true;
  }

  if(empty($request['ddn'])) {
    $messageErreur .= '<br />- La date de naissance';
    $erreurs = true;
  }

  if(empty($request['dap'])) {
    $messageErreur .= '<br />- La date d\'arrivé';
    $erreurs = true;
  }

  if(empty($request['ddp'])) {
    $messageErreur .= '<br />- La date de départ';
    $erreurs = true;
  }

  if((!(isset($request['autor1']))) || (!(isset($request['autor2'])))) {
    $messageErreur .= '<br />- Les conditions générales doivent être accepté';
    $erreurs = true;
  }

  // RETURN //
  if($erreurs) {
      $messageErreur .= '</b></div></div>';
      return $messageErreur;
  }
  else {
    return '';
  }
}


function estNom($element) {
  if(ctype_alpha($element) && strlen($element) > 1 && strlen($element) < 50) {
    return true;
  }
  else {
    return false;
  }
}

function userGroupe($valueExpected) {
  if(isset($_SESSION['groupe'])) {
    if($_SESSION['groupe'] == $valueExpected) {
      return true;
    }
    else {
      return false;
    }
  }
  else {
    return false;
  }
}

function getTypeUtilisateurs($groupe) {
  switch($groupe) {
    case '0' : {
      return 'invité';
      break;
    }
    case '1' : {
      return 'etudiant';
      break;
    }
    case '2' : {
      return 'adherent';
      break;
    }
    case '3' : {
      return 'admin';
      break;
    }
  }
}

function getListeCategoriesCheck($request, $nbCategories) {
  $listeCategories = array();
  for($i = 1; $i <= $nbCategories; $i++) {
    if(isset($request['categorie'.$i])) {
      $listeCategories[$i] = $i;
    }
  }
  return $listeCategories;
}

function conversionDate($dateTime) {
  $date = explode(" ", $dateTime);
  $date = $date[0];
  $date = explode("-", $date);

  $annee = $date[0];
  $mois = $date[1];
  $jour = $date[2];

  if($mois == 1) {
    $mois = "janvier";
  }
  else if($mois == 2) {
    $mois = "février";
  }
  else if($mois == 3) {
    $mois = "mars";
  }
  else if($mois == 4) {
    $mois = "avril";
  }
  else if($mois == 5) {
    $mois = "mai";
  }
  else if($mois == 6) {
    $mois = "juin";
  }
  else if($mois == 7) {
    $mois = "juillet";
  }
  else if($mois == 8) {
    $mois = "aout";
  }
  else if($mois == 9) {
    $mois = "septembre";
  }
  else if($mois == 10) {
    $mois = "octobre";
  }
  else if($mois == 11) {
    $mois = "novembre";
  }
  else if($mois == 12) {
    $mois = "décembre";
  }

  return $jour." ".$mois." ".$annee;
}

function limitationTaille($string, $limit) {
  if(strlen($string) > $limit) {
    $chaine = substr($string, 0, $limit);
    $chaine .= ' [...]';
    return $chaine;
  }
  else {
    return $string;
  }

}
?>
