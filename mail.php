<?php

if (isset($_POST['submit'])) {

    $name = $_POST['imiona'];
    $name_safe = filter_var($name, FILTER_SANITIZE_STRING);
    $email = $_POST['email'];
    $email_safe = filter_var($email, FILTER_SANITIZE_EMAIL);
    $lokalizacja = $_POST['lokalizacja'];
    $lokalizacja_safe = filter_var($lokalizacja, FILTER_SANITIZE_STRING);
    $dataslubu = $_POST['dataslubu'];
    $dataslubu_safe = filter_var($dataslubu, FILTER_SANITIZE_STRING);
    $message = $_POST['wiadomosc'];
    $message_safe = filter_var($message, FILTER_SANITIZE_STRING);


    // echo $name_safe.' '.$email_safe.' '.$lokalizacja_safe.' '.$dataslubu_safe.' '.$message_safe;

    /* delete that part when everything will be ok

    if(!empty($name_safe) && !empty($email_safe) && !empty($lokalizacja_safe) && !empty($dataslubu_safe) && !empty($message_safe)){
      //Passed
      echo 'PASSED first stage, ';
      //Check Email
      if(filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
        //FAILED
        echo 'email filter failed, ';
      } else {
        // PASSED
        echo 'email filter passed, ';
      }
    } else {
      echo 'FAILED first stage, ';
    }

    */

    $to = 'kalet1984@gmail.com'; //change this email to michal email
    $subject = 'test - Nowy formularz kontaktowy ze strony - test ';
    $message_body = 'Poniżej dane z formularza: ' . "\n\n";
    $message_body .= 'Imiona: '.$name_safe."\n";
    $message_body .= 'Email: '.$email_safe."\n";
    $message_body .= 'Lokalizacja: '.$lokalizacja_safe."\n";
    $message_body .= 'Data Slubu: '.$dataslubu_safe."\n";
    $message_body .= 'Tresc Wiadomosci: '.$message_safe;

    $headers = 'MIME-Version: 1.0'."\n";
    $headers .= 'From: Michal Nowak Forografia <testphase3@interia.pl>'."\n";
    $headers .= 'Content-type: text/plain; charset= UTF-8'."\n";
    $headers .= 'Replay-To: testphase3@interia.pl'."\n";
    $headers .= 'X-Mailer: PHP/'.phpversion();

    mail($to,$subject,$message_body,$headers);

    echo 'message sent';


}

 ?>
