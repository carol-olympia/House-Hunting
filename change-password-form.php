<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
    <html xmlns="http://www.w3.org/1999/xhtml">

    <head>
        <meta http-equiv="content-type" content="text/html; charset=utf-8" />
        <link rel="stylesheet" href="assets/css/style.css">

        <link rel="stylesheet" href="assets/css/toastr.min.css">

        <link rel="stylesheet" href="assets/css/bootstrap.min.css">

        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.17/dist/sweetalert2.min.css">
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.17/dist/sweetalert2.all.min.js"></script>

        <title>Enter New Password </title>
        <link href="assets/img/Real Estate Logo.png" rel="icon">

    </head>
    <body>
        <div class="d-flex">
            <div class="col-md-6">
                <table style="height: 100vh; width: 100%;">
                    <tr>
                        <td class="container-fluid" id="formContainer">
                            <form id="changePasswordForm" method="post" action="handle-password-change.php">
                                <h3 class="form-signin-heading" style="color: blueviolet; font-size: 1.7em">Change Password</h3>
                                <p style="margin-bottom: 25px; font-size: 14.5px" class="text-muted">Enter your new password.</p>
                                <div class="form-group">
                                    <label for="password" class="form-label">New Password</label>
                                    <input type="password" class="form-control" name="password" placeholder="Enter your new password" required>
                                </div>
                                <div class="form-group">
                                    <label for="confirm_password" class="form-label">Confirm New Password</label>
                                    <input type="password" class="form-control" name="confirm_password" placeholder="Confirm your new password" required>
                                </div>
                                <input type="hidden" name="email" value="<?php echo $_GET['email']; ?>">
                                <div class="d-grid">
                                    <button class="btn btn-block btn-purple" id="changePasswordButton" style="margin-top:1em;background-color:blueviolet;color:white;" type="submit">RESET PASSWORD</button>
                                </div>
                            </form>
                        </td>
                    </tr>
                </table>
            </div>
            <div class="col-md-6" style="height: 100vh; margin: 0px;background-size: cover; background-position: center; display: flex; align-items: center; justify-content: center;">
                <div style="background: grey; height: 100%; width: 100%; left : 0; opacity : .9;z-index: 1"></div>
                <div class="" style="position: absolute; width: 300px;color: white; z-index: 10">
                    <h2>House Hunt Portal</h2>
                    <p class='' style="margin-bottom: 4px">Your platform for selling houses</p>
                    <hr style="opacity:.2">
                    <p>Enter the portal to experience a seamless process for selling your house, all in one place.</p>
                    <p>*House Search made easy.*</p>
                </div>
            </div>
            <style>
                input[type="text"]:focus,
                input[type="password"]:focus {
                    outline: 1px solid blueviolet;
                }

                input[type="text"]:focus,
                input[type="password"]:focus {
                    border: none !important;
                    box-shadow: none !important;
                }
                form {
                    margin: auto;
                    min-width: 250px;
                    max-width: 350px;
                    border: none;
                 }
            </style>
        </div>
    </body>
    <script>
            document.getElementById("changePasswordForm").addEventListener("submit", function(event) {
                event.preventDefault(); // Prevent the default form submission

                // Fetch the form data
                const formData = new FormData(event.target);

                // Send a POST request to the server
                fetch("handle-password-change.php", {
                        method: "POST",
                        body: formData
                    })
                    .then(response => response.json())
                    .then(data => {
                        if (data.success) {
                            Swal.fire({
                                icon: "success",
                                text: data.message,
                                showConfirmButton: false,
                                timer: 4000,
                                toast: true,
                                position: 'center'
                            }).then(function() {
                                window.location.href = "login.php"; // Redirect to login page
                            });
                        } else {
                            Swal.fire({
                                icon: "error",
                                text: data.message,
                                showConfirmButton: false,
                                timer: 4000,
                                toast: true,
                                position: 'center'
                            });
                        }
                    })
                    .catch(error => {
                        console.error("Error:", error);
                    });
            });
        </script>

</html>