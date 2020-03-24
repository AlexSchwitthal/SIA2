<?php
include("views/v_menuAdherent.php");
$action = $_REQUEST['action'];

switch ($action) {
    case 'listeAdherent': {
            $lesAdherents = $pdo->getAdherents();
            include("views/v_listeAdherent.php");
            break;
        }
    case 'ajouterAdherent': {
            include("views/v_ajoutAdherent.php");
        }
}
?>
