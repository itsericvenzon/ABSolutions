<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "humour";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

session_unset();

echo '<pre>';
print_r($_POST);
echo '</pre>';

if(isset($_POST['log'])){
    $un = $_POST['username'];
    $pwd = trim($_POST['password']);

    $options = ['cost' => 10];
    $password = password_hash($pwd, PASSWORD_DEFAULT, $options);

    include ('h-dbconnection.php');

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    $sql = "SELECT * FROM participant WHERE username='$un' AND password='$password'";
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
        $_SESSION['id'] = $record['id'];
        $_SESSION['username'] = $record['username'];
        header("refresh:20;url=u-dashboard.html");
    }
    else {
        echo "Your Login Name or Password is invalid";
        header("refresh:20;url=u-login.html");
    }

}else{
    echo 'something went wrong';
    header("refresh:20;url=u-login.html");
}



?>