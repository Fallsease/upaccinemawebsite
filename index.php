<?php 
include "header.php";
include "footer.php";
include "movies.php";

$futureMovies = array();
$ThreeNextDay = strtotime("-27 hours", time());
foreach($mov as $movie) {
	if($movie->date > $ThreeNextDay)
		$futureMovies[] = $movie;
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>UPAC Cinema</title>
	<link rel="stylesheet" href="/static/style.css" type="text/css">
</head>
<body>
<?php showHeader(); ?>
	<div id="body">
		<div class="flex-container">
			<div id="now-playing" class="panel">
				<h1>Now Playing</h1>
<?php
$nextShow = $futureMovies[0];
foreach($futureMovies as $movie) {
	if($movie->date < $nextShow->date) {
		$nextShow = $movie;
	}
}
?>
				<div>
					<h2><?php echo $nextShow->title; ?></h2>
					<div>
						<img src='<?php echo $nextShow->poster; ?>' height="200"><br>
						<p><strong>Rating:</strong> <?php echo $nextShow->rating; ?></p>
						<p><strong>Runtime:</strong> <?php echo $nextShow->runtime; ?> minutes</p>
						<p><strong>Director:</strong> <?php echo $nextShow->director; ?></p><br>
						<p><?php echo $nextShow->description; ?></p>
					</div>
				</div>
			</div>
			<div>
				<iframe width="560" height="315" src='<?php echo $nextShow->trailer; ?>' frameborder="0" allow="autoplay; encrypted-media" allowfullscreen class="trailer"></iframe>
			</div>
		</div>
		<div class="flex-container">
			<div id="coming-soon" class="panel">
				<h1>Coming Soon</h1>
				<div class="slideshow-container">
<?php 
foreach ($mov as $movie) {
	if (date('Y-m-d', $movie->date) >= date("Y-m-d")) {
		echo "\t\t\t\t\t<div class='slide'>\r\n";
		echo "\t\t\t\t\t\t<h2>$movie->title</h2>\r\n";
		echo "\t\t\t\t\t\t<p>".date('M j',$movie->date).": 7PM, 9:30PM, 12AM</p>\r\n";
		echo "\t\t\t\t\t\t<img src='$movie->banner'>\r\n";
		echo "\t\t\t\t\t</div>\r\n";
	}
}
?>
					<script>
					var slideIndex = 0;
					showSlides();
					function showSlides() {
						var i;
						var slides = document.getElementsByClassName("slide");
						for(i = 0; i < slides.length; i++) {
							slides[i].style.display = "none";
						}
						slides[slideIndex].style.display = "block";
						slideIndex++;
						if(slideIndex >= slides.length) {slideIndex = 0;}
						setTimeout(showSlides, 20000);
					}
					</script>
					<noscript>
					<ul>
<?php
foreach ($futureMovies as $movie) {
	echo "\t\t\t\t\t\t<li><strong>$movie->title</strong> (";
	echo date('M j',$movie->date);
	echo ")</li>\r\n";
}
?>
					</ul>
					</noscript>
				</div>
			</div>
			<div id="calendar" class="panel">
				<h1>Calendar</h1>
				<div>
					<iframe src="https://teamup.com/ks5cqcpedbd85z849u?showLogo=0&amp;showTitle=0&amp;disableSidePanel=1" frameborder="0" height="400" width="400"></iframe>
				</div>
			</div>
		</div>
	</div>
<?php showFooter(); ?>
</body>
</html>

