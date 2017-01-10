<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8"/>
		<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet"/>
		<link href="style.css" rel="stylesheet"/>
	</head>
	<body>

<?php 

$adresse = "/home/eddyr/";
$scan = scandir($adresse);

if (isset($_GET['dossier'])) {
		$adresse = $adresse.$_GET['dossier'];
	}
	
$dirs = scandir($adresse);


	
foreach ($dirs as $folder) {
	
	if (!is_dir("/home/eddyr/$folder")) {
		
		if ($folder == ".."){
		
			echo "<img src='images/folder.png'><a href='explorateur.php?dossier='".$_GET['dossier'].">$folder</a><br>";
					
		}
		else {
			
			if (isset($_GET['dossier'])) {
					
				echo "<img src='images/file.png'><a href='explorateur.php?dossier='".$_GET['dossier']."$folder/>$folder</a><br>";
			
			}
	
			else {
					
				echo "<img src='images/file.png'><a href='explorateur.php?dossier='".$_GET['dossier']."'$folder/>$folder</a><br>";
				
			}
	
		}
	}
		
	else {
		echo "<img src='images/folder.png'><a href='explorateur.php?dossier=$folder/'>$folder</a><br>";
	}

}
?>
	</body>
</html>