<?php
    session_unset();
    include ('h-dbconnection.php');

    /*echo '<pre>';
    print_r($_POST);
    echo '</pre>';*/

    $un = trim($_POST['un']);
    $pwd = $_POST['pwd'];


    $sql = "SELECT * FROM participant WHERE username='$un'";
    $result = $conn->query($sql);
    if ($conn->error) {
        echo "Error: " . $sql . "<br>" . $conn->error. "<br / >";
        $conn->close();
        die();
    }

    $record = mysqli_fetch_assoc($result);
    $count = mysqli_num_rows($result);
    $passhash = $record['passhash'];
    $conn->close();

    if(password_verify($pwd, $passhash)){
        session_start();
        $_SESSION['username'] = $record['username'];

        echo "Successful Login";
        die();
    }else {
        echo "Your Login Name or Password is invalid";
        die();
    }


/*    echo "something went wrong";

    header("refresh:3;url=u-login.html");*/

?>