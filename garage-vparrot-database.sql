CREATE DATABASE garageVParrot;

CREATE TABLE
  avis (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nom VARCHAR(255) NOT NULL,
    commentaire TEXT NOT NULL,
    note INT NOT NULL
    valide BOOLEAN DEFAULT 0
  );

CREATE TABLE
  voiture (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nom VARCHAR(50) NOT NULL,
    prix INT NOT NULL,
    voitureimage LONGTEXT, 
    annee INT NOT NULL,
    kilometre INT NOT NULL
  );

CREATE TABLE
  user (
    id INT AUTO_INCREMENT PRIMARY KEY,
    email VARCHAR(100),
    motdepasse LONGTEXT,
    estAdmin BOOLEAN DEFAULT 0
  );

INSERT INTO user (id, email, motdepasse, estAdmin)
VALUES (0, vincentparrotecf, vincentparrotgarage, 1);

CREATE TABLE
  demande-info {
    id INT AUTO_INCREMENT PRIMARY KEY,
    prenom VARCHAR(50) NOT NULL,
    nom VARCHAR(50) NOT NULL,
    email VARCHAR(100) NOT NULL,
    telephone VARCHAR(25) NOT NULL,
    question TEXT NOT NULL
  };

CREATE TABLE
  schedule {
    id INT AUTO_INCREMENT PRIMARY KEY,
    lundi_vendredi VARCHAR(50),
    samedi VARCHAR(50)
  }