<!-- Navigation générale du site -->
<div class="sidebar">
    <nav>
      <ul>
        <button id="toggle-theme"></button>
        <h2><i class="fas fa-list"></i> Navigation</h2><br>
        <li><a href="./index.php" <?php if ($page_active === "accueil") echo 'class="active"'; ?>><i class="fas fa-link"></i> Accueil</a></li>
        <li><a href="./automobile.php" <?php if ($page_active === "automobile") echo 'class="active"'; ?>><i class="fas fa-link"></i> Automobile</a></li>
        <li><a href="./basketball.php" <?php if ($page_active === "basketball") echo 'class="active"'; ?>><i class="fas fa-link"></i> BasketBall</a></li>
        <li><a href="./boxe.php" <?php if ($page_active === "boxe") echo 'class="active"'; ?>><i class="fas fa-link"></i> Boxe</a></li>
        <li><a href="./cyclisme.php" <?php if ($page_active === "cyclisme") echo 'class="active"'; ?>><i class="fas fa-link"></i> Cyclisme</a></li>
        <li><a href="./tennis.php" <?php if ($page_active === "tennis") echo 'class="active"'; ?>><i class="fas fa-link"></i> Tennis</a></li>
      </ul>
    </nav>
  </div>
  
<!-- Bouton recherche -->
<div class="search">
  
    <input onkeyup="search_sport()" id="searchBar" type="text" name="query" placeholder="Entrez votre recherche" />
    <ol id='list'>
      <li class="sport"><a href="./basketball.php">basketball</a></li>
      <li class="sport"><a href="./automobile.php">automobile</a></li>
      <li class="sport"><a href="./tennis.php">tennis</a></li>
      <li classe="sport"><a href="./boxe.php">boxe</a></li>
      <li class="sport"><a href="./cyclisme.php">cyclisme</a></li>
    </ol>
    <button type="submit">
      <i class="fa fa-search"></i>
    </button>
  
</div>

<header class="header-top">

  <!-- Logo -->
  <div class="logo">
    <a href="./"><img src="./assets/logo.png" alt="Logo du site" class="logo" width="100px"></a>
  </div>

    <!-- Bouton Connexion / Assistance -->
  <a href="./login.php"><button class="login-btn"><i class="fas fa-key"></i> Connexion / Inscription</button></a>
  <a href="./assistance.php"><button class="help-btn"><i class="fas fa-life-ring"></i> Assistance</button></a>

  <!-- Script pour changer le thème (dark/light) -->
  
  <script src="./js/mode.js"></script>
  <script src="./js/searchBar.js"></script>
  </header>
  