<?php
	header("Access-Control-Allow-Origin: *");
	require("db.php");
	echo json_encode($data);

?>