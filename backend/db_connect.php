<?php
	
	$con = mysqli_connect("localhost", "root", "cisco");
	$db = mysqli_select_db($con, "ow-stratroulette");

	$sql = mysqli_query($con, "SELECT * FROM strats ORDER BY id ASC");

	$id = "id";
	$header = "header";
	$text = "text";
	$author = "author";

	$rows = mysqli_fetch_assoc($sql);

	echo "ID: " . $rows[$id] . "<br />" . "Header: " . $rows[$header] . "<br />" . "Text: " . $rows[$text] . "<br />" . "Author: " . $rows[$author];

?>