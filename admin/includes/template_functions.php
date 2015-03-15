<?php
	function head() {
?>
<!doctype html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css"/>
</head>
<?php		
	}

	function page_header() {
?>
<body>
<div class="container">
<h1>Jessie Glover Admin Dashboard</h1>	
<?php
	}

	function page_navigation() {
?>
<!--<ul id="navigation">
	<li><a href="index.php">Home</a></li>
	<li><a href="frontpage.php">Front Page</a></li>
	<li><a href="about.php">About</a></li>
	<li><a href="portfolio.php">Portfolio</a></li>
	<li><a href="contact.php">Contact</a></li>
</ul>-->
<ul class="nav nav-tabs">
	<li role="presentation" class="active"><a href="index.php">Home</a></li>
	<li role="presentation"><a href="frontpage.php">Front Page</a></li>
	<li role="presentation"><a href="about.php">About</a></li>
	<li role="presentation"><a href="portfolio.php">Portfolio</a></li>
	<li role="presentation"><a href="contact.php">Contact</a></li>
</ul>	
<?php
	}

	function page_footer() {
?>
</div>
</body>
</html>
<?php
	}

	function all_head() {
		head();
		page_header();
		page_navigation();
	}

	function display_alert($message, $type) {
?>
<div class="alert alert-<?php echo $type; ?>" role="alert"><?php echo $message; ?></div>
<?php
	}
?>
