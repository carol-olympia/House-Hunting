<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <link rel="stylesheet" href="assets/css/style.css">

    <link rel="stylesheet" href="assets/css/toastr.min.css">

    <link rel="stylesheet" href="assets/css/bootstrap.min.css">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.17/dist/sweetalert2.min.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.17/dist/sweetalert2.all.min.js"></script>

    <title>User login - House </title>
    <link href="assets/img/Real Estate Logo.png" rel="icon">

</head>
<style>
    form {
        margin: auto;
        min-width: 250px;
        max-width: 350px;
        border: none
    }

    input[type="text"]:focus,
    input[type="password"]:focus {
        outline: 1px solid #12aa1f;
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
                        <form id="loginForm" method="post">
                        <style>     .breadcrumb {
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
                            }</style>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item active">Sign Up</li>
                                <li style="color: blueviolet;" class="breadcrumb-item"><a href="index.php">Home</a></li>

                            </ol>                            <p style="margin-bottom: 25px; font-size: 14.5px" class="text-muted">Welcome back! 🌟 Ready to take charge of your business? Log in to your portal and seize the day.</p>
                            <div class="form-group">
                                <label for="username" class="form-label">Username </label>
                                <input type="text" class="form-control" size="20" name="username_email" placeholder="Enter your username or email" required>
                            </div>
                            <div class="form-group">
                                <label for="password" class="form-label">Password </label>
                                <input type="password" class="form-control" size="20" name="password" placeholder="Enter your password" required>
                            </div>
                            <div style="margin-bottom: 20px; color: blueviolet;">
                                <div>
                                    <a href="reset-password-form.php" style="text-decoration: none; color: blueviolet;">Forgot Password?</a>
                                </div>
                            </div>

                            <div class="d-grid">
                                <button class="btn btn-block btn-purple" id="loginButton" style="margin-top:1em;background-color:blueviolet;color:white;" type="submit">TAKE ME IN <img src="assets/img/right-arrow.png" alt="Right Arrow"></button>
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
        <div class="col-md-6" style="height: 100vh; margin: 0px;background-size: cover; background-position: center; display: flex; align-items: center; justify-content: center;">
            <div style="background: grey; height: 100%; width: 100%; left : 0; opacity : .9;z-index: 1"></div>
            <div class="" style="position: absolute; width: 300px;color: white; z-index: 10">
                <h2>House Hunt Portal</h2>
                <p class='' style="margin-bottom: 4px">Your platform for selling houses</p>
                <hr style="opacity:.2">
                <p>Enter the portal to experience a seamless process for selling your house, all in one place.</p>
                <p>*House Search made easy.*</p>
                <div style="margin-top: 2em">
                    <p>Don't have an account? </p>
                    <a class="btn btn-warning" href="sign-up.php"> SignUp for Free &nbsp; <span class="fi fi-sr-interactive"></span></a>
                </div>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        document.getElementById("loginForm").addEventListener("submit", function(event) {
            event.preventDefault(); // Prevent the default form submission

            // Fetch the form data
            const formData = new FormData(event.target);

            // Send a POST request to the server
            fetch("login-check.php", {
                    method: "POST",
                    body: formData
                })
                .then(response => response.json())
                .then(data => {
                    if (data.success) {
                        Swal.fire({
                            icon: "success",
                            title: "Login Successful!",
                            text: "You have successfully logged in.",
                            confirmButtonText: "OK"
                        }).then(function() {
                            window.location.href = "dashboard.php";
                        });
                    } else {
                        Swal.fire({
                            icon: "error",
                            title: "Login Failed!",
                            text: "Incorrect username/email or password.",
                            confirmButtonText: "OK"
                        });
                    }
                })
                .catch(error => {
                    console.error("Error:", error);
                });
        });
    </script>
</body>

</html>