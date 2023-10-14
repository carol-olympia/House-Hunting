<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <link href="assets/img/Real Estate Logo.png" rel="icon">
    <!-- CSS FILES -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">
    <link href="icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/css/house-hunt-header.css" rel="stylesheet">
    <link href="assets/css/homepage.css" rel="stylesheet">
    <link href="assets/css/belowheader.css" rel="stylesheet">
    <link href="assets/css/footer.css" rel="stylesheet">


  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">

  <!-- Theme style -->
  <link rel="stylesheet" href="admin/assets/dist/css/adminlte.min.css">

</head>

<body>
    <?php include 'include/header.php'; ?>

    
    <?php
    include 'admin/config/dbcon.php'; // Include the database connection script

    // Check if the form was submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Retrieve form data
        $propertyType = $_POST['type'];
        $propertyStatus = $_POST['stype'];
        $city = $_POST['city'];

        // Perform the search based on the form data
        $sql = "SELECT * FROM properties WHERE property_type = '$propertyType' AND status = '$propertyStatus' AND city = '$city'";
        $result = $conn->query($sql);

        // Display search results or a message
        if ($result->num_rows > 0) {

            echo '
            <div class="card">
            <div class="card-header text-center">
            <h3 class="card-title">House</h3>

            Search results for Property Type: ' . $propertyType . ', Status: ' . $propertyStatus . ', City: ' . $city . '
    
                </div>
                
                <!-- /.card-header -->
                <div class="card-body">
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Property Type</th>
                                <th>Status</th>
                                <th>City</th>
                                <th>Image URL</th>
                                <th>Price</th>
                                <th>Description</th>
                                
                            </tr>
                        </thead>
                        <tbody>';
            
            while($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $row['id'] . "</td>";
                echo "<td>" . $row['property_type'] . "</td>";
                echo "<td>" . $row['status'] . "</td>";
                echo "<td>" . $row['city'] . "</td>";
                echo "<td><img src='" . $row['image_url'] . "' alt='House Image' style='width: 200px; object-fit: cover; margin: 0 10px;'></td>";
                echo "<td>Ksh " . $row['price'] . "</td>";
                echo "<td>" . $row['description'] . "</td>";
                echo "</tr>";
            }
            
            echo '
                        </tbody>
                    </table>
                </div>
            </div>';
 
        } else {
            echo '
            <div class="card">
                <div class="card-header text-center">
                    <h3 class="card-title">House</h3>
                    <p>No houses found for the given criteria.</p>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Property Type</th>
                                <th>Status</th>
                                <th>City</th>
                                <th>Image URL</th>
                                <th>Price</th>
                                <th>Description</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td colspan="7" class="text-center">No data available in table</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>';

            // Display search form for a new search
            echo '
            <div >
            <div class="container h-100">
                <div class="row h-100 align-items-center">
                    <div class="col-lg-12">
                        <div class="text-white">
                            <h1 style="color: red;margin-top:10px;" class="mb-4">
                                Search Again</h1>
                            <form id="propertySearchForm" method="post" action="property-search.php">
                                <div class="row">
                                    <div class="col-md-6 col-lg-3 mb-3">
                                        <select class="form-control" name="type" required>
                                            <option value="" selected disabled>Select House Type</option>
                                            <option value="apartment">Apartment</option>
                                            <option value="flat">Flat</option>
                                            <option value="building">Building</option>
                                            <option value="house">House</option>
                                            <option value="villa">Villa</option>
                                            <option value="office">Office</option>
                                        </select>
                                    </div>
                                    <div class="col-md-6 col-lg-3 mb-3">
                                        <select class="form-control" name="stype" required>
                                            <option value="" selected disabled>Select Status</option>
                                            <option value="rent">Rent</option>
                                            <option value="sale">Sale</option>
                                            <!-- Add other status options as needed -->
                                        </select>
                                    </div>
                                    <div class="col-md-6 col-lg-4 mb-3">
                                        <input type="text" class="form-control" name="city" placeholder="Enter City (e.g., Nairobi)" required>
                                    </div>
                                    <div class="col-md-6 col-lg-2">
                                        <button type="submit" name="filter" class="btn btn-success w-100"><i class="fas fa-search"></i> Search Property</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>';
        }
        
    }
    $conn->close(); // Close the database connection
    ?>


    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/jquery.sticky.js"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
    <script>
        $(document).ready(function() {
            $("#example1").DataTable({
                "responsive": true,
                "lengthChange": true,
                "lengthMenu": [10, 25, 50, 75, 100],
                "autoWidth": false,
                "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"],
                "language": {
                    "lengthMenu": "Show _MENU_ entries",
                    "search": "Search:"
                }
            });
        });
    </script>

</body>
<footer style="background-color: black!important; margin-top:60px;position:">
            <div class="container">   
                <div class="row copyright">
                    <div style="font-size: 15px;" class="col-sm-6"> <span class="text-white">© <?php echo date('Y');?> COSY HOMES - Developed By <span style="color: blueviolet;">C</span><span style="color:yellow;">aro</span><span style="color: blueviolet;">l</span><span style="color: yellow;"> Njenga</span> </div>
                    <div class="col-sm-6">
                        <ul style="margin-top: 0px;font-size:15px" class="line-menu text-white hover-text-primary float-right">
                            <li><a href="#">Privacy & Policy</a></li>
                            <li>|</li>
                            <li><a href="#"> Site Map</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </footer>
  <!-- End Footer -->
</html>
