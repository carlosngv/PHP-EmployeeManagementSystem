

<?php include '../../templates/shared/header.php'; ?>

<h2>Positions</h2>
<div class="card">


  <div class="card-header">
    <a class="btn btn-secondary" href="sections/positions/create.php">New position</a>
  </div>

  <div class="card-body">
  <table class="table">
    <thead>
      <tr>
        <th scope="col">ID</th>
        <th scope="col">Position Name</th>
        <th scope="col">Actions</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach($positions as $position): ?>
      <tr>
        <th scope="row"><?php echo $position -> id; ?></th>
        <td><?php echo $position -> position_name; ?></td>
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
