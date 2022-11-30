<?php
session_start();

$con = mysqli_connect("localhost", "root", "", "logindb");

if(isset($_POST['submit_select']))
{
	$tableNumber = $_POST['tableNumber'];
	$phoneNumber = $_POST['phoneNumber'];
	$DiscountCode = $_POST['DiscountCode'];
	$DATE = $_POST['DATE'];
	$TIME = $_POST['TIME'];
	$email= $_POST['email'];
	$FoodType = $_POST['FoodType'];
	$beverage = $_POST['beverage'];
	$paymentMethod = $_POST['paymentMethod'];
	$message = $_POST['message'];
	
	$query = "INSERT INTO order(tableNumber,phoneNumber,DiscountCode,DATE,TIME,email,FoodType,beverage,paymentMethod,message) VALUES 
	('$tableNumber','$phoneNumber','$DiscountCode','$DATE','$TIME','$email','$FoodType','$beverage','$paymentMethod','$message')";
	
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