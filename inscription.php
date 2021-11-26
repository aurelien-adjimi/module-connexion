<?php

$bdd = mysqli_connect("localhost", "root", "", "moduleconnexion");


if (isset ($_POST['inscription'])) {

    $login = $_POST['login'];
    $prenom = $_POST['prenom'];
    $nom = $_POST['nom']; 
    $password = $_POST['password'];
    $password2 = $_POST['password2'];

    if (!empty( $_POST['login']) && !empty($_POST['prenom']) && !empty($_POST['nom']) && !empty($_POST['password'])) {
    $sql = "INSERT INTO utilisateurs(login, prenom, nom, password) VALUES ('$login', '$prenom', '$nom', '$password')"; 
    $sel = mysqli_query($bdd, "SELECT * FROM utilisateurs WHERE login = '".$_POST['login']."'");
    if (mysqli_num_rows($sel)) {
        exit('Ce login existe déjà');

    }   
        if ($password == $password2) {
            mysqli_query($bdd,$sql);
            header ('Location: ./connexion.php');
            }
            
            if ($password != $password2) {
                echo 'Vérifiez votre mot de passe';
            }
    }
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <title>Inscription</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="./inscription.css">
</head>

<body>
<header>
  <ul>
    <li><a href="./profil.php">Profil</a></li>
    <li><a href="./connexion.php">Connexion</a></li>
    <li><a href="./inscription.php">Inscription</a></li>
    <li><a href="./index.php">Accueil</a></li>
  </ul>
</header>

    <main>

<div align="center">
    <form method="POST" action="">
    <label for="login">Login :</label>
        <br>
            <input type="text" placeholder="Tapez votre login" id="login" name="login" value="<?php if(isset($login)) { echo $login; } ?>" />
    <br><br>
    <label for="prenom">Prénom :</label>
        <br>
            <input type="prenom" placeholder="Tapez votre prénom" id="prenom" name="prenom" value="<?php if(isset($prenom)) { echo $prenom; } ?>" />
    <br><br>
    <label for="nom">Nom :</label>
        <br>
            <input type="nom" placeholder="Tapez votre nom" id="nom" name="nom" value="<?php if(isset($nom)) { echo $nom; } ?>" />
    <br><br>
    <label for="password">Mot de passe :</label>
        <br>
            <input type="password" placeholder="Votre mot de passe" id="mdp" name="password" />
    <br><br>
    <label for="password2">Confirmation du mot de passe :</label>
        <br>
            <input type="password" placeholder="Confirmez votre mdp" id="mdp2" name="password2" />
    <br><br>
         <div class="inp">
            <input  type="submit" name="inscription" value="Je m'inscris" />
        </div>
</div>
    </main>

    <footer>

    </footer>
</body>
</html>