<?php
  $routes = $_SERVER['REQUEST_URI'];
  switch($routes) {
   case '/':
      require 'application/index.php';
   break;     
   case '/alergeni' :
      require 'application/alergeni.php';
   break;
   ///////// PRODUKTU IZVĒLE - KATEGORIJAS ////////////////
   case '/picas':
      require 'application/produkti/picas.php';
   break;    
   case '/burgeri':
       require 'application/produkti/burgeri.php';
   break;    
   case '/kebabi': 
      require 'application/produkti/kebabi.php';
   break;    
   case '/wok':
      require 'application/produkti/wok.php';
   break;    
   case '/susi':
      require 'application/produkti/susi.php';
   break;
   case '/karstie_susi':
      require 'application/produkti/karstie_susi.php';
   break;   
   case '/susi_seti':
      require 'application/produkti/susi_seti.php';
   break;   
   case '/citi_edieni':
      require 'application/produkti/citi_edieni.php';
   break; 
   case '/uzkodas':
      require 'application/produkti/uzkodas.php';  
   break;  
   ////////////////////////////////////////////////  

   // case '/produktu_grozs':
   // require 'application/produktu_grozs.php';    
   // break;
   // case '/sutit_produktu':
   //    require 'application/sutit_produktu.php';    
   // break;
   case '/piegage':
      require 'application/piegade.php';  
   break;    
   case '/kontakti':
      require 'application/kontakti.php';  
   break;    
   case '/par_kwb':
      require 'application/par_kwb.php';    
   break;
   default:
      echo '<h2 style="text-align:center; padding-top: 20px; font-size: 45px; font-family: Montserrat-Regular, sans-serif;">Šī lapa neeksistē!</h2>';
   break;
  }