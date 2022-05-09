<?php  require_once 'header.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/custom.css">
    <title>Register</title>
</head>
<body style="background-image: url('https://wallpaperaccess.com/full/1788826.jpg')">
    <center>
      <form style="padding: 50px; border: 3px solid black; width: 35%; box-shadow: 5px 10px grey; border-radius: 20px; background-color: white" action ="inc/registeruser.php" method="POST">
          <fieldset>
              <legend>Inscription</legend>
              <div>
                  <input type="text" name="nom" placeholder="Votre nom" style="border-radius: 10px; width: 75%"> <br>
                  <div style="padding-top: 10px"></div>
                  <input type="text" name="prenom" placeholder="Votre prénom" style="border-radius: 10px; width: 75%"> <br>
                  <div style="padding-top: 10px"></div>
                  <input type="text" name="email" placeholder="Email" style="border-radius: 10px; width: 75%"> <br>
                  <div style="padding-top: 10px"></div>
                  <input type="password" name="mdp" placeholder="Mot de passe" style="border-radius: 10px; width: 75%"> <br>
                  <div style="padding-top: 10px"></div>
                  <input type="submit" name="envoi" value="Envoyer" style="border-radius: 10px;">
              </div>
          </fieldset>
      </form>
    </center>
</body>
</html>
