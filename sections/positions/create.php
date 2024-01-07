<?php include '../../config/init.php'; ?>
<?php include '../../templates/shared/header.php'; ?>

<form action="create.php" method="POST">

  <div class="form-group">
    <label for="position_name">Position name</label>
    <input type="text" name="position_name" class="form-control" id="position_name" aria-describedby="emailHelp" placeholder="Enter position name">
  </div>


  <button type="submit" name="submit" class="btn btn-primary">Create</button>

  <button type="submit" name="back" class="btn btn-danger">Go back</button>

</form>

<?php include '../../templates/shared/footer.php'; ?>

<?php



  $positionDB = new Position;

  if(isset($_POST['submit'])) {

    $position_name = $_POST['position_name'];


    if($positionDB -> createPosition($position_name)) {
      redirect('http://'. $_SERVER['HTTP_HOST'] . '/positions.php', 'Position successfully created!', 'success');
    } else {
      redirect('http://'. $_SERVER['HTTP_HOST'] . '/positions.php', 'Something went wrong, contact the administrator...', 'error');
    }
  }

  if(isset($_POST['back'])) {
    header('Location: http://'. $_SERVER['HTTP_HOST'] . '/positions.php');
    exit;
  }

?>
