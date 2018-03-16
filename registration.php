
<?php
include ('h-dbconnection.php');
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

$un = trim($_POST['un']);
$em = trim($_POST['em']);
$pwd = $_POST['pwd'];
$cpwd = $_POST['cpwd'];

$age = $_POST['age'];
$country = $_POST['country'];
$edu = $_POST['education'];
$gender = $_POST['gender'];
echo "<br><br><br><br><br><br><br><br><br><br><h1>$un . $em . $pwd . $age . $country . $edu . $gender</h1>";
if ($gender == 'male'){
    $gender = 'M';
}if ($gender == 'male'){
    $gender = 'F';
}else {
    $gender = 'O';
}

/*$sql = "SELECT username FROM participant WHERE username = '$un'";
$result = $conn->query($sql);
$count = mysqli_num_rows($result);
if ($conn->error) {
    echo "Error: " . $sql . "<br>" . $conn->error. "<br / >";
    $conn->close();
    die();
}

$sql2 = "SELECT email FROM participant WHERE email = '$em'";
$result2 = $conn->query($sql2);
$count2 = mysqli_num_rows($result2);
if ($conn->error) {
    echo "Error: " . $sql . "<br>" . $conn->error. "<br / >";
    $conn->close();
    die();
}*/

/*if($count > 0) {
    $msg = "Login Name Already Taken.";
    echo $msg;
    die();
}elseif($count2 > 0) {
    $msg = "Already existing email.";
    echo $msg;
    die();
}elseif($pw != $cpw) {
    $msg = "Passwords do not match.";
    echo $msg;
    die();
}*/

    $options = ['cost' => 10];
    $password = password_hash($pwd, PASSWORD_DEFAULT, $options);

    echo $password;
    $sql = "INSERT into participant(username, passhash, email, ageID, countryID, eduID, genderID, active, dateStarted) VALUES ('$un', '$password', '$em', (SELECT countryID FROM country WHERE country = '$country'), (SELECT ageID FROM age WHERE ageRange = '$age'), (SELECT eduID FROM education WHERE education = '$edu'), (SELECT genderID FROM gender WHERE gender = '$gender'), 1, 'now()')";
    $conn->query($sql);
    if ($conn->error) {
        echo "Error: " . $sql . "<br>" . $conn->error. "<br / >";
        $conn->close();
        die();
    }



$conn->close();
?>