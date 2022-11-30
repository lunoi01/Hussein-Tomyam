<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Restaurant Hussein Tomyam</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="ht.png" rel="icon">


  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Amatic+SC:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Inter:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/main.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Yummy - v1.0.0
  * Template URL: https://bootstrapmade.com/yummy-bootstrap-restaurant-website-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">

      <a href="homepage.html" class="logo d-flex align-items-center me-auto me-lg-0">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="assets/img/logo.png" alt=""> -->
        <h1>Restaurant Hussein Tomyam<span>.</span></h1>
      </a>

      

      <a class="btn-book-a-table" href="homepage.html">Back to Homepage</a>
  

    </div>
  </header><!-- End Header -->

  
    <!-- ======= Book A Table Section ======= -->
    <section id="book-a-table" class="book-a-table">
      <div class="container" data-aos="fade-up">
		
		<?php
		if(isset($_SESSION['status']))
		{
			echo "<h4>".$_SESSION['status']."</h4>";
			unset($_SESSION['status']);
		}
		?>
        <div class="section-header">
		<br> <br>
          <h2>Book A Table</h2>
          <p>Spend time with<span> LOVED ONES</span> Here</p>
        </div>
		
        <div class="card mt-5">
                    <div class="card-header">
           
                    </div>
                    <div class="card-body">
					
						<form action="code.php" method="POST">
						 <div class="from-group mb-3">
                                <label for="">Table Number</label>
                                <select name="tableNumber" class="form-control">
                                    <option value="">--Table--</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
									<option value="3">3</option>
                                    <option value="4">4</option>
									<option value="5">5</option>
                                    <option value="6">6</option>
									<option value="7">7</option>
                                    <option value="8">8</option>
									<option value="9">9</option>
                                    <option value="10">10</option>
						
                                </select>
								
								</div>
									<div class="from-group mb-3">
									  <label for="">Date</label>
								   <input type="date" name="DATE" class="form-control">
								   </div>
								   
								   <div class="from-group mb-3">
									  <label for="">Time</label>
								   <input type="time" name="TIME" class="form-control">
								   </div>
						
                            <div class="from-group mb-3">
                                <label for="">Phone Number</label>
                                <input type="text" name="phoneNumber" class="form-control" />
                            </div>
							
							 <div class="from-group mb-3">
                                <label for="">Discount Code</label>
                                <input type="text" name="DiscountCode" class="form-control" />
                            </div>
							
                     
                            <div class="from-group mb-3">
                                <label for="">Email</label>
                                <input type="text" name="email" class="form-control" />
                            </div>
							
                             <div class="from-group mb-3">
                                <label for="">Food Set</label>
                                <select name="FoodType" class="form-control">
                                    <option value="">--Table--</option>
                                    <option value="A">Set A</option>
                                    <option value="B">Set B</option>
									<option value="C">Set C</option>
                                    <option value="D">Set D</option>
									<option value="E">Set E</option>
               
						
                                </select>
						
                            </div>
							
							     <div class="from-group mb-3">
                                <label for="">Beverage</label>
                                <input type="text" name="beverage" class="form-control" />
                            </div>
							
							<div class="from-group mb-3">
                                <label for="">Payment Method</label>
                                <select name="paymentMethod" class="form-control">
                                    <option value="">--Method--</option>
                                    <option value="CASH">CASH</option>
                                    <option value="Online Transfer">Online Transfer</option>
									<option value="Debit Card">Debit Card</option>               
						
                                </select>
								</div>
							
							     <div class="from-group mb-3">
                                <label for="">Message</label>
                                <input type="text" name="message" class="form-control" />
                            </div>
							
                            <div class="from-group mb-3">
                                <center><button type="submit" name="save_select" class="btn btn-primary">Submit Order</button><center>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </section><!-- End Book A Table Section -->

    
    

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">

    <div class="container">
      <div class="row gy-3">
        <div class="col-lg-3 col-md-6 d-flex">
          <i class="bi bi-geo-alt icon"></i>
          <div>
            <h4>Address</h4>
            <p>
              Banting <br>
              42700 - Selangor<br>
            </p>
          </div>

        </div>

        <div class="col-lg-3 col-md-6 footer-links d-flex">
          <i class="bi bi-telephone icon"></i>
          <div>
            <h4>Reservations</h4>
            <p>
              <strong>Phone:</strong> +6018332122<br>
              <strong>Email:</strong> husseintomyam@gmail.com<br>
            </p>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 footer-links d-flex">
          <i class="bi bi-clock icon"></i>
          <div>
            <h4>Opening Hours</h4>
            <p>
              <strong>Mon-Sat: 11AM</strong> - 23PM<br>
              Sunday: Closed
            </p>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 footer-links">
          <h4>Follow Us</h4>
          <div class="social-links d-flex">
            <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
            <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
            <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
            <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
          </div>
        </div>

      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>Restaurant Hussein Tomyam</span></strong>. All Rights Reserved
      </div>

    </div>

  </footer><!-- End Footer -->
  <!-- End Footer -->

  <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>