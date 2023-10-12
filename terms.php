<?php include('./config/config.php'); ?>
<?php
session_start();
?>
<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Conditions d'inscriptions /
    <?php echo $website_name; ?>
  </title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
  <link rel="stylesheet" href="./css/style.css">
  <link rel="stylesheet" href="./css/searchBar.css">
</head>

<body>

  <!-- Header (dispo dans: config -> header.php) -->
  <?php
  $page_active = "terms";
  include('./config/header.php');
  ?>

  <!-- contenu de la page ici -->
  <div class="content-rules">

    <h2><i class="fas fa-pen-to-square"></i> Conditions d'inscriptions</h2>

    <p>
      <u>Veuillez prendre un moment pour lire ces règles.</u>
    </p>

    <p>
      <strong>Rappelez-vous</strong> que nous ne sommes responsables des messages postés par les utilisateurs. Nous ne pouvons pas garantir l’exactitude, l’exhaustivité ou la pertinence des messages et nous ne sommes pas responsables de leurs contenus.
    </p>

    <p>
      <strong>Les messages</strong> expriment les opinions de leurs auteurs, pas nécessairement ceux de ce site. Tout utilisateur qui estime qu’un message posté est répréhensible est encouragé à nous contacter immédiatement via notre <a href="./assistance.php">assistance</a>. Nous avons la possibilité de supprimer les messages répréhensibles et nous ferons tous les efforts pour le faire, dans un temps raisonnable, si nous estimons que cette suppression est nécessaire.
    </p>

    <p>
      <strong>Vous acceptez</strong>, par votre utilisation de ce service, que vous n’utiliserez pas ce site pour écrire des messages qui seraient sciemment<span style="color:#7f8c8d;"><em> faux et/ou diffamatoires, imprécis, abusifs, vulgaires, haineux, harcelants, obscènes, profanes, sexuellement orientés, menaçants, envahissants pour la vie privée d’une personne ou contraires à la loi.</em></span>
    </p>

    <p>
      <strong>Vous acceptez</strong> également de ne poster aucun contenu appartenant à une personne, sauf si le droit d’auteur est détenu par vous ou par ce site.
    </p>

    <p>
      <strong>Nous utilisons</strong> des <a href="./cookies.php">cookies</a> pour vous distinguer des autres utilisateurs de notre site Internet. Cela nous permet de vous offrir une expérience personnalisée lorsque vous naviguez sur ce site.
    </p>
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