<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
    <html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="content-type" content="text/html; charset=utf-8" />
        <link rel="stylesheet" href="assets/css/style.css">

        <link rel="stylesheet" href="assets/css/toastr.min.css">

        <link rel="stylesheet" href="assets/css/bootstrap.min.css">

        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.17/dist/sweetalert2.min.css">
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.17/dist/sweetalert2.all.min.js"></script>

        <title>Enter Email - reset</title>
        <link href="assets/img/Real Estate Logo.png" rel="icon">

    </head>

    <style>
        form {
            margin: auto;
            min-width: 250px;
            max-width: 350px;
            border: none
        }
        /* Set a purple outline on focus for all input elements */
        input[type="email"]:focus {
            outline: 1px solid blueviolet;
        }

        input[type="email"]:focus {
            border: none !important;
            box-shadow: none !important;
        }
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
    <body>
        <div class="d-flex">
            
            <div class="col-md-6">
                
                
            <table style="height: 100vh; width: 100%;">
            
                    <tr>
                        
                        
                        <td class="container-fluid" id="formContainer">
                        <form id="resetPasswordForm" method="post" action="check-email-reset.php">
                            
                        
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
                                <li class="breadcrumb-item active">Reset-Password</li>
                                <li style="color: blueviolet;" class="breadcrumb-item"><a href="index.php">Home</a></li>

                            </ol>
                        </nav>
                                <p style="margin-bottom: 25px; font-size: 14.5px" class="text-muted">Enter your email to reset your password.</p>
                                <div class="form-group">
                                    <label for="email" class="form-label">Email</label>
                                    <input type="email" class="form-control" name="email" placeholder="Enter your email" required>
                                </div>
                                <div class="d-grid">
                                    <button class="btn btn-block btn-purple" id="resetPasswordButton" style="margin-top:1em;background-color:blueviolet;color:white;" type="submit">CONTINUE</button>
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
                    
                    <div style="margin-top: 2em">
                    <p>Already Got Your Password?</p>
                    <a class="btn btn-warning" href="login.php"> Login now &nbsp; <span class="fi fi-sr-interactive"></span></a>
                </div>
                </div>
            </div>
        
        </div>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.17/dist/sweetalert2.min.js"></script>

        <script>
            const displayAlert = (message, success) => {
                Swal.fire({
                    text: message,
                    icon: success ? 'success' : 'error',
                    timer: 3000, // Hide after 5 seconds
                    toast: true,
                    position: 'center',
                    showConfirmButton: false
                });
            };

            document.getElementById("resetPasswordForm").addEventListener("submit", function (event) {
                event.preventDefault(); // Prevent the default form submission

                // Fetch the form data
                const formData = new FormData(event.target);

                // Send a POST request to the server
                fetch("check-email-reset.php", {
                    method: "POST",
                    body: formData
                })
                    .then(response => response.json())
                    .then(data => {
                        if (data.emailExists) {
                            // Email exists, redirect to change-password.php
                            displayAlert("Email Found. You will be redirected to the password reset page.", true);
                            setTimeout(() => {
                                window.location.href = `change-password-form.php?email=${data.email}`;
                            }, 3000);
                        } else {
                            // Email does not exist - display SweetAlert error
                            displayAlert("Email Not Found.", false);
                        }
                    })
                    .catch(error => {
                        console.error("Error:", error);
                    });
            });
        </script>
    </body>
</html>
