<?php include('./config/config.php'); ?>
<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Boxe /
    <?php echo $website_name; ?>
  </title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
  <link rel="stylesheet" href="./css/style.css">
  <link rel="stylesheet" href="./css/content.css">
</head>

<body>

  <!-- Header (dispo dans: config -> header.php) -->
  <?php
  $page_active = "boxe";
  include('./config/header.php');
  ?>

  <!-- contenu de la page ici -->
  
  <div class="content">
      <div class="actualites">
      <h2>Actualités</h2>
    <img src="./assets/Alvarez.jpg" alt="alvarez">
      <h3>Canelo Alvarez conserve ses quatre ceintures de champion IBF, WBA, WBC et WBO des super-moyens.</h3>
    
      <p> La superstar mexicaine de la boxe Saul Canelo Alvarez a largement dominé aux points l’Américain
                    Jermell
                    Charlo samedi à Las Vegas (Nevada, Etats-Unis) pour rester le champion incontesté des super-moyens.
                    Supérieur pendant tout le combat, “Canelo” (33 ans), pour sa 60e victoire professionnelle (2 nuls, 2
                    défaites) a fait poser un genou à terre à son adversaire, venu de la catégorie des super-welters,
                    plus
                    légers, pour l’affronter. Les trois juges l’ont désigné large vainqueur 119-108, 118-109 et 118-109.
                    “On a travaillé dur pendant trois mois, sans ma famille. J’aime toujours la boxe. La boxe c’est ma
                    vie, ça a
                    fait de moi la personne que je suis aujourd’hui”, a déclaré Alvarez après le combat .
                    Le Mexicain garde ainsi ses quatre ceintures de champion IBF, WBA, WBC et WBO des super-moyens
                    (moins de
                    76,203 kg) que lui contestait Charlo (33 ans), champion incontesté lui des super-welters (moins de
                    69,853
                    kg), soit deux catégories d’écart. Toujours sur l’avancée, “Canelo” n’a pas réussi à mettre KO son
                    adversaire, mais lui a fait poser un genou à terre après un puissant crochet du droit lors de la 7e
                    reprise
                    (sur 12).</p>
                    <img src="./assets/tony-yoka.webp" alt="yoka">
                    <h3>Tony Yoka, un nouveau départ</h3>

                    <p>Tony Yoka, champion olympique de Rio en 2016, a récemment changé d’entraîneur et est désormais suivi par Don Charles. Le boxeur français reste sur deux défaites consécutives, tandis que son prochain adversaire, Ryad Merhy, présente un bilan de 31 victoires, dont 26 avant la limite, et 2 défaites. Le dernier combat de Yoka remonte à mai 2023, où il a perdu aux points contre Kevin Lerena à Johannesburg pour la ceinture WBC Silver des bridgerweight. Yoka compte 11 victoires et reste sur deux défaites: en mai 2022 face au Congolais Martin Bakole (aux points), le premier revers de sa carrière professionnelle, puis en mars dernier contre le Camerounais Carlos Takam. Tony Yoka a déclaré dans une interview à Canal + qu’il avait besoin d’un nouveau challenge et d’un nouveau départ dans sa carrière sportive.Il s’entraînait depuis cinq ans aux États-Unis et est aujourd’hui installé à Finchley dans le nord de Londres.</p>

                    <img src="./assets/ramirez.jpg" alt="ramirez">
                    <h3>Ramirez VS Smith.JR</h3>
                    <p>Joe Smith Jr. a fait ses débuts dans la division cruiserweight contre Gilberto ‘Zurdo’ Ramirez dans un affrontement captivant de dix rounds. Les scores des juges ne reflètent pas le combat exceptionnel et ne donnent pas de crédit à Smith Jr. .
                    Smith Jr. revenait sur le ring après une période difficile de 16 mois de chagrins personnels, y compris le meurtre de son jeune frère Alex en mai dernier. Joe DeGuardia, président de Star Boxing et promoteur de longue date de Smith, a déclaré que Joe continue de montrer qu’il est un combattant de haut niveau.
                    « Cependant, nous nous concentrons sur l’action passionnante que Joe propose sur le ring – il est de retour et je m’attends à ce qu’il soit encore plus fort dans un avenir proche et nous chercherons une revanche de ce combat très excitant. »</p>

                    <img src="./assets/amanda-serrano.webp" alt="serrano">
                    <h3>Boxe. Les féminines réclament des combats à 12 rounds de trois minutes comme pour les hommes</h3>
                    <p>Dans un communiqué sur les réseaux sociaux, la boxeuse américaine Amanda Serrano réclame le droit de choisir de disputer ses combats 12 rounds de 3 minutes comme ses homologues masculins. Une vingtaine d’anciennes et actuelles boxeuses se sont jointes à cette déclaration tandis que la fédération internationale de boxe anglaise refuse toujours ce format.</p>
      </div>
      <div class="resultat">
        <h2>Résultats</h2>
        <img src="./assets/resultat-boxe1.PNG" alt="resultat1">
        <img src="./assets/resultat-boxe2.PNG" alt="resultat2">
        <img src="./assets/resultat-boxe3.PNG" alt="resultat3">
        <img src="./assets/resultat-boxe4.PNG" alt="resultat4">
        <img src="./assets/resultat-boxe5.PNG" alt="resultat5">
      
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