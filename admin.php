<?php

session_start();

$bdd = mysqli_connect("localhost", "root", "", "moduleconnexion");
$req = mysqli_query($bdd, "SELECT * FROM utilisateurs");
$res = mysqli_fetch_all($req, MYSQLI_ASSOC);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./admin.css">
    <title>Admin</title>
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
<video id="background-video" autoplay loop muted>
      <source
      src="./matrix_xcuQeZwc.mp4"
      type="video/mp4">
    </video>
<table border="1px solid white">
    <thead>
        <tr>
<?php 
foreach($res as $key) {
    foreach($key as $data1 =>$data2) {
        echo '<th>' . $data1 . '</th>';
    }break;
}
?>
        </tr>
    </thead>

    <tbody>

    <?php

foreach($res as $key) {
        echo '<tr>';
    foreach ($key as $data1) {
        echo '<td>' . $data1 . '</td>';
    }
        echo '</tr>';
}
    ?>
    </tbody>
</table>
</main>
</body>
</html>