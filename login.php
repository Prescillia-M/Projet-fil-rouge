<?php include('./config/config.php'); ?>
<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Connexion ou Inscription / <?php echo $website_name; ?></title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
  <link rel="stylesheet" href="./css/style.css">
</head>

<body>

  <!-- Header (dispo dans: config -> header.php) -->
  <?php
  $page_active = "login";
  include('./config/header.php');
  ?>

  <!-- contenu de la page ici -->
  <div class="content">


  <div class="contactus">
      <div class="box-contactus">
        <h2>Connexion</h2>

        <form action="./traitement_connection.php" method="post">
          <label for="email-login"><i class="fas fa-at"></i> Adresse email:</label><br>
          <input type="email" name="email" id="email-login" placeholder="Votre adresse email" require /> <br><br>
          <label for="password-login"><i class="fas fa-eye-slash"></i> Mot de passe:</label><br>
          <input type="password" name="password" id="password-login" placeholder="Mot de passe" require /> <br><br>
          <input type="submit" value="Connexion">
        </form>
      </div>
      <div class="box-contactus">
        <h2>Inscription</h2>

        <form action="./traitement_inscription.php" method="post">
          <label for="name-singup"><i class="fas fa-user"></i> Nom d'utilisateur:</label><br>
          <input type="name" name="name" id="name-singup" placeholder="Votre nom d'utilisateur" require /> <br><br>
          <label for="email-singup"><i class="fas fa-at"></i> Adresse email:</label><br>
          <input type="email" name="email" id="email-singup" placeholder="Votre adresse email" require /> <br><br>
          <label for="password-singup"><i class="fas fa-eye-slash"></i> Mot de passe:</label><br>
          <input type="password" name="password" id="password-singup" placeholder="Mot de passe" require /> <br><br>
          <input type="submit" value="Inscription">
        </form>
      </div>
    </div>

  </div>

  <!-- Configuration des cookies. (config -> cookies.php) -->
  <?php include('./config/cookies.php'); ?>

  <!-- Configuration général du footer: (config -> footer.php) -->
  <footer>
    <?php include('./config/footer.php'); ?>
  </footer>
</body>

</html>