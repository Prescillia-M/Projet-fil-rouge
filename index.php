<?php include('./config/config.php'); ?>
<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Accueil /
    <?php echo $website_name; ?>
  </title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
  <link rel="stylesheet" href="./css/style.css">
  <link rel="stylesheet" href="./css/searchBar.css">
</head>

<body>

  <!-- Header (dispo dans: config -> header.php) -->
  <?php
  $page_active = "accueil";
  include('./config/header.php');
  ?>

  <!-- contenu de la page ici -->
    <div class="content">
      <section class="boxinter">
        <p>Bienvenue sur notre site! 
            Ce site fournit des informations sur les derniers événements sportifs, les résultats et les analyses des sports tel que le sport automobile, le cyclisme, la boxe anglaise, le tennis et le basketball. <br> 
            Nous espérons que vous apprécierez notre site et que vous trouverez toutes les informations dont vous
            avez besoin pour rester informé sur vos sports préférés.</p>
      </section>
      <section class="boxinter">
        <p>Développer et mettre la page d'Accueil.</p>
      </section>
    </div>

  <!-- Configuration des cookies. (config -> cookies.php) -->
  <?php include('./config/cookies.php'); ?>

  <!-- Configuration général du footer: (config -> footer.php) -->
  <footer>
    <?php include('./config/footer.php'); ?>
  </footer>
</body>

</html>