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
    private static $bdd = 'dbname='.DB_NAME;
    private static $user = DB_USERNAME;
    private static $mdp = DB_PASSWORD;
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
        $requete_prepare = pdoEpa::$monPdo->prepare("SELECT * FROM adherent ORDER BY id");
        $requete_prepare->execute();
        return $requete_prepare->fetchAll();
    }

    public function getAdherentById($id) {
      $requete_prepare = pdoEpa::$monPdo->prepare("SELECT * FROM adherent where id = :id");
      $requete_prepare->bindParam(':id', $id, PDO::PARAM_STR);
      $requete_prepare->execute();
      return $requete_prepare->fetch();
    }

    public function supprimerAdherent($id) {
      $requete_prepare = pdoEpa::$monPdo->prepare("DELETE FROM adherent WHERE id = :id");
      $requete_prepare->bindParam(':id', $id, PDO::PARAM_STR);
      $requete_prepare->execute();
      return $requete_prepare->fetch();
    }

    public function getEtudiants() {
        $requete_prepare = pdoEpa::$monPdo->prepare("SELECT * FROM arrivant");
        $requete_prepare->execute();
        return $requete_prepare->fetchAll();
    }

    public function getNews() {
        $requete_prepare = pdoEpa::$monPdo->prepare("SELECT * FROM news");
        $requete_prepare->execute();
        return $requete_prepare->fetchAll();
    }


  /**
   * Crée un adhérent
   * à partir des informations fournies en paramètre
   *
   * @param $nom : nom de l'adhérent
   * @param $prenom : prenom de l'adhérent
   * @param $ville : ville de l'adhérent
   * @param $cp : code postal de l'adhérent
   * @param $adresse : adresse de l'adhérent
   * @param $tel : numéro de téléphone de l'adhérent
   * @param $email : adresse e-mail de l'adhérent
   */
  public function creerAdherent($nom, $prenom, $ville, $cp, $adresse, $tel, $email) {
      $requete_prepare = PdoEpa::$monPdo->prepare("INSERT INTO adherent (`nom`, `prenom`, `ville`, `cp`, `adresse`, `tel`, `email`) "
              . "VALUES (:nom, :prenom, :ville, :cp, :adresse, :tel, :email) ");
      $requete_prepare->bindParam(':nom', $nom, PDO::PARAM_STR);
      $requete_prepare->bindParam(':prenom', $prenom, PDO::PARAM_STR);
      $requete_prepare->bindParam(':ville', $ville, PDO::PARAM_STR);
      $requete_prepare->bindParam(':cp', $cp, PDO::PARAM_STR);
      $requete_prepare->bindParam(':adresse', $adresse, PDO::PARAM_STR);
      $requete_prepare->bindParam(':tel', $tel, PDO::PARAM_STR);
      $requete_prepare->bindParam(':email', $email, PDO::PARAM_STR);
      $requete_prepare->execute();
  }

  public function creerEtudiant($nom, $prenom, $sexe, $ddn, $nation, $es, $dap, $langue, $tel, $email, $pec) {
      $requete_prepare = PdoEpa::$monPdo->prepare("INSERT INTO arrivant (`nom`, `prenom`, `sexe`, `ddn`, `nation`, `es`, `dap`, `langue`, `tel`, `email`, `pec`) "
              . "VALUES (:nom, :prenom, :sexe, :ddn, :nation, :es, :dap, :langue, :tel, :email, :pec) ");
      $requete_prepare->bindParam(':nom', $nom, PDO::PARAM_STR);
      $requete_prepare->bindParam(':prenom', $prenom, PDO::PARAM_STR);
      $requete_prepare->bindParam(':sexe', $sexe, PDO::PARAM_STR);
      $requete_prepare->bindParam(':ddn', $ddn, PDO::PARAM_STR);
      $requete_prepare->bindParam(':nation', $nation, PDO::PARAM_STR);
      $requete_prepare->bindParam(':es', $es, PDO::PARAM_STR);
      $requete_prepare->bindParam(':dap', $dap, PDO::PARAM_STR);
      $requete_prepare->bindParam(':langue', $langue, PDO::PARAM_STR);
      $requete_prepare->bindParam(':tel', $tel, PDO::PARAM_STR);
      $requete_prepare->bindParam(':email', $email, PDO::PARAM_STR);
      $requete_prepare->bindParam(':pec', $pec, PDO::PARAM_STR);
      $requete_prepare->execute();
  }

  public function creerNews($nom, $description) {
      $requete_prepare = PdoEpa::$monPdo->prepare("INSERT INTO news (`nom`, `description`) "
              . "VALUES (:nom, :description) ");
      $requete_prepare->bindParam(':nom', $nom, PDO::PARAM_STR);
      $requete_prepare->bindParam(':description', $description, PDO::PARAM_STR);
      $requete_prepare->execute();
  }


}
?>
