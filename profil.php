<?php

session_start();

   $login = $_SESSION['login'];
   $bdd = mysqli_connect("localhost", "root", "", "moduleconnexion");
   $dn = mysqli_query($bdd, "SELECT * FROM utilisateurs WHERE login = '$login'");
   $array = mysqli_fetch_all($dn, MYSQLI_ASSOC);

foreach($array as $key=>$value);

   if(isset($_POST['submit'])) {

      $log = $_POST['login'];
      $pren = $_POST['prenom'];
      $nom = $_POST['nom'];
      $mdp = $_POST['password1'];
      $pw = $_POST['password2'];
      $req=mysqli_query($bdd, "UPDATE utilisateurs SET login ='$log', prenom ='$pren', nom ='$nom', password= '$mdp' WHERE login= '$login'");
      if($mdp != $pw) {
         echo 'Mot de passe différents';
      }
   }

   if (isset($_POST['deco'])) {
session_start();
session_destroy();
header('location: ./connexion.php');
exit;
   }
   

?>
<html>
   <head>
      <title>Profil</title>
      <meta charset="utf-8">
      <link rel="stylesheet" href="./profil.css">
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
   <div id="form">
   <form action="" method="post" align="center">
   <div class="wrapper">
    <div class="typing-demo"> 
      <h1>Profil de <?php echo $login?></h1>
    </div>
   </div>
         <br /><br />
      <h2>Nom d'utilisateur</h2>
         <input type="text" name="login" id="login" value='<?php echo $login ?>'>

      <h2>Nom</h2>
         <input type="text" name="nom" id="nom" value='<?php echo $value['nom'] ?>'>

      <h2>Prénom</h2>
         <input type="text" name="prenom" id="prenom" value='<?php echo $value['prenom'] ?>'>

      <h2>Mot de passe</h2>
         <input type="password" name="mdp" id="mdp" value='<?php echo $value['password'] ?>'>

      <h2>Modifier mot de passe</h2>
         <input placeholder="Mot de passe" type="password" name="password1" id="password1">
                <br><br><br>

         <input type="password" placeholder="Confirmation" name="password2" id="password2">
                <br><br><br>
         <input name="submit" id="btnsubmit" type="submit" value="Modifier votre profil">
   
         <input name="deco" id="btndeco" type="submit" value="Déconnexion">
      </form>
   </div>
</main>   
            <?php 
            if($login == 'admin') {
               echo '<a style="background-color: black;" href="./admin.php">Page Admin</a>';
            }
            ?>
   </body>
</html>
