<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <link href="assets/img/Real Estate Logo.png" rel="icon">
    <!-- CSS FILES -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">

    <link href="icons/bootstrap-icons.css" rel="stylesheet">

    <link href="assets/css/house-hunt-header.css" rel="stylesheet">

    <link href="assets/css/homepage.css" rel="stylesheet">

    <link href="assets/css/belowheader.css" rel="stylesheet">

    <link href="assets/css/footer.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">

</head>

<body>
    <?php include 'include/header.php'; ?>

    <!-- Banner Start -->
    <div id="banner" class="overlay-black w-100 slider-banner1 position-relative" style="background-image: url('assets/img/hosuek1.jpg'); background-size: cover; background-position: center center; background-repeat: no-repeat;">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-lg-12">
                    <div class="text-white">
                        <h1 style="color: red;margin-top:200px;" class="mb-4"><span class="text-success" style="color: white!important;">Let us</span><br>
                            Guide you Home</h1>
                        <form method="post" action="property-search.php">
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
    </div>
    <!-- Banner End -->

    <style>
        .nav-pills .nav-item .btn {
            color:violetblue!important;
        }

        .nav-pills .nav-item .btn:hover,
        .nav-pills .nav-item .btn.active {
            color: #FFFFFF;
        }

        .property-item {
            box-shadow: 0 0 30px rgba(0, 0, 0, .08);
        }

        .property-item img {
            transition: .5s;
        }

        .property-item:hover img {
            transform: scale(1.1);
        }

        .property-item .border-top {
            border-top: 1px dashed rgba(0, 185, 142, .3) !important;
        }

        .property-item .border-end {
            border-right: 1px dashed rgba(0, 185, 142, .3) !important;
        }
    </style>
    <div class="full-row bg-gray">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2 class="text-secondary double-down-line text-center mb-5">What We Do </h2>
                </div>
            </div>
            <div class="text-box-one">
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="p-4 text-center hover-bg-white hover-shadow rounded mb-4 transation-3s">
                            <i class="fas fa-handshake text-success"></i>
                            <h5 class="text-secondary hover-text-success py-3 m-0"><a href="#">Selling Service</a></h5>
                            <p>Our selling service is designed to help you sell your property with ease and efficiency. We provide expert guidance throughout the selling process, ensuring you get the best value for your property.</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="p-4 text-center hover-bg-white hover-shadow rounded mb-4 transation-3s">
                            <i class="fas fa-home text-success"></i>
                            <h5 class="text-secondary hover-text-success py-3 m-0"><a href="#">Rental Service</a></h5>
                            <p>Our rental service aims to simplify the process of finding and leasing a property. We have a wide range of rental options to suit your needs, and our team will assist getting the perfect.</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="p-4 text-center hover-bg-white hover-shadow rounded mb-4 transation-3s">
                            <i class="fas fa-list text-success"></i>
                            <h5 class="text-secondary hover-text-success py-3 m-0"><a href="#">Property Listing</a></h5>
                            <p>With our property listing service, we make it easy for property owners to showcase their properties to broad audience. We leverage effective marketing strategies to attract potentialy.</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="p-4 text-center hover-bg-white hover-shadow rounded mb-4 transation-3s">
                            <i class="fas fa-chart-pie text-success"></i>
                            <h5 class="text-secondary hover-text-success py-3 m-0"><a href="#">Legal Investment</a></h5>
                            <p>Legal investment is a critical aspect of property transactions. Our team of legal experts will guide you through the legal intricacies involved in property investment securing.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Property List Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-0 gx-5 align-items-end">
                <div class="col-lg-6">
                    <div class="text-start mx-auto mb-5 wow slideInLeft" data-wow-delay="0.1s">
                        <h1 class="mb-3">Property Listing</h1>
                    </div>
                </div>
                <div class="col-lg-6 text-start text-lg-end wow slideInRight" data-wow-delay="0.1s">
                    <ul class="nav nav-pills d-inline-flex justify-content-end mb-5">
                        <li class="nav-item me-2">
                            <a class="btn btn-outline-primary active" data-bs-toggle="pill" href="#tab-1">Featured</a>
                        </li>
                        <li class="nav-item me-2">
                            <a class="btn btn-outline-primary" data-bs-toggle="pill" href="#tab-2">For sale</a>
                        </li>
                        <li class="nav-item me-0">
                            <a class="btn btn-outline-primary" data-bs-toggle="pill" href="#tab-3">To Rent</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="tab-content">
                <div id="tab-1" class="tab-pane fade show p-0 active">
                    <div class="row g-4">
                        <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                            <div class="property-item rounded overflow-hidden">
                                <div class="position-relative overflow-hidden">
                                    <a href=""><img class="img-fluid" src="img/property-1.jpg" alt=""></a>
                                    <div class="bg-primary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3">Rental</div>
                                    <div class="bg-white rounded-top text-primary position-absolute start-0 bottom-0 mx-4 pt-1 px-3">Appartment</div>
                                </div>
                                <div class="p-4 pb-0">
                                    <h5 class="text-primary mb-3">Ksh100,000</h5>
                                    <a class="d-block h5 mb-2" href="https://www.google.com/maps/search/karen/@-1.3169012,36.6157102,12z/data=!3m1!4b1?entry=ttu">Urban House to Rent</a>
                                    <p><i class="fa fa-map-marker-alt text-primary me-2"></i>karen,Nairobi Kenya</p>
                                </div>
                                <div class="d-flex border-top">
                                    <small class="flex-fill text-center border-end py-2"><i class="fa fa-ruler-combined text-primary me-2"></i>1000 Sqft</small>
                                    <small class="flex-fill text-center border-end py-2"><i class="fa fa-bed text-primary me-2"></i>3 Bed</small>
                                    <small class="flex-fill text-center py-2"><i class="fa fa-bath text-primary me-2"></i>2 Bath</small>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                            <div class="property-item rounded overflow-hidden">
                                <div class="position-relative overflow-hidden">
                                    <a href=""><img class="img-fluid" src="img/property-2.jpg" alt=""></a>
                                    <div class="bg-primary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3">For Sale</div>
                                    <div class="bg-white rounded-top text-primary position-absolute start-0 bottom-0 mx-4 pt-1 px-3">Villa</div>
                                </div>
                                <div class="p-4 pb-0">
                                    <h5 class="text-primary mb-3">Ksh16,000,000</h5>
                                    <a class="d-block h5 mb-2" href="https://www.google.com/maps/search/karen/@-1.3169012,36.6157102,12z/data=!3m1!4b1?entry=ttu">Modern glass house on Sale</a>
                                    <p><i class="fa fa-map-marker-alt text-primary me-2"></i>karen,Nairobi, Kenya</p>
                                </div>
                                <div class="d-flex border-top">
                                    <small class="flex-fill text-center border-end py-2"><i class="fa fa-ruler-combined text-primary me-2"></i>1000 Sqft</small>
                                    <small class="flex-fill text-center border-end py-2"><i class="fa fa-bed text-primary me-2"></i>4 Bed</small>
                                    <small class="flex-fill text-center py-2"><i class="fa fa-bath text-primary me-2"></i>3 Bath</small>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                            <div class="property-item rounded overflow-hidden">
                                <div class="position-relative overflow-hidden">
                                    <a href=""><img class="img-fluid" src="img/mall.jpg" alt=""></a>
                                    <div class="bg-primary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3">For Sale</div>
                                    <div class="bg-white rounded-top text-primary position-absolute start-0 bottom-0 mx-4 pt-1 px-3">Mall</div>
                                </div>
                                <div class="p-4 pb-0">
                                    <h5 class="text-primary mb-3">Ksh50,345</h5>
                                    <a class="d-block h5 mb-2" href="https://www.google.com/maps/search/karen/@-1.3170728,36.6158834,12z/data=!3m1!4b1?entry=ttu">Modern office</a>
                                    <p><i class="fa fa-map-marker-alt text-primary me-2"></i>modern Street, karen Kenya</p>
                                </div>
                                <div class="d-flex border-top">
                                    <small class="flex-fill text-center border-end py-2"><i class="fa fa-ruler-combined text-primary me-2"></i>100 Sqft</small>
                                    <small class="flex-fill text-center py-2"><i class="fa fa-bath text-primary me-2"></i>1 washroom</small>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                            <div class="property-item rounded overflow-hidden">
                                <div class="position-relative overflow-hidden">
                                    <a href=""><img class="img-fluid" src="img/property-4.jpg" alt=""></a>
                                    <div class="bg-primary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3">Rental</div>
                                    <div class="bg-white rounded-top text-primary position-absolute start-0 bottom-0 mx-4 pt-1 px-3">Home</div>
                                </div>
                                <div class="p-4 pb-0">
                                    <h5 class="text-primary mb-3">Ksh1,600,000</h5>
                                    <a class="d-block h5 mb-2" href="https://www.google.com/maps/place/Runda+Suites/@-1.213819,36.8021271,17z/data=!3m1!4b1!4m9!3m8!1s0x182f3d674a572709:0xc5157eaaa0fa6f4!5m2!4m1!1i2!8m2!3d-1.213819!4d36.804702!16s%2Fg%2F11c58sfzcx?entry=ttu"> House For Sale</a>
                                    <p><i class="fa fa-map-marker-alt text-primary me-2"></i> Runda suites, Nairobi Kenya</p>
                                </div>
                                <div class="d-flex border-top">
                                    <small class="flex-fill text-center border-end py-2"><i class="fa fa-ruler-combined text-primary me-2"></i>1000 Sqft</small>
                                    <small class="flex-fill text-center border-end py-2"><i class="fa fa-bed text-primary me-2"></i>4 Bed</small>
                                    <small class="flex-fill text-center py-2"><i class="fa fa-bath text-primary me-2"></i>6 Bath</small>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                            <div class="property-item rounded overflow-hidden">
                                <div class="position-relative overflow-hidden">
                                    <a href=""><img class="img-fluid" src="img/property-5.jpg" alt=""></a>
                                    <div class="bg-primary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3">For sale</div>
                                    <div class="bg-white rounded-top text-primary position-absolute start-0 bottom-0 mx-4 pt-1 px-3">Home</div>
                                </div>
                                <div class="p-4 pb-0">
                                    <h5 class="text-primary mb-3">Ksh1,400,000</h5>
                                    <a class="d-block h5 mb-2" href="https://www.google.com/maps/place/Runda+Suites/@-1.213819,36.8021271,17z/data=!3m1!4b1!4m9!3m8!1s0x182f3d674a572709:0xc5157eaaa0fa6f4!5m2!4m1!1i2!8m2!3d-1.213819!4d36.804702!16s%2Fg%2F11c58sfzcx?entry=ttu">House For sale</a>
                                    <p><i class="fa fa-map-marker-alt text-primary me-2"></i>Runda suites, Nairobi Kenya</p>
                                </div>
                                <div class="d-flex border-top">
                                    <small class="flex-fill text-center border-end py-2"><i class="fa fa-ruler-combined text-primary me-2"></i>1000 Sqft</small>
                                    <small class="flex-fill text-center border-end py-2"><i class="fa fa-bed text-primary me-2"></i>3 Bed</small>
                                    <small class="flex-fill text-center py-2"><i class="fa fa-bath text-primary me-2"></i>2 Bath</small>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                            <div class="property-item rounded overflow-hidden">
                                <div class="position-relative overflow-hidden">
                                    <a href=""><img class="img-fluid" src="img/property-3.jpg" alt=""></a>
                                    <div class="bg-primary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3">Rental</div>
                                    <div class="bg-white rounded-top text-primary position-absolute start-0 bottom-0 mx-4 pt-1 px-3">Shop</div>
                                </div>
                                <div class="p-4 pb-0">
                                    <h5 class="text-primary mb-3">Ksh12,340</h5>
                                    <a class="d-block h5 mb-2" href="">To Rent</a>
                                    <p><i class="fa fa-map-marker-alt text-primary me-2"></i>Galot estate, Nairobi Kenya</p>
                                </div>
                                <div class="d-flex border-top">
                                    <small class="flex-fill text-center border-end py-2"><i class="fa fa-ruler-combined text-primary me-2"></i>100 Sqft</small>
                                    <small class="flex-fill text-center py-2"><i class="fa fa-bath text-primary me-2"></i>1 washroom</small>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 text-center wow fadeInUp" data-wow-delay="0.1s">
                            <a class="btn btn-primary py-3 px-5" href="">Browse More Property</a>
                        </div>
                    </div>
                </div>
                <div id="tab-2" class="tab-pane fade show p-0">
                    <div class="row g-4">
                        <div class="col-lg-4 col-md-6">
                            <div class="property-item rounded overflow-hidden">
                                <div class="position-relative overflow-hidden">
                                    <a href=""><img class="img-fluid" src="img/aoartment 2.jpg" alt=""></a>
                                    <div class="bg-primary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3">Rental</div>
                                    <div class="bg-white rounded-top text-primary position-absolute start-0 bottom-0 mx-4 pt-1 px-3">Appartment</div>
                                </div>
                                <div class="p-4 pb-0">
                                    <h5 class="text-primary mb-3">Ksh40,000</h5>
                                    <a class="d-block h5 mb-2" href="">House to rent</a>
                                    <p><i class="fa fa-map-marker-alt text-primary me-2"></i>Kiambu ,Kenya</p>
                                </div>
                                <div class="d-flex border-top">
                                    <small class="flex-fill text-center border-end py-2"><i class="fa fa-ruler-combined text-primary me-2"></i>1000 Sqft</small>
                                    <small class="flex-fill text-center border-end py-2"><i class="fa fa-bed text-primary me-2"></i>2 Bed</small>
                                    <small class="flex-fill text-center py-2"><i class="fa fa-bath text-primary me-2"></i>2 Bath</small>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="property-item rounded overflow-hidden">
                                <div class="position-relative overflow-hidden">
                                    <a href=""><img class="img-fluid" src="img/villa.jpg" alt=""></a>
                                    <div class="bg-primary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3">To Rent</div>
                                    <div class="bg-white rounded-top text-primary position-absolute start-0 bottom-0 mx-4 pt-1 px-3">Villa</div>
                                </div>
                                <div class="p-4 pb-0">
                                    <h5 class="text-primary mb-3">Ksh12,345</h5>
                                    <a class="d-block h5 mb-2" href="">Villa to rent</a>
                                    <p><i class="fa fa-map-marker-alt text-primary me-2"></i>Mombasa, Kenya</p>
                                </div>
                                <div class="d-flex border-top">
                                    <small class="flex-fill text-center border-end py-2"><i class="fa fa-ruler-combined text-primary me-2"></i>1000 Sqft</small>
                                    <small class="flex-fill text-center border-end py-2"><i class="fa fa-bed text-primary me-2"></i>6 Bed</small>
                                    <small class="flex-fill text-center py-2"><i class="fa fa-bath text-primary me-2"></i>9 Bath</small>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="property-item rounded overflow-hidden">
                                <div class="position-relative overflow-hidden">
                                    <a href=""><img class="img-fluid" src="img/office 2.jpg" alt=""></a>
                                    <div class="bg-primary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3">For sale</div>
                                    <div class="bg-white rounded-top text-primary position-absolute start-0 bottom-0 mx-4 pt-1 px-3">Office</div>
                                </div>
                                <div class="p-4 pb-0">
                                    <h5 class="text-primary mb-3">Ksh 100,000</h5>
                                    <a class="d-block h5 mb-2" href="">For Sale</a>
                                    <p><i class="fa fa-map-marker-alt text-primary me-2"></i>Parklands, Nairobi Kenya</p>
                                </div>
                                <div class="d-flex border-top">
                                    <small class="flex-fill text-center border-end py-2"><i class="fa fa-ruler-combined text-primary me-2"></i>100 Sqft</small>
                                    <small class="flex-fill text-center py-2"><i class="fa fa-bath text-primary me-2"></i>1 Bath</small>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="property-item rounded overflow-hidden">
                                <div class="position-relative overflow-hidden">
                                    <a href=""><img class="img-fluid" src="img/apartment 1.jpg" alt=""></a>
                                    <div class="bg-primary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3">For Sale</div>
                                    <div class="bg-white rounded-top text-primary position-absolute start-0 bottom-0 mx-4 pt-1 px-3">Building</div>
                                </div>
                                <div class="p-4 pb-0">
                                    <h5 class="text-primary mb-3">Ksh2,500,000</h5>
                                    <a class="d-block h5 mb-2" href="">For Sell</a>
                                    <p><i class="fa fa-map-marker-alt text-primary me-2"></i>Kiambu town, Kenya</p>
                                </div>
                                <div class="d-flex border-top">
                                    <small class="flex-fill text-center border-end py-2"><i class="fa fa-ruler-combined text-primary me-2"></i>1000 Sqft</small>
                                    <small class="flex-fill text-center border-end py-2"><i class="fa fa-bed text-primary me-2"></i>2 Bedroom</small>
                                    <small class="flex-fill text-center py-2"><i class="fa fa-bath text-primary me-2"></i>2 Bath</small>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="property-item rounded overflow-hidden">
                                <div class="position-relative overflow-hidden">
                                    <a href=""><img class="img-fluid" src="img/property-5.jpg" alt=""></a>
                                    <div class="bg-primary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3">For sale</div>
                                    <div class="bg-white rounded-top text-primary position-absolute start-0 bottom-0 mx-4 pt-1 px-3">Home</div>
                                </div>
                                <div class="p-4 pb-0">
                                    <h5 class="text-primary mb-3">Ksh1,000,000</h5>
                                    <a class="d-block h5 mb-2" href="">For Sale</a>
                                    <p><i class="fa fa-map-marker-alt text-primary me-2"></i>Nairobi, Kenya</p>
                                </div>
                                <div class="d-flex border-top">
                                    <small class="flex-fill text-center border-end py-2"><i class="fa fa-ruler-combined text-primary me-2"></i>1000 Sqft</small>
                                    <small class="flex-fill text-center border-end py-2"><i class="fa fa-bed text-primary me-2"></i>3 Bed</small>
                                    <small class="flex-fill text-center py-2"><i class="fa fa-bath text-primary me-2"></i>2 Bath</small>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="property-item rounded overflow-hidden">
                                <div class="position-relative overflow-hidden">
                                    <a href=""><img class="img-fluid" src="img/property-6.jpg" alt=""></a>
                                    <div class="bg-primary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3">Rental</div>
                                    <div class="bg-white rounded-top text-primary position-absolute start-0 bottom-0 mx-4 pt-1 px-3">House</div>
                                </div>
                                <div class="p-4 pb-0">
                                    <h5 class="text-primary mb-3">Ksh150,000</h5>
                                    <a class="d-block h5 mb-2" href="">To rent</a>
                                    <p><i class="fa fa-map-marker-alt text-primary me-2"></i>Nairobi, Kenya</p>
                                </div>
                                <div class="d-flex border-top">
                                    <small class="flex-fill text-center border-end py-2"><i class="fa fa-ruler-combined text-primary me-2"></i>1000 Sqft</small>
                                    <small class="flex-fill text-center border-end py-2"><i class="fa fa-bed text-primary me-2"></i>4 Bed</small>
                                    <small class="flex-fill text-center py-2"><i class="fa fa-bath text-primary me-2"></i>5 Bath</small>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 text-center">
                            <a class="btn btn-primary py-3 px-5" href="">Browse More Property</a>
                        </div>
                    </div>
                </div>
                <div id="tab-3" class="tab-pane fade show p-0">
                    <div class="row g-4">
                        <div class="col-lg-4 col-md-6">
                            <div class="property-item rounded overflow-hidden">
                                <div class="position-relative overflow-hidden">
                                    <a href=""><img class="img-fluid" src="img/cosymodern.jpg" alt=""></a>
                                    <div class="bg-primary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3">For sale</div>
                                    <div class="bg-white rounded-top text-primary position-absolute start-0 bottom-0 mx-4 pt-1 px-3">Home</div>
                                </div>
                                <div class="p-4 pb-0">
                                    <h5 class="text-primary mb-3">Ksh 2,500,000</h5>
                                    <a class="d-block h5 mb-2" href="">For sale</a>
                                    <p><i class="fa fa-map-marker-alt text-primary me-2"></i>Nairobi, Kenya</p>
                                </div>
                                <div class="d-flex border-top">
                                    <small class="flex-fill text-center border-end py-2"><i class="fa fa-ruler-combined text-primary me-2"></i>1000 Sqft</small>
                                    <small class="flex-fill text-center border-end py-2"><i class="fa fa-bed text-primary me-2"></i>3 Bed</small>
                                    <small class="flex-fill text-center py-2"><i class="fa fa-bath text-primary me-2"></i>3 Bath</small>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="property-item rounded overflow-hidden">
                                <div class="position-relative overflow-hidden">
                                    <a href=""><img class="img-fluid" src="img/Villavilla.jpg" alt=""></a>
                                    <div class="bg-primary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3">Rental</div>
                                    <div class="bg-white rounded-top text-primary position-absolute start-0 bottom-0 mx-4 pt-1 px-3">Villa</div>
                                </div>
                                <div class="p-4 pb-0">
                                    <h5 class="text-primary mb-3">Ksh250,000</h5>
                                    <a class="d-block h5 mb-2" href="">To rent</a>
                                    <p><i class="fa fa-map-marker-alt text-primary me-2"></i>Mombasa, Kenya</p>
                                </div>
                                <div class="d-flex border-top">
                                    <small class="flex-fill text-center border-end py-2"><i class="fa fa-ruler-combined text-primary me-2"></i>1000 Sqft</small>
                                    <small class="flex-fill text-center border-end py-2"><i class="fa fa-bed text-primary me-2"></i>3 Bed</small>
                                    <small class="flex-fill text-center py-2"><i class="fa fa-bath text-primary me-2"></i>2 Bath</small>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="property-item rounded overflow-hidden">
                                <div class="position-relative overflow-hidden">
                                    <a href=""><img class="img-fluid" src="img/office3.jpg" alt=""></a>
                                    <div class="bg-primary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3">Rental</div>
                                    <div class="bg-white rounded-top text-primary position-absolute start-0 bottom-0 mx-4 pt-1 px-3">Office</div>
                                </div>
                                <div class="p-4 pb-0">
                                    <h5 class="text-primary mb-3">Ksh12,000</h5>
                                    <a class="d-block h5 mb-2" href="">Rental</a>
                                    <p><i class="fa fa-map-marker-alt text-primary me-2"></i>Nanyuki, Kenya</p>
                                </div>
                                <div class="d-flex border-top">
                                    <small class="flex-fill text-center border-end py-2"><i class="fa fa-ruler-combined text-primary me-2"></i>1000 Sqft</small>
                                    <small class="flex-fill text-center py-2"><i class="fa fa-bath text-primary me-2"></i>1 washroom</small>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="property-item rounded overflow-hidden">
                                <div class="position-relative overflow-hidden">
                                    <a href=""><img class="img-fluid" src="img/modernvilla.jpg" alt=""></a>
                                    <div class="bg-primary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3">Rental</div>
                                    <div class="bg-white rounded-top text-primary position-absolute start-0 bottom-0 mx-4 pt-1 px-3">Home</div>
                                </div>
                                <div class="p-4 pb-0">
                                    <h5 class="text-primary mb-3">Ksh50,000</h5>
                                    <a class="d-block h5 mb-2" href="">To rent</a>
                                    <p><i class="fa fa-map-marker-alt text-primary me-2"></i>Mombasa, Kenya</p>
                                </div>
                                <div class="d-flex border-top">
                                    <small class="flex-fill text-center border-end py-2"><i class="fa fa-ruler-combined text-primary me-2"></i>1000 Sqft</small>
                                    <small class="flex-fill text-center border-end py-2"><i class="fa fa-bed text-primary me-2"></i>3 Bed</small>
                                    <small class="flex-fill text-center py-2"><i class="fa fa-bath text-primary me-2"></i>2 Bath</small>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="property-item rounded overflow-hidden">
                                <div class="position-relative overflow-hidden">
                                    <a href=""><img class="img-fluid" src="img/countrysidehouse.jpg" alt=""></a>
                                    <div class="bg-primary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3">Sale</div>
                                    <div class="bg-white rounded-top text-primary position-absolute start-0 bottom-0 mx-4 pt-1 px-3">Home</div>
                                </div>
                                <div class="p-4 pb-0">
                                    <h5 class="text-primary mb-3">Ksh3,000,000</h5>
                                    <a class="d-block h5 mb-2" href="">For Sale</a>
                                    <p><i class="fa fa-map-marker-alt text-primary me-2"></i>Machakos, Kenya</p>
                                </div>
                                <div class="d-flex border-top">
                                    <small class="flex-fill text-center border-end py-2"><i class="fa fa-ruler-combined text-primary me-2"></i>1000 Sqft</small>
                                    <small class="flex-fill text-center border-end py-2"><i class="fa fa-bed text-primary me-2"></i>3 Bed</small>
                                    <small class="flex-fill text-center py-2"><i class="fa fa-bath text-primary me-2"></i>2 Bath</small>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="property-item rounded overflow-hidden">
                                <div class="position-relative overflow-hidden">
                                    <a href=""><img class="img-fluid" src="img/manyppleoffice.jpg" alt=""></a>
                                    <div class="bg-primary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3">Rental</div>
                                    <div class="bg-white rounded-top text-primary position-absolute start-0 bottom-0 mx-4 pt-1 px-3">Office</div>
                                </div>
                                <div class="p-4 pb-0">
                                    <h5 class="text-primary mb-3">Ksh12,000</h5>
                                    <a class="d-block h5 mb-2" href="">T0 rent</a>
                                    <p><i class="fa fa-map-marker-alt text-primary me-2"></i>Kisumu, Kenya</p>
                                </div>
                                <div class="d-flex border-top">
                                    <small class="flex-fill text-center border-end py-2"><i class="fa fa-ruler-combined text-primary me-2"></i>100 Sqft</small>
                                    <small class="flex-fill text-center py-2"><i class="fa fa-bath text-primary me-2"></i>1 washroom</small>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 text-center">
                            <a class="btn btn-primary py-3 px-5" href="">Browse More Property</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Property List End -->

    <!-- How It Work -->
    <div class="full-row">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2 class="text-secondary double-down-line text-center mb-5">How It Work</h2>
                </div>
            </div>
            <div class="row">
                <div style="color: blue;" class="col-md-4">
                    <div class="icon-thumb-one text-center mb-5" style="position: relative;">
                        <div class="bg-success text-white rounded-circle position-absolute z-index-9" style="left: 50%; transform: translateX(-50%); top: 50%; margin-top: -140px; margin-left:-40px">1</div>
                        <div class="left-arrow"><i class="fas fa-user flat-medium icon-success" aria-hidden="true" style="font-size: 40px;"></i></div>
                        <h5 class="text-secondary mt-5 mb-4">Discussion</h5>
                        <p>Engage in conversations about selling houses, exchanging ideas, and exploring sales opportunities.</p>
                    </div>
                </div>
                <div style="color: blue;" class="col-md-4">
                    <div class="icon-thumb-one text-center mb-5" style="position: relative;">
                        <div class="bg-success text-white rounded-circle position-absolute z-index-9" style="left: 50%; transform: translateX(-50%); top: 50%; margin-top: -140px; margin-left:-40px">2</div>
                        <div class="left-arrow"><i class="fas fa-search flat-medium icon-success" aria-hidden="true" style="font-size: 40px;"></i></div>
                        <h5 class="text-secondary mt-5 mb-4">Files Review</h5>
                        <p>Review property files, assess data, and evaluate details essential for house transactions.</p>
                    </div>
                </div>

                <div style="color: blue;" class="col-md-4">
                    <div class="icon-thumb-one text-center mb-5" style="position: relative;">
                        <div class="bg-success text-white rounded-circle position-absolute z-index-9" style="left: 50%; transform: translateX(-50%); top: 50%; margin-top: -140px; margin-left:-40px">3</div>
                        <div><i class="fas fa-handshake flat-medium icon-success" aria-hidden="true" style="font-size: 40px;"></i></div>
                        <h5 class="text-secondary mt-5 mb-4">Acquire</h5>
                        <p>Acquire properties through strategic processes and successful negotiations, ensuring mutual satisfaction.</p>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- How It Work -->
    <!-- <p style="color: white; font-size: 20px; text-align: center;"></p>
            <p>This website aims to revolutionize the process of finding and selecting houses;
                it will provide users with an interface and powerful search functionalities to streamline the house hunting project/journey
                and offer different features designed to enhance user experience and facilitate informed decision making.</p>
            One will be able to create personalized profiles allowing You to save preferences, track favorite properties and receive tailored recommendation based on your specific requirements.</p>
            <p>A search engine will be incorporated to enable everyone to search based on location, price, property features, neighborhood information and other necessities; the website will also facilitate communication between users and real estate agents and landlords/property owners with maximum authenticity allowing face locks and high password configuration.<br>
                By leveraging advanced technologies, data-driven insights and useful friendly features, the website will empower individuals to find their dream homes efficiently and confidentially.
            </p> -->

    <!-- Footer -->
    <?php include 'include/footer.php'; ?>

    <div class="back-to-top" id="backToTop">
        <i class="fa fa-arrow-up"></i>
    </div>
</body>
<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/jquery.sticky.js"></script>
<script>
    const banner = document.getElementById('banner');
    const images = ['assets/img/Kenyan-House-2.webp', 'assets/img/hero.jpg', 'assets/img/maxresdefault.jpg'];
    let currentIndex = 1;

    function changeBackgroundImage() {
        banner.style.backgroundImage = `url('${images[currentIndex]}')`;
        currentIndex = (currentIndex + 1) % images.length;
    }

    setInterval(changeBackgroundImage, 5000);

    window.addEventListener('load', () => {
        banner.style.backgroundImage = `url('${images[0]}')`;
    });

    function scrollToTop() {
        window.scrollTo({
            top: 0,
            behavior: 'smooth'
        });
    }

    function toggleBackToTopButton() {
        const backToTopButton = document.getElementById('backToTop');
        if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
            backToTopButton.style.display = 'block';
        } else {
            backToTopButton.style.display = 'none';
        }
    }

    // Attach the function to the scroll event
    window.addEventListener('scroll', toggleBackToTopButton);
    document.getElementById('backToTop').addEventListener('click', scrollToTop);
</script>

</html>