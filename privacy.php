<?php include('./config/config.php'); ?>
<?php
session_start();
?>
<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Politique de confidentialité /
    <?php echo $website_name; ?>
  </title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
  <link rel="stylesheet" href="./css/style.css">
</head>

<body>

  <!-- Header (dispo dans: config -> header.php) -->
  <?php
  $page_active = "privacy";
  include('./config/header.php');
  ?>

  <!-- contenu de la page ici -->
  <div class="content-rules">

    <h2><i class="fas fa-pen-to-square"></i> Conditions d'inscriptions</h2>

    <p>
      Votre vie privée est importante pour nous. Afin de mieux protéger cette dernière, nous fournissons cette notice expliquant nos pratiques concernant vos informations et les choix que vous pouvez faire sur la façon dont vos informations sont collectées et utilisées. Afin de rendre cette notice facile à trouver, nous avons ajouté un lien vers elle dans le pied de page de notre site et à tous les endroits où des informations personnelles peuvent être demandées.<br><br> Des journaux concernant toutes les requêtes sur le serveur web sont maintenus et analysés. Les fichiers des journaux ne stockent pas d’informations personnelles mais contiennent les adresses IP des utilisateurs, qui sont automatiquement reconnues par notre serveur web.<br><br>
      <span style="font-size:18px;"><strong>Cookies</strong></span><br>
      Ce site Internet ne conserve pas d’informations qui nous permettraient, à elles seules, d’identifier les utilisateurs individuels de ce service sans leur permission. Tous les cookies qui peuvent être utilisés par ce site Internet sont utilisés uniquement pour maintenir les sessions ou conserver les préférences des utilisateurs.
      Les cookies ne sont pas partagés avec des tierces personnes.<br>
    </p>
    <p>
      Si vous avez des questions, vous pouvez contacter notre <a href="https://inshare.fr/support/">assistance</a>.
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