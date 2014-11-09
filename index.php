<HTML>

<head>
	<title>Pseudo-Instagram</title>
	<style>
		#header {
			background-color:black;
			color:white;
			text-align:center;
			padding:5px;
		}
		#section {
			line-height:30px;
			background-color:#eeeeee;
			height:700px;
			width:600px;
			float:left;
			padding:5px;	      
		}
		#summary {
			width:450px;
			float:left;
			padding:10px;	 	 
		}
		#footer {
			background-color:black;
			color:white;
			clear:both;
			text-align:center;
		   padding:5px;	 	 
		}
	</style>
</head>

<body style = "background-color:lightgrey">
<?php
$servername = "localhost";
$username = "root";
$password = "";

// Create connection
$conn = mysqli_connect($servername, $username, $password);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
} 
//echo "Connected successfully -------SIGN UP";

// Create database
//$sql = "CREATE DATABASE myDB";
//if (mysqli_query($conn, $sql)) {
//    echo "Database created successfully";
//} else {
//    echo "Error creating database: " . mysqli_error($conn);
//}
//mysqli_close($conn);
//
?>

	<div id="header">
	<h1>Pseudo-Instagram</h1>
	</div>
	
	<div id="section">
	
	<form method = "Post" action = "login.php" style = "text-align:center"> <! style = "float:right">
		Username: <input type = "text" name="username" placeholder = "Username">
		Password: <input type = "password" name="password" placeholder = "Password">
		
		<input type = "submit" value = "Log In">
	</form>
	<h2>SIGN UP!</h2>
	<h3> It's free!!!</h3>
	<form method = "Post" action = "signup.php">
		First name: <input type="text" name="firstname"> Last name: <input type="text" name="lastname"><br>
		Email: <input type="text" name="email"><br>
		Password: <input type="password" name="password"><br>
		Re-enter Password: <input type="password" name="re-password"><br>

		<input type="radio" name="gender" value="male">Male 
		<input type="radio" name="gender" value="female">Female <br>
		
		<input type = "submit" value = "Sign Up">
	</form>
	
	</div>
	
	<div id="summary">
		<h2>Description:</h2>
		<p>
		Instagram is an online mobile photo-sharing, video-sharing and social networking service
		that enables its users to take pictures and videos, and share them on a variety of social networking 
		platforms
		</p>

	</div>

</body>

</HTML>
