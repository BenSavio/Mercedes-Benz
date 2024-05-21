
<div class="container-fluid sticky-top">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-dark p-0" style="padding-top:10px">
                <a href="index.php" class="navbar-brand">
                    <h4 class="text-white"><img src="img/mercedes-benz-logo-png-11323.png" style="width: 60px;" alt=""> Mercedes<span class="text-dark"> </span>Benz</h4>
                    
                </a>
                <button type="button" class="navbar-toggler ms-auto me-0" data-bs-toggle="collapse"
                    data-bs-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav ms-auto">
                        <a href="index.php" class="nav-item nav-link <?=$homeactive;?>">Home</a>
                        <a href="about.php" class="nav-item nav-link <?=$aboutactive;?>">About</a>
                        <a href="service.php" class="nav-item nav-link <?=$serviceactive;?>">Services</a>
                        <a href="project.php" class="nav-item nav-link <?=$projectactive;?>">Our Models</a>
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                            <div class="dropdown-menu bg-light mt-2">
                                <!-- <a href="feature.php" class="dropdown-item">Features</a> -->
                                <a href="team.php" class="dropdown-item">Our Team</a>
                                <a href="faq.php" class="dropdown-item">FAQs</a>
                                <a href="testimonial.php" class="dropdown-item">Testimonial</a>
                                <!-- <a href="404.php" class="dropdown-item">404 Page</a> -->
                            </div>
                        </div>
                        <a href="contact.php" class="nav-item nav-link <?=$contactactive;?>">Contact</a>
                    </div>
                    <butaton type="button" class="btn text-white p-0 d-none d-lg-block" data-bs-toggle="modal"
                        data-bs-target="#searchModal"><i class="fa fa-search"></i></butaton>
                </div>
            </nav>
        </div>
    </div>