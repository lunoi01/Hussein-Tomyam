<?php 

session_start();

if (!isset($_SESSION['username'])) {
    header("Location: index.php");
}

?>



<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Admin Page</title>
  <?php echo "<h1>Welcome back, " . $_SESSION['username'] . "</h1>"; ?>
    
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

 
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">

      <a href="index.html" class="logo d-flex align-items-center me-auto me-lg-0">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="assets/img/logo.png" alt=""> -->
        <h1><?php echo "<h1>Welcome " . $_SESSION['username'] . "</h1>"; ?><span>.</span></h1>
      </a>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a href="#active">Table Reservations</a></li>
          <li><a href="pg8.php">Update Menu</a></li>
          <li><a href="#events">Income</a></li>
   

      </nav><!-- .navbar -->

      <a class="btn-book-a-table" href="logout.php">Logout</a>
     
    </div>
  </header><!-- End Header -->
<!DOCTYPE html>
<html>
<head>
<br><br><br><br>
<title>Table with database</title>
<style>
table {
border-collapse: collapse;
width: 100%;
color: #588c7e;
font-family: monospace;
font-size: 25px;
text-align: left;
}
th {
background-color: #588c7e;
color: white;
}
tr:nth-child(even) {background-color: #f2f2f2}
</style>
</head>
<body>
<table>
<tr>
<th>Id</th>
<th>Date</th>
<th>Time</th>
<th>Table Number</th>
<th>Phone Number</th>
<th>Discount Code</th>
<th>Email</th>
<th>FoodType</th>
<th>Beverage</th>
<th>Payment Method</th>
<th>Message</th>
<th>price</th>






</tr>
<?php
$conn = mysqli_connect("localhost", "root", "", "logindb");
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT * FROM demo";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
// output data of each row
while($row = $result->fetch_assoc()) {
echo "<tr><td>" . $row["id"]. "</td><td>" . 
$row["DATE"] . "</td><td>".
$row["TIME"] . "</td><td>".
$row["tableNumber"] . "</td><td>".
$row["phoneNumber"] . "</td><td>".
$row["DiscountCode"] . "</td><td>".
$row["email"] . "</td><td>".
$row["FoodType"] . "</td><td>".
$row["beverage"] . "</td><td>".
$row["paymentMethod"] . "</td><td>".
$row["message"] . "</td><td>".
 $row["price"]. "</td></tr>";
 
}
echo "</table>";
} else { echo "0 results"; }
$conn->close();
?>
</table>
</body>
</html>


