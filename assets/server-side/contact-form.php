<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Collect form data
    $name = $_POST['contact_name'];
    $email = $_POST['contact_email'];
    $number = $_POST['contact_phone'];
    $message = $_POST['contact_message'];

//     echo "Name: " . $name . "<br>";
//     echo "Email: " . $email . "<br>";
//     echo "Phone Number: " . $number  . "<br>";
//     echo "Message: " . $message . "<br>";


    $to = 'korraimanish@gmail.com'; 

    $subject = 'Form Contact Us';

    $body = "Name: $name\nEmail: $email\nPhone Number: $number\nMessage: $message";

    $headers = "From: $email\r\nReply-To: $email\r\n";

    if (mail($to, $subject, $body, $headers)) {
        echo "Form submitted successfully! We will contact you shortly.";
    } else {
        echo "Error sending the form. Please try again.";
    }
}
?>
