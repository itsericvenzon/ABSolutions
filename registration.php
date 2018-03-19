
<?php
    include ('h-dbconnection.php');

    $un = trim($_POST['un']);
    $em = trim($_POST['em']);
    $pwd = $_POST['pwd'];
    $cpwd = $_POST['cpwd'];

    $age = trim($_POST['age']);
    $country = trim($_POST['country']);
    $edu = trim($_POST['education']);
    $gender = trim($_POST['gender']);
    $gender = 'male';
    if ($gender == 'male'){
        $gd = 'M';
    }elseif ($gender == 'female'){
        $gd = 'F';
    }else {
        $gd = 'O';
    }

        $options = ['cost' => 10];
        $password = password_hash($pwd, PASSWORD_DEFAULT, $options);

        $sql = "INSERT into participant(username, passhash, email, countryID, ageID, eduID, genderID, active, dateStarted) 
                VALUES ('$un', '$password', '$em', (SELECT countryID FROM country WHERE country = '$country'), 
                (SELECT ageID FROM age WHERE ageRange = '$age'), (SELECT eduID FROM education WHERE education = '$edu'), 
                (SELECT genderID FROM gender WHERE gender = '$gd'), 1, now())";
        $conn->query($sql);
        if ($conn->error) {
            echo "Error: " . $sql . "<br>" . $conn->error. "<br / >";
            $conn->close();
            //echo "Error: Please contact an Admin via the 'Contact Us' form."
            die();
        }
    $conn->close();
?>