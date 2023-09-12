<?php

class ConnexionDatabase {
  public static $initialisation = null;
  public $connexion;

  public function __construct() {
    $dbName = "garage-vparrot-database";
    $port = 3306;
    $username = "root";
    $password = "VParrot";

    try {
      $this->connexion = new PDO("mysql:host=localhost;dbname=$dbName;port=$port, $username, $password");
    } catch(PDOException $exception) {
      echo $exception->getMessage();
    }
  }

  public static function getInstance() {
    if (!self::$initialisation) {
      self::$initialisation = new ConnexionDatabase();
    }
    return self::$initialisation;
  }

  public function getConnexion() {
    return $this->connexion;
  }
}