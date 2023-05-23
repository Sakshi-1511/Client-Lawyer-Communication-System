
      <?php
         $to = filter_input(INPUT_POST, 'email');
         $subject =filter_input(INPUT_POST, 'name');
      $message= filter_input(INPUT_POST, 'message');
         $header = "From:rashmichordiya5555@gmail.com \r\n";
         ini_set("SMTP","ssl://smtp.gmail.com");
         ini_set("smtp_port","587");
         
         
         $retval = mail($to,$subject,$message,$header);
         
         if( $retval == true ) {
              echo '<script >alert("Message Sent Successfully"");</script>';
    die();
         }else {
          echo '<script >alert("Something wrong"");</script>';
         }
      ?>
      
