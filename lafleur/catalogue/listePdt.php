<?php include'C:\MAMP\htdocs\lafleur\vue\en-tete.php'; ?>
<?php include'C:\MAMP\htdocs\lafleur\vue\menu.php'; ?>
<?php include 'C:\MAMP\htdocs\lafleur\connexion\connexion.php'; ?>
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
<?php include'C:\MAMP\htdocs\lafleur\vue\pied.php'; ?> 

