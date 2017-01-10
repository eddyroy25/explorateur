<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8"/>
		<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet"/>
		<link href="style.css" rel="stylesheet"/>
	</head>
	<body>

<?php 

$var = $_GET['var'];

if(strlen($var)==0){

$var='.';

}

$adresse = "/home/eddyr/";
$scan = scandir($adresse);
foreach ($scan as $folder) {
	
	if (is_file("/home/eddyr/$folder")) {
		
	echo "<img src='images/file.png'><a href='../home/eddyr/$folder/'>$folder</a><br>";
	
	}
	
	else {
		
		echo "<img src='images/folder.png'><a href='../home/eddyr/$folder/'>$folder</a><br>";
	}
	
}


?>


</body>
</html>


