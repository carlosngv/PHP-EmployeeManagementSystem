

<?php include '../../templates/shared/header.php'; ?>

<h2>Users</h2>
<div class="card">


  <div class="card-header">
    <a class="btn btn-secondary" href="sections/users/create.php">New user</a>
  </div>

  <div class="card-body">
  <table class="table">
    <thead>
      <tr>
        <th scope="col">ID</th>
        <th scope="col">Username</th>
        <th scope="col">Password</th>
        <th scope="col">Email</th>
        <th scope="col">Actions</th>
      </tr>
    </thead>
    <tbody>
    <?php foreach($users as $user): ?>
      <tr>
        <th scope="row"><?php echo $user -> id; ?></th>
        <td><?php echo $user -> username; ?></td>
        <td><?php echo $user -> user_password; ?></td>
        <td><?php echo $user -> email; ?></td>
        <td>
          <a class="btn btn-success" href="#">View</a>
          <a class="btn btn-info" href="#">Edit</a>
          <a class="btn btn-danger" href="#">Delete</a>
        </td>
      </tr>
      <?php endforeach; ?>
    </tbody>
  </table>
  </div>
</div>


  <?php include '../../templates/shared/footer.php'; ?>
