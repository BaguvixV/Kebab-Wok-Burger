<?php
   $error = '';
   $name = '';
   $email = '';
   $subject = '';
   $message = '';

   function clean_text($string)
   {
      $string = trim($string);
      $string = stripslashes($string);
      $string = htmlspecialchars($string);
      return $string;
   }

   if(isset($_POST["submit"]))
   {
      if(empty($_POST["name"]))
      {
         $error .= '<p><label class="text-danger">!Vārds : Lūdzu ievadiet savu vārdu</label></p>';
      }
      else
      {
         $name = clean_text($_POST["name"]);
         if(!preg_match("/^[A-Ža-ž]|[А-ЯЁа-яё]|[A-Za-z]+$/u",$name)) 
         {
            $error .= '<p><label class="text-danger">!Vārds : Ievadīt ir atļaui tikai burti un atstarpe</label></p>';
         }
      }
      if(empty($_POST["email"]))
      {
         $error .= '<p><label class="text-danger">!Epasts : Lūdzu ievadiet jūsu epastu</label></p>';
      }
      else
      {
         $email = clean_text($_POST["email"]);
         if(!filter_var($email, FILTER_VALIDATE_EMAIL))
         {
            $error .= '<p><label class="text-danger">!Epasts : Nepareizi ievadīts epasts</label></p>';
         }
      }
      if(empty($_POST["subject"]))
      {
         $error .= '<p><label class="text-danger">!Tēma : Nav aizpildīts tēmas lauks</label></p>';
      }
      else
      {
         $subject = clean_text($_POST["subject"]);
      }
      if(empty($_POST["message"]))
      {
         $error .= '<p><label class="text-danger">!Vēstule : Nav uzrakstīta vēstule</label></p>';
      }
      else
      {
         $message = clean_text($_POST["message"]);
      }
      if($error == '')
      {
         require '../src/phpmailer/class.phpmailer.php';
         $mail = new PHPMailer;
         $mail->CharSet = 'utf-8';                  //Seted this to support LV and RU language
         $mail->IsSMTP();                           //Sets Mailer to send message using SMTP
         $mail->Host = 'smtp.gmail.com';            //Sets the SMTP hosts
         $mail->Port = '587';                       //Sets the default SMTP server port
         $mail->SMTPAuth = true;                    //Sets SMTP authentication. Utilizes the Username and Password variables
         $mail->Username = 'vladdss02@gmail.com';   //Sets SMTP username
         $mail->Password = 'zxcerfsahd111';         //Sets SMTP password
         $mail->SMTPSecure = 'tls';                 //Sets connection prefix. Options are "", "ssl" or "tls"
         $mail->From = $_POST["email"];             //Sets the From email address for the message
         $mail->FromName = $_POST["name"];          //Sets the From name of the message
         $mail->AddAddress('vl4ddems@gmail.com', 'Vladiks :)');    //Adds a "To" address
         $mail->AddCC($_POST["email"], $_POST["name"]);            //Adds a "Cc" address
         $mail->WordWrap = 50;                //Sets word wrapping on the body of the message to a given number of characters
         $mail->IsHTML(true);                 //Sets message type to HTML    
         $mail->Subject = $_POST["subject"];  //Sets the Subject of the message
         $mail->Body = $_POST["message"];     //An HTML or plain text message body
      if($mail->Send())                    //Send an Email. Return true on success or false on error
      {
         $error = '<label class="text-success">Paldies par ziņu. Centīsimies atbildēt pēc iespējas ātrāk :)</label>';
      }
      else
      {
         $error = '<label class="text-danger">Radās kļūda :(</label>';
      }
         $name = '';
         $email = '';
         $subject = '';
         $message = '';
      }
   }