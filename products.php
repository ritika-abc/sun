<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>BGMT Group</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500&family=Lora:wght@600;700&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" role="status"></div>
    </div>
    <!-- Spinner End -->


    <!-- Navbar Start -->
    <div class="container-fluid sticky-top px-0 wow fadeIn  " style="background: rgb(144,97,51);
background: linear-gradient(29deg, rgba(144,97,51,1) 0%, rgba(145,98,53,1) 47%, rgba(192,151,67,1) 100%);" data-wow-delay="0.1s">
           <div class="top-bar row gx-0 align-items-center d-none d-lg-flex">
            <div class="col-lg-5 px-5 text-start text-white">
                <small>   6369009397 || 8248504941 </small>
                <small class="ms-4"><i class="fa fa-envelope me-2"></i>maniecepkt@gmail.com</small>
            </div>
            <div class="col-lg-5 px-5 text-end text-white align-items-center">

                <marquee behavior="" class="" direction="">
                    <a>We Are providing good Quality Products as we produced in Village Areas.</a>
                </marquee>
            </div>

            <div class="col-lg-2 px-5 text-end text-white d-flex d-md-none d-lg-flex">


                <a class="text-white ms-3" href=""><i class="fab fa-facebook-f"></i></a>
                <a class="text-white ms-3" href=""><i class="fab fa-twitter"></i></a>
                <a class="text-white ms-3" href=""><i class="fab fa-linkedin-in"></i></a>
                <!-- <a class="text-white ms-3" href=""><i class="fab fa-instagram"></i></a> -->
            </div>
        </div>

        <nav class="navbar navbar-expand-lg navbar-light py-lg-0 px-lg-5 wow fadeIn bg-white" data-wow-delay="0.1s">
            <a href="index.php" class="navbar-brand ms-4 ms-lg-0">
                <img src="img/logo.png" height="70px" width="150px" alt="BGMT Group">
                <!-- <h4>BGMT Group</h4> -->
            </a>
            <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav ms-auto p-4 p-lg-0">
                    <a href="index.php" class="nav-item nav-link  ">Home</a>
                  <a href="about.php" class="nav-item nav-link">About Us</a>
                       <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Products</a>
                        <div class="dropdown-menu m-0">
                            <?php
                            include "config.php";



                            $select = "SELECT * from `pro`  ";
                            $qu = mysqli_query($con, $select);

                            while ($row = mysqli_fetch_array($qu)) {
                            ?>
                                <a href="product.php?slug=<?php echo $row['slug'] ?>" class="dropdown-item text-capitalize"><?php echo $row['name'] ?></a>
                            <?php } ?>
                        </div>
                    </div>
  <a href="products.php" class="nav-item nav-link">Diversify Product</a>
                    <a href="contact.php" class="nav-item nav-link">Contact Us</a>
                    <!-- <a href="flipbook.php" class="nav-item nav-link"> Flipbook</a> -->
                </div>

            </div>
        </nav>
    </div>
    <!-- Navbar End -->


<!-- Page Header Start -->
<div class="container-fluid page-header mb-5 wow fadeIn" data-wow-delay="0.1s">
    <div class="container">
        <h1 class="display-3 mb-3 animated slideInDown text-white">Products</h1>
        <nav aria-label="breadcrumb animated slideInDown">
            <ol class="breadcrumb mb-0">
                <li class="breadcrumb-item"><a class="text-white" href="#">Home</a></li>

                <li class="breadcrumb-item text-white active " aria-current="page">Products</li>
            </ol>
        </nav>
    </div>
</div>
<!-- Page Header End -->


<!-- Product Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="row g-0 gx-5 align-items-end">
            <div class="col-lg-6">
                <div class="section-header text-start mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                    <h1 class="display-5 mb-3 ">Our Products</h1>

                </div>
            </div>

        </div>
        <div class=" ">
            <div class="tab-pane fade show p-0 active">
                <div class="row g-4 justify-content-center">
                    <?php
                    include "config.php";
                   


                    $select = "SELECT * from `pro` ";
                    $qu = mysqli_query($con, $select);

                    while ($row = mysqli_fetch_array($qu)) {
                    ?>
                        <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp pb-2" data-wow-delay="0.1s">
                            <div class="product-item">
                                <div class="position-relative bg-light overflow-hidden border border-2 border-dark" style="border-radius: 20px 20px 0px 0px;height:250px">
                                    <img class="img-  w-100 "  height="250px" style="object-fit:cover" src="<?php echo $row['image'] ?>" alt="">
                                </div>
                                <div class="text-center p-4">
                                    <a class="d-block h5 mb-3 text-capitalize" href=""><?php echo $row['name'] ?></a>
                                    <div class="m-auto text-center   ">
                                        <a class="  btn  btn-dark  w-75" data-bs-toggle="modal" data-bs-target="#exampleModal" href=""> Enquiry</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </div>

        </div>
    </div>
</div>
<!-- Product End -->





<?php include_once "footer.php"; ?>