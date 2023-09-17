<div id="horaires">
  <p>
    Nos horaires :

      <?php

      require_once 'connexionDatabase.php';
      $connexionDatabase = ConnexionDatabase::getInstance();
      $connexion = $connexionDatabase->getConnexion();

      $declaration = $connexion->query("SELECT * FROM schedule");
      $row = $declaration->fetch(PDO::FETCH_ASSOC);
      if ($declaration->rowCount() > 0) {
          $lundiVendredi = $row['lundivendredi'];
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