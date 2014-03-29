<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<?php
 require_once "mail.php";
 
 $from = "Sandra Sender <shivakakileti89@gmail.com>";
 $to = "Ramona Recipient <prasanna.nalamothu@gmail.com>";
 //$subject = "Hi!";
 //$body = "Hi,\n\nHow are you?";
 
 $host = "ssl://smtp.gmail.com";
 $port = "465";
 $username = "shiva";
 $password = "shiva";
 
 $headers = array ('From' => $from,
   'To' => $to,
   'Subject' => $subject);
 $smtp = Mail::factory('smtp',
   array ('host' => $host,
     'port' => $port,
     'auth' => true,
     'username' => $username,
     'password' => $password));
 
 $mail = $smtp->send($to, $headers, $body);
 
 if (PEAR::isError($mail)) {
   echo("<p>" . $mail->getMessage() . "</p>");
  } else {
   echo("<p>Message successfully sent!</p>");
  }
 ?>
</html>