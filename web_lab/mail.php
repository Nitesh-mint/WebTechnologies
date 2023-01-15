<?php
    $to = "receiver@gmail.com";
    $subject = "subject of the mail";
    $meessage = "detailed message and information of the mail";//each line shouldnot exceed 70 chars
    $header = "sender@gmail.com";
    $parameter = "sendmail_path"; // for specifying the additional parameters defined in the sendmail_path configuration setting.

    //using mail function
    mail($to,$subject,$message,[$headers],[$parameter]);
    echo"sent succesfully";
?>