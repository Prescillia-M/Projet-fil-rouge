<div class="sidebar">
    <nav>
      <ul>
        <button id="toggle-theme"></button>
        <h2><i class="fas fa-list"></i> Navigation</h2><br>
        <li><a href="./index.php" <?php if ($page_active === "accueil") echo 'class="active"'; ?>><i class="fas fa-link"></i> Accueil</a></li>
        <li><a href="#" <?php if ($page_active === "automobile") echo 'class="active"'; ?>><i class="fas fa-link"></i> Automobile</a></li>
        <li><a href="#" <?php if ($page_active === "basketball") echo 'class="active"'; ?>><i class="fas fa-link"></i> BasketBall</a></li>
        <li><a href="#" <?php if ($page_active === "boxe") echo 'class="active"'; ?>><i class="fas fa-link"></i> Boxe</a></li>
        <li><a href="./cyclisme.php" <?php if ($page_active === "cyclisme") echo 'class="active"'; ?>><i class="fas fa-link"></i> Cyclisme</a></li>
        <li><a href="#" <?php if ($page_active === "tennis") echo 'class="active"'; ?>><i class="fas fa-link"></i> Tennis</a></li>

      </ul>
    </nav>
  </div>
  <header class="header-top">
    <div class="logo">
      <a href="./"><img src="/Projet-fil-rouge/asets/logo.jpg" alt="Logo du site"></a>
    </div>
    <script src="./js/mode.js"></script>
  </header>