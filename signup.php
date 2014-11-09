<HTML>

<body>


<?php
//TODO: VALIDATE INFORMATION, CHECK IF PASSWORDS MATCH, ASK FOR UPLOAD OF PROFILE PIC?

if(isset($_GET['firstname']) && isset($_GET['lastname']) && isset($_GET['email']) && isset($_GET['password']) && isset($_GET['re-password']) && isset($_GET['gender']))
{
	die("All parameters need to be set");
}

if(isset($_GET['password']) != isset($_GET['re-password']))
{
	die("Passwords do not match");
}

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
// sql to create table
//$sql = "CREATE TABLE MyGuests1 (
//id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
//email VARCHAR(50) NOT NULL,
//password VARCHAR(30) NOT NULL,
//firstname VARCHAR(30) NOT NULL,
//lastname VARCHAR(30) NOT NULL,
//gender VARCHAR(6) NOT NULL,
//reg_date TIMESTAMP
//)";

//if (mysqli_query($conn, $sql)) {
//    echo "Table MyGuests created successfully";
//} else {
//    echo "Error creating table: " . mysqli_error($conn);
//}
//

$email = $_POST['email'];
$password = $_POST['password'];
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$gender = $_POST['gender'];

$sql = "INSERT INTO users (email, password, firstname, lastname, gender)
VALUES ('$email', '$password', '$firstname', '$lastname', '$gender')"; 
//VALUES ($_POST['username'], $_POST['password'], $_POST['firstname'], $_POST['lastname'], $_POST['email'])";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully" . "<br>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error . "<br>";
}


mysqli_close($conn);

?>

</body>

</HTML>
