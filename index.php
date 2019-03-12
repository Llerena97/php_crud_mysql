<?php include('db.php'); ?>

<?php include('includes/header.php'); ?>
  
  <div class="container p-4">
    <div class="col-md-4">
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
      
    </div>
  </div>

<?php include('includes/footer.php') ?>