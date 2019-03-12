<?php
	include('db.php');
	if (isset($_GET['id'])) {
		$id = $_GET['id'];
		$query = "DELETE FROM tasks WHERE id = '$id'";
		$result = mysqli_query($conn, $query);
		if (!$result) {
			die('Query Failed!');
		}else{
			$_SESSION['message'] = 'Task Removed Successfully!';
			$_SESSION['message_type'] = 'danger';
			header('location: index.php');
		}
	}
?>