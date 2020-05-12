<!DOCTYPE html>
<html>
<head>
    <link rel="icon" type="image/x-icon" href="../styles/img/icons8-french-fries-48.png">
	<title>Sušī seti</title>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="public/assets/css/produktu_liste.css">
	<link href="https://fonts.googleapis.com/css?family=Kalam&display=swap" rel="stylesheet">
	<script src="https://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous">
	</script>
	<script src="../public/assets/js/ProduktuListe.js"></script>
</head>
<body class="background">
      
    <button onClick="location.href='/'" class="uz_sakumu">Uz sākuma lapu</button>
    <div class="produktu_liste_susi-seti">

		<?php
			include('../src/model/mapper/db.php');
			
			$stmt = $db_conn->prepare("SELECT * FROM `produkti` WHERE `produkti`.`kategorija_id` = 'Sušī-seti'");
			$stmt->execute();

			while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
		?>

		<!-- PRODUKTA APRAKSTS -->
		<div class="sastavdalas">
			<div class="sastavdalas-content">
				<div class="sastavdalas-header">
					<button class="close">x</button>
					<div class="modal-title">...</div>
				</div>
				<div class="modal-sastavdalas">
					<p>...</p>
				</div>
			</div>
		</div>

		<div class="product-list">
			<div class="product-card">
				<div class="image"><img src="../assets/img/pizza01.jpeg" alt="Pica01"></div>
				<div class="product-title">
					<h2><?php echo $row['nosaukums'];?></h2>
				</div>
				<div class="product-sastavdalas">
					<p><?php echo $row['sastavdalas'];?></p>
					<p class="alergeni">Alergēni: <?php echo $row['alergeni'];?></p>
				</div>
				<div>
					<p><?php echo $row['izmers_svars'];?></p>
					<p>Cena: <?php echo $row['cena'];?> EUR</p>
					<button class="show-sastavdalas">Sastāvdaļas</button>
					<button>Ielikt grozā</button>
				</div>
			</div>
		</div>
		<?php } ?>
	</div>
</body>
</html>