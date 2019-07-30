<?php function showHeader() { ?>
	<header>
		<div>
			<a href='/index.php' id='logo'><img src='/static/logo.png' alt='LOGO'></a>
			<nav>
				<ul>
<?php
$menu_pages = array("Schedule" => "/index.php", 
		"FAQ / Policies" => "/policies.php",
		"Movie Archive / Requests" => "/requests.php",
		"Contact / Feedback" => "/feedback.php");
foreach($menu_pages as $menu_name => $filename) {
	echo "\t\t\t\t\t<li";
	if(strcmp($_SERVER['PHP_SELF'], $filename) == 0) {
		echo " class='selected'";
	}
	echo "><a href='$filename'>$menu_name</a></li>\r\n";
}
?>
					<li><a class=button href='login.php'>Log In</a></li>
				</ul>
			</nav>
		</div>
	</header>
<?php }

if(strcmp($_SERVER['PHP_SELF'], '/header.php') == 0) { ?>
<!DOCTYPE html>
<html>
<head>
	<link rel='stylesheet' href='static/style.css' type='text/css'>
</head>
<body>
<?php showHeader(); ?>
</body>
</html>
<?php } ?>
