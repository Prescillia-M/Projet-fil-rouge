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
  $page_active = "assistance";
  include('./config/header.php');
  ?>

  <!-- contenu de la page ici -->
  <div class="content">
    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Facere, consectetur. Veritatis officiis porro vero officia placeat voluptatem earum molestiae pariatur deserunt similique ipsum nemo recusandae voluptate, a, illum est eligendi?

  </div>

  <!-- Configuration général du footer: (config -> footer.php) -->
  <!-- <footer>
      <p>
        <?php include('./config/footer.php'); ?>
      </p>
  </footer> -->
</body>

</html>