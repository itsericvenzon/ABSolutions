<?php

session_unset();

echo '<pre>';
print_r($_POST);
echo '</pre>';

if(isset($_POST['log'])){
    $un = $_POST['username'];
    $pw = md5($_POST['password']);
    $conn = new mysqli('localhost','root','Password1','humour');
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    $sql = "select * from user where username='$un' and password='$pw'";
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

        header("refresh:2;url=u-dashboard.html");
    }
    else {
        echo "Your Login Name or Password is invalid";
        header("refresh:2;url=u-login.html");
    }

}else{
    echo 'something went wrong';
    header("refresh:2;url=u-login.html");
}



?>