<?php

class Movie {
	var $title;
	var $date;
	var $rating;
	var $runtime;
	var $director;
	var $poster;
	var $trailer;
	var $description;
	var $banner;
}

$mov = array();

$mov[] = new Movie();
$mov[0]->title = "Hereditary";
$mov[0]->date = strtotime("2018-09-21");
$mov[0]->runtime = 127;
$mov[0]->rating = 'R';

$mov[] = new Movie();
$mov[1]->title = "Kong: Skull Island";
$mov[1]->date = strtotime("2018-09-22");

$mov[] = new Movie();
$mov[2]->title = "Incredibles 2";
$mov[2]->date = strtotime("2018-09-28");

$mov[] = new Movie();
$mov[3]->title = "Ferris Bueller's Day Off";
$mov[3]->date = strtotime("2018-09-29");

$mov[] = new Movie();
$mov[4]->title = "Deadpool 2";
$mov[4]->rating = 'R';
$mov[4]->runtime = 119;
$mov[4]->director = "David Leitch";
$mov[4]->date = strtotime("2018-10-05");
$mov[4]->poster = '/static/deadpool.jpg';
$mov[4]->banner = '/static/deadpoolbanner.jpg';
$mov[4]->trailer = "https://www.youtube.com/embed/20bpjtCbCz0";
$mov[4]->description = 
"Foul-mouthed mutant mercenary Wade Wilson (AKA. Deadpool), brings together a team of fellow mutant rogues to protect a young boy with supernatural abilities from the brutal, time-traveling cyborg, Cable.";

$mov[] = new Movie();
$mov[5]->title = "Get On Up";
$mov[5]->date = strtotime("2018-10-06");
$mov[5]->banner = '/static/Get-on-up-banner.jpg';

$mov[] = new Movie();
$mov[6]->title = "12 Angry Men";
$mov[6]->date = strtotime("2018-10-12");
$mov[6]->banner = '/static/12-angry-men-banner.jpg';

$mov[] = new Movie();
$mov[7]->title = "Zindagi Na Milegi Dobara";
$mov[7]->date = strtotime("2018-10-13");
$mov[7]->banner = '/static/Zindagi-banner.jpg';

$mov[] = new Movie();
$mov[8]->title = "Solo: A Star Wars Story";
$mov[8]->title = strtotime("2018-08-29");
?>
