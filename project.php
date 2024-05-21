<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Mercedes-Benz-Luxury-Cars-Top-Models</title>
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

    <?php $projectactive="active";?>


    <!-- Navbar Start -->
    <?php include 'navbar.php';?>

    <!-- Navbar End -->


    <!-- Hero Start -->
    <div class="container-fluid pt-5 bg-primary hero-header" style="height:550px">
        <div class="container pt-5">
            <div class="row g-5 pt-5">
                <div class="col-lg-6 align-self-center text-center text-lg-start mb-lg-5">
                    <h1 class="display-4 text-white mb-4 animated slideInRight">Our Models</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center justify-content-lg-start mb-0">
                            <li class="breadcrumb-item"><a class="text-white" href="index.php">Home</a></li>
                            <li class="breadcrumb-item"><a class="text-white" href="#pages">Pages</a></li>
                            <li class="breadcrumb-item text-white active" aria-current="page">Our Models</li>
                        </ol>
                    </nav>
                </div>
                <div class="col-lg-6 align-self-end text-center text-lg-end">
                    <!-- <img class="img-fluid" src="img/hero-img.png" alt="" style="max-height: 300px;"> -->
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
    <div class="container-fluid bg-light py-5">
        <div class="container py-5">
            <div class="mx-auto text-center wow fadeIn" data-wow-delay="0.1s" >
                <!-- <div class="btn btn-sm border rounded-pill text-primary px-3 mb-3">Case Study</div> -->
                <h1 class="mb-4">Explore Our Top Models</h1>
            </div>
            <div class="row g-4">
                <div class="col-lg-4 wow fadeIn" data-wow-delay="0.3s">
                    <div class="case-item position-relative overflow-hidden rounded mb-2">
                        <img class="img-fluid" src="img/Mercedes-AMG-ONE2.75Million.avif" alt="" >
                        <a class="case-overlay text-decoration-none" href="https://www.mercedes-amg.com/en/home/vehicles/amg-one/hypercar.html">
                            <small></small>
                            <h5 class="lh-base text-white mb-3">Mercedes-AMG ONE
                            </h5>
                            <!-- <span class="btn btn-square btn-primary"><i class="fa fa-arrow-right"></i></span> -->
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 wow fadeIn" data-wow-delay="0.5s">
                    <div class="case-item position-relative overflow-hidden rounded mb-2">
                        <img class="img-fluid" src="img/Mercedes-Maybach.avif" alt="">
                        <a class="case-overlay text-decoration-none" href="https://www.mercedes-benz.co.in/passengercars/models/saloon/mercedes-maybach-s-class/overview.html">
                            <!-- <small>Machine learning</small> -->
                            <h5 class="lh-base text-white mb-3">Mercedes-Maybach S 680 4MATIC
                            </h5>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 wow fadeIn" data-wow-delay="0.7s">
                    <div class="case-item position-relative overflow-hidden rounded mb-2">
                        <img class="img-fluid" src="img/Mercedes-AMGSL63.avif" alt="">
                        <a class="case-overlay text-decoration-none" href="https://www.mercedes-amg.com/en/home/vehicles/sl/roadster.html">
                            <!-- <small>Predictive Analysis</small> -->
                            <h5 class="lh-base text-white mb-3">Mercedes-AMG SL 63
                            </h5>
                        </a>
                    </div>
                </div>
            </div>
            <div class="row g-4">
                <div class="col-lg-4 wow fadeIn" data-wow-delay="0.3s">
                    <div class="case-item position-relative overflow-hidden rounded mb-2">
                        <img class="img-fluid" src="img/Mercedes-AMGG63.avif" alt="">
                        <a class="case-overlay text-decoration-none" href="https://www.mercedes-amg.com/en/home/vehicles/g-class/suv.html">
                            <!-- <small>Robotic Automation</small> -->
                            <h5 class="lh-base text-white mb-3">Mercedes-AMG G 63
                            </h5>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 wow fadeIn" data-wow-delay="0.5s">
                    <div class="case-item position-relative overflow-hidden rounded mb-2">
                        <img class="img-fluid" src="img/Mercedes-MaybachGLS600.avif" alt="">
                        <a class="case-overlay text-decoration-none" href="https://www.mercedes-benz.co.in/passengercars/models/suv/gls/overview.html?gagcmid=GA_20925652061_160426938871_687047286718&gad_source=1&gclid=CjwKCAjw9IayBhBJEiwAVuc3fmKcvN56RynN9XtPnI0Tn5On5TSrcrs1R6vaE8-D3lukxyoyjZgxwxoCaqIQAvD_BwE&gclsrc=aw.ds">
                            <!-- <small>Machine learning</small> -->
                            <h5 class="lh-base text-white mb-3">Mercedes-Maybach GLS 600
                            </h5>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 wow fadeIn" data-wow-delay="0.7s">
                    <div class="case-item position-relative overflow-hidden rounded mb-2">
                        <img class="img-fluid" src="img/Mercedes-AMGEQSSedan.avif" alt="">
                        <a class="case-overlay text-decoration-none" href="https://www.mercedes-benz.co.in/passengercars/models/saloon/eqs/overview.html?gagcmid=GA_20685282715_153411964543_677718176090&gad_source=1&gclid=CjwKCAjw9IayBhBJEiwAVuc3fuIQ2QE96MaC7Tp-ZZ5m8apKtvpdda1aWcm8hfNwxQTxWSSnMS6wbhoCG7kQAvD_BwE&gclsrc=aw.ds">
                            <!-- <small>Predictive Analysis</small> -->
                            <h5 class="lh-base text-white mb-3">Mercedes-AMG EQS Sedan
                            </h5>
                        </a>
                    </div>
                </div>
            </div><div class="row g-4">
                <div class="col-lg-4 wow fadeIn" data-wow-delay="0.3s">
                    <div class="case-item position-relative overflow-hidden rounded mb-2">
                        <img class="img-fluid" src="img/Mercedes-AMGGLS 63.avif" alt="">
                        <a class="case-overlay text-decoration-none" href="https://www.mercedes-amg.com/en/home/vehicles/gls/suv.html">
                            <!-- <small>Robotic Automation</small> -->
                            <h5 class="lh-base text-white mb-3">Mercedes-AMG GLS 63
                            </h5>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 wow fadeIn" data-wow-delay="0.5s">
                    <div class="case-item position-relative overflow-hidden rounded mb-2">
                        <img class="img-fluid" src="img/Mercedes-BenzEQS5804MATICSUV.avif" alt="">
                        <a class="case-overlay text-decoration-none" href="https://www.mercedes-benz.co.in/passengercars/models/saloon/eqs/overview.html?gagcmid=GA_20685282715_153411964543_677718176090&gad_source=1&gclid=CjwKCAjwl4yyBhAgEiwADSEjeEPtGC5MHTWZ0tQGbVF0S9KSfzN5Uwc8D_oxhx0vI1do0Rdu66oFBRoCmWwQAvD_BwE&gclsrc=aw.ds">
                            <!-- <small>Machine learning</small> -->
                            <h5 class="lh-base text-white mb-3">Mercedes-Benz EQS 580 4MATIC SUV
                            </h5>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 wow fadeIn" data-wow-delay="0.7s">
                    <div class="case-item position-relative overflow-hidden rounded mb-2">
                        <img class="img-fluid" src="img/Mercedes-AMGE63SWagon.avif" alt="">
                        <a class="case-overlay text-decoration-none" href="https://www.mbusa.com/en/vehicles/model/e-class/wagon/e63s4s">
                            <!-- <small>Predictive Analysis</small> -->
                            <h5 class="lh-base text-white mb-3">Mercedes-AMG E63 S Wagon
                            </h5>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Case End -->


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