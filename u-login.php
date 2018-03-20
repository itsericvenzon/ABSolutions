<?php
    session_unset();
    include ('h-dbconnection.php');

    /*echo '<pre>';
    print_r($_SESSION);
    echo '</pre>';*/

    $un = trim($_POST['un']);
    $un = mysqli_real_escape_string($conn, $un);
    $pwd = mysqli_real_escape_string($conn, $_POST['pwd']);


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


    if(password_verify($pwd, $passhash)){
        if ($record['active'] == 0){
            echo "Account Inactive. Please contact an Admin to reactivate your account.";
            die();
        }else {
            $age = $record['ageID'];
            $countryID = $record['countryID'];
            $eduID = $record['eduID'];
            $genderID = $record['genderID'];

            $ageResult = $conn->query("SELECT ageRange FROM age WHERE ageID='$age'");
            $ageRecord = mysqli_fetch_assoc($ageResult);
            $ageRange = $ageRecord['ageRange'];
            $countryResult = $conn->query("SELECT country FROM country WHERE countryID='$countryID'");
            $countryRecord = mysqli_fetch_assoc($countryResult);
            $country = $countryRecord['country'];
            $eduResult = $conn->query("SELECT education FROM education WHERE eduID='$eduID'");
            $eduRecord = mysqli_fetch_assoc($eduResult);
            $edu = $eduRecord['education'];
            $genderResult = $conn->query("SELECT gender FROM gender WHERE genderID='$genderID'");
            $genderRecord = mysqli_fetch_assoc($genderResult);
            $gender = $genderRecord['gender'];

            session_start();
            $_SESSION['username'] = $record['username'];
            $_SESSION['age'] = $ageRange;
            $_SESSION['country'] = $country;
            $_SESSION['education'] = $edu;
            $_SESSION['gender'] = $gender;
            echo "Successful Login";
            die();
        }
    }else {
        echo "Your Login Name or Password is Invalid.";
        die();
    }
    $conn->close();
?>