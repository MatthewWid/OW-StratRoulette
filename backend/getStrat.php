<?php
	
	$con = mysqli_connect("localhost", "root", "cisco");
	$db = mysqli_select_db($con, "ow-stratroulette");

	$sql = mysqli_query($con, "SELECT * FROM strats ORDER BY rand() LIMIT 1");

	$res = array();
	while($row = mysqli_fetch_assoc($sql)) $res[] = $row;

	echo json_encode($res);

?>