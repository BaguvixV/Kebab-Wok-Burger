<!DOCTYPE html>
<html>
<head>
	<link rel="icon" type="image/x-icon" href="styles/img/icons8-french-fries-48.png">
	<title>Alergēni</title>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="public/assets/css/alergeni.css">
	<link href="https://fonts.googleapis.com/css?family=Kalam&display=swap" rel="stylesheet">
</head>
<body>
	<a href="https://www.freepik.com/free-photos-vectors/background" class="freepik">Background photo created by freepik - www.freepik.com</a>

	<button onClick="location.href='/'" class="uz_sakumu">Uz sākuma lapu</button>
	<div class="alergeni">
		<div class="content">
			<h1>Alergēni</h1>
			
			<?php
				include('../src/model/mapper/db.php');

				//SELECT ALL PIZZA PRODUCTS
				$stmt = $db_conn->prepare("SELECT * FROM `alergeni`");
				$stmt->execute();

				while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
			?>

			<p><a class="alerg-color"><?php echo $row['alergena_identifikacija'];?> </a><?php echo $row['apraksts'];?></p>

			<?php } ?>
		</div>
	</div>
</body>
</html>