<?php
	include('db.php');

	if (isset($_GET['id'])) {
		$id = $_GET['id'];
		$query = "SELECT * FROM tasks WHERE id='$id'";
		$result = mysqli_query($conn, $query);
		if (mysqli_num_rows($result) == 1) {
			$row = mysqli_fetch_array($result);
		}
	}

	if (isset($_POST['update'])) {
		$id = $_GET['id'];
		$title = $_POST['title'];
		$description = $_POST['description'];
		$query = "UPDATE tasks SET title = '$title', description = '$description' WHERE id = '$id'";
		mysqli_query($conn, $query);
		$_SESSION['message'] = 'Task Update Successfully!';
		$_SESSION['message_type'] = 'info';
		header('location: index.php');
	}
?>

<?php include('includes/header.php');?>

	<div class="container p-4">
		<div class="row">
			<div class="col-md-4 mx-auto">
				<form action="edit.php?id=<?= $_GET['id']; ?>" method="POST">
		          <div class="form-group">
		            <label for="title">Title: </label>
		            <input type="text" name="title" placeholder="Update Task Title..." class="form-control" autofocus value="<?= $row['title']; ?>">
		            <label for="description">Description: </label>
		            <textarea name="description" cols="30" rows="10" placeholder="Update Task Description..." class="form-control"><?= $row['description']; ?></textarea>
		            <input type="submit" value="Update" name="update" class="btn btn-info btn-block mt-1">
		          </div>
		        </form>
			</div>
		</div>
	</div>

<?php include('includes/footer.php');?>