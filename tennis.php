<?php include('./config/config.php'); ?>
<?php
session_start();
?>
<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Tennis /
    <?php echo $website_name; ?>
  </title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
  <link rel="stylesheet" href="./css/style.css">
  <link rel="stylesheet" href="./css/searchBar.css">
  <link rel="stylesheet" href="./css/content.css">
</head>

<body>

  <!-- Header (dispo dans: config -> header.php) -->
  <?php
  $page_active = "tennis";
  include('./config/header.php');
  ?>

  <!-- contenu de la page ici -->
  <div class="content">

  <div class="actualites">
      <h2>Actualités</h2>
    <img src="./assets/Alcaraz.webp" alt="alcaraz">
      <h3>Carlos Alcaraz éliminé dès les 8es de finale au Masters 1000 de Shanghai</h3>
    
      <p> L’Espagnol, numéro 2 mondial, a subi la loi du Bulgare Grigor Dimitrov en trois sets ce mercredi (3-6, 7-5, 3-6).</p>
                    <img src="./assets/nadal.webp" alt="nadal">
                    <h3>Tony Yoka, un nouveau départ</h3>

                    <p>Tony Yoka, champion olympique de Rio en 2016, a récemment changé d’entraîneur et est désormais suivi par Don Charles. Le boxeur français reste sur deux défaites consécutives, tandis que son prochain adversaire, Ryad Merhy, présente un bilan de 31 victoires, dont 26 avant la limite, et 2 défaites. Le dernier combat de Yoka remonte à mai 2023, où il a perdu aux points contre Kevin Lerena à Johannesburg pour la ceinture WBC Silver des bridgerweight. Yoka compte 11 victoires et reste sur deux défaites: en mai 2022 face au Congolais Martin Bakole (aux points), le premier revers de sa carrière professionnelle, puis en mars dernier contre le Camerounais Carlos Takam. Tony Yoka a déclaré dans une interview à Canal + qu’il avait besoin d’un nouveau challenge et d’un nouveau départ dans sa carrière sportive.Il s’entraînait depuis cinq ans aux États-Unis et est aujourd’hui installé à Finchley dans le nord de Londres.</p>

                    <img src="./assets/ramirez.jpg" alt="ramirez">
                    <h3>Nadal veut disputer l’Open d’Australie 2024</h3>
                    <p>Le champion espagnol Rafael Nadal, qui a été absent des terrains pendant huit mois en raison de blessures à la hanche et de deux opérations, est de retour à l’entraînement sur ses terres, à Majorque. Craig Tiley, directeur de l’Open d’Australie, a exprimé son espoir de voir le double vainqueur (2009, 2022) fouler les courts à Melbourne début 2024. Nadal est confiant quant à son retour sur les terrains et se reconstruit physiquement. Tous les fans de tennis seraient ravis de voir “Rafa” refouler les courts.</p>

      </div>
      <div class="resultat">
        <h2>Résultats</h2>
        <img src="./assets/resultat-tennis1.PNG" alt="resultat1">
        <img src="./assets/resultat-tennis2" alt="resultat2">
        
      
      </div>

    

  </div>
  
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