<!DOCTYPE html>
<html>

<head>
   <meta charset="UTF-8">
   <title>Kebab Wok Burger</title>
   <link rel="icon" type="image/x-icon" href="/public/assets/img/ikonas/icons8-french-fries-48.png">
   <link rel="stylesheet" type="text/css" href="public/assets/css/galvena_lapa.css">
   <link href="https://fonts.googleapis.com/css?family=Kalam&display=swap" rel="stylesheet">
</head>

<body>
   <!-- <script type="text/javascript" src="#"></script> -->
   <a href="https://www.freepik.com/free-photos-vectors/background" class="freepik">All background photos on this website is created by freepik
      - www.freepik.com</a>
   <!--===============================================================================================-->
   <!-- MENU BUTTONS -->
   <!--===============================================================================================-->
   <div class="background">
      <div class="menu-bar">
         <div class="btn-space" onClick="location.href='alergeni'"><button class="button">Alergēni</button></div>
         <nav class="">
            <a href="#" onclick="openNav()">
               <div class="btn-space"><button class="button">&#8987;Akcijas!</button></div>
            </a>
         </nav>
         <div id="mySidenav-alergeni" class="sideNav2">
         <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>

            <?php
               include('../src/database/db/database.php');

               $stmt = $db_conn->prepare("SELECT * FROM `akcijas`");
               $stmt->execute();

               while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
            ?>

            <div class="product-card">
               <div class="image"><img class="shop-item-image"
                     src="/public/assets/img/produkti/<?php echo $row['bilde'];?>" alt="error">
               </div>
               <div class="product-card-title">
                  <h2 class="shop-item-title"><?php echo $row['nosaukums'];?></h2>
               </div>
               <div class="product-card-sastavdalas">
                  <p><?php echo $row['sastavdalas'];?></p>
                  <p class="alergeni"><?php echo $row['sastavdalas'];?></p>
               </div>
               <div>
                  <p><?php echo $row['izmers_svars'];?></p>
                  <p class="shop-item-price"><?php echo $row['cena'];?> EUR</p>
               </div>
            </div>
            <?php } ?>

         </div>
         <nav class="">
            <a href="#" onclick="openSlideMenu()">
               <div class="btn-space"><button class="button">Produktu izvēlne</button></div>
            </a>
         </nav>
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
         <script>
            //Produktu kategorijas
            function openSlideMenu() {
               document.getElementById('side-menu').style.width = '100%';
            }

            function closeSlideMenu() {
               document.getElementById('side-menu').style.width = '0%';
            }

            //Akcijas
            function openNav() {
               document.getElementById("mySidenav-alergeni").style.width = "250px";
            }

            function closeNav() {
               document.getElementById("mySidenav-alergeni").style.width = "0";
            }
         </script>
         <div class="btn-space" onClick="location.href='piegage'"><button class="button">Iespējamās piegādes</button>
         </div>
         <!-- <div class="btn-space" onClick="location.href='atsauksmes.html'"><button class="button">Atsauksmes</button></div> -->
         <div class="btn-space" onClick="location.href='kontakti'"><button class="button">Ir jautājumi?</button></div>
         <div class="btn-space" onClick="location.href='par_kwb'"><button class="button">Par KWB</button></div>

      </div>
      <!--===============================================================================================-->
      <!-- LEFT BOTTOM TEXT -->
      <!--===============================================================================================-->
      <div class="main-txt">
         <p class="txt-space">Tel. +371 22444455</p>
         <p class="txt-space">Darba laiks 11:00 - 21:00</p>
         <p class="txt-space">Pasūtījumus var izņemt: Kļavu ielā 9, Aizkrauklē</p>
         <!--<p class="txt-space">Piegāde Aizkraukles robežās € 2,00 , pirkumiem virs € 30,00 bez maksas</p>-->
         <p class="txt-space">Informāciju par piegādēm un to izcenojumiem var apskatīt sadaļā "Iespējamās piegādes"</p>
      </div>
   </div>
</body>

</html>