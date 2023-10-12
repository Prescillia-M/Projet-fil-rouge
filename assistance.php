<?php include('./config/config.php'); ?>
<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Assistance /
    <?php echo $website_name; ?>
  </title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
  <link rel="stylesheet" href="./css/style.css">
  <link rel="stylesheet" href="./css/searchBar.css">
</head>

<body>

  <!-- Header (dispo dans: config -> header.php) -->
  <?php
  $page_active = "assistance";
  include('./config/header.php');
  ?>

  <!-- contenu de la page ici -->
  <div class="content">

    <div class="contactus">
      <div class="box-contactus">
        <h2>Nous contacter</h2>

        <form action="./formulaire.php">
          <label for="name"><i class="fas fa-address-card"></i> Nom d'utilisateur:</label><br>
          <input type="text" name="name" id="name" placeholder="Entrez votre nom d'utilisateur" require /><br><br>
          <label for="object"><i class="fas fa-box-archive"></i> Objet:</label><br>
          <select name="object" id="object" required>
            <option value="" disabled selected hidden>Choisissez votre objet</option>
            <option value="choix1">Demande de renseignement</option>
            <option value="choix2">Demande de partenariat</option>
            <option value="choix3">Je souhaite supprimer mon compte</option>
            <option value="choix4">Signaler un bug</option>
            <option value="choix5">Autre demande</option>
          </select>
          <br><br>
          <label for="email"><i class="fas fa-at"></i> Adresse email:</label><br>
          <input type="email" name="email" id="email" placeholder="Entrez votre adresse email" require /><br><br>
          <label for="message"><i class="fas fa-envelope"></i> Votre demande:</label><br>
          <textarea name="message" id="message" placeholder="Entrez votre demande" require></textarea>
          <input type="submit" value="Envoyer ma demande">
        </form>
      </div>
      <div class="box-contactus">
        <h2>Pourquoi nous contacter ?</h2>

        <p>Contactez-nous pour obtenir de l'aide personnalisée et des réponses à vos questions. Notre équipe d'experts
          est là pour vous assister à chaque étape du processus.</p>
        <p>Nous sommes à votre disposition pour discuter de vos besoins spécifiques et trouver des solutions sur mesure.
          N'hésitez pas à nous contacter pour explorer comment nous pouvons vous aider.</p>
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