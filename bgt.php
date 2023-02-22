<!DOCTYPE html>
<html>
 <head>
  <meta charset = "utf-8">
  <title>Barre de recherche</title>
 </head>
 <body>

  <form action = "bgt.php" method = "get">
   <input type = "search" name = "terme">
   <input type = "submit" name = "s" value = "Rechercher">
  </form>
  
  <meta charset="utf-8" />
	<?php
	 
	$bdd = new PDO('mysql:host=127.0.0.1;dbname=biscuiterie;charset=utf8','root','');
	 
	$articles = $bdd->query('SELECT titre FROM articles ORDER BY id DESC');
	if(isset($_GET['q']) AND !empty($_GET['q'])) {
	   $q = htmlspecialchars($_GET['q']);
	   $articles = $bdd->query('SELECT titre FROM articles WHERE titre LIKE "%'.$q.'%" ORDER BY id DESC');
	   if($articles->rowCount() == 0) {
	      $articles = $bdd->query('SELECT titre FROM articles WHERE CONCAT(titre, contenu) LIKE "%'.$q.'%" ORDER BY id DESC');
	   }
	}
	?>
	<form method="GET">
	   <input type="search" name="q" placeholder="Recherche..." />
	   <input type="submit" value="Valider" />
	</form>
	<?php if($articles->rowCount() > 0) { ?>
	   <ul>
	   <?php while($a = $articles->fetch()) { ?>
	      <li><?= $a['titre'] ?></li>
	   <?php } ?>
	   </ul>
	<?php } else { ?>
	Aucun résultat pour: <?= $q ?>...
	<?php } ?>
 </body>
</html>