<?php
  $routes = $_SERVER['REQUEST_URI'];

  switch($routes) {
    case '/':
        require 'application/index.html';
    break;     
    case '/alergeni' :
          require 'application/alergeni.php';
      break;

    ///////// PRODUKTU IZVĒLE/KATEGORIJAS ////////////////
    case '/prod_liste_picas':
        require 'application/prod_liste_picas.php';
    break;    
    case '/prod_liste_burgeri':
        require 'application/prod_liste_burgeri.php';
    break;    
    case '/prod_liste_kebabi':
        require 'application/prod_liste_kebabi.php';
    break;    
    case '/prod_liste_wok':
        require 'application/prod_liste_wok.php';
    break;    
    case '/prod_liste_susi':
        require 'application/prod_liste_susi.php';
    break;
    case '/prod_liste_k-susi':
        require 'application/prod_liste_k-susi.php';
    break;   
    case '/prod_liste_susi-seti':
        require 'application/prod_liste_susi-seti.php';
    break;   
	case '/prod_liste_citi-edieni':
        require 'application/prod_liste_citi-edieni.php';
    break; 
    case '/prod_liste_uzkodas':
        require 'application/prod_liste_uzkodas.php';  
    break;  
    ////////////////////////////////////////////////  
		  
    case '/piegage':
        require 'application/piegade.php';  
    break;    
    case '/vai_ir_jautajumi':
        require 'application/vai_ir_jautajumi.php';  
    break;    
    case '/par_kwb':
        require 'application/par_kwb.php';    
    break;  
    default:
      echo '<h2>Page not found!</h2>';
    break;
  }
?>