<?php
	$cleardb_url = parse_url(getenv("CLEARDB_DATABASE_URL"));

	$server_ip = $cleardb_url["host"];
	$server_user = $cleardb_url["user"];
	$server_password = $cleardb_url["pass"];
	$server_db = substr($cleardb_url["path"], 1);
?>
