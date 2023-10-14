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
                <div style="color: red;" id="email-availability-status"></div> <!-- This will display the result of email availability with an icon -->
                <input type="email" id="email" name="email" class="form-control" placeholder="Enter Email" required onkeyup="checkEmailAvailability()">
              </div>


              <script>
                function checkEmailAvailability() {
                  let email = document.getElementById('email').value;
                  let emailStatusElement = document.getElementById('email-availability-status');

                  // Send AJAX request to the server
                  let xhr = new XMLHttpRequest();
                  xhr.open('POST', 'check_email.php', true);
                  xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
                  xhr.onreadystatechange = function() {
                    if (xhr.readyState == 4 && xhr.status == 200) {
                      let response = xhr.responseText;

                      // Update the email availability status and icon
                      if (response.includes("Email is already in use")) {
                        emailStatusElement.innerHTML = '<i class="fas fa-times-circle" style="color: red;"></i> ' + response;
                      } else {
                        emailStatusElement.innerHTML = '<i class="fas fa-check-circle" style="color: green;"></i> ' + response;
                      }
                    }
                  };
                  xhr.send('email=' + email);
                }
              </script>


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

  <!-- Delete Modal -->

  <div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <form action="deleteuser.php" method="POST">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="deleteModalLabel">Delete User</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true" class="text-danger">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <input type="hidden" name="delete_user_id" id="delete_user_id">
            <h4>Are you sure, you want to delete this user?</h4>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">No, Go Back</button>
            <button type="submit" name="delete_user_btn" class="btn btn-danger">Yes, Delete</button>
          </div>
        </div>
      </form>
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
          $alertClass = ($_SESSION['alert'] === "success") ? "success" : "error";
          $iconClass = ($_SESSION['alert'] === "success") ? "fas fa-check-circle" : "fas fa-times-circle";

          echo '<script>
    Swal.fire({
        icon: "' . $alertClass . '",
        title: "' . $_SESSION['status'] . '",
        showConfirmButton: true,
        timer: 5000,
        iconHtml: \'<i class="' . $iconClass . '"></i>\'
    }).then(function() {
        window.location.href = "registered.php";
    });
    </script>';

          unset($_SESSION['status']);
          unset($_SESSION['alert']);
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
                        <button type="button" value="<?php echo $row['id']; ?>" class="btn btn-sm btn-danger deletebtn"><i class="fas fa-trash-alt"></i></button>
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

<!-- jQuery -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<script>
  $(document).ready(function() {
    $('.deletebtn').click(function(e) {
      e.preventDefault();

      var user_id = $(this).val();

      $('#delete_user_id').val(user_id);
      $('#deleteModal').modal('show');
    })

  });
</script>

<!-- Your other scripts -->
<!-- <script>
$(document).ready(function () {
    $(document).on('click', '.deletebtn', function () {
        var user_id = $(this).val();
        console.log('Delete button clicked for user ID:', user_id);
    });

    $(document).on('click', '.editbtn', function () {
        var user_id = $(this).val();
        console.log('Edit button clicked for user ID:', user_id);
    });
});

</script> -->

<?php
include('includes/footer.php');
?>