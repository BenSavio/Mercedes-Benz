<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Mercedes-Benz-Luxury-Cars-Services</title>
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

    <?php $serviceactive="active";?>


    <!-- Navbar Start -->
    <?php include 'navbar.php';?>

    <!-- Navbar End -->


    <!-- Hero Start -->
    <div class="container-fluid pt-5 bg-primary hero-header" style="height:550px;">
        <div class="container pt-5">
            <div class="row g-5 pt-5">
                <div class="col-lg-6 align-self-center text-center text-lg-start mb-lg-5">
                    <h1 class="display-4 text-white mb-4 animated slideInRight">Our Services</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center justify-content-lg-start mb-0">
                            <li class="breadcrumb-item"><a class="text-white" href="index.php">Home</a></li>
                            <li class="breadcrumb-item"><a class="text-white" href="#pages">Pages</a></li>
                            <li class="breadcrumb-item text-white active" aria-current="page">Our Services</li>
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

    <!-- About Start -->
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="row g-5 align-items-center">
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                    <div class="about-img">
                        <img class="img-fluid" src="img/service1.webp">
                    </div>
                </div>
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                    <!-- <div class="btn btn-sm border rounded-pill text-primary px-3 mb-3">Our Services</div> -->
                    <h1 class="mb-4">Mercedes-Benz service and maintenance.</h1>
                    <p class="mb-4">When it comes to reliability and value retention for your Mercedes-Benz, your 
                        Mercedes-Benz Service partner is the first choice. We also offer service contracts so that you do 
                        not have to confront unexpected bills and can relax knowing that qualified experts are never far away; 
                        a comprehensive online offering for you and your vehicle is also included.</p>
                        <button class="enq-btn" src="contact.php" style="border-radius:30px"><a href="contact.php" style="color:white">Schedule your appointment now</a></button>
                </div>

            </div>
        </div>
    </div>
    
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="row g-5 align-items-center">
            <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                    <!-- <div class="btn btn-sm border rounded-pill text-primary px-3 mb-3">Our Services</div> -->
                    <h1 class="mb-4">Mercedes-Benz Service Contracts.</h1>
                    <p class="mb-4">Mercedes-Benz is a name that stands for top-class vehicles in which every journey is a delight. 
                        Ensuring that you can continue enjoying your Mercedes-Benz is a range of Mercedes-Benz Service Contracts, 
                        offering true peace of mind, tailor-made for you. Be it an extended warranty or a full-service contract: 
                            Mercedes-Benz Service Contracts offer the right solution for every need and every budget, thus freeing 
                            you from additional workshop costs since, depending on your specific service contract, unexpected repairs, 
                            maintenance and wear parts are already covered. You then don't have to worry about workshop bills and your 
                            Mercedes-Benz is always in tip-top condition. With a service contract you get Mercedes-Benz quality every 
                            time – with the service of our specially trained workshop specialists and with Mercedes-Benz genuine parts.</p>
                            <button class="enq-btn" src="contact.php" style="border-radius:30px"><a href="contact.php" style="color:white">Find a service partner</a></button>
                        </div>
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                    <div class="about-img">
                        <img class="img-fluid" src="img/service2.avif">
                    </div>
                </div>
                
            </div>
        </div>
    </div>
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="row g-5 align-items-center">
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                    <div class="about-img">
                        <img class="img-fluid" src="img/service3.avif">
                    </div>
                </div>
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                    <!-- <div class="btn btn-sm border rounded-pill text-primary px-3 mb-3">Our Services</div> -->
                    <h1 class="mb-4">LEVEL UP your car know-how!</h1>
                    <p class="mb-4">LEVEL UP! is your hub for all relevant information about spare parts and services 
                        from Mercedes-Benz. Regardless of whether it is brakes, tyres or maintenance, we will take you 
                        to a new level in terms of car know-how.</p>
                        <button class="enq-btn" src="contact.php" style="border-radius:30px"><a href="contact.php" style="color:white">Service check-ups</a></button>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->



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