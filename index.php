<?php
	require_once("includes/sql_functions.php");
	require_once("includes/template_functions.php");
	sql_connect();
	site_array();
	head("index");
	page_header();
	page_navigation();
	$frontpage = get_frontpage_array();
?>
			<p class="center"><?php echo $frontpage["description"]; ?></p>
			<p>
				<img src="images/maintest.jpg" alt="Fender Rhodes, Hohner Clavinet, and Wurlitzer EP200" />
			</p>
		</div>
	</body>
</html>
