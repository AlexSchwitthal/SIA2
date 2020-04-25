<?php
if(userGroupe(3)) {
  include("views/main/v_menuPrincipalAdmin.php");
}

else if(userGroupe(2)) {
  $id = $pdo->getIDAdherentByMail($_SESSION['logs']);
  include("views/main/v_menuPrincipalAdherent.php");
}

else if(userGroupe(1)) {
  include("views/main/v_menuPrincipalEtudiant.php");
}

else {
  include("views/main/v_menuPrincipalInvite.php");
}
