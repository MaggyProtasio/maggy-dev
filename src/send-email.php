<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $email = $_POST["email"];
        $message = $_POST["message"];
    
        $to = "mxggyprotasio@gmail.com"; // Replace with the recipient's email address
        $subject = "Message from maggy dev";
        $headers = "From: $email";
    
        mail($to, $subject, $message, $headers);
    
        // Redirect to a thank you page or display a success message
        header("Location: email-success.html");
        exit;
    }

?>