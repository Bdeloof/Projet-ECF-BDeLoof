<?php
// 
// session_start();
// 
// if (!isset($_SESSION['email']) || $_SESSION['estAdmin'] != 0) {
//   header('Location: index.php');
//   exit();
// }
// 
// if (isset($_POST['deconnexion'])) {
//   
//   session_unset();
//   session_destroy();
//   header('Location: index.php');
//   exit();
// }
// 
// ?>


<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projet ECF : Garage Vincent Parrot</title>
    <meta type="description" content="Votre garage pour toutes réparations ou votre nouveau véhicule" />
    
    <!-- Import du style bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="./src/styles/styles.css">
</head>
<body>

<!-- --------------------------- HEADER --------------------------- -->

    <header>
        <div class="container-fluid custom-bg">
            <nav class="navbar navbar-expand-lg navbar-light">
            <img src="./src/img/Logo _V_Parrot_3.png" alt="Logo de l'entreprise du Garage Vincent Parrot" width="50px" height="50px">
                <a class="navbar-brand" href="index.php">Garage Vincent Parrot</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item active">
                            <a class="nav-link" href="index.php">Accueil</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="vehicule.php">Nos véhicules</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="nosservices.html">Nos services</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="contactus.php">Contactez nous !</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="connexion.php">Espace Collaborateurs</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </header>

    
<!-- --------------------------- MAIN --------------------------- -->

    <main>
    
    <div class="container">
            <div class="m-5">
                <h1 class="title-site"><b>Espace employés :</b></h1>
                <br>
                <button class="btn btn-danger my-3 mx-3" type="submit" name="logout">Se déconnecter</button>
            </div>
        </div>
    
        <h2>Les messages clients</h2>

        <a href="messageclients.html">Afficher les messages clients</a>

        <h2>Ajouter un véhicule</h2>

        <form action="ajoutervehicule.php" method="POST">
            <label for="marque">Marque :</label>
            <input type="text" name="marque" required>
            <br>
            <label for="prix">Prix :</label>
            <input type="text" name="prix" required>
            <br>
            <label for="voitureimage">Image :</label>
            <input type="file" name="voitureimage[]" multiple required>
            <br>
            <label for="annee">Année :</label>
            <input type="text" name="annee" required>
            <br>
            <label for="kilometre">kilomètre :</label>
            <input type="text" name="kilometre" required>
            <br>
            <input class="btn btn-danger" type="submit" value="Ajouter un véhicule">
        </form>

        <h2>Supprimer un véhicule</h2>
        <a href="listevehicule.php">Liste des véhicules</a>

        <h2>Valider les avis clients</h2>

        <?php

            require_once 'ConnexionDatabase.php';

            $database = ConnexionDatabase::getInstance();
            $connexion = $database->getConnexion();

            $declaration = $connexion->prepare("SELECT * FROM avis WHERE valide = 0");
            $declaration->execute();
            $rows = $declaration->fetchAll(PDO::FETCH_ASSOC);
            ?>

        <h3>Nouveaux avis</h3>

        <?php
        if ($declaration->rowCount() > 0) {
            foreach ($rows as $row) {
                $avisId = $row['id'];
                $nom = utf8_decode($row['nom']);
                $commentaire = utf8_decode($row['commentaire']);
                $note = $row['note'];
                ?>

                <p>Nom :
                    <?php echo $nom; ?>
                </p>
                <p>Commentaire :
                    <?php echo $commentaire; ?>
                </p>
                <p>Note :
                    <?php echo $note; ?>
                </p>

                <form action="accepteravis.php" method="POST">
                    <input type="hidden" name="avisid" value="<?php echo $avisId; ?>">
                    <button class="btn btn-danger" type="submit" name="valider">Valider</button>
                </form>
                <form action="supprimeravis.php" method="POST">
                    <input type="hidden" name="avisid" value="<?php echo $avisId; ?>">
                    <button class="btn btn-danger" type="submit" name="supprimer">Supprimmer</button>
                </form>
                <?php
            }
        } else {
            echo "Aucun nouvel avis.";
        }

        $connexion = null;
        ?>


    </main>


<!-- --------------------------- FOOTER --------------------------- -->

<footer>
    <div class="container-fluid footer custom-bg">
        <p>
            Où nous trouver ? <br>
            1 Rue du Stadium <br>
            31000 Toulouse
        </p>
        <p>
            Nous contacter : <br>
            01.23.45.67.89
        </p>
        <div id="imbricationHoraires">
            <!-- Imbrication des horaires via JS -->
        </div>
    </div>

    <!-- Import du script bootstrap -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>

</footer>

</body>
</html>