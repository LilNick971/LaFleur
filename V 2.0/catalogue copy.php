<html>
<head>
<title>Lafleur - Nos compositions</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<link rel="stylesheet" href="css/main.css" type="text/css" media="all"/>
</head>
<body>
  
<div id="page">
  <div id="header">
    <div id="bandeau"> <img src="images/lafleur.gif" alt="Lafleur" width="128" height="128"/> </div>
    <div id="menu">
      <ul>
        <li><a href="index.php">Accueil</a></li>
        <li><a href="catalogue.php" >Voir le catalogue</a></li>
        <li><a href="panier.php" >Votre panier</a></li>
        <li><a href="connexion.php" >Se connecter</a>
      </ul>
    </div>
  </div>
  <div id="content">
  <?php 
 echo "<table id='produits'>"; 
 // Création de la requête 
 $requete = $pdo->query("SELECT * FROM produit 
 where idcategorie='$_GET[categ]' "); 
 // Traitement du résultat de cette requête 
 while( $ligne = $requete->fetch() ) { 
 echo "<tr>"; 
 echo "<td>$ligne[id] </td>"; 
 echo "<td>$ligne[description]</td>"; 
 echo "<td>$ligne[prix] Euros</td>"; 
 echo "<td><img src=$ligne[image] 
 alt='Lafleur - .$ligne[description]' </td>"; 
 echo "</tr>"; 
 } 
 echo "</table"; 
 unset($pdo); 
 unset($requete); 
 ?> 
</div>
</body>
</html>