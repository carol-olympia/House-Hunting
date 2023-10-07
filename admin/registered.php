<?php
session_start();
include('includes/header.php');
include('includes/topbar.php');
include('includes/sidebar.php');
include('config/dbcon.php');

?>


<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Modal -->
  <div class="modal fade" id="AddUserModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Add User</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="form-group">

            <form action="adduser.php" method="POST" class="two-column-form">
              <div class="form-group">
                <label for="name">Name</label>
                <input type="text" id="name" name="name" class="form-control" placeholder="Enter Name" required>
              </div>

             
              <div class="form-group">
                <label for="username">Username</label>
                <input type="text" id="username" name="username" class="form-control" placeholder="Enter Username" required>
              </div>

              <div class="form-group">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" class="form-control" placeholder="Enter Email" required>
              </div>

              <div class="form-group">
                <label for="phone">Phone Number</label>
                <input type="text" id="phone" name="phone" class="form-control" placeholder="Enter Phone Number" required>
              </div>

              <div class="form-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" class="form-control" placeholder="Enter Password" required>
              </div>
            
              <div class="form-group">
                <label for="role">Role</label>
                <select id="role" name="role" class="form-control" required>
                  <option value="">Select Role</option>
                  <option value="Admin">Admin</option>
                  <option value="User">User</option>
                </select>
              </div>

              <div class="form-group">
                <label for="status">Status</label>
                <select id="status" name="status" class="form-control" required>
                  <option value="">Select Status</option>
                  <option value="Active">Active</option>
                  <option value="Inactive">Inactive</option>
                </select>
              </div>

              <style>
                .two-column-form {
                  display: grid;
                  grid-template-columns: repeat(2, 1fr);
                  gap: 1rem;
                }

                .form-group {
                  margin-bottom: 1rem;
                }
              </style>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary" name="submit">Save</button>
          </div>
        </form>
      </div>
    </div>
  </div>
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Dashboard</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
            <li class="breadcrumb-item active">registered</li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- Include SweetAlert CSS and JS -->

  <!-- Main content -->
  <div class="container">
    <div class="row">
      <div class="col-md-12">
      <?php
if (isset($_SESSION['status'])) {
    $alertClass = strpos($_SESSION['status'], 'Successfully') !== false ? "success" : "error";
    $icon = $alertClass === "success" ? "success" : "error";

    echo '<script>
        Swal.fire({
            icon: "' . $icon . '",
            title: "' . $_SESSION['status'] . '",
            showConfirmButton: true,
            timer: 5000
        }).then(function() {
            window.location.href = "registered.php";
        });
      </script>';

    unset($_SESSION['status']);
}
?>



        <div class="card">
          <div class="card-header">
            <h3 class="card-title">Registered User</h3>
            <a href="#" data-toggle="modal" data-target="#AddUserModal" class="btn btn-primary btn-sm float-right">Add User</a>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <table id="example1" class="table table-bordered table-striped">
              <thead>
                <tr>
                  <th>Id</th>
                  <th>Name</th>
                  <th>Username</th>
                  <th>Email</th>
                  <th>Phone Number</th>
                  <th>Role</th>
                  <th>Status</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                <?php
                $query = "SELECT * From users";
                $query_run = mysqli_query($conn, $query);

                if (mysqli_num_rows($query_run) > 0) {

                  foreach ($query_run as $row) {
                    // echo $row['name'];

                ?>
                    <tr>
                      <td><?php echo $row['id']; ?></td>
                      <td><?php echo $row['name']; ?></td>
                      <td><?php echo $row['username']; ?></td>
                      <td><?php echo $row['email']; ?></td>
                      <td><?php echo $row['phone']; ?></td>
                      <td><?php echo $row['role']; ?></td>
                      <td>
                        <?php if ($row['status'] == 'Active') { ?>
                          <span class="badge badge-success"><i class="fas fa-check"></i> Active</span>
                        <?php } else if ($row['status'] == 'Inactive') { ?>
                          <span class="badge badge-danger"><i class="fas fa-times"></i> Inactive</span>
                        <?php } ?>
                      </td>
                      <td>
                        <a href="registered-edit.php?user_id=<?php echo $row['id']; ?>" class="btn btn-sm btn-info"><i class="fas fa-pencil-alt"></i></a>
                        <a href="" class="btn btn-sm btn-danger"><i class="fas fa-trash-alt"></i></a>
                      </td>

                    </tr>


                  <?php

                  }
                } else {

                  ?>
                  <tr>
                    <td>No record found</td>
                  </tr>

                <?php
                }
                ?>
                <!-- <tr>
                      <td>Admin</td>
                      <td>admin@example.com</td>
                      <td>1234567890</td>
                      <td>Administrator</td>
                      <td><span class="badge badge-success">Active</span></td>
                      <td>
                        <button class="btn btn-sm btn-info">Edit</button>
                        <button class="btn btn-sm btn-danger">Delete</button>
                      </td>
                    </tr> -->

                <!-- Add more rows for other users as needed -->
              </tbody>
            </table>
          </div>
        </div>

      </div>
    </div>
  </div>
</div>

<?php
include('includes/footer.php');
?>