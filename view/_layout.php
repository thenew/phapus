<!DOCTYPE HTML>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <title>PHaPus</title>
  <link rel="stylesheet" href="assets/css/z-all.css" />
</head>
<body>
    <header id="header">
        <div class="logo h1"><a href="/?action=default">PHaPus</a></div>
        <small class="baseline"><em>Better than platypus</em></small>
        <nav class="cssn_mainnav">
            <ul class="cssn_mainmenu">
                <li><a href="#">Accueil</a></li>
                <li><a href="?action=IndexPost">Posts</a></li>
            </ul>
        </nav>
    </header>

  <div class="block-content">
    <?php
      include('view/' .$this->view . '.php');
    ?>
  </div>
  <footer id="footer">
    Rémy Barthez 2012
  </footer>
</body>
</html>