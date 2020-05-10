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

    public function getIDAdherent($nom, $prenom) {
      $requete_prepare = pdoEpa::$monPdo->prepare("SELECT id FROM adherent WHERE nom = :nom AND prenom = :prenom");
      $requete_prepare->bindParam(':nom', $nom, PDO::PARAM_STR);
      $requete_prepare->bindParam(':prenom', $prenom, PDO::PARAM_STR);
      $requete_prepare->execute();
      $id = $requete_prepare->fetch();
      return intval($id['id']);
    }

    public function getIDAdherentByMail($email) {
      $requete_prepare = pdoEpa::$monPdo->prepare("SELECT id FROM adherent WHERE email = :email");
      $requete_prepare->bindParam(':email', $email, PDO::PARAM_STR);
      $requete_prepare->execute();
      $id = $requete_prepare->fetch();
      return intval($id['id']);
    }

    public function getStatutAdherentByMail($email) {
      $requete_prepare = pdoEpa::$monPdo->prepare("SELECT statut FROM adherent WHERE email = :email");
      $requete_prepare->bindParam(':email', $email, PDO::PARAM_STR);
      $requete_prepare->execute();
      $id = $requete_prepare->fetch();
      return intval($id['statut']);
    }

    public function getAdherentsInscrits($statut) {
        $requete_prepare = pdoEpa::$monPdo->prepare("SELECT * FROM adherent WHERE statut = :statut ORDER BY id");
        $requete_prepare->bindParam(':statut', $statut, PDO::PARAM_STR);
        $requete_prepare->execute();
        return $requete_prepare->fetchAll();
    }

    public function getAdherentsInscritsRestriction($statut, $prenom, $nom, $cotisation) {
        $requete = "SELECT * FROM adherent WHERE statut = :statut ";
        $prenom = "%".$prenom."%";
        $nom = "%".$nom."%";

        if($prenom != '') {
          $requete .= "AND prenom LIKE :prenom ";
        }
        if($nom != '') {
          $requete .= "AND nom LIKE :nom ";
        }
        if($cotisation == "oui") {
          $requete .= "AND payement_cotisation = 1 ";
        }
        if($cotisation == "non") {
          $requete .= "AND payement_cotisation = 0 ";
        }
        $requete .= "ORDER BY id";

        $requete_prepare = pdoEpa::$monPdo->prepare($requete);
        $requete_prepare->bindParam(':statut', $statut, PDO::PARAM_STR);
        $requete_prepare->bindParam(':prenom', $prenom, PDO::PARAM_STR);
        $requete_prepare->bindParam(':nom', $nom, PDO::PARAM_STR);
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
      $requete_prepare = pdoEpa::$monPdo->prepare("DELETE FROM users WHERE users.id IN (SELECT ref_users from adherent where id = :id)");
      $requete_prepare->bindParam(':id', $id, PDO::PARAM_STR);
      $requete_prepare->execute();
      return $requete_prepare->fetch();
    }

    public function supprimerEtudiant($id) {
      $requete_prepare = pdoEpa::$monPdo->prepare("DELETE FROM message WHERE message.id_expediteur IN (SELECT ref_users from arrivant where id = :id)");
      $requete_prepare->bindParam(':id', $id, PDO::PARAM_STR);
      $requete_prepare->execute();

      $requete_prepare = pdoEpa::$monPdo->prepare("DELETE FROM message WHERE message.id_destinataire IN (SELECT ref_users from arrivant where id = :id)");
      $requete_prepare->bindParam(':id', $id, PDO::PARAM_STR);
      $requete_prepare->execute();

      $requete_prepare = pdoEpa::$monPdo->prepare("DELETE FROM users WHERE users.id IN (SELECT ref_users from arrivant where id = :id)");
      $requete_prepare->bindParam(':id', $id, PDO::PARAM_STR);
      $requete_prepare->execute();
      
      return $requete_prepare->fetch();
    }

    public function getEtudiants() {
        $requete_prepare = pdoEpa::$monPdo->prepare("SELECT * FROM arrivant");
        $requete_prepare->execute();
        return $requete_prepare->fetchAll();
    }

    public function getEtudiantConnecte($username){
    	$requete_prepare = pdoEpa::$monPdo->prepare("SELECT * FROM arrivant WHERE ref_users = (SELECT id FROM users WHERE username = :username)");
    	$requete_prepare->bindParam(':username', $username, PDO::PARAM_STR);
        $requete_prepare->execute();
        return $requete_prepare->fetch();
    }

   public function getUserConnecte($username){
    	$requete_prepare = pdoEpa::$monPdo->prepare("SELECT * FROM users WHERE username = :username");
    	$requete_prepare->bindParam(':username', $username, PDO::PARAM_STR);
        $requete_prepare->execute();
        return $requete_prepare->fetch();
    }

    public function getNews() {
        $requete_prepare = pdoEpa::$monPdo->prepare("SELECT * FROM news order by datePublication DESC");
        $requete_prepare->execute();
        return $requete_prepare->fetchAll();
    }

    public function getNewsByCategorie($categorie) {
        $requete_prepare = pdoEpa::$monPdo->prepare("
        SELECT n.id, n.titre, n.description, n.datePublication "
        ."FROM news n "
        ."INNER JOIN categorie_news cn "
        ."ON n.id = cn.id_news "
        ."WHERE cn.id_categorie = :categorie "
        ."order by datePublication DESC");
        $requete_prepare->bindParam(':categorie', $categorie, PDO::PARAM_STR);
        $requete_prepare->execute();
        return $requete_prepare->fetchAll();
    }

    public function verifierLogin($login,$mdp) {
        $requete_prepare = pdoEpa::$monPdo->prepare("SELECT * FROM users WHERE username = :username AND password = :password");
        $requete_prepare->bindParam(':username', $login, PDO::PARAM_STR);
        $requete_prepare->bindParam(':password', $mdp, PDO::PARAM_STR);
        $requete_prepare->execute();
        $array = $requete_prepare->fetchAll();
    		$nb = count($array);
    		return $nb;
    }

    public function getGroupe($login,$mdp) {
        $requete_prepare = pdoEpa::$monPdo->prepare("SELECT groupe FROM users WHERE username = :username AND password = :password");
        $requete_prepare->bindParam(':username', $login, PDO::PARAM_STR);
        $requete_prepare->bindParam(':password', $mdp, PDO::PARAM_STR);
        $requete_prepare->execute();
		$array = $requete_prepare->fetch();
		return $array['groupe'];
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

  public function creerAdherent($nom, $prenom, $adresse, $ville, $cp, $tel, $email, $sexe, $dateNaissance, $type, $mdp) {
      $requete_prepare = PdoEpa::$monPdo->prepare("INSERT INTO adherent (`nom`, `prenom`, `adresse`, `ville`, `cp`, `tel`, `email`, `sexe`, `dateNaissance`, `type`) "
              . "VALUES (:nom, :prenom, :adresse, :ville, :cp, :tel, :email, :sexe, :dateNaissance, :type) ");
      $requete_prepare->bindParam(':nom', $nom, PDO::PARAM_STR);
      $requete_prepare->bindParam(':prenom', $prenom, PDO::PARAM_STR);
      $requete_prepare->bindParam(':adresse', $adresse, PDO::PARAM_STR);
      $requete_prepare->bindParam(':ville', $ville, PDO::PARAM_STR);
      $requete_prepare->bindParam(':cp', $cp, PDO::PARAM_STR);
      $requete_prepare->bindParam(':tel', $tel, PDO::PARAM_STR);
      $requete_prepare->bindParam(':email', $email, PDO::PARAM_STR);
      $requete_prepare->bindParam(':sexe', $sexe, PDO::PARAM_STR);
      $requete_prepare->bindParam(':dateNaissance', $dateNaissance, PDO::PARAM_STR);
      $requete_prepare->bindParam(':type', $type, PDO::PARAM_STR);
      $requete_prepare->execute();

      if (!$requete_prepare) {
         echo "\nPDO::errorInfo():\n";
      }
      $this->creerLogin($email, $mdp, 2);
      $idLogin = $this->getIDlogin($email, $mdp);
      $idAdherent = $this->getIDAdherentByMail($email);
      $this->linkLoginToTable('adherent', $idLogin, $idAdherent);
  }

  public function modifierAdherent($id, $nom, $prenom, $adresse, $ville, $cp, $tel, $email, $dateNaissance, $type) {
      $requete_prepare = PdoEpa::$monPdo->prepare("UPDATE adherent ".
      "SET nom = :nom, prenom = :prenom, adresse = :adresse, ville = :ville, cp = :cp, tel = :tel, email = :email, dateNaissance = :dateNaissance, type = :type ".
      "WHERE id = :id");
      $requete_prepare->bindParam(':id', $id, PDO::PARAM_STR);
      $requete_prepare->bindParam(':nom', $nom, PDO::PARAM_STR);
      $requete_prepare->bindParam(':prenom', $prenom, PDO::PARAM_STR);
      $requete_prepare->bindParam(':adresse', $adresse, PDO::PARAM_STR);
      $requete_prepare->bindParam(':ville', $ville, PDO::PARAM_STR);
      $requete_prepare->bindParam(':cp', $cp, PDO::PARAM_STR);
      $requete_prepare->bindParam(':tel', $tel, PDO::PARAM_STR);
      $requete_prepare->bindParam(':email', $email, PDO::PARAM_STR);
      $requete_prepare->bindParam(':dateNaissance', $dateNaissance, PDO::PARAM_STR);
      $requete_prepare->bindParam(':type', $type, PDO::PARAM_STR);
      $requete_prepare->execute();
  }

  public function modifierMDPUsers($id, $password) {
    $adherent = $this->getAdherentById($id);
    $requete_prepare = PdoEpa::$monPdo->prepare("UPDATE users ".
    "SET password = :password ".
    "WHERE id = :id");
    $requete_prepare->bindParam(':id', $adherent['ref_users'], PDO::PARAM_STR);
    $requete_prepare->bindParam(':password', $password, PDO::PARAM_STR);
    $requete_prepare->execute();
  }

public function modifierMDPUsersEtudiant($id, $password) {
    $requete_prepare = PdoEpa::$monPdo->prepare("UPDATE users ".
    "SET password = :password ".
    "WHERE id = :id");
    $requete_prepare->bindParam(':id', $id, PDO::PARAM_STR);
    $requete_prepare->bindParam(':password', $password, PDO::PARAM_STR);
    $requete_prepare->execute();
  }

  public function validerAdherent($id) {
    $requete_prepare = PdoEpa::$monPdo->prepare("UPDATE adherent ".
    "SET statut = 1 ".
    "WHERE id = :id");
    $requete_prepare->bindParam(':id', $id, PDO::PARAM_STR);
    $requete_prepare->execute();
  }

  public function creerEtudiant($nom, $sexe, $prenom, $nation, $ddn, $langue, $tel, $email, $dap, $ddp, $motif, $besoin_hebergement, $besoin_accompagnement, $besoin_transport, $besoin_autres, $autor1, $autor2, $pw1) {

      // Requête 1 : création de la ligne dans arrivant
      $requete_prepare = PdoEpa::$monPdo->prepare("INSERT INTO arrivant (`nom`, `sexe`, `prenom`, `nation`, `ddn`, `langue`, `tel`, `email`, `dap`, `ddp`, `motif`, `besoin_hebergement`, `besoin_accompagnement`, `besoin_transport`, `besoin_autres`, `autor1`, `autor2`) "
              . "VALUES (:nom, :sexe, :prenom, :nation, :ddn, :langue, :tel, :email, :dap, :ddp, :motif, :besoin_hebergement, :besoin_accompagnement, :besoin_transport, :besoin_autres, :autor1 , :autor2) ");
      $requete_prepare->bindParam(':nom', $nom, PDO::PARAM_STR);
      $requete_prepare->bindParam(':sexe', $sexe, PDO::PARAM_STR);
      $requete_prepare->bindParam(':prenom', $prenom, PDO::PARAM_STR);
      $requete_prepare->bindParam(':nation', $nation, PDO::PARAM_STR);
      $requete_prepare->bindParam(':ddn', $ddn, PDO::PARAM_STR);
      $requete_prepare->bindParam(':langue', $langue, PDO::PARAM_STR);
      $requete_prepare->bindParam(':tel', $tel, PDO::PARAM_STR);
      $requete_prepare->bindParam(':email', $email, PDO::PARAM_STR);
      $requete_prepare->bindParam(':dap', $dap, PDO::PARAM_STR);
      $requete_prepare->bindParam(':ddp', $ddp, PDO::PARAM_STR); //NEW
      $requete_prepare->bindParam(':motif', $motif, PDO::PARAM_STR); //CHANGEMENT NOM
      $requete_prepare->bindParam(':besoin_hebergement', $besoin_hebergement, PDO::PARAM_STR);
      $requete_prepare->bindParam(':besoin_accompagnement', $besoin_accompagnement, PDO::PARAM_STR);
      $requete_prepare->bindParam(':besoin_transport', $besoin_transport, PDO::PARAM_STR);
      $requete_prepare->bindParam(':besoin_autres', $besoin_autres, PDO::PARAM_STR);
      $requete_prepare->bindParam(':autor1', $autor1, PDO::PARAM_STR);
      $requete_prepare->bindParam(':autor2', $autor2, PDO::PARAM_STR);
      $requete_prepare->execute();

      $this->creerLogin($email, $pw1, 1);
      $idLogin = $this->getIDlogin($email, $pw1);
      $idEtudiant = $this->getIDEtudiant($nom, $prenom);
      $this->linkLoginToTable('arrivant', $idLogin, $idEtudiant);
	}

	public function modifierEtudiant($id, $nom, $sexe, $prenom, $nation, $ddn, $langue, $tel, $email, $dap, $ddp, $motif, $besoin_hebergement, $besoin_accompagnement, $besoin_transport, $besoin_autres, $autor1, $autor2) {
      $requete_prepare = PdoEpa::$monPdo->prepare("UPDATE arrivant ".
      "SET nom = :nom, sexe = :sexe, prenom = :prenom, nation = :nation, ddn = :ddn, langue = :langue, tel = :tel, email = :email, dap = :dap, ddp = :ddp, motif = :motif, besoin_hebergement = :besoin_hebergement, besoin_accompagnement = :besoin_accompagnement, besoin_transport = :besoin_transport, besoin_autres = :besoin_autres, autor1 = :autor1, autor2 = :autor2 ".
      "WHERE id = :id");
      $requete_prepare->bindParam(':id', $id, PDO::PARAM_STR);
      $requete_prepare->bindParam(':nom', $nom, PDO::PARAM_STR);
      $requete_prepare->bindParam(':sexe', $sexe, PDO::PARAM_STR);
      $requete_prepare->bindParam(':prenom', $prenom, PDO::PARAM_STR);
      $requete_prepare->bindParam(':nation', $nation, PDO::PARAM_STR);
      $requete_prepare->bindParam(':ddn', $ddn, PDO::PARAM_STR);
      $requete_prepare->bindParam(':langue', $langue, PDO::PARAM_STR);
      $requete_prepare->bindParam(':tel', $tel, PDO::PARAM_STR);
      $requete_prepare->bindParam(':email', $email, PDO::PARAM_STR);
      $requete_prepare->bindParam(':dap', $dap, PDO::PARAM_STR);
      $requete_prepare->bindParam(':ddp', $ddp, PDO::PARAM_STR);
      $requete_prepare->bindParam(':motif', $motif, PDO::PARAM_STR);
      $requete_prepare->bindParam(':besoin_hebergement', $besoin_hebergement, PDO::PARAM_STR);
      $requete_prepare->bindParam(':besoin_accompagnement', $besoin_accompagnement, PDO::PARAM_STR);
      $requete_prepare->bindParam(':besoin_transport', $besoin_transport, PDO::PARAM_STR);
      $requete_prepare->bindParam(':besoin_autres', $besoin_autres, PDO::PARAM_STR);
      $requete_prepare->bindParam(':autor1', $autor1, PDO::PARAM_STR);
      $requete_prepare->bindParam(':autor2', $autor2, PDO::PARAM_STR);
      $requete_prepare->execute();
  }

  public function getIDEtudiant($nom, $prenom) {
    $requete_prepare = pdoEpa::$monPdo->prepare("SELECT id FROM arrivant WHERE nom = :nom AND prenom = :prenom");
    $requete_prepare->bindParam(':nom', $nom, PDO::PARAM_STR);
    $requete_prepare->bindParam(':prenom', $prenom, PDO::PARAM_STR);
    $requete_prepare->execute();
    $id = $requete_prepare->fetch();
    return intval($id['id']);
  }

  public function getIDEtudiantByEmail($email) {
    $requete_prepare = pdoEpa::$monPdo->prepare("SELECT id FROM arrivant WHERE email = :email");
    $requete_prepare->bindParam(':email', $email, PDO::PARAM_STR);
    $requete_prepare->execute();
    $id = $requete_prepare->fetch();
    return intval($id['id']);
  }

  public function creerLogin($email, $password, $groupe) {
    $requete_prepare = PdoEpa::$monPdo->prepare("INSERT INTO users (`username`, `password`, `groupe`) "
            . "VALUES (:username, :password, :groupe) ");
    $requete_prepare->bindParam(':username', $email, PDO::PARAM_STR);
    $requete_prepare->bindParam(':password', $password, PDO::PARAM_STR);
    $requete_prepare->bindParam(':groupe', $groupe, PDO::PARAM_STR);
    $requete_prepare->execute();
  }

  public function getIDlogin($username, $password) {
    $requete_prepare = pdoEpa::$monPdo->prepare("SELECT id FROM users WHERE username = :username AND password = :password");
    $requete_prepare->bindParam(':username', $username, PDO::PARAM_STR);
    $requete_prepare->bindParam(':password', $password, PDO::PARAM_STR);
    $requete_prepare->execute();
    $id = $requete_prepare->fetch();
    return intval($id['id']);
  }

  public function linkLoginToTable($table, $idLogin, $id) {
    $requete = '';

    if($table == 'arrivant') {
      $requete = "UPDATE `arrivant` ";
    }
    else {
      $requete = "UPDATE `adherent` ";
    }
    $requete .= "SET ref_users=:idLogin WHERE id = :id";

    $requete_prepare = pdoEpa::$monPdo->prepare($requete);
    $requete_prepare->bindParam(':idLogin', $idLogin, PDO::PARAM_INT);
    $requete_prepare->bindParam(':id', $id, PDO::PARAM_INT);
    $requete_prepare->execute();
  }

  public function creerNews($titre, $description, $listeCategories) {
      $requete_prepare = PdoEpa::$monPdo->prepare("INSERT INTO news (`titre`, `description`) "
              . "VALUES (:titre, :description) ");
      $requete_prepare->bindParam(':titre', $titre, PDO::PARAM_STR);
      $requete_prepare->bindParam(':description', $description, PDO::PARAM_STR);
      $requete_prepare->execute();

      $id = PdoEpa::$monPdo->lastInsertId();
      if(count($listeCategories) == 0) {
        $this->bindNewsCategorie($id, 8);
      }
      else {
        foreach($listeCategories as $categorie){
           $this->bindNewsCategorie($id, $categorie);
        }
      }
  }

  public function bindNewsCategorie($idNews, $idCategorie) {
    $requete_prepare = PdoEpa::$monPdo->prepare("INSERT INTO categorie_news (`id_news`, `id_categorie`) "
            . "VALUES (:id_news, :id_categorie) ");
    $requete_prepare->bindParam(':id_news', $idNews, PDO::PARAM_STR);
    $requete_prepare->bindParam(':id_categorie', $idCategorie, PDO::PARAM_STR);
    $requete_prepare->execute();
  }

  public function getLibelleCategoriesNews() {
    $requete_prepare = pdoEpa::$monPdo->prepare(
       "SELECT n.id as newsId, c.id as categorieId, c.nom "
      ."FROM categorie c "
      ."INNER JOIN categorie_news cn "
      ."ON cn.id_categorie = c.id "
      ."INNER JOIN news n "
      ."ON cn.id_news = n.id ");
    $requete_prepare->execute();
    return $requete_prepare->fetchAll();
  }


  public function ajoutFichier($name, $file_url) {
      $requete_prepare = PdoEpa::$monPdo->prepare("INSERT INTO files (`name`, `file_url`) "
              . "VALUES (:name, :file_url) ");
      $requete_prepare->bindParam(':name', $name, PDO::PARAM_STR);
      $requete_prepare->bindParam(':file_url', $file_url, PDO::PARAM_STR);
      $requete_prepare->execute();
  }

  public function getFichiersAssociation() {
        $requete_prepare = pdoEpa::$monPdo->prepare("SELECT * FROM files");
        $requete_prepare->execute();
        return $requete_prepare->fetchAll();
    }

  public function getCategorie() {
    $requete_prepare = pdoEpa::$monPdo->prepare("SELECT * FROM categorie");
    $requete_prepare->execute();
    return $requete_prepare->fetchAll();
  }

  public function getNbCategories() {
    $requete_prepare = pdoEpa::$monPdo->prepare("SELECT count(*) FROM categorie");
    $requete_prepare->execute();
    return $requete_prepare->fetch();
  }

  public function ajoutMessage($dest, $expe, $message) {
      $requete_prepare = PdoEpa::$monPdo->prepare("INSERT INTO message (`id_destinataire`, `id_expediteur`, `texte`) "
              . "VALUES (:dest, :expe, :message) ");
      $requete_prepare->bindParam(':dest', $dest, PDO::PARAM_STR);
      $requete_prepare->bindParam(':expe', $expe, PDO::PARAM_STR);
      $requete_prepare->bindParam(':message', $message, PDO::PARAM_STR);
      $requete_prepare->execute();
  }

  public function getUserById($id) {
    $requete_prepare = pdoEpa::$monPdo->prepare("SELECT * FROM users WHERE id = :id");
    $requete_prepare->bindParam(':id', $id, PDO::PARAM_STR);
    $requete_prepare->execute();
    return $requete_prepare->fetch();
  }

  public function getListeMessages($id) {
    $requete_prepare = pdoEpa::$monPdo->prepare("SELECT m1.`id`, m1.`id_expediteur`, m1.`id_destinataire`, m1.`texte`, m1.`date`
      FROM(
      	(SELECT `id`,`id_expediteur`,`id_destinataire`,`texte`,`date`
      	FROM `message`
      	WHERE `id_expediteur`= :id
      	UNION
      	SELECT `id`,`id_destinataire`,`id_expediteur`,`texte`,`date`
      	FROM `message`
      	WHERE `id_destinataire`= :id ) m1
      )
      INNER JOIN(
          SELECT m2.`id`, m2.`id_expediteur`, m2.`id_destinataire`, m2.`texte`, max(m2.`date`) recent
      	FROM
      		(SELECT `id`,`id_expediteur`,`id_destinataire`,`texte`,`date`
      		FROM `message`
      		WHERE `id_expediteur`= :id
      		UNION
      		SELECT `id`,`id_destinataire`,`id_expediteur`,`texte`,`date`
      		FROM `message`
      		WHERE `id_destinataire`= :id ) m2
          GROUP BY m2.`id_destinataire`
      ) m3
      WHERE m1.`id_destinataire`=m3.`id_destinataire`
      AND m3.recent=m1.date
      ORDER BY m1.date DESC
      " );
    $requete_prepare->bindParam(':id', $id, PDO::PARAM_STR);
    $requete_prepare->execute();
    return $requete_prepare->fetchAll();
  }

  public function getConversation($id_destinataire,$id_expediteur) {
        $requete_prepare = pdoEpa::$monPdo->prepare("SELECT * FROM message WHERE (id_destinataire = :id_destinataire AND id_expediteur = :id_expediteur) OR (id_destinataire = :id_expediteur AND id_expediteur = :id_destinataire)");
        $requete_prepare->bindParam(':id_destinataire', $id_destinataire, PDO::PARAM_STR);
        $requete_prepare->bindParam(':id_expediteur', $id_expediteur, PDO::PARAM_STR);
        $requete_prepare->execute();
        return $requete_prepare->fetchAll();
  }

  public function getNewsById($id) {
    $requete_prepare = pdoEpa::$monPdo->prepare("SELECT * FROM news WHERE id = :id");
    $requete_prepare->bindParam(':id', $id, PDO::PARAM_STR);
    $requete_prepare->execute();
    return $requete_prepare->fetch();
  }
}
