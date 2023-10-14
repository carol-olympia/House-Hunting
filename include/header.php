<body id="section_1">

    <header style="background-color:black" class="site-header">
        <div class="container">
            <div class="row">

                <div style="color: white;" class="col-lg-8 col-12 d-flex flex-wrap">
                    <p class="d-flex me-4 mb-0">
                        <i class="bi-geo-alt me-2"></i>
                        Nairobi , 50100 Fedha, Kenya
                    </p>

                    <p class="d-flex mb-0">
                        <i class="bi-envelope me-2"></i>

                        <a style="text-decoration: none;" href="mailto:info@company.com">
                            info@househunt.com
                        </a>
                    </p>
                </div>

                <div style="color: white;" class="col-lg-3 col-12 ms-auto d-lg-block d-none">
                    <ul class="social-icon">
                        <li class="social-icon-item">
                            <a href="#" class="social-icon-link bi-twitter"></a>
                        </li>

                        <li class="social-icon-item">
                            <a href="#" class="social-icon-link bi-facebook"></a>
                        </li>

                        <li class="social-icon-item">
                            <a href="#" class="social-icon-link bi-instagram"></a>
                        </li>

                        <li class="social-icon-item">
                            <a href="#" class="social-icon-link bi-youtube"></a>
                        </li>

                        <li class="social-icon-item">
                            <a href="#" class="social-icon-link bi-whatsapp"></a>
                        </li>
                    </ul>
                </div>

            </div>
        </div>
    </header>
    <nav style="background-color: white!important; height:70px!important" class="navbar navbar-expand-lg bg-light shadow-lg">
        <div class="container">
            <a class="navbar-brand" href="index.php">
                <img src="assets/img/Real Estate Logo.png" class="logo img-fluid" alt="Kind Heart Charity">
                <span>
                    House Hunt
                    <small>Hunt for Your Dream House Today</small>
                </span>
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">


                    <?php
                        $currentPage = basename($_SERVER['PHP_SELF']); // Get the current page filename

                        // Check if the current page is 'about.php' and set the active class accordingly
                        $aboutActive = ($currentPage == 'about.php') ? 'active' : '';
                    ?>

                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item <?php echo ($currentPage == 'index.php') ? 'active' : ''; ?>">
                                <a class="nav-link custom-btn custom-border-btn btn" href="index.php">HOME</a>
                            </li>

                            <li class="nav-item <?php echo ($currentPage == 'about.php') ? 'active' : ''; ?>">
                                <a class="nav-link custom-btn custom-border-btn btn" href="about.php">ABOUT</a>
                            </li>
                            <li class="nav-item <?php echo ($currentPage == 'service.php') ? 'active' : ''; ?>">
                            <a class="nav-link custom-btn custom-border-btn btn" href="service.php">SERVICES</a>
                            </li>

                            <li class="nav-item <?php echo ($currentPage == 'contact us.php') ? 'active' : ''; ?>">
                                <a class="nav-link custom-btn custom-border-btn btn" href="contact us.php">CONTACT US</a>
                            </li>

                            <li class="nav-item <?php echo ($currentPage == 'investors.php') ? 'active' : ''; ?>">
                                <a class="nav-link custom-btn custom-border-btn btn" href="investors.php">INVESTORS</a>
                            </li>

                            <li class="nav-item <?php echo ($currentPage == 'pricing.php') ? 'active' : ''; ?>">
                                <a class="nav-link custom-btn custom-border-btn btn" href="pricing.php">PRICING</a>
                            </li>

                            <li class="nav-item ms-3">
                                <a class="nav-link custom-btn custom-border-btn btn" href="sign-up.php" style="background-color: blueviolet;margin-top:10px; color: white; padding: 10px 20px; text-decoration: none; display: inline-block; transition: background-color 0.3s, color 0.3s;" onmouseover="this.style.backgroundColor='green'" onmouseout="this.style.backgroundColor='blueviolet'">SIGN UP</a>
                            </li>
                        </ul>
            </div>
        </div>
    </nav>