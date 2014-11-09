<!DOCTYPE html>
<html>

<head>
<style>
#header {
    background-color:black;
    color:white;
    text-align:center;
    padding:5px;
}
nav {
    line-height:30px;
    background-color:#eeeeee;
    height:5px;
    width:5px;
    float:right;
    padding:5px;	      
}
</style>

<title>
	<?php echo $firstname; echo $lastname;	?>s Profile
</title>
</head>
<body>

<?php
//echo "Username : " + var_dump($_POST["username"]);
//echo var_dump($_POST);

$servername = "localhost";
$username = "root";
$password = "";

// Create connection
$conn = mysqli_connect($servername, $username, $password);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
} 

if(isset($_GET['username']))
{
	$username = $_GET['username']
	//$check1 = mysqli_select_db("users");
	if(!mysqli_select_db("users"))
	{	
		die ("Could not connect to the server");
	}
	$userquery = mysqli_query("SELECT * FROM users WHERE username='$username'") or die("The query could not be found");
	if(mysqli_num_rows($userquery) != 1)
	{
		die("That username could not be found");
	}
	
	while($row = mysqli_fetch_array($userquery, MYSQL_ASSOC))
	{
		$firstname = $row['firstname'];
		$lastname = $row['lastname'];
		$password = $row['password'];
		$email = $row['email'];
		$gender = $row['gender'];
		$date = $row['date'];
		
		//ADD FOR PICS
	}
	
	if($password != $_GET['username'])
	{
		die("Incorrect password");
	}
}
else die ("You need to specify a username");

?>


<div id="header">
<h1> <?php echo $firstname; echo $lastname;	?>'s Profile</h1>
</div>

<div id="nav">
<form method = "Post" action = "index.php">
<input type = "submit" value = "Log out" style = "float: right;" style="background-color:darkgray" >
</div>

</body>
</html>
