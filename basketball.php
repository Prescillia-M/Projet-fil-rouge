<?php include('./config/config.php'); ?>
<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>BasketBall /
    <?php echo $website_name; ?>
  </title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
  <link rel="stylesheet" href="./css/style.css">
  <link rel="stylesheet" href="./css/searchBar.css">
</head>

<body>

  <!-- Header (dispo dans: config -> header.php) -->
  <?php
  $page_active = "basketball";
  include('./config/header.php');
  ?>

  <!-- contenu de la page ici -->
  <div class="content">
  <div class="actualites">
      <h2>Actualités</h2>
    <img src="./assets/Doncic.jpg" alt="Doncic">
      <h3>Un très, très court retour à Madrid pour Luka Doncic</h3>
    
      <p> NBA – La star des Mavericks n’a joué que cinq minutes contre le Real Madrid, à cause d’une blessure au mollet. « Rien de grave », annonce le Slovène.
      Cinq minutes, douche comprise. Déjà privés de Kyrie Irving, absent pour cette rencontre à cause d’une douleur à l’aine, les fans du Real Madrid n’ont pas beaucoup profité de Luka Doncic, ancienne idole du club, puisque ce dernier n’a joué que cinq petites minutes avant de rejoindre le banc.

                  La star de Dallas était gênée par une blessure au mollet gauche et la décision avait été prise de seulement lui offrir quelques instants sur le parquet de Madrid, le temps tout de même de marquer 9 points.
                  « J’ai attendu ce match tout l’été. À l’exception du fait que je n’ai pas pu jouer plus longtemps, c’était très spécial. Toute la journée a été très spéciale », livre Luka Doncic à Sports Illustrated.
                  Le Slovène a rassuré en déclarant que sa blessure n’était pas « grave », mais ce n’est pas innocent non plus. Déjà parce que son mollet gauche lui avait fait louper plusieurs matches de playoffs en 2022. Ensuite parce que Luka Doncic a traîné un pépin à la cuisse gauche pendant la saison régulière 2022/23, puis à la Coupe du monde.         
                  </p>
                    <img src="./assets/dillon-brooks-rockets.jpg" alt="Dillon">
                    <h3>Dillon Brooks fait ses débuts avec Houston : une expulsion après moins de cinq minutes de jeu…</h3>

                    <p>Premier match avec les Rockets, et première expulsion pour Dillon Brooks. Après moins de cinq minutes de jeu, l’ailier a été renvoyé aux vestiaires pour un coup dans les parties intimes de Daniel Theis…
                    Dillon Brooks avait été expulsé pour un geste similaire sur LeBron James lors des derniers playoffs.
                    « J’essayais de gérer un écran » raconte le « Bad Boy » de Houston. « Je l’ai peut-être touché en dessous de la ceinture. Mais il s’est relevé tout de suite. Je n’en sais rien. C’est bizarre qu’à chaque fois que ça m’arrive, il y ait des sanctions. Je suppose que cela fait partie de la réputation ».
                    En effet. D’autant que les gestes, intentionnels ou pas, de Dillon Brooks, ne sont vraiment pas discrets, et comme les adversaires et les arbitres le surveillent de près, il se fait logiquement sanctionner. Même en présaison.</p>
                    <img src="./assets/zion.jpg" alt="Zion">
                    <h3>Bonne reprise de Zion Williamson</h3>
                    
                    <p>Après Ben Simmons, c’était au tour de Zion Williamson d’effectuer sa grande rentrée. L’ailier-fort All-Star avait manqué les 45 derniers matches de saison régulière, et on l’a retrouvé affûté pour cette reprise face au Magic. En 15 minutes, il signe 12 points, 5 rebonds et 5 rebonds, et les Pelicans menaient d’un point à la mi-temps, avant qu’Orlando ne profite de la mise au repos des stars de New Orleans pour largement remporter la deuxième mi-temps et le match (122-105).
                    « On peut faire du cardio. On peut lever de la fonte. On peut s’entraîner. Mais rien ne remplace le fait de jouer au basket ! » lance Willie Green à propos de son joueur vedette. « Il était bien. Il a fait ce qu’il sait faire. Il crée le contact, et sa gravité crée des brèches. Comme je l’ai dit, je pense que la première mi-temps a été assez solide pour nous ».</p>

                    <img src="./assets/Pelicans.jpg" alt="Pelicans">
                    <h3>Les Pelicans veulent changer de braquet en attaque</h3>
                    <p>La saison dernière, si les Pelicans ont évidemment été plombés collectivement par les absences combinées ou successives de Zion Williamson et Brandon Ingram, ils n’ont pas non plus été aidés par une attaque trop prévisible, souvent immobile et peu efficace (20e de la ligue à l’offensive rating).
                    Autant dire qu’au-delà d’espérer que leur duo Williamson/Ingram reste aussi longtemps que possible en bonne santé, les hommes de Willie Green prévoient de jouer différemment en attaque, notamment plus vite et plus en rythme, avec moins de un-contre-un, afin de perturber au maximum les défenses adverses…
                    « Avec [Brandon Ingram] en possession du ballon et [Zion Williamson] qui court pour poser un écran, que va faire la défense ? » s’interrogeait par exemple le coach de New Orleans, avec une pointe d’excitation. « C’est pareil dans l’autre sens, quand [Zion] a la balle, il reste encore [Brandon] ou CJ [McCollum]. Je pense que nous avons plusieurs manières différentes d’attaquer, mais c’est un luxe d’avoir ces deux gars ensemble sur le terrain. »</p>
      </div>
      <div class="resultat">
        <h2>Résultats</h2>
        <img src="./assets/resultat-basket1.PNG" alt="resultat1">
        <img src="./assets/resultat-basket2.PNG" alt="resultat2">

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