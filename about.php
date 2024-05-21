<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Mercedes-Benz-Luxury-Cars-About</title>
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

    <?php $aboutactive="active";?>


    <!-- Navbar Start -->
    <?php include 'navbar.php';?>
    <!-- Navbar End -->


    <!-- Hero Start -->
    <div class="container-fluid pt-5 bg-primary hero-header"    style="height:550px">
        <div class="container pt-5">
            <div class="row g-5 pt-5">
                <div class="col-lg-6 align-self-center text-center text-lg-start mb-lg-5">
                    <h1 class="display-4 text-white mb-4 animated slideInRight">About Us</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center justify-content-lg-start mb-0">
                            <li class="breadcrumb-item"><a class="text-white" href="#index.php">Home</a></li>
                            <li class="breadcrumb-item"><a class="text-white" href="#pages">Pages</a></li>
                            <li class="breadcrumb-item text-white active" aria-current="page">About Us</li>
                        </ol>
                    </nav>
                </div>
                <div class="col-lg-6 align-self-end text-center text-lg-end">
                    <!-- <img class="img-fluid" src="" alt="" style="max-height: 300px;"> -->
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


    <!-- About Start -->
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="row g-5 align-items-center">
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                    <div class="about-img">
                        <img class="img-fluid" src="img/popular-benz.webp">
                    </div>
                </div>
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                    <div class="btn btn-sm border rounded-pill text-primary px-3 mb-3">About Us</div>
                    <h1 class="mb-4">Mercedes-Benz: Luxury redefined.</h1>
                    <p class="mb-4">Mercedes-Benz offers a versatile range of consumer-passenger, light commercial and 
                        heavy commercial equipment. These vehicles are manufactured in multiple countries worldwide. 
                        The Smart marque of city cars are also produced by Daimler AG.</p>
                    <p class="mb-4">Mercedes-Benz was founded in 1926 by Karl Benz, Gottlieb Daimler, Wilhelm Maybach 
                        and Emil Jellinek, whose daughter Mercedes is our original namesake. </p>
                    <div class="row g-3">
                        <div class="col-sm-6">
                            <h6 class="mb-3"><i class="fa fa-check text-primary me-2"></i>Innovation</h6>
                            <h6 class="mb-0"><i class="fa fa-check text-primary me-2"></i>Heritage and Prestige</h6>
                        </div>
                        <div class="col-sm-6">
                            <h6 class="mb-3"><i class="fa fa-check text-primary me-2"></i>Luxury and Elegance</h6>
                            <h6 class="mb-0"><i class="fa fa-check text-primary me-2"></i>Performance and Engineering</h6>
                        </div>
                    </div>
                    <div class="d-flex align-items-center mt-4">
                        <a class="btn btn-outline-primary btn-square me-3" href="https://www.facebook.com/MercedesBenzIndia"><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-outline-primary btn-square me-3" href="https://twitter.com/MercedesBenz?ref_src=twsrc%5Egoogle%7Ctwcamp%5Eserp%7Ctwgr%5Eauthor"><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-outline-primary btn-square me-3" href="https://www.instagram.com/mercedesbenzind/"><i class="fab fa-instagram"></i></a>
                        <a class="btn btn-outline-primary btn-square" href="https://www.linkedin.com/company/mercedes-benz-india/"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


    <!-- Feature Start -->
    <div class="container-fluid bg-primary feature pt-5" style>
        <div class="container pt-5">
            <div class="row g-5">
                <div class="align-self-center mb-md-5 pb-md-5 wow fadeIn" data-wow-delay="0.3s">
                    <div class="btn btn-sm border rounded-pill text-white px-3 mb-3">Why Choose Us?</div>
                    <h1 class="text-white mb-4">We're Best in the Industry with 94 Years of Experience</h1>
                    <p class="text-light mb-4" style='color:black;'> At Mercedes-Benz, our employees and communities are at the heart of everything we do. </p>
                    <div class="d-flex align-items-center text-white mb-3">
                        <div class="btn-sm-square bg-white text-primary rounded-circle me-3">
                            <i class="fa fa-check"></i>
                        </div>
                        <span>94 Years  Mercedes-Benz was founded in 1926 by Karl Benz, Gottlieb Daimler, Wilhelm Maybach and Emil Jellinek, whose daughter Mercedes is our original namesake.</span>
                    </div>
                    <div class="d-flex align-items-center text-white mb-3">
                        <div class="btn-sm-square bg-white text-primary rounded-circle me-3">
                            <i class="fa fa-check"></i>
                        </div>
                        <span>93 Locationst  With offices in 93 locations worldwide and a corporate headquarters in Stuttgart, Germany, our global presence continues to grow.</span>
                    </div>
                    <div class="d-flex align-items-center text-white mb-3">
                        <div class="btn-sm-square bg-white text-primary rounded-circle me-3">
                            <i class="fa fa-check"></i>
                        </div>
                        <span>5 Continents  Our vehicles are manufactured in 17 countries on five continents, and distributed all over the world.</span>
                    </div>
                    <div class="d-flex align-items-center text-white mb-3">
                        <div class="btn-sm-square bg-white text-primary rounded-circle me-3">
                            <i class="fa fa-check"></i>
                        </div>
                        <span>6 Firsts  From the crumple zone in 1959 to the airbag in 1980 and PRE-SAFE® braking in 2002, Mercedes-Benz has invented many of the automotive technologies we see today.</span>
                    </div>
                </div>
                <div class="col-lg-6 align-self-end text-center text-md-end wow fadeIn" data-wow-delay="0.5s">
                    <!-- <img class="img-fluid" src="img/feature.png" alt=""> -->
                </div>
            </div>
        </div>
    </div>
    <!-- Feature End -->


    

<!-- iframe start  -->
<section class="iframe-sec">
    <div>
        <div>
        <h2 class="default-content-section_header " data-focus-element="true">
                The First Driver
            </h2>
        </div>
        <hr>
        <div>
        <iframe width="1300px" height="650px" src="https://www.youtube.com/embed/JBL_G-C51Dk" title="Bertha Benz: The First Driver" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" style="background-image:/img/bertha_benz_the_first_driver.webp"  allowfullscreen ></iframe>
        </div>
        <div class="div-2"><h4>Bertha Benz: The First Driver</h4>
<h6>She forged the road ahead and paved it for us all. Discover the story of Bertha Benz and her historic first drive.</h6></div>
    </div>
</section>
<!-- iframe end  -->


    <!-- Team Start -->
    <div class="container-fluid bg-light py-5">
        <div class="container py-5">
            <div class="row g-5 align-items-center">
                <div class="col-lg-5 wow fadeIn" data-wow-delay="0.1s">
                    <!-- <div class="btn btn-sm border rounded-pill text-primary px-3 mb-3">Our Team</div> -->
                    <h1 class="mb-4">About Founders</h1>
                    <p class="mb-4">Mercedes-Benz was founded in 1926 by Karl Benz, Gottlieb Daimler, Wilhelm Maybach and Emil Jellinek, whose daughter Mercedes is our original namesake. With offices in 93 locations worldwide and a corporate headquarters in Stuttgart, Germany, our global presence continues to grow.</p>
                    <!-- <a class="btn btn-primary rounded-pill px-4" href="">Read More</a> -->
                </div>
                <div class="col-lg-7">
                    <div class="row g-4">
                        <div class="col-md-6">
                            <div class="row g-4">
                                <div class="col-12 wow fadeIn" data-wow-delay="0.1s">
                                    <div class="team-item bg-white text-center rounded p-4 pt-0">
                                        <img class="img-fluid rounded-circle p-4" src="img/karl.webp" alt="">
                                        <h5 class="mb-0">Karl Benz</h5>
                                        <small>Co-Founder</small>
                                    </div>
                                </div>
                                <div class="col-12 wow fadeIn" data-wow-delay="0.5s">
                                    <div class="team-item bg-white text-center rounded p-4 pt-0">
                                        <img class="img-fluid rounded-circle p-4" src="img/daimler.webp" alt="">
                                        <h5 class="mb-0">Gottlieb Daimler</h5>
                                        <small>Co-Founder</small>
                                       
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 pt-md-4">
                            <div class="row g-4">
                                <div class="col-12 wow fadeIn" data-wow-delay="0.3s">
                                    <div class="team-item bg-white text-center rounded p-4 pt-0">
                                        <img class="img-fluid rounded-circle p-4" src="img/maybach.webp" alt="">
                                        <h5 class="mb-0">Wilhelm Maybach</h5>
                                        <small>Co-Founder</small>
                                       </div>
                                </div>
                                <div class="col-12 wow fadeIn" data-wow-delay="0.7s">
                                    <div class="team-item bg-white text-center rounded p-4 pt-0">
                                        <img class="img-fluid rounded-circle p-4" src="img/emil.webp" alt="">
                                        <h5 class="mb-0">Emil Jellinek</h5>
                                        <small>Co-Founder</small>
                                        </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Team End -->

    
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