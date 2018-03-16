
<?php
$conn = new mysqli('localhost','root','Password1','humour');

$un = $_REQUEST['username'];
$em = $_REQUEST['email'];
$pw = md5($_REQUEST['password']);
$cpw = md5($_REQUEST['confirmpassword']);

$age = $_REQUEST['age'];
$country = $_REQUEST['country'];
$edu = $_REQUEST['education'];
$gender = $_REQUEST['gender'];

$sql = "SELECT username FROM participant WHERE username = '$un'";
$result = $conn->query($sql);
$count = mysqli_num_rows($result);
if ($conn->error) {
    echo "Error: " . $sql . "<br>" . $conn->error. "<br / >";
    $conn->close();
    die();
}

$sql2 = "SELECT email FROM user WHERE email = '$email'";
$result2 = $conn->query($sql2);
$count2 = mysqli_num_rows($result2);
if ($conn->error) {
    echo "Error: " . $sql . "<br>" . $conn->error. "<br / >";
    $conn->close();
    die();
}


if($un == "" || $em == "" || $pw == ""|| $cpw == "" ||
    $age == '0' || $country == '0' || $edu == '0' || $gender == '0'|| $discl == '0'){
    $error = "Fill in the missing fields";
    echo $error;
}
if($count > 0) {
    $error = "Login Name Already Taken.";
    echo $error;
    header("refresh:3;url=registration.html");
}elseif($count > 0) {
    $error = "Already existing email.";
    echo $error;
    header("refresh:3;url=registration.html");
}elseif($pw != $cpw) {
    $error = "Passwords do not match.";
    echo $error;
    header("refresh:3;url=registration.html");
}else {
    $sql = "INSERT into participant (username, password, age, country, education, gender) 
              VALUES ('$un', '$em', '$pw', '$age', '$country', '$edu', '$gender')";
    $conn->query($sql);
    if ($conn->error) {
        echo "Error: " . $sql . "<br>" . $conn->error. "<br / >";
        $conn->close();
        die();
    }
    echo "User successfully created. Redirecting you to the login page.";
    header("refresh:3;url=u-login.html");
}
$conn->close();
?>