<?php
	
	$title = $text = $author = "";

	if (ISSET($_GET["title"]) && ISSET($_GET["text"]) && ISSET($_GET["author"])) {
		$title = htmlentities($_GET["title"]);
		$text = htmlentities($_GET["text"]);
		$author = htmlentities($_GET["author"]);

		$con = mysqli_connect("localhost", "root", "cisco");
		$db = mysqli_select_db($con, "ow-stratroulette");

		$sql = mysqli_query($con, "INSERT INTO strats (header, text, author) VALUES ('" . $title . "', '" . $text . "', '" . $author . "')");

		echo "Strat successfully created";
	}

?>