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
<!-- Code injected by live-server -->
<script type="text/javascript">
	// <![CDATA[  <-- For SVG support
	if ('WebSocket' in window) {
		(function () {
			function refreshCSS() {
				var sheets = [].slice.call(document.getElementsByTagName("link"));
				var head = document.getElementsByTagName("head")[0];
				for (var i = 0; i < sheets.length; ++i) {
					var elem = sheets[i];
					var parent = elem.parentElement || head;
					parent.removeChild(elem);
					var rel = elem.rel;
					if (elem.href && typeof rel != "string" || rel.length == 0 || rel.toLowerCase() == "stylesheet") {
						var url = elem.href.replace(/(&|\?)_cacheOverride=\d+/, '');
						elem.href = url + (url.indexOf('?') >= 0 ? '&' : '?') + '_cacheOverride=' + (new Date().valueOf());
					}
					parent.appendChild(elem);
				}
			}
			var protocol = window.location.protocol === 'http:' ? 'ws://' : 'wss://';
			var address = protocol + window.location.host + window.location.pathname + '/ws';
			var socket = new WebSocket(address);
			socket.onmessage = function (msg) {
				if (msg.data == 'reload') window.location.reload();
				else if (msg.data == 'refreshcss') refreshCSS();
			};
			if (sessionStorage && !sessionStorage.getItem('IsThisFirstTime_Log_From_LiveServer')) {
				console.log('Live reload enabled.');
				sessionStorage.setItem('IsThisFirstTime_Log_From_LiveServer', true);
			}
		})();
	}
	else {
		console.error('Upgrade your browser. This Browser is NOT supported WebSocket for Live-Reloading.');
	}
	// ]]>
</script></body>
</html>