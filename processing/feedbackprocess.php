<?php

include_once "constants.php";

$fromname = trim($_POST['name']);
$fromemail = trim($_POST['email']);

if(strlen($fromemail) != 0 && strlen($fromname) != 0) {
	// if both name and email are given
	$from = $fromname . " <" . $fromemail . ">";
} else {
	$from = $fromname . $fromemail;
}
if(strlen($from) == 0) {
	// if neither name nor email is given
	$from = "Anonymous Web User";
}

$to = UPAC_MAILING_LIST;
$subj = "UPAC Cinema Web Feedback";
$body = htmlspecialchars($_POST['comments']);

if(mail($to, $subj, $body, $from)) {
	echo "Your feedback has been sent.\r\n";
	echo "<pre>\r\n" . $body . "\r\n</pre>\r\n";
	echo "<a href='/feedback.php'>Back to Feedback page</a>";
} else {
	echo "Sorry, there has been an error. Please try again another time.\r\n";
	echo "If this is a persistent problem, please 
<a href='mailto:".UPAC_MAILING_LIST."'>contact us</a>.";
}

?>
