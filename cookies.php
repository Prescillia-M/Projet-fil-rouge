<?php include('./config/config.php'); ?>
<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Nos délicieux cookies /
    <?php echo $website_name; ?>
  </title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
  <link rel="stylesheet" href="./css/style.css">
</head>

<body>

  <!-- Header (dispo dans: config -> header.php) -->
  <?php
  $page_active = "cookies";
  include('./config/header.php');
  ?>

  <!-- contenu de la page ici -->
  <div class="content-rules">

    <h2><i class="fas fa-cookie-bite"></i> Nos délicieux cookies</h2>

    <p>
    Les cookies sont de petits fichiers texte qui sont placés sur votre ordinateur par les sites web que vous visitez. Ils sont largement utilisés pour faire fonctionner les sites web ou travailler plus efficacement, ainsi que pour fournir des informations aux propriétaires des sites. En fonction de votre niveau d’accès et de vos actions sur le site, divers cookies basés sur les préférences peuvent être définis pour enrichir votre expérience. Ces cookies sont utilisés pour mémoriser votre thème, la langue et les préférences de marquage des éléments, etc.
    </p>
    <p>
    Ils sont largement utilisés pour faire fonctionner les sites web ou travailler plus efficacement, ainsi que pour fournir des informations aux propriétaires des sites. En fonction de votre niveau d’accès et de vos actions sur le site, divers cookies basés sur les préférences peuvent être définis pour enrichir votre expérience. Ces cookies sont utilisés pour mémoriser votre thème, la langue et les préférences de marquage des éléments, etc.
    </p>
    <p>
    En fonction de votre niveau d’accès et de vos actions sur le site, divers cookies basés sur les préférences peuvent être définis pour enrichir votre expérience. Ces cookies sont utilisés pour mémoriser votre thème, la langue et les préférences de marquage des éléments, etc.
    </p>
    <p>
    Ces cookies sont utilisés pour mémoriser votre thème, la langue et les préférences de marquage des éléments, etc.
    </p>
  </div>

  <!-- Configuration des cookies. (config -> cookies.php) -->
  <?php include('./config/cookies.php'); ?>

  <!-- Configuration général du footer: (config -> footer.php) -->
  <footer>
    <?php include('./config/footer.php'); ?>
  </footer>
</body>

</html>