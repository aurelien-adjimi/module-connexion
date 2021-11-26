<?php

session_start();
 
$bdd = mysqli_connect("localhost", "root", "", "moduleconnexion");
 
if(isset($_POST['formconnexion'])) {

   $loginconnect = ($_POST['loginconnect']);
   $mdpconnect = ($_POST['mdpconnect']);
   $res = mysqli_query($bdd,"SELECT * FROM utilisateurs");
   $array= mysqli_fetch_all($res,MYSQLI_ASSOC);

   foreach($array as $key =>$value)

if ($mdpconnect == $value['password'] && $loginconnect == $value['login']) {
      $_SESSION['login'] = $loginconnect;
      header ('Location: ./profil.php');
   }

   if($mdpconnect!=$value['password']) {
      echo 'Mauvais mot de passe';
   }
}
      

?>
<html>
   <head>
      <title>Connexion</title>
      <meta charset="utf-8">
      <link rel="stylesheet" href="./connexion.css">
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
   <div class="conn">
      <h2>
         <span style="--i:1;">C</span>
         <span style="--i:2;">0</span>
         <span style="--i:3;">N</span>
         <span style="--i:4;">N</span>
         <span style="--i:5;">E</span>
         <span style="--i:6;">X</span>
         <span style="--i:7;">I</span>
         <span style="--i:8;">O</span>
         <span style="--i:9;">N</span>
      </h2>
      </div>
   <div id="formulaire" align=center>
      <div align=center>
         <form method="POST" action="">
            <div class="inp">
            <input  type="text" name="loginconnect" placeholder="Entrez votre login" />
            <input  type="password" name="mdpconnect" placeholder="Mot de passe" />
            </div>
            <br /><br />
            <div class="inp2">
               <input type="submit" name="formconnexion" value="Se connecter !" />
            </div>
         </form>
         <?php
         if(isset($erreur)) {
            echo '<font color="red">'.$erreur."</font>";
         }
         ?>
</main>
</div>
      </div>
   </body>
</html>