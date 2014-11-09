<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "myDB";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "INSERT INTO users (email, password, firstname, lastname, gender)
VALUES ('john.billy@q.com', 'johnbilly', 'john', 'billy', 'male')"; 
//VALUES ($_POST['username'], $_POST['password'], $_POST['firstname'], $_POST['lastname'], $_POST['email'])";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully" . "<br>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error . "<br>";


mysqli_close($conn);
?>
