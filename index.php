<?php include('db.php'); ?>

<?php include('includes/header.php'); ?>

  <div class="container p-4">
    <div class="row">
    <div class="col-md-4">
      <?php if (isset($_SESSION['message'])) { ?>
          <div class="alert alert-<?= $_SESSION['message_type'] ?> alert-dismissible fade show" role="alert">
            <?= $_SESSION['message']; ?>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
      <?php session_unset(); } ?>
      <div class="card card-body">
        <form action="save_task.php" method="POST">
          <div class="form-group">
            <label for="title">Title: </label>
            <input type="text" name="title" placeholder="Task Title..." class="form-control" autofocus>
            <label for="description">Description: </label>
            <textarea name="description" cols="30" rows="10" placeholder="Task Description..." class="form-control"></textarea>
            <input type="submit" value="Crear" name="save_task" class="btn btn-success btn-block mt-1">
          </div>
        </form>
      </div>
    </div>
    <div class="col-md-8">
      <table class="table table-bordered">
        <thead>
          <tr>
            <th>Title</th>
            <th>Description</th>
            <th>Created At</th>
            <th colspan="2">Actions</th>
          </tr>
        </thead>
        <tbody>
          <?php
              $query = "SELECT * FROM tasks";
              $result_tasks = mysqli_query($conn, $query);

              while ($row = mysqli_fetch_array($result_tasks)) { ?>
                <tr>
                  <td><?= $row['title']; ?></td>
                  <td><?= $row['description']; ?></td>
                  <td><?= $row['created_at']; ?></td>
                  <td><a href="edit.php?id=<?= $row['id']; ?>" class="btn btn-warning">Edit</a></td>
                  <td><a href="delete_task.php?id=<?= $row['id']; ?>" class="btn btn-danger">Delete</a></td>
                </tr>
              <?php } ?>
        </tbody>
      </table>
    </div>
    </div>
  </div>

<?php include('includes/footer.php') ?>