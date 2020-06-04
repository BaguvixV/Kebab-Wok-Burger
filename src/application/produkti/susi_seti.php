<!DOCTYPE html>
<html>
<head>
   <title>Sušī seti</title>
	<meta charset="UTF-8">
	<link rel="icon" type="image/x-icon" href="/public/assets/img/ikonas/icons8-french-fries-48.png">
   <link rel="stylesheet" type="text/css" href="public/assets/css/produkti.css">
   <link href="https://fonts.googleapis.com/css?family=Kalam&display=swap" rel="stylesheet">
   <script src="https://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
      crossorigin="anonymous"></script>
   <script src="public/assets/js/produkti.js"></script>
</head>
<body>
   <nav class="main-header">
      <ul>
         <li>
            <button class="button-nav" onClick="location.href='/kontakti'" class="btn-space">Vai ir kādi jautājumi?</button>
         </li>
         <li href="#" onclick="openSlideMenu()"><button class="button-nav">Produktu izvēlne</button></li>
         <div id="side-menu" class="side-nav">
            <a href="#" class="btn-close" onclick="closeSlideMenu()">&times;</a>
            <a href="/picas">Picas</a>
            <a href="/burgeri">Burgeri</a>
            <a href="/kebabi">Kebabi</a>
            <a href="/wok">WOK</a>
            <a href="/susi">Sušī</a>
            <a href="/karstie_susi">Karstie sušī</a>
            <a href="/susi_seti">Sušī seti</a>
            <a href="/citi_edieni">Citi ēdieni</a>
            <a href="/uzkodas">Uzkodas</a>
         </div>
         <li>
            <button class="button-nav" onClick="location.href='/'" class="btn-space">Glevanā lapa</button>
         </li>
         <li>
            <button class="button-nav" onClick="openNav()">&#128722; Grozs</button>
         </li>

      </ul>
   </nav>

   <aside id="mySidenav">

      <section>
         <a href="javascript:void(1)" class="closebtn" onclick="closeNav()">&times;</a>
         <h2 class="section-header">Grozs</h2>
         <div class="cart-row">
            <span class="cart-item cart-header cart-column">Produkts</span>
            <span class="cart-price cart-header cart-column">Cena</span>
            <span class="cart-quantity cart-header cart-column">Skaits</span>
         </div>
         <div class="cart-items">
            <!-- displaying here products from `produkti.js` JavcaScript code -->
         </div>
         <div class="cart-total">
            <strong class="cart-total-title">Kopā</strong>
            <span class="cart-total-price">€0</span>
         </div>
      </section>

      <section>
         <div class="aside-section-2">
            <h2>Aizpildiet šos laukus lai apstiprinātu pirkumu</h2>
            <form action="#" class="form" method="post" name="form-submit" onsubmit="return validateForm()">
               <div class="form-group">
                  <label>Vārds, uzvārds:</label>
                  <input type="text" name="name" placeholder="Jūsu vārds un uzvārds ..." />
               </div>
               <div class="form-group">
                  <label>Epasts:</label>
                  <input type="text" name="email" placeholder="Ievadiet jūsu epastu ..." />
               </div>
               <div class="form-group">
                  <label>Numurs:</label>
                  <input type="text" name="subject" placeholder="Telefona numurs ..." />
               </div>
               <div class="form-group">
                  <label>Adrese:</label>
                  <input type="text" name="city" placeholder="Adresse uz kuru sūtīt pasūtījumu ..." />
               </div>
               <div class="form-group">
                  <button class="button02 btn-primary btn-purchase" type="button">Pasūtīt</button>
               </div>
            </form>
      </section>
      </div>
   </aside>

   <main>

      <?php
         include('../src/database/db/database.php');

         $stmt = $db_conn->prepare("SELECT * FROM `produkti` WHERE `produkti`.`kategorija_id` = 'susi-seti'");
         $stmt->execute();

         while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
      ?>

      <!-- PRODUKTA APRAKSTS/SASTAVDALAS -->
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
            <div class="image"><img class="shop-item-image"
                  src="/public/assets/img/produkti/<?php echo $row['bilde'];?>" alt="error">
            </div>
            <div class="product-card-title">
               <h2 class="shop-item-title"><?php echo $row['nosaukums'];?></h2>
            </div>
            <div class="product-card-sastavdalas">
               <p><?php echo $row['sastavdalas'];?></p>
               <p class="alergeni">Alergēni: <?php echo $row['alergeni'];?></p>
            </div>
            <div>
               <p><?php echo $row['izmers_svars'];?></p>
               <p class="shop-item-price"><?php echo $row['cena'];?> EUR</p>
               <button class="show-sastavdalas">Sastāvdaļas</button>
               <button class="btn shop-item-button">Ielikt grozā</button>
            </div>
         </div>
      </div>
      <?php } ?>
   </main>
</body>

</html>