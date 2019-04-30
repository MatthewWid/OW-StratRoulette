<?php
	
	$title = $text = $author = "";

	if (ISSET($_GET["title"]) && ISSET($_GET["text"]) && ISSET($_GET["author"])) {
		$title = htmlentities($_GET["title"]);
		$text = htmlentities($_GET["text"]);
		$author = htmlentities($_GET["author"]);

		include "./config.php";
		$con = mysqli_connect($server_ip, $server_user, $server_password, $server_db);

		$sql = mysqli_query($con, "INSERT INTO strats (header, text, author) VALUES ('" . $title . "', '" . $text . "', '" . $author . "')");

		echo "Strat successfully created";
	}

?>
