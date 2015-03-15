<?php
	
	require_once("includes/template_functions.php");
	require_once("includes/sql_functions.php");
	$current_page = "front page";
	$conn = connect();
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	}

	/* Get values for front page */
	$sql = "SELECT * FROM frontpage";
	$result = $conn->query($sql);
	while ($row = $result->fetch_assoc()) {
		$frontpage[$row["frontpage_key"]] = $row["frontpage_value"];
	}
	all_head();
?>
<div id="main-content">
<h2>Front Page Settings</h2>
<form id="main-form-frontpage">
<input type="text" name="description" value="<?php echo $frontpage["description"]; ?>" />
<input type="submit" value="Submit" />
</form>
</p>
<?php
	page_footer();
?>
