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

?>

