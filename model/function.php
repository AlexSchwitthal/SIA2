<?php

function nbErreurs($request) {
  $erreurs = false;
  $messageErreur = '<div class="col-md-10"><div class="marge"><div id="erreur" class="alert alert-danger"><b>Le ou les champs suivants n\'ont pas été saisis ou sont incorrect : ';

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

  if (empty($request['adresse'])) {
    $messageErreur .= '<br />- L\'adresse';
    $erreurs = true;
  }

  if (empty($request['tel'])) {
    $messageErreur .= '<br />- Le numéro de téléphone';
    $erreurs = true;
  }
  else if(!preg_match('/[0-9]{10}/', $request['tel'])) {
    $messageErreur .='<br />- Le numéro de téléphone doit être valide (10 chiffres)';
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


  // RETURN //
  if($erreurs) {
      $messageErreur .= '</div></div>';
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

?>
