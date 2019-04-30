<?php
	
	include "./config.php";
	$con = mysqli_connect($server_ip, $server_user, $server_password, $server_db);

	$sql = mysqli_query($con, "SELECT * FROM strats ORDER BY rand() LIMIT 1");

	$res = array();
	while($row = mysqli_fetch_assoc($sql)) $res[] = $row;

	echo json_encode($res);

?>
