 <!-- 

// if(isset($_POST['submit'])) {
// $name= $_POST['name'];
// $mailFrom = $_POST['mail'];
// $subject = $_POST['subject'];
// $message = $_POST['message'];


//  $mailTo = babrakoskei@gmail.com;
//  $headers = "From: ".$mailFrom;
//  $txt = "You have received an email from ".$name.".\n\n".$message;
//  $headers .= "Reply-To: $visitor_email \r\n"

//  mail(mailTo,$mailTo,$subject,$txt,$headers);
//  header("Location: index.php?mailsend");
// }

// ?> 


// 	$name = $_POST['name'];
// 	$visitor_email = $_POST['email'];
// 	$message = $_POST['message'];

// 	$email_from = 'WebDesign@gmail.com';

// 	$email_subject = 'New Form Submission';

// 	$email_body = 'User name: $name.\n'.
// 				  'User email: $visitor_email.\n'.
// 				  'User message: $message.\n';

// 	$to = 'example@gmail.com';

// 	$headers = 'From: $email_from \r\n';

// 	$headers .= 'Reply-to: $visitor_email \r\n';

// 	mail($to,$email_subject,$email_body,$headers);

// 	header('Location: index.html');

// ?>

<?php
  $name = htmlspecialchars($_POST['name']);
  $mail = htmlspecialchars($_POST['email']);
  $subject = htmlspecialchars($_POST['subject']);
  $message = htmlspecialchars($_POST['message']);

  if(!empty($mail) && !empty($message)){
    if(filter_var($mail, FILTER_VALIDATE_EMAIL)){
      $receiver = "babrakoskei@gmail.com"; //enter that email address where you want to receive all messages
      $subject = "From: $name <$mail>";
      $body = "Name: $name\nEmail: $mail\nSubject: $subject\nMessage: $message\n\nRegards,\n$name";
      $sender = "From: $mail";
      if(mail($receiver, $subject, $body, $sender)){
         echo "Your message has been sent";
      }else{
         echo "Sorry, failed to send your message!";
      }
    }else{
      echo "Enter a valid email address!";
    }
  }else{
    echo "Email and message field is required!";
  }
?>
