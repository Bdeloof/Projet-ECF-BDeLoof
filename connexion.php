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
                <a class="navbar-brand" href="#">Garage Vincent Parrot</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
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
                        <li class="nav-item active">
                            <a class="nav-link" href="connexion.php">Espace Collaborateurs</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </header>

    
<!-- --------------------------- MAIN --------------------------- -->

    <main>
      <h2 class="title-site">Consultez notre catalogue de véhicule d'occasion</h2>
      <div class="container section-confiance">
          <img src="./src/img/flèche gauche.png" width="25px" height="25px" alt="Flèche dirigée vers la gauche">
          <!-- Ajouter les avis -->
          <img src="./src/img/flèche droite.png" width="25px" height="25px" alt="Flèche dirigée vers la droite">
          <br>
          <div class="container btn-donner-avis">
              <button type="button" class="btn btn-danger">Donnez votre avis</button>
          </div>
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

            ?>
        </p>
    </div>

    <!-- Import du script bootstrap -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>

</footer>

</body>
</html>