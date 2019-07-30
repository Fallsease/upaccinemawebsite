<?php
	include_once "constants.php";
?>
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
		<div id="contact" class="panel">
			<h1>Contact</h1>
			<div>
				<h2>Mailing List</h2>
				<p><?php echo UPAC_MAILING_LIST; ?></p>
			</div>
			<div>
				<h2>UPAC Cinema Officers</h2>
				<ul>
				<li><strong>Chairperson:</strong> Peter Straub</li>
				<li><strong>Friday Night Coordinator:</strong> Corey DeLuca</li>
				<li><strong>Saturday Night Coordinator:</strong> Chad Meece</li>
				<li><strong>Midweek Coordinator:</strong> Chris Hickey</li>
				<li><strong>Repertory Coordinator:</strong> LC Hines</li>
				<li><strong>Publicity Coordinator:</strong> Tyler Gandolfo</li>
				<li><strong>Projectionists:</strong> Elaine Chao, Chad Meece, Peter Straub</li>
				<li><strong>Webmaster:</strong> Autumn Walters</li>
				</ul>
			</div>
		</div>
		<div id="feedback" class="panel">
			<h1>Anonymous Feedback</h1>
			<div>
				<p>Got something to say? Let us know!</p>
				<p>If you want us to respond, make sure to enter your name and email!</p>
			</div>
			<div>
				<form action='processing/feedbackprocess.php' method='POST'>
					<table>
						<tr><td>Name (Optional): </td><td><input type='text' value='' name='name' optional></td></tr>
						<tr><td>Email (Optional): </td><td><input type='email' value='' name='email' optional></td></tr>
					</table>
					<br>
					<label>Comments:</label><br>
					<textarea rows=10 cols=80 name='comments' required></textarea><br><br>
					<button type='submit'>Send Feedback</button>
				</form>
			</div>
		</div>
	</div>
	<?php showFooter(); ?>
</body>
</html>
