

<?php include '../../templates/shared/header.php'; ?>

<h2>Employees</h2>
<div class="card">


  <div class="card-header">
    <a class="btn btn-secondary" href="sections/employees/create.php">This is a change from <strong>testbranch</strong></a>
  </div>

  <div class="card-body">
  <table class="table">
    <thead>
      <tr>
        <th scope="col">ID</th>
        <th scope="col">Name</th>
        <th scope="col">Photo</th>
        <th scope="col">CV</th>
        <th scope="col">Position</th>
        <th scope="col">Date of Entry</th>
        <th scope="col">Actions</th>
      </tr>
    </thead>
    <tbody>

      <?php foreach($employees as $employee):?>
      <tr>
        <th scope="row"><?php echo $employee -> id; ?></th>
        <td><?php echo $employee -> name; ?> <?php echo $employee -> lastname; ?></td>
        <td><?php echo $employee -> photo; ?></td>
        <td><?php echo $employee -> cv; ?></td>
        <td><?php
          echo $positionDB -> getPositionByID($employee -> position_id) -> position_name;
        ?></td>
        <td><?php echo $employee -> entry_date; ?></td>
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
