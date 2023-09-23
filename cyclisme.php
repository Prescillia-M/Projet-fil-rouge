<?php include('./config/config.php'); ?>
<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Assistance /
    <?php echo $website_name; ?>
  </title>
  <link rel="stylesheet" href="./css/style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
</head>

<body>

  <!-- Header (dispo dans: config -> header.php) -->
  <?php
  $page_active = "cyclisme";
  include('./config/header.php');
  ?>

  <!-- contenu de la page ici -->
  <div class="content">
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime quidem ipsa sint exercitationem nemo quas
      quisquam quos dignissimos tempore. Rem voluptatum nobis autem laboriosam nemo dolor quas eligendi velit possimus.
    </p>
  </div>

  <!-- Configuration général du footer: (config -> footer.php) -->
  <footer>
    <?php include('./config/footer.php'); ?>
  </footer>
</body>

</html>