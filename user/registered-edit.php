<?php
session_start();
include('includes/header.php');
include('includes/topbar.php');
include('includes/sidebar.php');
include('config/dbcon.php');

?>
<div class="content-wrapper">

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
            <li class="breadcrumb-item active">Edit - registered User</li>
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
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">Edit - registered User</h3>
            <a href="registered.php" class="btn btn-danger btn-sm float-right">
              <i class="fas fa-arrow-circle-left"></i> Back
            </a>
          </div>
          <!-- /.card-header -->
        </div>
        <!-- /.card -->
        <div class="card-body">
          <div class="col-md-6">
          <form action="adduser.php" method="POST" class="two-column-form">
              <?php
              if (isset($_GET['user_id'])) {
                $user_id = $_GET['user_id'];
                $query = "SELECT * FROM users WHERE id = '$user_id' LIMIT 1 ";
                $query_run = mysqli_query($conn, $query);

                if (mysqli_num_rows($query_run) > 0) {

                  foreach ($query_run as $row) {
              ?>
              <div class="form-group">
                      <label for="username">Id</label>
                      <input type="text" name="id" value="<?php echo $row['id'] ?>" class="form-control" >

                      <!-- <input type="text" id="username" name="username" value="<?php echo $row['username'] ?>" class="form-control" placeholder="Enter Username" required> -->
                    </div>
                    <div class="form-group">
                      <label for="name">Name</label>
                      <input type="text" id="name" name="name" value="<?php echo $row['name'] ?>" class="form-control" placeholder="Enter Name" required >
                    </div>


                    <div class="form-group">
                      <label for="username">Username</label>
                      <input type="text" id="username" name="username" value="<?php echo $row['username'] ?>" class="form-control" placeholder="Enter Username" required>
                    </div>

                    <div class="form-group">
                      <label for="email">Email</label>
                      <input type="email" id="email" name="email" value="<?php echo $row['email'] ?>" class="form-control" placeholder="Enter Email" required>
                    </div>

                    <div class="form-group">
                      <label for="phone">Phone Number</label>
                      <input type="text" id="phone" name="phone" value="<?php echo $row['phone'] ?>" class="form-control" placeholder="Enter Phone Number" required>
                    </div>

                    <div class="form-group">
                      <label for="password">Password</label>
                      <input type="text" id="password" name="password" value="<?php echo isset($row['password']) ? $row['password'] : ''; ?>" class="form-control" placeholder="Enter Password" required disabled="disabled" >
                    </div>

                    <div class="form-group">
                      <label for="role">Role</label>
                      <input type="text" id="role" name="role" value="<?php echo isset($row['role']) ? $row['role'] : ''; ?>" class="form-control" placeholder="Role" required required disabled="disabled">
                    </div>

                    <div class="form-group">
                      <label for="status">Status</label>
                      <input type="text" id="status" name="status" value="<?php echo isset($row['status']) ? $row['status'] : ''; ?>" class="form-control" placeholder="Status" required>
                    </div>

          </div>

    <?php
                  }
                } else {
                  echo "No Record Found";
                }
              }
              $user_id = $_GET['user_id'];
              $query = "SELECT * FROM users WHERE id = '$user_id'";

    ?>

    <style>
      .two-column-form {
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        gap: 1rem;
        width: 60rem;
        margin-left: 50px;
      }

      .form-group {
        margin-bottom: 1rem;
      }
    </style>
        </div>
      </div>
      <div class="modal-footer">
        <button style="margin-left: 50px;" type="submit" class="btn btn-info" name="updateuser">update</button>
      </div>
      </form>
    </div>
    </di>
  </div>
  <!-- /.col -->
</div>
<!-- /.row -->
</div>

</div>

<?php
include('includes/footer.php');
?>