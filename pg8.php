<?php
	// Connection to the server and datbase
	$dbc = mysqli_connect ("localhost","root","","logindb");
	if (mysqli_connect_errno())
	{
		echo "Failed to connect to MySQL: ".mysqli_connect_error();
	}
	$sql = "select * from availability";
	$result = mysqli_query($dbc, $sql);
	while($row = mysqli_fetch_assoc($result)){
	Print '
	<br>
	<br>
	<br>
	<br>
	<br>
	<table align="center" border="1px" >
	<tr><center>
		<td>'.$row['No'].'.</td>
		<td>set A:'.$row['setA'].',</td>
		<td>set B:'.$row['setB'].',</td><br>
		<td>set C:'.$row['setC'].',</td><br>
		<td>set D:'.$row['setD'].'</td><br><br>
		<td>updated price:'.$row['updateprice'].'</td>
	</tr></center></table>';
	}
	?>
	
	
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

      

      <a class="btn-book-a-table" href="adminwelcome.php">Back to Homepage</a>
  

    </div>
  </header><!-- End Header -->

  
    <!-- ======= Book A Table Section ======= -->
    <section id="booked" class="booked">
      <div class="container" data-aos="fade-up">
		
		<?php
		if(isset($_SESSION['status']))
		{
			echo "<h4>".$_SESSION['status']."</h4>";
			unset($_SESSION['status']);
		}
		?>
		<center>
		<br> <br>
          <h2>Update Menu Availability</h2>
				<form action="code2.php" method="POST">
				<div>
				Set A:
				<br><br>
				
				<div>
					<label for="aA">Available</label>
					<input type="radio" name="setA" value="available" >
				</div>
				<div>
					<label for="uA">Unavailable</label>
					<input type="radio" name="setA" value="unavailable" >
				</div>
				</div>
				
				<br><br>
				
				<div>
				Set B:
				<br><br>
				
				<div>
					<label for="aB">Available</label>
					<input type="radio" name="setB" id="availableB" value="available">
				</div>
				<div>
					<label for="uB">Unavailable</label>
					<input type="radio" name="setB" id="unavailableB" value="unavailable">
				</div>
				</div>
				
				<br><br>
				
				
				<div>
				Set C:
				<br><br>
				
				<div>
					<label for="aC">Available</label>
					<input type="radio" name="setC" id="availableC" value="available">
				</div>
				<div>
					<label for="uA">Unavailable</label>
					<input type="radio" name="setC" id="unavailableC" value="unavailable">
				</div>
				</div>
				
				<br><br>
				
				
				<div>
				
				
				Set D:
				<br><br>
				
				<div>
					<label for="aA">Available</label>
					<input type="radio" name="setD" id="availableD" value="available">
				</div>
				<div>
					<label for="uA">Unavailable</label>
					<input type="radio" name="setD" id="unavailableD" value="unavailable">
				</div>
				</div>
				
				<br><br>
				
				Set E:
				<br><br>
				
				<div>
					<label for="aA">Available</label>
					<input type="radio" name="setE" id="availableE" value="available">
				</div>
				<div>
					<label for="uA">Unavailable</label>
					<input type="radio" name="setD" id="unavailableE" value="unavailable">
				</div>
				</div>
				
				<br><br>
				
				<div class="from-group mb-3">
                                <center><button type="submit" name="save_select" class="btn btn-primary">Update Availability</button><center>
                  </div>
				<br><br>
				</form>
				<hr>
				<center>
				<br><br>
				<h2>Update Menu Availability</h2>
				<br>
				<form action="code2.php" method="POST">
						 <div class="from-group mb-3">
                                <label for="">Select Menu To Be Updated For Promo Price </label>
                                <select name="tblNum" class="form-control">
                                    <option value="">--Table--</option>
                                    <option value="setA" name="setA">set A</option>
                                    <option value="setB" name="setB">set B</option>
									<option value="setC" name="setC">set C</option>
                                    <option value="setD" name="setD">set D</option>
									<option value="setE" name="setE">set E</option>
                                </select>
								
								<div class="from-group mb-3">
                                <label for="">Enter price to be updated (RM) :</label>
                                <input type="number" name="updateprice" class="form-control" />
                            </div>
							
							<div class="from-group mb-3">
                                <center><button type="submit" name="save_select" class="btn btn-primary">Update Price</button><center>
                  </div>
				</form>
				<br><br><br>
				<a href="pg7.php">Previous Page</a>
			</center>
    </section><!-- End Book A Table Section -->

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
              <strong>Email:</strong> husseintomyam@example.com<br>
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