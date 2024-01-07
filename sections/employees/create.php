
<?php
  include_once '../../config/init.php';
  $positionDB = new Position;
  $employeeDB = new Employee;
  $positions = $positionDB -> getPositions();
?>
<?php include '../../templates/shared/header.php'; ?>

<form action="create.php" method="POST" enctype="multipart/form-data">

  <div class="form-group">
    <label for="firstname">First name</label>
    <input type="text" class="form-control" name="firstname" id="firstname" aria-describedby="emailHelp" placeholder="Enter first name">
  </div>

  <div class="form-group">
    <label for="lastname">Last name</label>
    <input type="text" class="form-control" name="lastname" id="lastname" aria-describedby="emailHelp" placeholder="Enter last name">
  </div>

  <div class="form-group">
    <label for="photo">Photo</label>
    <input type="file" class="form-control" name="photo" id="photo">
  </div>

  <div class="form-group">
    <label for="cv">Curriculum vitae</label>
    <input type="file" class="form-control" name="cv" id="cv">
    <div id="emailHelp" class="form-text">Only PDF files are admitted.</div>
  </div>

  <div class="mb-3">
    <label for="" class="form-label">Position</label>
    <select class="form-select form-select-lg" name="positionid">
      <option value="0" selected>Select position</option>
      <?php foreach($positions as $position): ?>
        <option value="<?php echo $position -> id;?>"><?php echo $position -> position_name;?></option>
      <?php endforeach; ?>
    </select>
  </div>


  <div class="form-group">
    <label for="entrydate">Entry date</label>
    <input type="date" class="form-control" name="entrydate" id="entrydate" aria-describedby="entrydate" placeholder="Enter entry date">
  </div>

  <button type="submit" name="submit" class="btn btn-primary">Create</button>

  <button type="submit" name="back" class="btn btn-danger">Go back</button>

</form>

<?php include '../../templates/shared/footer.php'; ?>

<?php





  try {
    if(isset($_POST['submit'])) {

      $data = array();

      $data['name'] = $_POST['firstname'];
      $data['lastname'] = $_POST['lastname'];
      $data['cv'] = (isset($_FILES['cv']['name'])) ? $_FILES['cv'] : '';
      $data['photo'] = (isset($_FILES['photo']['name'])) ? $_FILES['photo'] : '';
      $data['position_id'] = $_POST['positionid'];
      $data['entry_date'] = $_POST['entrydate'];

      if($employeeDB -> createEmployee($data)) {
        redirect('http://'. $_SERVER['HTTP_HOST'] . '/employees.php', 'Position successfully created!', 'success');
      } else {
        redirect('http://'. $_SERVER['HTTP_HOST'] . '/employees.php', 'Something went wrong, contact the administrator...', 'success');
      }
    }

  } catch(Exception $e) {
    echo $e -> getMessage();
  }

  if(isset($_POST['back'])) {
    header('Location: http://'. $_SERVER['HTTP_HOST'] . '/employees.php');
    exit;
  }

?>
