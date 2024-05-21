<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Mercedes-Benz Luxury Cars in India</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/mercedes-benz-logo-png-11323.png" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Ubuntu:wght@500;700&display=swap"
        rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner"
        class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-grow text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->


    <?php $homeactive="active";?>
    


    <!-- Navbar Start -->
    <?php include 'navbar.php';?>
    <!-- Navbar End -->


    <!-- Hero Start -->
    <div class="container-fluid pt-5 bg-primary hero-header mb-5">
        <div class="container pt-5">
            <div class="row g-5 pt-5" >
                <div class="col-lg-6 align-self-center text-center text-lg-start mb-lg-5" style="height:500px">
                    <!-- <div class="btn btn-sm border rounded-pill text-white px-3 mb-3 animated slideInRight"></div> -->
                    <div style="padding-top:160px">
                    <h1 class="display-4 text-white mb-4 animated slideInRight">BUILT BOLD</h1>
                    <p Temclass="text-white mb-4 animated slideInRight" style="color:white">The new Mercedes-AMG GLE 53 4MATIC+ Coupé</p>
                    <a href="https://www.mercedes-benz.co.in/passengercars/models/suv/gle-coupe/amg.html" class="btn btn-light py-sm-3 px-sm-5 rounded-pill me-3 animated slideInRight">Read More</a>
                    <a href="contact.php" class="btn btn-outline-light py-sm-3 px-sm-5 rounded-pill animated slideInRight">Contact Us</a>
                    </div>
                </div>
                <div class="col-lg-6 align-self-end text-center text-lg-end">
                    <!-- <img class="img-fluid" src="img/hero-img.png" alt=""> -->
                </div>
            </div>
        </div>
    </div>
    <!-- Hero End -->


    <!-- Full Screen Search Start -->
    <div class="modal fade" id="searchModal" tabindex="-1">
        <div class="modal-dialog modal-fullscreen">
            <div class="modal-content" style="background: rgba(20, 24, 62, 0.7);">
                <div class="modal-header border-0">
                    <button type="button" class="btn btn-square bg-white btn-close" data-bs-dismiss="modal"
                        aria-label="Close"></button>
                </div>
                <div class="modal-body d-flex align-items-center justify-content-center">
                    <div class="input-group" style="max-width: 600px;">
                        <input type="text" class="form-control bg-transparent border-light p-3"
                            placeholder="Type search keyword">
                        <button class="btn btn-light px-4"><i class="bi bi-search"></i></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Full Screen Search End -->

    

    <!-- Case Start -->
    <div class="container-fluid bg-light py-5" style="margin-top:1px;">
        <div class="container py-5">
            <div class="mx-auto  wow fadeIn" data-wow-delay="0.1s" style=" diplay:flex; justify-content:left; margin-bottom:10px; margin-top:10px;">
                <!-- <div class="btn btn-sm border rounded-pill text-primary px-3 mb-3">Case Study</div> -->
                <h1 >Our recommendation</h1>
            </div>
            <div class="row g-4">
                <div class="col-lg-4 wow fadeIn" data-wow-delay="0.3s">
                    <div class="case-item position-relative overflow-hidden rounded mb-2">
                        <img class="img-fluid" src="img/img-DE-stage-digital-extras-v1.avif" alt=""> 
                    </div><br>
                    <div><h4>Digital Extras for your Mercedes-Benz</h4>
                    <p>Simply book additional Digital Extras and experience your Mercedes-Benz in a new way.</p></div>
                </div>
                <div class="col-lg-4 wow fadeIn" data-wow-delay="0.5s">
                    <div class="case-item position-relative overflow-hidden rounded mb-2">
                        <img class="img-fluid" src="img/MB_Online_Showroom_Image_Mobile.avif" alt="">
                        
                    </div><br>
                    <div><h4>Digital Extras for your Mercedes-Benz</h4>
                    <p>Simply book additional Digital Extras and experience your Mercedes-Benz in a new way.</p></div>
                </div>
                
                <div class="col-lg-4 wow fadeIn" data-wow-delay="0.7s">
                    <div class="case-item position-relative overflow-hidden rounded mb-2">
                        <img class="img-fluid" src="img/ProductStill_tif_original.avif" alt="">
                        </div><br>
                    <div><h4>Digital Extras for your Mercedes-Benz</h4>
                    <p>Simply book additional Digital Extras and experience your Mercedes-Benz in a new way.</p></div>
                </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Case End -->

    <!-- buy car start  -->

    
    <div class="buy-section"> 
        <img  src="img/buy-car.avif" alt="">
        <div class="buy-text"><br>
            <b>Buy a new car!</b><br><br>
            <p>Your way to your dream car. It's just a few steps to your Mercedes-Benz. Convenient and possible from anywhere. Fast. Easy. Secure.</p>
             <button class="enq-btn" src="contact.php"><a href="contact.php" style="color:white">Request a call</a></button>
        </div>
        
    </div>
       

    <!-- buy car end  -->

    <!-- legal note start -->

    <div class="legal-section">
        <div><h5>Legal disclaimers and annotations</h5><hr></div>
        <div>
            <sup>[a]</sup>
            <small>
            The prices specified herein are indicative and may not be final. The indicated price may differ due to purchase of any additional accessories, parts or products, services that may be availed by the customer, discounts offered, change in government taxes, duties, fees or levies, change of state of registration etc. Mercedes- Benz India or the Authorised Franchise Partner shall not be responsible or liable to compensate for the difference in the prices due to aforesaid reasons or any reason beyond the control of Mercedes-Benz India or the Authorised Franchise Partner. Actual colour of the vehicle may differ from those shown in pictures. While Mercedes-Benz India tries to make sure that all information provided herein is accurate, we shall not be responsible for typographical and other errors (e.g., data transmission) that may appear on the site. If the posted price (including finance and lease payments) for a vehicle is incorrect, Mercedes-Benz India will endeavor to provide you with the correct prices as soon as we become aware of the error. In the event a vehicle is priced incorrectly, Mercedes-Benz India shall have the right to refuse or cancel any orders placed for the vehicle presented with the incorrect price. In addition, vehicle prices are subject to change and all vehicles are subject to prior sale and may not be available when you are ready to purchase.
        </small></div>
    </div>

    <!-- legal note end -->

    
    <!-- Footer Start -->
    <?php include 'footer.php';?>

    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top pt-2"><i class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>