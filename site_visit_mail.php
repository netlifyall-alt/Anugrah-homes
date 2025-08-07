<?php
//get data from form  
if (isset($_POST['submit'])) {
  $secret = "6Le6oA8oAAAAAFpwYeDJwHIbZWU2ihhmimrnzF4c";
  $response = $_POST['g-recaptcha-response'];
  $remoteip = $_SERVER['REMOTE_ADDR'];
  $url = "https://www.google.com/recaptcha/api/siteverify?secret=$secret&response=$response&remoteip=$remoteip";
  $data = file_get_contents($url);
  $row = json_decode($data, true);
 print_r($row);die;
  if ($row['success'] == "1") {
        $name = $_POST['name'];
        $email= $_POST['email'];
        $phone= $_POST['phone'];
        $sub= $_POST['sub'];
        $msg = $_POST['msg'];
        $city = $_POST['city'];
        $address = $_POST['address'];
        $visitdate = date("d-m-Y", strtotime($_POST['visitdate']));
        $visittime = $_POST['visittime'];
        $to = "info@anugrahhomes.com";
        $subject = "Enquiry from :: www.anugrahhomes.com";
        $txt ="Name: ". $name . "\r\nEmail: " . $email. "\r\nPhone: " . $phone. "\r\nCity Resident?: " . $city. "\r\nComplete Address: " . $address. "\r\nVisit Date: " . $visitdate. "\r\nVisit Time: " . $visittime. "\r\nSubject: " . $sub. "\r\nMessage: " . $msg;
        $headers = "From: info@anugrahhomes.com" . "\r\n";
        if($email!=NULL){
          // die("ok");
            mail($to,$subject,$txt,$headers);
            header("Location: https://www.anugrahhomes.com/thank.php");
        }else{
          header("Location: https://www.anugrahhomes.com/");
        }
      
  }else {
     echo ("<script LANGUAGE='JavaScript'>
      window.alert('Invalid Captcha code');
      window.location.href='index.php';
      </script>");

  }

}
?>

