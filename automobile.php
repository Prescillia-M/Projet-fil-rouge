<?php include('./config/config.php'); ?>
<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Automobile /
    <?php echo $website_name; ?>
  </title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
  <link rel="stylesheet" href="./css/content.css">
  <link rel="stylesheet" href="./css/style.css">
  <link rel="stylesheet" href="./css/searchBar.css">
</head>

<body>

  <!-- Header (dispo dans: config -> header.php) -->
  <?php
  $page_active = "automobile";
  include('./config/header.php');
  ?>

  <!-- contenu de la page ici -->
  <div class="content">


  <div class="actualites">
      <h2>Actualités</h2>
    <img src="./assets/Qatar.jpg" alt="Qatar">  
      <h3>GP Qatar 2023</h3>
    
      <p>Les résultats définitifs du Grand Prix F1 du Qatar 2023
Grand Prix du Qatar
 8 octobre 2023
Cesare Ingrassia
f1 qatar
Voici les résultats officiels et définitifs du Grand Prix du Qatar 2023, dix-septième manche du championnat du monde, disputé ce dimanche 08 octobre sur le circuit de Losail près de Doha.

C’est le pilote Red Bull Max Verstappen qui a remporté le Grand Prix du Qatar 2023, le Néerlandais a devancé sur la ligne d’arrivée la McLaren d’Oscar Piastri et l’autre McLaren pilotée par le Britannique Lando Norris.

Derrière, George Russell, Charles Leclerc, Fernando Alonso, Esteban Ocon, Valtteri Bottas, Guanyu Zhou et Sergio Perez complètent le top dix à l’arrivée de cette dix-septième manche de l’année disputée au Qatar.

</p>
                    <img src="./assets/Ferrari.webp" alt="Ferrari">
                    <h3>Les Erreurs de Ferrari</h3>

                    <p>Les années se suivent et se ressemblent. Entre les erreurs de l’équipe, celles des pilotes et les problèmes de performance, Ferrari n’y arrive plus. Pire, les concurrents de la Scuderia dominent aisément la Formule 1. Résultat, aucun titre gagné depuis 2008 et des tifosis qui attendent toujours de voir la lumière au bout du tunnel.</p>
                    
                    <img src="./assets/Grosjean.jpg" alt="Grosjean">
                    <h3>Indycar : Romain Grosjean va quitter Andretti à la fin de la saison</h3>
                    
                    <p>Après des semaines de rumeurs, les deux parties ont confirmé samedi que l'association entre l'équipe Andretti et Romain Grosjean s'arrêterait à la fin de la deuxième saison commune en Indycar.</p>

                    <img src="./assets/Accident_Grosjean.jpg" alt="Accident Grojean">
                    <h3>Il y a deux ans… Romain Grosjean et le miracle de Bahreïn</h3>
                    <p>Il y a deux ans jour pour jour, le 29 novembre 2020, Romain Grosjean est sorti miraculeusement d'un spectaculaire et effroyable accident lors du Grand Prix de Bahreïn. AUTOhebdo vous replonge dans les archives de ce terrible crash, qui a bien failli coûter la vie au pilote français.</p>
      </div>
      <div class="resultat">
        <h2>Résultats</h2>
        <img src="./assests/Qatar_resultats.jpeg" alt="resultat1">
        <img src="" alt="resultat2">

      </div>


  </div>

  <!-- insertion des fonctionnalités de la searchBar -->
  <script src="./js/searchBar.js"></script>

  <!-- Configuration des cookies. (config -> cookies.php) -->
  <?php include('./config/cookies.php'); ?>

  <!-- Configuration général du footer: (config -> footer.php) -->
  <footer>
    <?php include('./config/footer.php'); ?>
  </footer>
</body>

</html>