<?php
if (isset($_POST['Email'])) {

    $host = "ssl://smtp.gmail.com";
    $email_to = "charlespine22@gmail.com";
    $email_subject = "New Message From Portfolio";


    $name = $_POST['name']; // required
    $email = $_POST['email']; // required
    $message = $_POST['message']; // required

    $email_body = "Name: $name. \n".
                  "Email: $email.\n".
                  "Message: $message.";     



    // create email headers
    $headers = 'From: ' . $email . "\r\n" .
        'Reply-To: ' . $email . "\r\n" .
        'X-Mailer: PHP/' . phpversion();

    mail($email_to, $email_subject, $email_body, $headers);
}
?>