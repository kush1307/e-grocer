<?php
	$servername="localhost";
	$username="root";
	$passwords="";
	$dbname="project";
	$db = mysqli_connect($servername,$username,$passwords);
	if(isset($_POST['submit']))
	{
		echo $name=$_POST['name'];
		echo $fname=$_POST['fname'];
		echo $lname=$_POST['lname'];
		echo $ph=$_POST['ph'];
		echo $pass=$_POST['pass'];
		echo $cpass=$_POST['cpass'];

		if(empty($name))
		{
			$error="username is required";
		}

		else if(empty($fname))
		{
			$error="firstname is required";
		}

		else if(empty($lname))
		{
			$error="lastname is required";
		}

		else if(empty($ph))
		{
			$error="phone number is required";
		}

		else if(empty($pass))
		{
			$error="password is required";
		}

		else if(empty($cpass))
		{
			$error="confirm passsword is required";
		}

	}

	if($pass==$cpass && $usname!=null && $fname!=null && $lname!=null && $ph!=null)
	{
		$query="Insert into registration(username,first_name,last_name,phone,password,conf_password) values ('$usname','$fname','$lname','$ph','$pass','$cpass')";
		mysqli_query($db,$query);
			header("Location:login.php");
			
	}

?>


<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
						<title>SignUp</title>
				<style>
			      body{
			      	background-image: url("black.jpg");
							background-size: cover;
							position: relative;
			      }

						.signup{
							width:360px;
							margin:50px auto ;
							font-family:Cambria,"Hoefler Text","Liberation Serif",Times,"Times New Roman",serif;
							border-radius: 80px;
							border: 2px solid #ccc;
							padding: 10px,40px,25px;
							margin-top: 140px;
						}

							input[type=text],input[type=password],input[type=Number]{
								width: 90%;
				        padding: 10px;
				        margin-top: 8px;
				        border: 1px solid #ccc;
				        padding-left: 5px;
				        font-size: 16px;
				        font-family: :Cambria,"Hoefler Text","Liberation Serif",Times,"Times New Roman",serif;
							}

							input[type=submit]
							{
								width:20%;
							}

							p{
								color: white;
							}
							h1{
								color: white;
								align-items: center;
							}



				</style>
				<!-- <script>
					function fun1()
					{
					var v1=document.getElementById("d1");
					var v2=document.getElementById("d2");
					var v3=document.getElementById("d3");
					var v4=document.getElementById("d4");
					var v5=document.getElementById("d5");
					var v6=document.getElementById("d6");
					var v7=document.getElementById("d7");
					var v8=document.getElementById("d8");
					var v9=document.getElementById("d9");
					var v10=document.getElementById("d10");
					var v11=document.getElementById("d11");
					var v12=document.getElementById("d12");

				if(v1.value=="")
				{
					v2.style.display="";
					v2.style.color="white";
					v1.style.border="1px solid red";
				}
				else{
					v2.style.display="none";
					v1.style.border="1px solid black";
				}

				if(v3.value=="")
				{
					v4.style.display="";
					v4.style.color="white";
					v3.style.border="1px solid red";
				}
				else{
					v4.style.display="none";
					v3.style.border="1px solid black";
				}

				if(v5.value=="")
				{
					v6.style.display="";
					v6.style.color="white";
					v5.style.border="1px solid red";
				}
				else{
					v6.style.display="none";
					v5.style.border="1px solid black";
				}

				if(v7.value=="")
				{
					v8.style.display="";
					v8.style.color="white";
					v7.style.border="1px solid red";
				}
				else{
					v8.style.display="none";
					v7.style.border="1px solid black";
				}

				if(v9.value=="")
				{
					v10.style.display="";
					v10.style.color="white";
					v9.style.border="1px solid red";
				}
				else{
					v10.style.display="none";
					v9.style.border="1px solid black";
				}

				if(v11.value=="")
				{
					v12.style.display="";
					v12.style.color="white";
					v11.style.border="1px solid red";
				}
				else{
					v12.style.display="none";
					v11.style.border="1px solid black";
				}
				}
				</script> -->
	</head>

	<body>
			<h1>E-Groccers</h1>
			<div class="signup">
				<br>
				<br>
				<br>
				 <h1 align="center"> sign up </h1>
			<form  method="POST" style="text-align:center">

				<input type="text" id="d1" placeholder="Enter a user_name" name="usname" onkeyup="fun1()">
				<br><br>

				<input type="text" id="d3" placeholder="Enter a first name" name="fname" onkeyup="fun1()">
				<br><br>

				<input type="text" id="d5"placeholder="Enter a last name" name="lname" onkeyup="fun1()">
				<br><br>

				<input type="Number" id="d7" placeholder="Enter a phone_number" name="ph" onkeyup="fun1()">
				<br><br>

				<input type="password" id="d9" placeholder="Enter a password" name="pass" onkeyup="fun1()">
				<br><br>

				<input type="password" id="d11" placeholder="Enter a confirm password" name="cpass" onkeyup="fun1()">
				<br><br>

				<input type="button" value="submit" name="submit">
			
			<p>
				Already a member<a href ="login.php">Login</a>
			</p>
		</form>
		</div>
		<?php
		if(isset($error))
		{
			echo $error;
		}
		?>
	</body>
</html>

