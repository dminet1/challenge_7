<?php
class Connexion{

  private $_db;

  public function __construct ($db){
    $this->setDb($db);
  }

  public function setDb(PDO $db){
    $this->_db = $db;
  }

  public function countTable($param){
    $req=$this->_db->query($param);
    $resultat = $req->fetch();
    $req->closeCursor();
    $nblignes = $resultat[0];
    return $nblignes;
  }
}
?>
