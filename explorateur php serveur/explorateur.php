<!DOCTYPE html>
<html>
	
	<head>
	
		<meta charset="utf-8"/>
		
		<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet"/>
		
		<link href="style.css" rel="stylesheet"/>
		
	</head>
	
	<body>
	
		<div class="container">
		
<?php 

$adresse = "/home/eddyr/";

//url de base

if (isset($_GET['dossier'])) {
		$adresse = $adresse.$_GET['dossier'];
	}
// si le dossier est trouvé, l'adresse devient l'adresse de départ suivi du nom du dossier.	
$dirs = scandir($adresse);
// $dirs contenu de l'adresse
// scandir récupère en tableau toutes les données

	
foreach ($dirs as $folder) {
//pour chaque contenu d'adresse defini comme la variable $folder (valeur d'une ligne du tableau)	
	if (!is_dir($adresse.$folder)) {
// si l'adresse visée n'est pas un dossier (donc est un fichier	)	
		
		
///sinon		
		if (isset($_GET['dossier'])) {
// si la variable de la méthode get est définie (si elle transmet une adresse)

			echo "<div class='row'><div class='col-lg-12'><img src='images/file.png'><a href='explorateur.php?dossier='".$_GET['dossier']."$folder/>$folder</a></div></div>";
	// on affiche 	imagedossier + lien vers le dossier et on ajoute le nom du dossier dans l'url
		}



		else {
	//sinon il envoie sur le dossier ecrit dans l'adresse			
			echo "<div class='row'><div class='col-lg-12'><img src='images/file.png'><a href='explorateur.php?dossier=$folder/'>$folder</a></div></div>";
			
		}

	
	}
		
	else {
		
		if ($folder == ".."){
// si la ligne est égale à ..	

			if (isset($_GET['dossier'])){
			echo "<div class='row'><div class='col-lg-12'><img src='images/retour.png'><a href='explorateur.php?dossier=".$_GET['dossier'].$folder."/'>$folder</a></div></div>";
			}
			
			else{
				echo "<div class='row'><div class='col-lg-12'><img src='images/retour.png'><a href='explorateur.php'>$folder</a></div></div>";
			}
			}   
		
		else if ($folder == "."){
// si la ligne est égale à ..	

			echo "<img src='images/home.png'><a href='explorateur.php'>$folder</a><br>";
	// on affiche : imagedossier + lien 				
		}
		
		else {
	//sinon on reste sur l'url actuelle (si c'est un dossier)
		echo "<img src='images/folder.png'><a href='explorateur.php?dossier=".$_GET['dossier'].$folder."/'>$folder</a><br>";
		}
	}

}
?>
			</div>
			
	</body>
	
</html>