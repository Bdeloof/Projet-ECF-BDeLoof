<?php

require_once 'connexionDatabase.php';

$connexionDatabase = ConnexionDatabase::getInstance();
$connexion = $connexionDatabase->getConnexion();

if (isset($_POST['email'])) {
  $email = $_POST['email'];

  $sql = "DELETE FROM user WHERE email = :email";
  $declaration = $connexion->prepare($sql);
  $declaration->bindParam(':email', $email);
  $declaration->execute();
} else {
  echo "Vous n'avez plus aucun employé !";
}

$connexion = null;

header('Location: pageadmin.php');
exit();