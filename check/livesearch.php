<?php
    $filepath = realpath(dirname(__FILE__));
	include_once ($filepath.'/../classes/Project.php');

	$pro = new Project();
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		$searchVal = $_POST['search'];
		$search     = $pro->liveSearch($searchVal);
	}

?>