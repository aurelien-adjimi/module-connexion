<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bulls Fan</title>
    <link rel="stylesheet" href="./index.css">
</head>
<body>

<!--Navbar dans header -->

<header>
  <ul>
    <li><a href="./profil.php">Profil</a></li>
    <li><a href="./connexion.php">Connexion</a></li>
    <li><a href="./inscription.php">Inscription</a></li>
    <li><a href="#about">Accueil</a></li>
  </ul>
</header>

<!-- Paramètres vidéo background-->

<main>
    <video id="background-video" autoplay loop muted>
      <source
      src="MJD.mp4"
      type="video/mp4">
    </video>
  <div class="texte">
    <h1>CHICAGO BULLS</h1>
  </div>

<!-- Les deux boutons--> 

  <div id="boutons">
    <button class="inscription" type="button">
      <a href="./inscription.php">
        <p class="gauche">Inscription</p>
      </a>
    </button>

    <button class="connexion" type="button">
      <a href="./connexion.php">
        <p class="droite">  Connexion</p>
      </a>
    </button>
    </div>
</main>
<footer>
      <a href="https://github.com/aurelien-adjimi/module-connexion">GitHub</a>
</footer>
</body>
</html>