<?php include('./config/config.php'); ?>
<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Assistance /
    <?php echo $website_name; ?>
  </title>
</head>

<body>

  <figure>
    <img src="./assets/logo.jpg" alt="Logo du site">
  </figure>

  <!-- Header (dispo dans: config -> header.php) -->
  <?php
  $active_page = "assistance";
  include('./config/header.php');
  ?>

  <main>
    <section>
      <h2>Nous contacter</h2>

      <!-- Formulaire de contact -->
      <form id="contact-form" method="get" action="">
        <!-- Nom -->
        <label for="name">Nom:</label><br>
        <input type="text" id="name" name="name" placeholder="Entrez votre nom" required /> <br><br>

        <!-- Email -->
        <label for="email">Email:</label><br>
        <input type="email" id="email" name="email" placeholder="Entrez votre email" required /> <br><br>

        <!-- Message -->
        <label for="message">Message:</label><br>
        <textarea id="message" name="message" placeholder="Votre Message" required></textarea> <br>

        <!-- Bouton d'envoi -->
        <button type="submit">Envoyer</button>
      </form>
    </section>
  </main>

  <!-- Configuration général du footer: (config -> footer.php) -->
  <footer>
    <?php include('./config/footer.php'); ?>
  </footer>
</body>

</html>