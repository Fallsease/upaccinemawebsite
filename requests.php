<?php
include 'header.php';
include 'footer.php';
?>
<!DOCTYPE html>
<html>
<head>
	<link rel='stylesheet' href='/static/style.css' type='text/css'>
	<title>UPAC Cinema</title>
</head>
<body>
<?php showHeader(); ?>
	<div id='body'>
		<div id='search-archive' class='panel'>
			<h1>Search Movie Archive</h1>
			<div>
				<p>Search through our movie archive to see what we've shown in the past few years.</p><br>
				<form method='GET'>
					<input type='search' value='' size=32 name='q' maxlength=255 required>
					<button type='submit'>Search</button>
				</form>
			</div>
		</div>
		<div id='request-form' class='panel'>
			<h1>Request a Saturday Film</h1>
			<div>
<?php
if(isset($_SESSION['requestsent'])) {
	echo "\t\t\t\t<p>\r\n";
	if($_SESSION['requestsent']) {
		echo "\t\t\t\t\tYour request has been sent. We will get back to you within 48 hours.\r\n";
	} else {
		echo "\t\t\t\t\tSorry, there has been an error. Please try again another time.\r\n";
		echo "\t\t\t\t\tIf this is a persistent problem, please 
<a href='mailto:".UPAC_MAILING_LIST."'>contact us</a>.\r\n";
	}
	echo "\t\t\t\t</p>\r\n";
}
?>
				<form method='POST' action='processing/requestprocess.php'>
					<table>
						<tr>
							<td>* Organization Name: </td>
							<td><input type='text' required name='club-name'></td>
						</tr>
						<tr>
							<td>* Contact Name: </td>
							<td><input type='text' required name='contact-name'></td>
						</tr>
						<tr>
							<td>* Contact Email: </td>
							<td><input type='email' required name='contact-email'></td>
						</tr>
						<tr>
							<td>* Union Funded: </td>
							<td>
								<input type='radio' name='funding' value='yes' required>Yes
								<input type='radio' name='funding' value='no' required>No
							</td>
						</tr>
						<tr>
							<td>* Payment Option: <br></td>
							<td>
								<input type='radio' name='payment' value='50/50' required>50/50 option<br>
								<input type='radio' name='payment' value='full' required>Full option
							</td>
						</tr>
						<tr>
							<td>* Desired Date: </td>
							<td><input type='date' name='date' min='<?php echo date('Y-m-d'); ?>' required></td>
						</tr>
						<tr>
							<td>* First Choice Movie: </td>
							<td><input type='text' name='movie' required></td>
						</tr>
						<tr>
							<td>Second Choice Movie: </td>
							<td><input type='text' name='movie2' optional></td>
						</tr>
						<tr>
							<td>Third Choice Movie: </td>
							<td><input type='text' name='movie3' optional></td>
						</tr>
						<tr>
							<td>Fourth Choice Movie: </td>
							<td><input type='text' name='movie4' optional></td>
						</tr>
						<tr><td colspan=2>
							* I have read the <a href='clubfilm-instructions.pdf' target='_blank'>How to Sponsor a Club Film</a> document.
							<input type='checkbox' required>
						</td></tr>
					</table>
					<br>
					<button type='submit'>Request Movie</button>
					<button type='reset'>Clear Form</button>
				</form>
			</div>
		</div>
	</div>
<?php showFooter(); ?>
</body>
</html>
