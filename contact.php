
<?php
// include "config.php";
// if (isset($_POST['submit'])) {
//     $name = $_POST['name'];
//     $phone = $_POST['phone'];
//     $email = $_POST['email'];

//     $query = $_POST['message'];
//     //$course = $_POST['course'];        
//     //  $to = 'nitinmukesh1982@hotmail.com';

//     $to = $email;
//     $subject = "Enquiry From aumfoodexports@gmail.com";

//     $message = "Name:-$name <br> Email:-$email <br> Phone Number:-$phone   <br> Message:-$query";
//     $header = "From: Inquiry.aumfoodexports@gmail.com \r\n";
//     $header .= "MIME-Version: 1.0\r\n";
//     $header .= "Content-type: text/html\r\n";

//     $retval = mail($to, $subject, $message, $header);

//     if ($retval == true) {
//         $sql = mysqli_query($con, "INSERT INTO `email`(`name`,`phone`,`email`,`message`)
//           VALUES ('$name', '$phone', '$email','$query')");

//         echo ("<script>alert('Message Sent succesfully');window.location='index.php';</script>");
//     } else {
//         echo "Message could not be sent...";
//     }
// }
?>
<?php
include "config.php";

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $query = $_POST['message'];

    $to = $email;
    $subject = "Enquiry From BGMT Group";
    $message = "Name: $name <br> Email: $email <br> Phone Number: $phone <br> Message: $query";

   $headers = "From: maniecepkt@gmail.com\r\n";
    $headers .= "Reply-To: maniecepkt@gmail.com\r\n";
    $headers .= "Cc:maniecepkt@gmail.com\r\n"; // Add Cc recipient
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-type: text/html; charset=UTF-8\r\n";
    // Send email
    $retval = mail($to, $subject, $message, $headers);

    if ($retval == true) {
        // Save to database
        $sql = "INSERT INTO `email`(`name`, `phone`, `email`, `message`) 
                VALUES ('$name', '$phone', '$email', '$query')";
        mysqli_query($con, $sql);

        echo "<script>alert('Message Sent successfully...');window.location='index.php';</script>";
    } else {
        echo "Message could not be sent...";
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>   BGMT</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
   <meta name="keywords" content="" >
    <meta name="description" content="" >
    <meta name="google-site-verification" content="eSh4znilq8KZMRlvoG0BHlciiQ2TmAAEytZbbGZIeu4" />
<link rel="canonical" href="https://bgmtgroup.com/contact.php">
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
    <div class="container-fluid fixed-top px-0 wow fadeIn  " style="background: rgb(144,97,51);
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
                    <a href="contact.php" class="nav-item nav-link active">Contact Us</a>
                    <!-- <a href="flipbook.php" class="nav-item nav-link"> Flipbook</a> -->
                </div>

            </div>
        </nav>
    </div>
    <!-- Navbar End -->

    <!-- Page Header Start -->
    <div class="container-fluid page-header wow fadeIn" data-wow-delay="0.1s">
        <div class="container">
            <h1 class="display-3 mb-3 animated slideInDown text-white">Contact Us</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item"><a class="text-white" href="/">Home</a></li>
                  
                    <li class="breadcrumb-item text-white active" aria-current="page">Contact Us</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->

    <!-- Contact Start -->
    <div class="container-xxl py-6">
        <div class="container">
            <div class="section-header text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                <h1 class="display-5 mb-3">Contact Us</h1>
                
            </div>
            <div class="row g-5 justify-content-center">
                <div class="col-lg-5 col-md-12 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="bg-primary text-white d-flex flex-column justify-content-center h-100 p-5">
                        <h5 class="text-white">Call Us</h5>
                        <p class="mb-5"><i class="fa fa-phone-alt me-3"></i>6369009397 || 8248504941 </p>
                        <h5 class="text-white">Email Us</h5>
                        <p class="mb-5"><i class="fa fa-envelope me-3"></i>maniecepkt@gmail.com</p>
                        <h5 class="text-white">Office Address</h5>
                        <p class="mb-5"><i class="fa fa-map-marker-alt me-3"></i>1-73 Keela Pullanviduthi , Pudukkottai ,Tamil Nadu , India-622304</p>
                        <h5 class="text-white">Follow Us</h5>
                        <div class="d-flex pt-2">
                            <a class="btn btn-square btn-outline-light rounded-circle me-1" href=""><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-square btn-outline-light rounded-circle me-1" href=""><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-square btn-outline-light rounded-circle me-1" href=""><i class="fab fa-youtube"></i></a>
                            <a class="btn btn-square btn-outline-light rounded-circle me-0" href=""><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7 col-md-12 wow fadeInUp" data-wow-delay="0.5s">
                <p>join the <strong>BGMT Group</strong> community of food lovers and health enthusiasts who are passionate about quality produce and exceptional flavors.</p>
                    <form method="post">
                        <div class="row g-3">
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control" name="name" placeholder="Your Name">
                                    <label for="name">Your Name</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="email" class="form-control" name="email" placeholder="Your Email">
                                    <label for="email">Your Email</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <input type="text" class="form-control" name="phone" placeholder="Subject">
                                    <label for="number">Phone</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <textarea class="form-control"  placeholder="Leave a message here" name="message" style="height: 200px"></textarea>
                                    <label for="message">Message</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <button class="btn btn-primary rounded-pill py-3 px-5" name="submit"  type="submit">Send Message</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->


    <!-- Google Map Start -->
    <div class="container-xxl px-0 wow fadeIn" data-wow-delay="0.1s" style="margin-bottom: -6px;">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4013002.0576663823!2d75.64831636899828!3d10.815343380015685!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3b00c582b1189633%3A0x559475cc463361f0!2sTamil%20Nadu!5e0!3m2!1sen!2sin!4v1722836266105!5m2!1sen!2sin" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
    <!-- Google Map End -->


    <?php include_once "footer.php"; ?>