 <!-- Footer Start -->
 <div class="container-fluid bg-dark footer mt-5 pt-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-3 col-md-6">
                    <h1 class="fw-bold text-primary mb-4">BGMT Group</h1>
                    <p style="text-align: justify;">Welcome to BGMT Group Your go-to source for fresh, high-quality, and natural products that enhance your daily life. We are passionate about bringing you the finest selections from nature, ensuring that every item meets the highest standards of quality and freshness.

</p>
                   
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-light mb-4">Address</h4>
                    <p><i class="fa fa-map-marker-alt me-3"></i>1-73 Keela Pullanviduthi , Pudukkottai , Tamil Nadu  , India-622304</p>
                    <p><i class="fa fa-phone-alt me-3"></i><small>maniecepkt@gmail.com</small></p>
                    <p><i class="fa fa-envelope me-3"></i>8248504941 ||  6369009397</p>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-light mb-4">Quick Links</h4>
                    <a class="btn btn-link" href="/">Home</a>
                      <a class="btn btn-link" href="about.php">About Us</a>
                    <a class="btn btn-link" href="contact.php">Contact Us</a>
                    
                    <a class="btn btn-link" href="products.php">Products</a>  
                 
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-light mb-4">Links</h4>
                    <div class="d-flex pt-2">
                        <a class="btn btn-square btn-outline-light rounded-circle me-1" href=""><i
                                class="fab fa-twitter"></i></a>
                        <a class="btn btn-square btn-outline-light rounded-circle me-1" href=""><i
                                class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-square btn-outline-light rounded-circle me-1" href=""><i
                                class="fab fa-youtube"></i></a>
                        <a class="btn btn-square btn-outline-light rounded-circle me-0" href=""><i
                                class="fab fa-linkedin-in"></i></a>
                    </div>
                    
                </div>
            </div>
        </div>
        <div class="container-fluid copyright">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                        &copy; <a href="/">BGMT Group</a>, All Right Reserved.
                    </div>
                    <div class="col-md-6 text-center text-md-end">
                     
                        Designed By <a href="https://www.web2export.com">Web2Export <img src="web2export.jpg" height="70px" width="200px" alt=""></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">BGMT Group
</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
       <div class="row">
           <div class="col-12 col-md-6 my-2">
               <input type="text" class="form-control name" value="" placeholder="Enter Your Name" />
           </div>
            <div class="col-12 col-md-6 my-2">
               <input type="number" class="form-control number" value="" placeholder="Enter Your Number" />
           </div>
           <div class="col-12  my-2">
               <input type="email" class="form-control email" value="" placeholder="Enter Your Email" />
           </div>
          
            
           
       </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" onclick="go()" class="btn btn-primary">Submit</button>
      </div>
    </div>
  </div>
</div>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <!-- Back to Top -->
    <script>
        AOS.init();
    </script>
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-circle back-to-top"><i
            class="bi bi-arrow-up"></i></a>
            <script>
        function go() {
            var name = document.querySelector(".name").value;
            var email = document.querySelector(".email").value;
            var number = document.querySelector(".number").value;
            var url = "https://wa.me/918248504941?text=" +
            "Name: " + 
            name + " " +
            "Number: " + 
            number + " " +
            "Email :" + email;
            window.open(url,"_blank").focus();
        }
    </script>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>
