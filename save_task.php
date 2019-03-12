<?php
	include('db.php');

	$title = !empty($_POST['title']) ? $_POST['title'] : NULL;
	$description = !empty($_POST['description']) ? $_POST['description'] : NULL;

	$query = "INSERT INTO tasks (title, description) VALUES ('$title', '$description')";
	$result = mysqli_query($conn, $query);
	if (!$result) {
		die('Query Failed!');
	} else {
		header('location: index.php')
	}
?>