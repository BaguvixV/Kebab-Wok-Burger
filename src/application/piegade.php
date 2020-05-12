<!DOCTYPE html>
<html>
<head>
	<link rel="icon" type="image/x-icon" href="styles/img/icons8-french-fries-48.png">
	<title>Piegāde</title>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="public/assets/css/piegade.css">
	<link href="https://fonts.googleapis.com/css?family=Kalam&display=swap" rel="stylesheet">
</head>
<body>
	<div class="background">
		<button onClick="location.href='/'" class="uz_sakumu">Uz sākuma lapu</button>
		<div class="table-title">
			<h3>Iespējamās piegādes</h3>
		</div>
		<table class="table-fill">
			<thead>
				<tr>
					<th class="text-left">Pilsēta</th>
					<th class="text-left">Cena</th>
				</tr>
			</thead>
			<tbody class="table-hover">
			<?php
				include('../src/model/mapper/db.php');

				//SELECT ALL PIZZA PRODUCTS
				$stmt = $db_conn->prepare("SELECT * FROM `piegade`");
				$stmt->execute();

				while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
			?>
				<tr>
					<td class="text-left"><?php echo $row['pilseta'];?></td>
					<td class="text-left">€ <?php echo $row['cena'];?></td>
				</tr>
			<?php } ?>
			</tbody>
		</table>

	</div>
</body>
</html>