<?php

LogInDatabase();

session_start();

if($_SERVER["REQUEST_METHOD"] == "POST") {
	
	$adminid = mysqli_real_escape_string($conn,$_POST['adminid']);
	$password = mysqli_real_escape_string($conn,$_POST['password']);
	
	$sql = "SELECT adminID FROM admin WHERE adusername = '$adminid' and adpass = '$password'";
	$result = mysqli_query($conn,$sql);
	$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
	$active = $row['active'];
	
	$count = mysqli_num_rows($result);
	
	if($count == 1) {
		session_register("adminid");
		$_SESSION['login_admin'] = $adminid;
		
		header("location: admindashboard.php");
	}else {
		echo "Invalid AdminID or Password";
	}
}




function LogInDatabase()
{
	$conn = new mysqli('localhost', 'root', 'root', 'humour');
		if ($conn->connect_error) {
		die($conn->connect_error);
	}
}


/* Include this in the admin dashboard as a function
function sessionext()
{
	LogInDatabase();
	session_start();
	
	$admin_check = $_SESSION['login_admin'];
	
	$ses_sql = mysqli_query($conn, "SELECT adusername FROM admin WHERE adusername = '$admin_check' ");
	$row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
	$login_session = $row['adusername'];
	
	if(!isset($_SESSION['login_admin'])){
      header("location:adminlogin.php");
   }
} */

/* function login() 
{
	if(empty($_POST['adminid']))
	{
		$this->HandleError("AdminID is empty!");
		return false;
	}
	if(empty($_POST['password']))
	{
		$this->HandleError("Password is empty!");
		return false;
	}
	
	$adminid = trim($_POST['adminid']);
	$password = trim($_POST['password']);
	
	if (!this->CheckLoginInDB($adminid,$password)
	{
		return false;
	}
	
	session_start();
	
} */
?>

