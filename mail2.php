<?php

if (isset($_POST['submit']))

{

    $name = $_POST['name'];

    $email= $_POST['email'];

    $phone= $_POST['phone'];

    $sub= $_POST['sub'];

    $msg = $_POST['msg'];

    $to = "info@anugrahhomes.com";

    $subject = "Enquiry from :: anugrahhomes.com";

    $txt ="Name:". $name . "\r\nEmail: " . $email. "\r\nPhone: " . $phone.  "\r\nSubject: " . $sub. "\r\nMessage: " . $msg;

    $headers = "From: $email" . "\r\n" . "CC: info@anugrahhomes.com";

    if($email!=NULL){

        mail($to,$subject,$txt,$headers);

        header("Location:thank.php");

        exit;

    }

    else

    {

        echo "

            <script LANGUAGE='JavaScript'>

            window.alert('something is wrong');

            window.location.href='index.php';

            </script>

        ";

    }

}



?>

