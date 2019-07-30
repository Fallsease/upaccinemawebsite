<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="static/style.css" type="text/css">
	<?php include "header.php"; ?>
	<?php include "footer.php"; ?>
	<title>UPAC Cinema</title>
</head>
<body>
<?php showHeader(); ?>
	<div id="body">
		<div id="login" class="panel">
			<h1>Officer Login</h1>
			<div>
				<form>
					<table>
						<tr><td>Username: </td><td><input type="text" name="username"></td></tr>
						<tr><td>Password: </td><td><input type="password" name="password"></td></tr>
						<br>
						<tr><td colspan=2>
							<input type="checkbox">Remember me next time 
							<button type="submit">Login</button>
						</td></tr>
					</table>
				</form>
				<br>
				<span><a>Forgot Password?</a></span><br><br>
				<span>Accounts are available only to UPAC Cinema officers</span><br><br>
			</div>
		</div>
	</div>
<?php showFooter(); ?>
</body>
</html>
