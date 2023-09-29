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
</head>

<body>
    <?php include 'include/header.php'; ?>

    <!-- Banner Start -->
    <div id="banner" class="overlay-black w-100 slider-banner1 position-relative" style="background-image: url('assets/img/hosuek1.jpg'); background-size: cover; background-position: center center; background-repeat: no-repeat;">  
   <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-lg-12">
                    <div class="text-white">
                        <h1 style="color: blue;" class="mb-4"><span class="text-success" style="color: white!important;">Let us</span><br>
                            Guide you Home</h1>
                        <form method="post" action="property-search.php">
                            <div class="row">
                                <div class="col-md-6 col-lg-2">
                                    <div class="form-group">
                                        <select class="form-control" name="type">
                                            <option value="">Select house Type</option>
                                            <option value="apartment">Apartment</option>
                                            <option value="flat">Flat</option>
                                            <option value="building">Building</option>
                                            <option value="house">House</option>
                                            <option value="villa">Villa</option>
                                            <option value="office">Office</option>
                                        </select>
                                        <i class="fas fa-caret-down"></i>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-2">
                                    <div class="form-group">
                                        <select class="form-control" name="stype">
                                            <option value="">Select Status</option>
                                            <option value="rent">Rent</option>
                                            <option value="sale">Sale</option>
                                        </select>
                                        <i class="fas fa-caret-down"></i>
                                    </div>
                                </div>
                                <div class="col-md-3 col-lg-4 offset-lg-1">
                                    <div class="form-group position-relative">
                                        <input type="text" class="form-control" name="city" placeholder="Enter City eg..Nairobi" required>
                                    </div>
                                </div>
                                <div style="width:200px;" class="col-md-6 col-lg-2">
                                    <div class="form-group">
                                        <button type="submit" name="filter" class="btn btn-success w-100">Search Property</button>
                                        <i class="fas fa-search position-absolute" style="right: 10px;color:white; top: 50%; transform: translateY(-50%);"></i>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <style>
        /* Slider Banner */
        .slider-banner1 {
            width: 100%;
            height: 520px;
            min-height: 400px;
        }

        .slider-banner1.overlay-black::before {
            z-index: 0;
        }

        .form-group {
            position: relative;
        }

        .form-group i {
            position: absolute;
            top: 50%;
            right: 10px;
            transform: translateY(-50%);
            pointer-events: none;
            color: black;
        }

        .form-group select,
        .form-group input {
            width: calc(100%);
            height: 50px;
        }

        .slider-banner1::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: 1;
        }
    </style>

    <section>
        <h1>HOME PAGE</h1>
        <p>This website aims to revolutionize the process of finding and selecting houses;
            it will provide users with an interface and powerful search functionalities to streamline the house hunting project/journey
            and offer different features designed to enhance user experience and facilitate informed decision making.<br>
            One will be able to create personalized profiles allowing You to save preferences, track favorite properties and receive tailored recommendation based on your specific requirements.</p>
        <p>A search engine will be incorporated to enable everyone to search based on location, price, property features, neighborhood information and other necessities; the website will also facilitate communication between users and real estate agents and landlords/property owners with maximum authenticity allowing face locks and high password configuration.<br>
            By leveraging advanced technologies, data-driven insights and useful friendly features, the website will empower individuals to find their dream homes efficiently and confidentially.
        </p>
        <h3>ABOUT</h3>
    </section>
    <section>
        <h3>SERVICES</h3>
        <p>Our services include:</p>
        <ul>
            <li>Property Management</li>
            <li>Property Valuation</li>
            <li>Property Sales</li>
            <li>Property Letting</li>
            <li>Property Development</li>
            <li>Property Consultancy</li>
        </ul>

    </section>
    <footer>
        <h4>FIND US</h4>
        <li>WhatsApp - <a href="tel:+254723464616" style="text-decoration: none;">0723464616</a></li>
        <li>Instagram - <a href="https://www.instagram.com/cosyhomes/" target="_blank" style="text-decoration:none;">@cosyhomes</a></li>
        </ul>
    </footer>
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
</script>  
</html>