
<header>
  <nav>
    <ul>
      <li><a <?php
      if(basename($_SERVER['PHP_SELF']) == 'index.php') {
        echo "class=\"active\"";
      }?> href="/index.php">Accueil</a></li>
      <li><a <?php
      if(basename($_SERVER['PHP_SELF']) == 'produits.php') {
        echo "class=\"active\"";
      }?> href="/produits.php">Produits</a></li>
      <li><a <?php
      if(basename($_SERVER['PHP_SELF']) == 'nous.php') {
        echo "class=\"active\"";
      }?> href="/nous.php">Qui est Benzema</a></li>
    </ul>
  </nav>
  <div class="logo serif">
    <span></span>
  </div>
  <div class="social-networks">
    <a href="https://twitter.com/Adnane1070" target="_blank">
      <img src="/assets/twitter.png" alt="twitter-network">
    </a>
  </div>
</header>
