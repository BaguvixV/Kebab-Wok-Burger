<?php
require '../src/application/include/sutit_vestuli.php';
?>
<!DOCTYPE html>
<html>

<head>
   <title>Vai ir kādi jautājumi?</title>
   <link rel="icon" type="image/x-icon" href="/public/assets/img/ikonas/icons8-french-fries-48.png">
   <link rel="stylesheet" type="text/css" href="public/assets/css/kontakti.css">
   <link href="https://fonts.googleapis.com/css?family=Kalam&display=swap" rel="stylesheet">
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
   <meta charset="UTF-8">
</head>

<body class="background">
   <button onClick="location.href='/'" class="uz_sakumu">Uz sākuma lapu</button>
   <div class="container">
      <form action="#" class="form" method="post">
         <h2 class="vestule-pazinojums">Ir jautājumi?</h2>
         <div class="form-group">
            <label>Vārds, uzvārds:</label>
            <input type="text" name="name" placeholder="Jūsu vārds un uzvārds.." />
         </div>
         <div class="form-group">
            <label>Epasts:</label>
            <input type="text" name="email" placeholder="Ievadiet jūsu epastu.." />
         </div>
         <div class="form-group">
            <label>Tēma:</label>
            <input type="text" name="subject" placeholder="Vēstules tēma.." />
         </div>
         <div class="form-group">
            <label>Vēstule:</label>
            <input name="message" placeholder="Rakstīt vēstuli šeit.." />
         </div>
         <div class="form-group">
            <button type="submit" name="submit" value="Submit" class="submit">sūtīt</button>
         </div>
         <div class="info">
            <span>+371 22444455</span>
            <span>kwb@inbox.lv</span>
         </div>
      </form>
   </div>
   <div class="errorForm">
      <?php echo $error; ?>
   </div>
</body>
</html>