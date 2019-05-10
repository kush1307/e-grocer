<?php  
$servername = "localhost";
$username = "root";
$password = "";
$db="project";

$conn = mysqli_connect($servername, $username, $password);
mysqli_select_db($conn,$db);

if(isset($_POST['sub']))
{
if (empty($_POST["un1"])) {
        $nameErr = "Missing";
 }
else
{
$us = $_POST['un1'];
$pas = $_POST['pass'];
}


$sql = "select username, password from registration";
$result = mysqli_query($conn,$sql);
while($row = mysqli_fetch_assoc($result))
{
	if($row["username"] == $us && $row['password'] == $pas)
	{
		header("Location:main.php");
	}
}
}

?>
<html>
	<head>
		<style>
			 body{
			      	background-image: url("black.jpg");
					background-size: cover;
					position: relative;
					padding-top: 10%;

			      }	
			 h1{
			 	color: white;
			 }     
			 p{
			 	color: white;
			 }
			
		</style>

	</head>
	<body>
	
		<form align="middle" method="POST">
		    <div id ="head">
				<h1 align="center"> login </h1>
			</div>
			<div id="ad">
				<p><label for="us_name">User_name:-</label>
				<input id="d1" type="text" placeholder="Enter a user_name" name="un1" onkeyup="fun1()" >
				</p>

				
				<p><label for="pass">  password :- </label>
				<input id="d3" type="password" placeholder="Enter a password" name="pass" onkeyup="fun1()" pattern=".{8,10}" title="enter your password for 8-10 digits or words" required>
				</p>
				

				<input type="button" value="submit" name="sub" onclick="fun1()">
			</div>
			<p>
				Not yet a member<a href ="sig.php"> Sign up</a>
			</p>
		</form>
	</body>
</html>

