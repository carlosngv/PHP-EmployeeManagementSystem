<?php include_once '../../config/init.php' ?>
<?php include '../../templates/shared/header.php'; ?>

<form action="create.php" method="POST">

  <div class="form-group">
    <label for="username">Username</label>
    <input type="text" class="form-control" name="username" id="username" aria-describedby="emailHelp" placeholder="Enter username">
  </div>

  <div class="form-group">
    <label for="password">Password</label>
    <input type="password" class="form-control" name="password" id="password" aria-describedby="password" placeholder="Enter password">
  </div>

  <div class="form-group">
    <label for="email">Email</label>
    <input type="email" class="form-control" name="email" id="email" aria-describedby="emailHelp" placeholder="Enter email">
  </div>


  <button type="submit" name="submit" class="btn btn-primary">Create</button>

  <button type="submit" name="back" class="btn btn-danger">Go back</button>

</form>

<?php include '../../templates/shared/footer.php'; ?>

<?php

    $userDB = new User;
    if(isset($_POST['submit'])) {
      $data = array();
      $data['username'] = $_POST['username'];
      $data['password'] = $_POST['password'];
      $data['email'] = $_POST['email'];

      if($userDB -> createUser($data)) {
        redirect('http://'. $_SERVER['HTTP_HOST'] . '/users.php', 'User successfully created!', 'success');
      } else  {
        redirect('http://'. $_SERVER['HTTP_HOST'] . '/users.php', 'Something went wrong, contact the administrator...', 'error');
        // TODO: prompt message
      }
      exit;
    }

    if(isset($_POST['back'])) {
      header('Location: http://'. $_SERVER['HTTP_HOST'] . '/users.php');
      exit;
    }

?>
