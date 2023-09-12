<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $email = $_POST['email'];
  $motdepasse = $_POST['motdepasse'];

  require_once 'connexionDatabase.php';

  $connexionDatabase = ConnexionDatabase::getInstance();
  $connexion = $connexionDatabase->getConnexion();

  $hashedPassword = password_hash($motdepasse, PASSWORD_DEFAULT);

  $query = "INSERT INTO user (email, password) VALUES (:email, :password)";
  $declaration = $connexion->prepare($query);
  $declaration->bindParam(':email', $email);
  $declaration->bindParam(':password', $hashedPassword);

  if ($declaration->execute()) {
    header('Location: pageadmin.php');
    exit();
  } else {
    echo "Il y a une erreur lors de l'ajout à la base de donnée";
  }

  $connexion = null;
}

