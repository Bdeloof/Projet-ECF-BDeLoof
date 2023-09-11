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
                <h1 class="title-site"><b>Administration :</b></h1>
                <br>
                <button class="btn btn-danger my-3 mx-3" type="submit" name="logout">Se déconnecter</button>
            </div>
        </div>
        
<!--  Ajouter un employé  -->

        <div>
          <h2 class="title-site">Ajouter un employé</h2>
          <form method="POST" action="ajouteremploye.php">
            <div>
              <label for="email">Email :</label>
              <br>
              <input type="email" id="email" name="email" required>
            </div>
            <div>
              <label for="mdp">Mot de passe :</label>
              <br>
              <input type="mdp" id="mdp" name="motdepasse" required>
            </div>
            <div>
              <button type="submit" class="btn btn-success">Ajouter un employé</button>
            </div>
          </form>
        </div>

<!--  Supprimer un employé  -->

        <div>
          <h2 class="title-site">Supprimer un compte employé</h2>

          <!--  Connexion et sélection de tous les employés  -->

          <?php
          require_once 'ConnexionDatabase.php';

          $database = ConnexionDatabase::getInstance();
          $connexion = $database->getConnexion();

          $sql = "SELECT * FROM user WHERE email != 'vincentparrotecf@gmail.com'";
          $declaration = $connexion->prepare($sql);
          $declaration->execute();

          // Affichage de la liste des employés

          if ($declaration->rowCount() > 0) {
            while ($row = $declaration->fetch(PDO::FETCH_ASSOC)) {
              echo "Email :" . $row['email'];
              echo "<form method='POST' action='supprimeremploye.php'>";
              echo "<button type='submit' class='btn btn-danger'>Supprimer un compte employé</button>";
              echo "</form>";
            }
          } else {
            echo "Aucun employé trouvé.";
          }

          $connexion = null;

          ?>

        </div>

        <!-- Modifier les horaires -->

        <div>
          <h2 class="title-site">Modifier les horaires du garage</h2>
          <form action="modifierhoraire.php" method="POST">
            <div>
              <label for="lundivendredi">Lundi au Vendredi :</label>
              <br>
              <input type="text" id="lundivendredi" name="lundivendredi">
            </div>
            <div>
              <label for="samedi">Samedi :</label>
              <br>
              <input type="text" id="samedi" name="samedi">
            </div>
            <div>
              <button type="submit" class="btn btn-success">
                Modifier les horaires
              </button>
            </div>
          </form>
        </div>

        
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
        <p>
            Nos horaires :
            <?php

            require_once 'ConnexionDatabase.php';

            $database = ConnexionDatabase::getInstance();
            $connexion = $database->getConnexion();

            $declaration = $db->query("SELECT * FROM schedule");
            $row = $declaration->fetch(PDO::FETCH_ASSOC);
            if ($declaration->rowCount() > 0) {
                $lundiVendredi = $row['lundi_vendredi'];
                $samedi = $row['samedi'];
            } else {
                $lundiVendredi = "Contactez nous pour plus de renseignements";
                $samedi = "Contactez nous pour plus de renseignements";
            }

            $connexion = null;

            ?>

            Du Lundi au Vendredi : <?php echo $lundiVendredi; ?> <br>
            Le Samedi de <?php echo $samedi; ?>
        </p>
    </div>

    <!-- Import du script bootstrap -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>

</footer>

</body>
</html>