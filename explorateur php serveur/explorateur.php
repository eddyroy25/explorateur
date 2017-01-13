<!DOCTYPE html>
<html>
	
	<head>
	
		<meta charset="utf-8"/>
		
		<title>Explorateur de fichiers</title>
		
		<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet"/>
		
		<link href="style.css" rel="stylesheet"/>
		
	</head>
	
	<p class="titre">Explorateur de fichiers</p>
	
	<body id="explorateur" >
	
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
		$target = $adresse.$folder;
		
		// $cartable = "/home/eddyr/maquette_bootstrap/images/cartable.png";
		// $open = fopen($target, "r");
		
			
// header("Content-disposition: attachment; filename="basename(.$target.)")";
// header("Content-type: image/png");
// readfile($target);

		
///sinon		
		if (isset($_GET['dossier'])) {
// si la variable de la méthode get est définie (si elle transmet une adresse)

			
			echo "<div id='content' class='row'><div class='col-lg-12'><img class=icone src='images/file.png'><a class='link' href=http://eddyr.marmier.codeur.online/".$_GET['dossier'].$folder.">$folder</a></div></div>";
			echo "<button class='btn btn-warning col-lg-2'><a download='$folder' href=http://eddyr.marmier.codeur.online/".$_GET['dossier'].$folder.">Télécharger</a></button><br><br>";
	// on affiche 	image fichier + lien vers le dossier et on ajoute le nom du dossier dans l'url
		}



		// else {
	//sinon il envoie sur le dossier ecrit dans l'adresse			
			// echo "<div class='row'><div class='col-lg-12'><img src='images/file.png'><a download='$target' href='explorateur.php?dossier=$folder/'>$folder</a></div></div>";
			
		// }

	
	}
		
	else {
		
		if ($folder == ".."){
// si la ligne est égale à ..	

			if (isset($_GET['dossier'])){
			echo "<div class='row'><div class='col-lg-12'><img class=icone src='images/retour.png'><a href='explorateur.php?dossier=".$_GET['dossier'].$folder."/'>$folder</a></div></div>";
			}
			
			else{
				echo "<div class='row'><div class='col-lg-12'><img class=icone src='images/retour.png'><a href='explorateur.php'>$folder</a></div></div>";
			}
			}   
		
		else if ($folder == "."){
// si la ligne est égale à ..	

			echo "<img class=icone src='images/home.png'><a href='explorateur.php'>$folder</a><br>";
	// on affiche : imagedossier + lien 				
		}
		
		else {
                
                if (isset($_GET['dossier'])){
                    echo "<img class=icone src='images/folder.png'><a href='explorateur.php?dossier=".$_GET['dossier'].$folder."/'>$folder</a><br>";
                    }
                
                else {
                    
                echo "<a href='explorateur.php?dossier=$folder/'><img src='images/folder.png'>$folder</a><br>";
                }
            }
        
      }
  }
  

    // header('Content-Disposition: attachment; filename='.$target.'');
 // $open = fopen(dirname(__FILE__) . $target , "r" );
 // fclose($open);
    // readfile($_GET['dossier'].$folder);
  
  
  
?>

<script src="http://code.jquery.com/jquery-1.11.3.min.js">
</script>
<script>
$(function(){
	$(document).ready(function() {
		
		$(".link").on('click', function(e){
		e.preventDefault();
		console.log("coucou");
			var adresse = $(this).attr("href");
			// var splitadresse = adresse.split('/');
			// console.log(splitadresse);
		$.ajax({
			type : "GET",
			data: "donnees="+adresse,
			url: "script.php",
			success : function(data) {
				$("#ajax").html(data);
			},

		});
		});
	});
});
	

</script>

		</div>
		
		<div id="ajax" class="col-lg-6">

		</div>
			
	</body>
	
</html>