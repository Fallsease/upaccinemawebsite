<?php

include_once "constants.php";

$from = $_POST['contact-name'] . " <" . $_POST['contact-email'] . ">";
$to = UPAC_MAILING_LIST;
$subj = "Saturday Film Request";
$body = 
htmlspecialchars(
"Club: " . $_POST['club-name'] . 
"\r\nContact Info: " . $from .
"\r\nUnion Funded: " . $_POST['funding'] . 
"\r\nPayment Option: " . $_POST['payment'] . 
"\r\nDesired Date: " . $_POST['date'] . 
"\r\n1st Choice Film: " . $_POST['movie'] . 
"\r\n2nd Choice Film: " . $_POST['movie2'] . 
"\r\n3rd Choice Film: " . $_POST['movie3'] . 
"\r\n4th Choice Film: " . $_POST['movie4']);

if(mail($to, $subj, $body, $from)) {
	echo "Your request has been sent. We will get back to you within 48 hours.\r\n";
	$_SESSION['requestsent'] = true;
} else {
	echo "Sorry, there has been an error. Please try again another time.\r\n";
	echo "If this is a persistent problem, please 
<a href='mailto:".UPAC_MAILING_LIST."'>contact us</a>.\r\n";
	$_SESSION['requestsent'] = false;
}

//header("Location: /requests.php");
?>
