<?php
if (isset($_POST['submit'])) {
    $name  = $_POST['name'] ?? '';
    $email = $_POST['email'] ?? '';
    $phone = $_POST['phone'] ?? '';
    $sub   = $_POST['sub'] ?? '';
    $msg   = $_POST['msg'] ?? '';

    $to = "hrcustomerdata@gmail.com";
    $subject = "New Enquiry from Anugrah Homes Website";

    $message = "Name: $name\nEmail: $email\nPhone: $phone\nSubject: $sub\nMessage:\n$msg";

    $headers = "From: Anugrah Homes <no-reply@anugrahhomes.com>\r\n";
    $headers .= "Reply-To: $email\r\n";
    $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";

    if (!empty($email)) {
        $success = mail($to, $subject, $message, $headers);

        if ($success) {
            echo "✅ Email sent successfully.";
        } else {
            echo "❌ Email sending failed.";
            // Extra debugging
            error_reporting(E_ALL);
            ini_set('display_errors', 1);
        }
    } else {
        echo "❌ Email field was empty.";
    }
}
?>
