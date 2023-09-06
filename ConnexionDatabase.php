<?php

class ConnexionDatabase {
  private static $initialisation = null;
  private $db;

  public function __construct() {
    $dbName = "garage-vparrot-database";
    $port = 3306;
    $username = "root";
    $password = "";

    try {
      $this->db = new PDO("mysql:host=localhost;dbname=$dbName;port=$port, $username, $password");
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
    return $this->db;
  }
}