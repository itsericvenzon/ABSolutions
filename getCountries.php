<?php
    include ('h-dbconnection.php');

    // fields id, filename, mimetype, description, data
    $sql = "select * FROM country";
    $result = $conn->query($sql);

    if ($conn->error) {
        echo "Error: " . $sql . "<br>" . $conn->error. "<br / >";
        $conn->close();
        die();
    }

    while( $row = mysqli_fetch_array($result) ){
        $country = $row['country'];
        $cID = $row['countryID'];
        echo "<a class='dropdown-item' role='presentation' href='" . $cID . "'>" .  $country . "</a>";
    }
?>