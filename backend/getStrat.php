<?php
	
	include "./config.php";
	$con = mysqli_connect($server_ip, $server_user, $server_password, $server_db);

	$sql = mysqli_query($con, "SELECT * FROM strats ORDER BY rand() LIMIT 1");

	if (!$con) {
		echo "Unable to connect to MySQL." . PHP_EOL;
		echo "Database connection error (Num): " . mysqli_connect_errno() . PHP_EOL;
		echo "Database connection error (Desc): " . mysqli_connect_error() . PHP_EOL;
		exit;
	}

	$res = array();
	while($row = mysqli_fetch_assoc($sql)) $res[] = $row;

	echo json_encode($res);

?>
