<?php
/**
 * Export to PHP Array plugin for PHPMyAdmin
 * @version 5.0.4
 */

/**
 * Database `lafleur`
 */

/* `lafleur`.`categorie` */
$categorie = array(
  array('id' => 'bul','libelle' => 'Bulbes'),
  array('id' => 'mas','libelle' => 'Plantes &agrave; massif'),
  array('id' => 'ros','libelle' => 'Roses')
);

/* `lafleur`.`employe` */
$employe = array(
  array('matricule' => 'e001','nom' => 'dubois','prenom' => 'roland','cadre' => 'o','service' => 's01'),
  array('matricule' => 'e002','nom' => 'gernau','prenom' => 'patricia','cadre' => 'o','service' => 's01'),
  array('matricule' => 'e003','nom' => 'louvel','prenom' => 'marc','cadre' => 'n','service' => 's01'),
  array('matricule' => 'e004','nom' => 'maurel','prenom' => 'jeanne','cadre' => 'n','service' => 's01'),
  array('matricule' => 'e005','nom' => 'dubosc','prenom' => 'alain','cadre' => 'n','service' => 's02'),
  array('matricule' => 'e006','nom' => 'parent','prenom' => 'sptéphanie','cadre' => 'n','service' => 's02'),
  array('matricule' => 'e007','nom' => 'potier','prenom' => 'jean','cadre' => 'o','service' => 's02'),
  array('matricule' => 'e008','nom' => 'fauvel','prenom' => 'anne','cadre' => 'o','service' => 's03'),
  array('matricule' => 'e009','nom' => 'nouvion','prenom' => 'patrick','cadre' => 'n','service' => 's03'),
  array('matricule' => 'e010','nom' => 'arsane','prenom' => 'marie','cadre' => 'n','service' => 's04'),
  array('matricule' => 'e1','nom' => 'dubois','prenom' => 'roland','cadre' => 'o','service' => 's04')
);

/* `lafleur`.`produit` */
$produit = array(
  array('id' => 'c01','description' => 'Panier de fleurs variées','prix' => '53.00','image' => 'images/plantes2/aniwa.gif','idCategorie' => 'bul'),
  array('id' => 'c02','description' => 'Coup de charme jaune','prix' => '38.00','image' => 'images/plantes2/kos.gif','idCategorie' => 'bul'),
  array('id' => 'c03','description' => 'Bel arrangement de fleurs de saison','prix' => '68.00','image' => 'images/plantes2/loth.gif','idCategorie' => 'bul'),
  array('id' => 'c04','description' => 'Coup de charme vert','prix' => '41.00','image' => 'images/plantes2/luzon.gif','idCategorie' => 'bul'),
  array('id' => 'c05','description' => 'Très beau panier de fleurs précieuses','prix' => '98.00','image' => 'images/plantes2/makin.gif','idCategorie' => 'bul'),
  array('id' => 'c06','description' => 'Bel assemblage de fleurs précieuses','prix' => '68.00','image' => 'images/plantes2/mosso.gif','idCategorie' => 'bul'),
  array('id' => 'c07','description' => 'Présentation prestigieuse','prix' => '128.00','image' => 'images/plantes2/rawaki.gif','idCategorie' => 'bul'),
  array('id' => 'f01','description' => 'Bouquet de roses multicolores','prix' => '58.00','image' => 'images/plantes3/comores.gif','idCategorie' => 'ros'),
  array('id' => 'f02','description' => 'Bouquet de roses rouges','prix' => '50.00','image' => 'images/plantes3/grenadines.gif','idCategorie' => 'ros'),
  array('id' => 'f03','description' => 'Bouquet de roses jaunes','prix' => '78.00','image' => 'images/plantes3/mariejaune.gif','idCategorie' => 'ros'),
  array('id' => 'f04','description' => 'Bouquet de petites roses jaunes','prix' => '48.00','image' => 'images/plantes3/mayotte.gif','idCategorie' => 'ros'),
  array('id' => 'f05','description' => 'Fuseau de roses multicolores','prix' => '63.00','image' => 'images/plantes3/philippines.gif','idCategorie' => 'ros'),
  array('id' => 'f06','description' => 'Petit bouquet de roses roses','prix' => '43.00','image' => 'images/plantes3/pakopoka.gif','idCategorie' => 'ros'),
  array('id' => 'f07','description' => 'Panier de roses multicolores','prix' => '78.00','image' => 'images/plantes3/seychelles.gif','idCategorie' => 'ros'),
  array('id' => 'p01','description' => 'Plante fleurie','prix' => '43.00','image' => 'images/plantes1/antharium.gif','idCategorie' => 'mas'),
  array('id' => 'p02','description' => 'Pot de phalaonopsis','prix' => '58.00','image' => 'images/plantes1/galante.gif','idCategorie' => 'mas'),
  array('id' => 'p03','description' => 'Assemblage paysagé','prix' => '103.00','image' => 'images/plantes1/lifou.gif','idCategorie' => 'mas'),
  array('id' => 'p04','description' => 'Belle coupe de plantes blanches','prix' => '128.00','image' => 'images/plantes1/losloque.gif','idCategorie' => 'mas'),
  array('id' => 'p05','description' => 'Pot de mitonia mauve','prix' => '83.00','image' => 'images/plantes1/papouasi.gif','idCategorie' => 'mas'),
  array('id' => 'p06','description' => 'Pot de phalaonopsis blanc','prix' => '58.00','image' => 'images/plantes1/pionosa.gif','idCategorie' => 'mas'),
  array('id' => 'p07','description' => 'Pot de phalaonopsis rose mauve','prix' => '58.00','image' => 'images/plantes1/sabana.gif','idCategorie' => 'mas')
);

/* `lafleur`.`service` */
$service = array(
  array('code' => 's01','designation' => 'fabrication'),
  array('code' => 's02','designation' => 'emballage'),
  array('code' => 's03','designation' => 'commercial'),
  array('code' => 's04','designation' => 'administration')
);
