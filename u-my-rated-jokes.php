<?php

 require h-dbconnection.php;


// fields id, filename, mimetype, description, data
$sql = "select description, rating from file";
$result = $dsn->query($sql);

if ($dsn->error) {
    echo "Error: " . $sql . "<br>" . $dsn->error. "<br / >";
    $dsn->close();
    die();
}

while($record=mysqli_fetch_assoc($result)){
    echo "<a target='_blank' href='showfile.php?id=" . $record['fileID'] . "'> {$record['filename']} </a><br>";
    echo "description: " . $record['description'] . "<br/>\n";
}

$record = mysqli_fetch_assoc($result);
$conn->close();


?>