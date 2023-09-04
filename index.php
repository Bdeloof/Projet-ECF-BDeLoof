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
                        <li class="nav-item active">
                            <a class="nav-link" href="#">Accueil</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Nos véhicules</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Nos services</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Contactez nous !</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Espace Collaborateurs</a>
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
                <h1 class="title-site"><b>Bienvenue au garage Vincent Parrot !</b></h1>
                <br>
                <div class="garage-presentation">
                    <p class="text-presentation">
                        Fort d’une quinzaine d’année d’expérience dans la réparation automobile, le garage Vincent Parrot a ouvert ses portes à Toulouse en 2021. Nous nous engageons à vous offrir un service exceptionnel avec des réparations de qualité et une expérience client que vous ne trouverez pas ailleurs. Que vous ayez besoin d’une simple révision, d’une vidange ou d’une réparation de votre carrosserie, nous nous engageons à répondre à toutes vos exigences. Notre personnel compétent et amical se fera un plaisir de répondre à toutes vos questions sur les différentes réparations à amener à votre véhicule et vous tenir informer de l’avancée de vos réparations. Vous retrouverez également tout un panel de véhicule d’occasion à la vente révisés et mises en conformité par nos soins. Pour toutes informations, n’hésitez pas à nous contacter.
                    </p>
                    <img src="./src/img/auto-repair-3691962_1280.jpg" width="50%" height="50%" alt="Image de garagiste">
                </div>
            </div>
        </div>
        

        <h2 class="title-site">Ils nous ont fait confiance</h2>

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