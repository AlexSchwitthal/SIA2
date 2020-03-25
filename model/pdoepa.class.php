<?php

/**
 * Classe d'accès aux données.
 *
 * Utilise les services de la classe PDO
 * Les attributs sont tous statiques,
 * les 4 premiers pour la connexion
 * $monPdo de type PDO
 * $monpdoEpa qui contiendra l'unique instance de la classe
 *
 * @package default
 * @author Alexandre SCHWITTHAL
 * @version    1.0
 * @link       http://www.php.net/manual/fr/book.pdo.php
 */
require_once("config.php");

class PdoEpa {

    private static $serveur = 'mysql:host='.DB_SERVER;
    private static $bdd = 'dbname='.DB_DATABASE;
    private static $user = DB_USER;
    private static $mdp = DB_PWD;
    private static $monPdo;
    private static $monPdoEpa = null;

    /**
     * Constructeur privé, crée l'instance de PDO qui sera sollicitée
     * pour toutes les méthodes de la classe
     */
    private function __construct() {
        PdoEpa::$monPdo = new PDO(PdoEpa::$serveur . ';' . PdoEpa::$bdd, PdoEpa::$user, PdoEpa::$mdp);
        PdoEpa::$monPdo->query("SET CHARACTER SET utf8");
    }

    public function _destruct() {
        PdoEpa::$monPdo = null;
    }

    /**
     * Fonction statique qui crée l'unique instance de la classe
     * Appel : $instancepdoEpa = pdoEpa::getpdoEpa();
     *
     * @return "unique objet de la classe pdoEpa"
     */
    public static function getPdoEpa() {
        if (PdoEpa::$monPdoEpa == null) {
            PdoEpa::$monPdoEpa = new pdoEpa();
        }
        return pdoEpa::$monPdoEpa;
    }

    /**
     * Retourne les informations des adhérents
     * @return toutes les informations des adhérents sous la forme d'un tableau associatif
     */
    public function getAdherents() {
        $requete_prepare = pdoEpa::$monPdo->prepare("SELECT * FROM adherent");
        $requete_prepare->execute();
        return $requete_prepare->fetchAll();
    }
}
?>
