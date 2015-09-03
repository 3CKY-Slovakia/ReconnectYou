<?php
session_start();
//if "email" variable is filled out, send email
  if (isset($_POST['email']))  {

      //Email information
      $admin_email = "filipkov@reconnectyou.sk";
      $name_surname = $_POST['name_surname'];
      $telephone = $_POST['telephone'];
      $email = $_POST['email'];
      $town = $_POST['town'];
      $birthday = $_POST['birthday'];
      $gender = $_POST['gender'];
      $session = $_POST['sessions'];
      $payment = $_POST['payment'];
      $subject = "Rezervácia sedenia";
      $note = $_POST['note'];
      $towns = array("Bratislava","Prievidza","Tatranská Lomnica");
      $genders = array("Muž","Žena");
      $num_sessions = array("1","2","3");
      $payments = array("Na úèet 42 hodín po potvrdení termínu","Platba v hotovosti vždy pred prvým sedením");
      $body = "
      <html>
      <head>
      <title>HTML email</title>
      </head>
      <body>
      Meno a priezvisko: $name_surname<br>
      Telefónne èíslo: $telephone <br>
      Email: $email <br>
      Mesto: $towns[$town] <br>
      Dátum narodenia: $birthday <br>
      Pohlavie: $genders[$gender] <br>
      Poèet sedení: $num_sessions[$session] <br>
      Spôsob platby: $payments[$payment] <br>
      </body>
      </html>";

      // Always set content-type when sending HTML email
      $headers = "MIME-Version: 1.0" . "\r\n";
      $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
      $headers .= "From: $email" . "\r\n";
      $headers .=  "Reply-To: $email" . "\r\n";

      //send email
      mail($admin_email, "$subject", $body, $headers);

      $_SESSION['email_sent'] = true;

      //Email response
      echo header("Location: http://reconnectyou.sk");
  }
?>