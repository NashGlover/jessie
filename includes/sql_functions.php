<?php
	$conn;
	$site_array = array();
	$stuff = 1;
	function sql_connect() {
		global $conn;
		$servername = "localhost";
		$username = "root";
		$password = "root";
		$database = "site";
		$conn = new mysqli($servername, $username, $password, $database);
	}

	/* Fill the site_array with values common to all pages */
	function site_array() {
		$sql = "SELECT * from site";
		global $conn, $site_array;
		$result = $conn->query($sql);
		while ($row = $result->fetch_assoc()) {
			$site_array[$row["site_key"]] = $row["site_value"];
		}
	}

	/* Return the name of the site set in $site_array */
	function get_site_name() {
		global $site_array;
		if (isset($site_array)) {
			return $site_array["site_name"];
		}
	}

	function get_frontpage_array() {
		global $conn;
		$sql = "SELECT * FROM frontpage";
		$result = $conn->query($sql);
		while ($row = $result->fetch_assoc()) {
			$frontpage[$row["frontpage_key"]] = $row["frontpage_value"];
		}
		return $frontpage;
	}
?>
