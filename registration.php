
<?php
include ('h-dbconnection.php');

$un = trim($_POST['username']);
$em = trim($_POST['email']);
$pwd = $_POST['pwd'];
$cpwd = $_POST['cpwd'];

$age = $_POST['age'];
$country = $_POST['country'];
$edu = $_POST['education'];
$gender = $_POST['gender'];
$discl = $_POST['discl'];

$sql = "SELECT username FROM participant WHERE username = '$un'";
$result = $conn->query($sql);
$count = mysqli_num_rows($result);
if ($conn->error) {
    echo "Error: " . $sql . "<br>" . $conn->error. "<br / >";
    $conn->close();
    die();
}

$sql2 = "SELECT email FROM participant WHERE email = '$email'";
$result2 = $conn->query($sql2);
$count2 = mysqli_num_rows($result2);
if ($conn->error) {
    echo "Error: " . $sql . "<br>" . $conn->error. "<br / >";
    $conn->close();
    die();
}


if($un == "" || $em == "" || $pw == ""|| $cpw == "" ||
    $age == 'Dropdown' || $country == 'Dropdown' || $edu == 'Dropdown' || $gender == ''|| $discl == ''){
    $msg = "Fill in the missing fields";
    echo $msg;
}elseif($count > 0) {
    $msg = "Login Name Already Taken.";
    echo $msg;
}elseif($count > 0) {
    $msg = "Already existing email.";
    echo $msg;
}elseif($pw != $cpw) {
    $msg = "Passwords do not match.";
    echo $msg;
}else {
    $options = ['cost' => 10];
    $password = password_hash($pwd, PASSWORD_DEFAULT, $options);

    $sql = "INSERT into participant(username, passhash, age, country, education, gender, active) VALUES ('$un', '$em', '$password', '$age', '$country', '$edu', '$gender', 1)";
    $conn->query($sql);
    if ($conn->error) {
        echo "Error: " . $sql . "<br>" . $conn->error. "<br / >";
        $conn->close();
        die();
    }

}

$conn->close();
?>