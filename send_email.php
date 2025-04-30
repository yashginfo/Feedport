<?php
require 'vendor/autoload.php'; // Include SendGrid library

if(isset($_POST['send_email'])) {
    $recipient_email = $_POST['recipient_email'];
    $recipient_name = $_POST['recipient_name'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    $email = new \SendGrid\Mail\Mail();
    $email->setFrom("your_email@example.com", "Your Name");
    $email->setSubject($subject);
    $email->addTo($recipient_email, $recipient_name);
    $email->addContent("text/plain", $message);
    
    // Alternatively for HTML content:
    // $email->addContent("text/html", $message);

    $sendgrid = new \SendGrid('YOUR_SENDGRID_API_KEY');

    try {
        $response = $sendgrid->send($email);
        if($response->statusCode() == 202) {
            header("Location: your_page.php?status=success");
        } else {
            header("Location: your_page.php?status=error");
        }
    } catch (Exception $e) {
        header("Location: your_page.php?status=error");
    }
}
?>