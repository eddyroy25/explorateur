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
foreach ($scan as $folder) {
	
	if (!is_dir("/homr/eddyr/$folder")) {
		
	echo $folder."<br>";
	
	}
	
	else {
		
		echo $folder."<br>";
	}
	
}


?>


</body>
</html>


