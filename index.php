<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projet ECF : Garage Vincent Parrot</title>
    <meta type="description" content="Votre garage pour toutes réparations ou votre nouveau véhicule" />
    
    <!-- Import du style bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="./src/styles/style.css">
</head>
<body>

<!-- --------------------------- HEADER --------------------------- -->

    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <img src="./src/img/Logo _V_Parrot_3.png" alt="Logo de l'entreprise du Garage Vincent Parrot" width="50px" height="50px">
            <a class="navbar-brand" href="#">Garage Vincent Parrot</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Accueil <span class="sr-only">(current)</span></a>
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
                        <a class="nav-link disabled" href="#">Espace Collaborateurs</a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>

    
<!-- --------------------------- MAIN --------------------------- -->

    <div>
        <h1 class="titre-principal"><b>Bienvenue au garage Vincent Parrot !</b></h1>
            <br>
        <p>
            Fort d’une quinzaine d’année d’expérience dans la réparation automobile, le garage Vincent Parrot a ouvert ses portes à Toulouse en 2021. Nous nous engageons à vous offrir un service exceptionnel avec des réparations de qualité et une expérience client que vous ne trouverez pas ailleurs. Que vous ayez besoin d’une simple révision, d’une vidange ou d’une réparation de votre carrosserie, nous nous engageons à répondre à toutes vos exigences. Notre personnel compétent et amical se fera un plaisir de répondre à toutes vos questions sur les différentes réparations à amener à votre véhicule et vous tenir informer de l’avancée de vos réparations. Vous retrouverez également tout un panel de véhicule d’occasion à la vente révisés et mises en conformité par nos soins. Pour toutes informations, n’hésitez pas à nous contacter.
        </p>
        <img src="./src/img/auto-repair-3691962_1280.jpg" alt="Image de garagiste">
    </div>

    <h2>Ils nous ont fait confiance</h2>

    <img src="./src/img/flèche gauche.png" alt="Flèche dirigée vers la gauche">
    <!-- Ajouter les avis -->
    <img src="./src/img/flèche droite.png" alt="Flèche dirigée vers la droite">

    <button type="button" class="btn btn-danger">Donnez votre avis</button>

<!-- --------------------------- FOOTER --------------------------- -->

<div>
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
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>
</html>