<?php
session_start();

$con = mysqli_connect("localhost", "root", "", "logindb");

if(isset($_POST['save_select']))
{
	$No = $_POST['No'];
	$setA = $_POST['setA'];
	$setB = $_POST['setB'];
	$setC = $_POST['setC'];
	$setD = $_POST['setD'];
	$setE = $_POST['setE'];
	$updateprice = $_POST['updateprice'];
	$tblNum = $_POST['tblNum'];
	
	$query = "INSERT INTO availability(No,setA,setB, setC,setD,setE,updateprice,tblNum) VALUES 
	('$No','$setA','$setB','$setC','$setD','$setE','$updateprice','$tblNum')";
	
	$query_run = mysqli_query($con, $query);
	
	if($query_run)
	{
		$_SESSION['status'] = "Inserted successfully";
		header("Location: pg8.php");
	}
	else
	{
		$_SESSION['status'] = "Not inserted";
		header("Location: pg8.php");
	}
}
?>