<?php

require_once 'connexionDatabase.php';

$connexionDatabase = ConnexionDatabase::getInstance();
$connexion = $connexionDatabase->getConnexion();

$lundiVendredi = $_POST['lundivendredi'];
$samedi = $_POST['samedi'];

$declaration = $connexion->prepare("UPDATE schedule SET lundi_vendredi = :lundivendredi, samedi = :samedi");
$declaration->bindParam(':lundivendredi', $lundiVendredi);
$declaration->bindParam(':samedi', $samedi);
$declaration->execute();

$connexion = null;

header("location: pageadmin.php");
exit();