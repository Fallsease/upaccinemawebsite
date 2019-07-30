<?php 
include_once "constants.php";

function showFooter() { 
?>
	<footer>
		<div>
			<div class='connect'>
				<span>Follow Us On</span>
				<ul>
					<li><a href="https://www.instagram.com/rpiunion/"><img src="/static/insta.png" alt="insta"></a></li>
					<li><a href="https://www.facebook.com/UPACCinema/"><img src="/static/facebook.png" alt="f"></a></li>
					<li><a href="https://twitter.com/UPACCinema/"><img src="/static/twitter.png" alt="#"></a></li>
					<li><a href="https://reddit.com/user/UPACCinema/"><img src="/static/reddit.png" alt="r/"></a></li>
				</ul>
			</div>
			<div>
				<span>Email Us At</span>
				<address><p><?php echo UPAC_MAILING_LIST; ?></p></address>
			</div>
		</div>
	</footer>
<?php 
}

// Show footer
if(strcmp($_SERVER['PHP_SELF'], '/footer.php') == 0) { 
?>
<!DOCTYPE html>
<html>
<head>
	<link rel='stylesheet' href='static/footer.css' type='text/css'>
</head>
<body>
<?php
	showFooter();
?>
</body>
</html>
<?php } ?>
