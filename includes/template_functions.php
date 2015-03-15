<?php
	function head($current_page) {
		switch($current_page) {
			case "index":
				$subtitle = "Index";
				break;
			case "about":
				$subtitle = "About";
				break;
			case "portfolio":
				$subtitle = "Portfolio";
				break;
		}
?>
<!DOCTYPE html>
<html>
	<head>
		<meta name="description" content="Jessie Glover is a professional make-up artist working in Nashville, Tennessee who would love to work with you." />
		<meta name="keywords" content="Jessie, Glover, make-up, artist, makeup, Jessie Glover" />
		<meta http-equiv="author" content="Nash Glover" />
		<!--<link href='http://fonts.googleapis.com/css?family=Roboto+Slab:400,700' rel='stylesheet' type='text/css'>-->
		<title><?php echo get_site_name() . " - " . $subtitle; ?></title>
		<link rel="stylesheet" type="text/css" href="style.css">
	</head>
<?php
	}

	function page_header() {
?>
<body>
<div id="page">
<div id="heading">
	<img class="center" src="images/logo.png"><h1>Jessie Glover</h1><h2>Professional Makeup Artist</h2>
</div>
<?php
	}

	function page_navigation() {
?>
            <ul id="navigation">
                <li><a href="index.html" class="on">Home</a></li>
                <li><a href="about.html">About</a></li>
                <li><a href="portfolio.html">Portfolio</a></li>
                <li><a href="contact.html">Contact</a></li>
            </ul>
<?php	
	}
?>
