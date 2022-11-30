<?php
session_start();

$con = mysqli_connect("localhost", "root", "", "logindb");

if(isset($_POST['save_select']))
{
	$tableNumber = $_POST['tableNumber'];
	$DATE = $_POST['DATE'];
	$TIME = $_POST['TIME'];
	$phoneNumber = $_POST['phoneNumber'];
	$DiscountCode = $_POST['DiscountCode'];

	$email= $_POST['email'];
	$FoodType = $_POST['FoodType'];
	$beverage = $_POST['beverage'];
	$paymentMethod = $_POST['paymentMethod'];
	$message = $_POST['message'];
	
	$query = "INSERT INTO demo(tableNumber,DATE, TIME,phoneNumber,DiscountCode,email,FoodType,beverage,paymentMethod,message) VALUES 
	('$tableNumber','$DATE','$TIME','$phoneNumber','$DiscountCode','$email','$FoodType','$beverage','$paymentMethod','$message')";
	
	$query_run = mysqli_query($con, $query);
	
	if($query_run)
	{
		$_SESSION['status'] = "Inserted successfully";
		
		header("Location: book_table.php");
	}
	else
	{
		$_SESSION['status'] = "Not inserted";
		header("Location: book_table.php");
	}
}
?>