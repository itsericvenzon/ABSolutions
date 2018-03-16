<?php

session_unset();

echo '<pre>';
print_r($_POST);
echo '</pre>';

if(isset($_POST['log'])){
    $un = $_POST['username'];
    $pwd = 'password';

    $options = ['cost' => 10];
    $password = password_hash($pwd, PASSWORD_DEFAULT, $options);

    include ('h-dbconnection.php');

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    $sql = "select * from user where username='$un' and password='$password'";
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
    }
    else {
        echo "Your Login Name or Password is invalid";

    }

}else{
    echo 'something went wrong';

}



?>