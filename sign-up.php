<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <title>Sign Up - House Hunt</title>
    <link href="assets/img/Real Estate Logo.png" rel="icon">

    <link rel="stylesheet" href="assets/css/style.css">

    <link rel="stylesheet" href="assets/css/toastr.min.css">


    <link rel="stylesheet" href="assets/style/intlTelinput.min.css">


    <link rel="stylesheet" href="assets/css/bootstrap.min.css">

    <link rel="stylesheet" href="assets/css/intlTelinput.min.css">


    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.17/dist/sweetalert2.min.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.17/dist/sweetalert2.all.min.js"></script>
</head>

<body>
    <div class="d-flex">
        <div class="col-md-8 col-lg-8" style="padding: 0 10% 0 10%;">
            <table style="height: 100vh; width: 100%">
                <tr>
                    <td class="container-fluid">
                        <style>
                            .breadcrumb {
                                background-color: transparent;
                                padding: 0;
                                margin: 0;
                                list-style: none;
                            }

                            .breadcrumb-item.active {
                                font-weight: bold;
                                font-size: 30px;
                            }

                            .breadcrumb-item::before {
                                content: none;
                                font-size: 30px;
                            }

                            .breadcrumb-item a {
                                font-size: 30px;
                                text-decoration: none;
                            }
                        </style>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item active">Sign Up</li>
                                <li style="color: blueviolet;" class="breadcrumb-item"><a href="index.php">Home</a></li>

                            </ol>
                        </nav>

                        <p style="margin-bottom: 25px;" class="text-muted">Kindly create an account to access House Hunt Management services.</p>
                        <form action="process_form.php" id="register_form" method="post" accept-charset="utf-8">
                            <div class="row">
                                <div class="form-group col-sm-6">
                                    <label for="id" class="form-label required">ID</label>
                                    <input type="text" name="id" value="" class="form-control" id="id" placeholder="Enter your ID" required="" disabled="disabled" style="background-color: #f5f5f5; cursor: not-allowed;" />
                                </div>
                                <div class="form-group col-sm-6">
                                    <label for="name" class="form-label required">Name</label>
                                    <input type="text" name="name" value="" class="form-control" id="name" placeholder="Enter your name" required="" />
                                </div>
                                <div class="form-group col-sm-6">
                                    <label for="username" class="form-label required">Username</label>
                                    <input type="text" name="username" value="" class="form-control" id="username" placeholder="Enter your username" required="" />
                                </div>
                                <div class="form-group col-sm-6">
                                    <label for="email" class="form-label required">Email</label>
                                    <input type="text" name="email_address" value="" id="email" class="form-control" placeholder="Enter your email" required="" />
                                </div>
                                <div class="form-group col-sm-6">
                                    <label for="phone" class="form-label required">Phone</label>
                                    <input type="text" name="phone_number" value="" id="phone_number" class="form-control" placeholder="Enter your phone" required="" />
                                </div>
                                <div class="form-group col-sm-6">
                                    <label for="role" class="form-label required">Role</label>
                                    <select name="role" id="role" class="form-control" required="">
                                        <option value="" disabled selected>Select Role</option>
                                        <option value="admin" disabled class="blur-option">&#x1F451; Admin</option>
                                        <option value="user">&#x1F468;&#x200D;&#x1F393; User</option> <!-- User icon -->
                                    </select>
                                </div>
                                <style>
                                    .blur-option {
                                        color: rgba(0, 0, 0, 0.5);
                                    }

                                    .blur-option:disabled {
                                        filter: blur(4px);
                                        cursor: not-allowed;
                                    }
                                </style>
                                <div class="form-group col-sm-6">
                                    <label for="status" class="form-label required">Status</label>
                                    <select name="status" id="status" class="form-control" required="">
                                        <option value="" disabled selected>Select Status</option>
                                        <option value="Active">&#x1F468;&#x200D;&#x1F4BC; Active</option>
                                        <option value="Inactive">❌ Inactive</option>
                                    </select>
                                </div>


                                <div class="form-group col-sm-6">
                                    <label for="password" class="form-label required">Password</label>
                                    <input type="password" name="password" value="" size="20" id="password" placeholder="Enter your password" class="form-control" required="" autocomplete="nop" />
                                </div>
                            </div>
                            
                            <div class="d-grid">
                                <button type="submit" id="registerButton" class="btn btn-block btn-purple" style="margin-top:2em; background-color:blueviolet;color:white">Get Started Now <img src="assets/img/right-arrow.png" alt="Right Arrow"></button>
                            </div>
                            
                        </form>
                    </td>
                </tr>
                <tr height="40px">
                    <td>
                        <div class="text-center text-muted" style="padding-right: 5em; font-size: 12.5px;">&copy; House Hunt 2023 - 2024 &middot; Powered by <a style="color: #800080" href="https://www.mywebmark.tech" target="_blank">MywebMark Technologies</a></div>
                    </td>
                </tr>
            </table>
        </div>
        <div class="col-md-4 col-lg-4" style="height: 100vh; margin: 0px; background-size: cover; background-position: center;display: flex; align-items: center; justify-content: center;">
            <div style="background: grey; height: 100%; width: 100%; left : 0; opacity : .9"></div>
            <div class="" style="position: absolute; z-index: 999; width: 300px;color: white;">
                <h1>House Portal</h1>
                <p class='' style="margin-bottom: 4px">Your platform for selling houses</p>
                <hr style="opacity:.2">
                <p>Enter the portal to experience a seamless process for selling your house, all in one place.</p>
                <p>*House search made easy.*</p>
                <div style="margin-top: 2em">
                    <p>Already have an account?</p>
                    <a class="btn btn-warning" href="login.php"> Login now &nbsp; <span class="fi fi-sr-interactive"></span></a>
                </div>
            </div>
        </div>

    </div>
    <style>
        /* Set a purple outline on focus for all input elements */
        input[type="text"]:focus,
        input[type="password"]:focus {
            outline: 1px solid blueviolet;
        }

        input[type="text"]:focus,
        input[type="password"]:focus {
            border: none !important;
            box-shadow: none !important;
        }
    </style>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <script>
        document.getElementById("register_form").addEventListener("submit", function(event) {
            event.preventDefault(); // Prevent the default form submission behavior

            // Collect form data
            var formData = new FormData(this);

            // Swal configuration for custom appearance and timer
            var swalConfig = {
                customClass: {
                    popup: 'custom-swal-popup',
                    icon: 'custom-swal-icon',
                    content: 'custom-swal-content'
                },
                timer: 1500
            };

            // Send an AJAX request to the PHP script for form processing
            $.ajax({
                type: "POST",
                url: "process_form.php",
                data: formData,
                contentType: false,
                processData: false,
                success: function(response) {
                    switch (response) {
                        case "success":
                            // User added/updated successfully
                            Swal.fire({
                                ...swalConfig,
                                icon: "success",
                                text: "User added/updated successfully"
                            }).then(function() {
                                // Redirect to your signup page
                                window.location.href = "sign-up.php";
                            });
                            break;
                        case "email_in_use":
                            // Email is already in use
                            Swal.fire({
                                ...swalConfig,
                                icon: "error",
                                text: "Email is already in use"
                            });
                            break;
                        case "username_in_use":
                            // Username is already in use
                            Swal.fire({
                                ...swalConfig,
                                icon: "error",
                                text: "Username is already in use"
                            });
                            break;
                        case "both_in_use":
                            // Both email and username are already in use
                            Swal.fire({
                                ...swalConfig,
                                icon: "error",
                                text: "Both email and username are already in use"
                            });
                            break;
                        case "invalid_phone_number":
                            // Invalid phone number
                            Swal.fire({
                                ...swalConfig,
                                icon: "error",
                                text: "Please enter a valid phone number"
                            });
                            break;
                        default:
                            // Some other error occurred
                            Swal.fire({
                                ...swalConfig,
                                icon: "error",
                                text: "An error occurred. Please try again later."
                            });
                    }
                }
            });
        });
    </script>


    <style>
        .custom-swal-popup {
            text-align: center;
            padding: 16px;
            margin: 32px auto;
        }

        .custom-swal-icon {
            font-size: 10px;
            margin-bottom: 16px;
        }

        .custom-swal-content {
            font-size: 18px;
        }

        .iti {
            display: block
        }
    </style>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/18.2.1/css/intlTelInput.css">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/18.2.1/js/intlTelInput.min.js"></script>
    <script src="assets/js/script.js"></script>

    <script type="text/javascript">
        $(document).ready(function() {

            var input = document.querySelector("#phone_number");

            var iti = window.intlTelInput(input, {
                autoPlaceholder: "aggressive",
                geoIpLookup: function(callback) {
                    $.get("http://ipinfo.io", function() {}, "jsonp").always(function(resp) {
                        var countryCode = (resp && resp.country) ? resp.country : "";
                        callback(countryCode);
                    });
                },
                hiddenInput: "phone",
                nationalMode: false,
                preferredCountries: ['ke', 'ug', 'tz'],
                separateDialCode: true,
                utilsScript: "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/18.2.1/js/utils.js",
            });

            // Update placeholders for specific countries
            iti.promise.then(function() {
                var countryData = iti.getSelectedCountryData();
                var selectedCountry = countryData.iso2;

                // Modify placeholders for specific countries
                if (selectedCountry === 'ke') {
                    input.placeholder = "712345678";
                } else if (selectedCountry === 'ug') {
                    input.placeholder = "712345678";
                } else if (selectedCountry === 'tz') {
                    input.placeholder = "612345678";
                }
            });
        });
    </script>

</body>

</html>