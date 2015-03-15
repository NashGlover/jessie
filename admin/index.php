<?php
	
	require_once("includes/template_functions.php");
	require_once("includes/sql_functions.php");
	$current_page = "index";
	$conn = connect();
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	}
	$sql = "SELECT * FROM site";
	$result = $conn->query($sql);
	while ($row = $result->fetch_assoc()) {
		$site[$row["site_key"]] = $row["site_value"];
	}
	all_head();
?>
<div id="main-content">
<h2>Main Settings</h2>
<form id="main-form">
<p>Website Title: <input name="website_name" type="text" value="<?php echo $site["site_name"]; ?>"/><br />
Subtitle: <input name"website_subtitle" type="text" value="<?php echo $site["site_subtitle"]; ?>"/><br />
<input type="submit" value="Submit" />
</p>
<?php
	page_footer();
?>
