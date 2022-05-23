<?php
session_start();
require('head.php');
require('menu.php');

if (!isset($_POST['submit_msg'])) {
    header("Location: index.php");
}

$captcha = $_SESSION['captcha'];
$userinput = $_POST['userinput'];
$fullname = $_POST['fullname'];
$email = $_POST['email'];
$phonenumber = $_POST['phonenumber'];
$message = $_POST['msg'];

if ($captcha != $userinput OR empty($fullname) OR empty($message)) {
    ?>

<div id="main_content">
    <h3>OOPS...</h3>
    <div id="contactform">
        <div>Something went wrong. Please try again...</div>
<?php
        echo '<a href="contact.php?fullname=' . $fullname . '&email=' . $email . '&phonenumber=' . $phonenumber . '&message=' . $message . '">';
?>
            <img id="goback" src="icons/goback.png" alt="Go back...">
        </a>
    </div>
</div>

<?php
    exit();
}

if (empty($phonenumber)) {
    $phonenumber = 'none';
}

$msg = "Name: " . $fullname;
$msg .= "\n\nPhonenumber: " . $phonenumber;
$msg .= "\n\nE-mail: " . $email;
$msg .= "\n\nMessage: " . $message;

$to = 'paulineniks@gmail.com';
$subject = 'Someone responded at paulineniks.com!';
$headers = 'From: info@mitj.nl';

$sent = mail($to,$subject,$msg,$headers);

if ($sent) {
    echo 'message sent<br><br><a style="color: crimson" href="index.php">return to main page</a>';
} else {
    echo 'Something went wrong. Please try again or mail to paulineniks[at]gmail[dot]com';
}
