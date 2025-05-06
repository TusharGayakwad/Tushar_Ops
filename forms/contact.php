<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    try {
        // Create a new PHPMailer instance
        $mail = new PHPMailer(true);
        
        //Server settings
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';  
        $mail->SMTPAuth = true;  
        $mail->Username = 'tushargayakwad29@gmail.com'; // Your Gmail address
<<<<<<< HEAD
        $mail->Password = 'app password'; // Your Gmail App Password (make sure it's correct)
=======
        $mail->Password = 'qxjr kxiu rnic zosg'; // Your Gmail App Password (make sure it's correct)
>>>>>>> 679c927 (add files.)
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port = 587;

        //Recipients
        $mail->setFrom('tushargayakwad29@gmail.com', 'Website Form'); 
        $mail->addAddress('tushargayakwad29@gmail.com'); // Your mailbox
        $mail->addReplyTo($email, $name); 

        // Content
        $mail->isHTML(false); 
        $mail->Subject = "New Contact: $subject";
        $mail->Body = "Name: $name\nEmail: $email\nMessage:\n$message";

        // Send email
        $mail->send();
        echo "OK"; // Success response
    } catch (Exception $e) {
        echo "Mailer Error: {$mail->ErrorInfo}"; // Error message
    }
} else {
    echo "Invalid Request"; // If the request method is not POST
}
?>
