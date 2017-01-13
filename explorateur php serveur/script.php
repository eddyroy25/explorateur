<?php

$url = $_GET["donnees"]; //je récupère les données dans explorateur.php
$exp = explode(".", $url); //je récupère l'extension des données(après le ".")
$exp = array_reverse($exp); // j'inverse le tableau

echo ".",$exp[0]; //on affiche le 1er élément du tableau 

$extension = ".".$exp[0]; // je crée la variable pour l'extension


if ($url !== null) { //si on récupère des données

	if ($extension == ".png" || $extension == ".jpg" || $extension == ".jpeg") { //si l'extension = png ou jpg ou jpeg
echo "bonjour";
	echo "<img src='".$url."'>"; //on affiche les données sous forme d'image
	
	}
	
	// else if ($exp == ".html") {
		
	// }
}
?>