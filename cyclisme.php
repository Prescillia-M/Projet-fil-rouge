<?php include('./config/config.php'); ?>
<?php
session_start();
?>
<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Cyclisme /
    <?php echo $website_name; ?>
  </title>
  <link rel="stylesheet" href="./css/style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
  <link rel="stylesheet" href="./css/searchBar.css">
</head>

<body>

  <!-- Header (dispo dans: config -> header.php) -->
  <?php
  $page_active = "cyclisme";
  include('./config/header.php');
  ?>

  <!-- contenu de la page ici -->
  <div class="content">


  <div class="actualites">
      <h2>Actualités</h2>
    <img src="./assets/tour-de-france.jfif" alt="tour-de-france">
      <h3>Tour de France. Vers un Grand Départ dans le Nord en 2025 ?</h3>
    
      <p>Selon nos informations, le Grand Départ du Tour de France 2025 pourrait avoir lieu dans la région Hauts-de-France. Les coureurs descendraient ensuite vers l’Ouest avec des arrivées en Normandie et en Bretagne.</p>
                    <img src="./assets/viviani.jpg" alt="viviani">
                    <h3>Elia Viviani vainqueur de la 1re étape du Tour du Guangxi</h3>

                    <p>L'Italien Elia Viviani a remporté jeudi la première étape du Tour du Guangxi en Chine. Le coureur de la formation Ineos Grenadiers a devancé au sprint son compatriote Jonathan Milan (Bahrain) et l'Irlandais Sam Bennett (BORA). Le premier Français Donavan Grondin (Arkéa) a terminé 27e au milieu du peloton.</p>

                    
      </div>
      

  </div>

  <!-- Insertion des fonctionnalités de la searchBar -->
  <script src="./js/searchBar.js"></script>

  <!-- Configuration des cookies. (config -> cookies.php) -->
  <?php include('./config/cookies.php'); ?>

  <!-- Configuration général du footer: (config -> footer.php) -->
  <footer>
    <?php include('./config/footer.php'); ?>
  </footer>
</body>

</html>