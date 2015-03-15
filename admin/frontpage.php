<?php
	require_once("includes/template_functions.php");
	require_once("includes/sql_functions.php");
	$current_page = "front page";
	$conn = connect();
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	}
	$update_successful;
	if (isset($_POST["description"])) {
		$description = $_POST["description"];
		$sql = "UPDATE frontpage SET frontpage_value='$description' WHERE frontpage_key='description'";
        if ($conn->query($sql) == TRUE) {
			$update_successful["description"] = 1;
        } else {
			$update_successful["description"] = 0;
		}
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
<form role="form" id="main-form-frontpage" method="post">
<div class="form-group">
	<label for="description">Description</label>
	<?php
		if (isset($update_successful)) {
			if ($update_successful["description"] == 1) {
				//echo "<p>The update was successful</p>";
				display_alert("Updated description.", "success");
			}
			elseif ($update_successful["description"] == 0) {
				display_alert("The update was not successful</p>", "danger");
			}
		}
	?>
	<textarea name="description" id="description" class="form-control" rows="8"><?php echo $frontpage["description"]; ?></textarea></p>
	</div>
	<button type="submit" class="btn btn-default">Submit</button>
</form>
</p>
<?php
	page_footer();
?>
