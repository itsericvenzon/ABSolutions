<?php
	include ('a-dbconnection.php');
		
	session_unset();
		
if($_SERVER["REQUEST_METHOD"] == "POST") {
	
	//$adminid = mysqli_real_escape_string($conn,$_POST['adminid']);
	//$password = mysqli_real_escape_string($conn,$_POST['password']);
	
	$adminid = $_POST['adminid'];
	$password = $_POST['password'];
	
	$sql = "SELECT * FROM admin WHERE adusername = '$adminid' and adpass = '$password'";
	$result = $conn->query($sql);
	 if ($conn->error) {
        echo "Error: " . $sql . "<br>" . $conn->error. "<br / >";
        $conn->close();
        die();
    }
	$record = mysqli_fetch_assoc($result);
    $count = mysqli_num_rows($result);
    $conn->close();
	
	if($count > 0) {
        session_start();
        $_SESSION['adusername'] = $record['adusername'];
        $_SESSION['adpass'] = $record['adpass'];
		header("refresh:2; url=a-dashboard.html");
		readfile("spinner.html");
	}else {
		echo "Invalid AdminID or Password";
		header("refresh:5;url=a-login.html");
	}
}
/*
=======

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

