<?php
	include('db.php');

	$title = !empty($_POST['title']) ? $_POST['title'] : NULL;
	$description = !empty($_POST['description']) ? $_POST['description'] : NULL;

	$query = "INSERT INTO tasks (title, description) VALUES ('$title', '$description')";
	$result = mysqli_query($conn, $query);
	if (!$result) {
		die('Query Failed!');
	} else {
		$_SESSION['message'] = 'Task Saved Successfully!';
		$_SESSION['message_type'] = 'success';
		header('location: index.php');
	}


?>