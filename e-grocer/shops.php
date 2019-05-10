<?php
include 'search.php';
?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="home_style.css">
	<link rel="stylesheet" type="text/css" href="oooo.css">
	<style type="text/css"> 

		body{
			background-image: url(black.jpg);
			background-size: cover;

		}
		.container-1{
			display: flex;
			float:left;
			margin: 10px 10px 10px 10px;


		}

		.container-1 div{
			border: 1px #ccc solid;
			border-radius:1rem; 
			padding: 30px;

			

		}

		.box-1{
			margin: 0px 10px 0px 10px;
		}

		.box-2{
			margin: 0px 10px 0px 10px;
		}

		.box-3{
				margin: 0px 10px 0px 10px;

		}
	</style>
</head>
<body>
	<nav>

		<p>E-Grocers</p>
		<ul>
			
			<li><a href="#">Shopin</a>
				<ul>
					<li><a href="shops.php">Naranpura</a></li>
					<li><a href="shops.php">Ghatlodia</a></li>
					<li><a href="shops.php">Memnagar</a></li>
				</ul>
			</li>

			<li><a href="main.php">Home</a></li>
			<li><a href="#">About us</a></li>

		</ul>	

		<ul id="sea-box">

			<li>
				<form action="searchinn.php" method="POST">
					
				</form>
			</li>

		</ul>


		<ul id="sig">
			<li><a href="#">SignUp</a></li>
			<li><a href="#">Login</a></li>
		</ul>

	</nav>



	<div class ="container-1">

		<div class="box-1">
			<h1>Shop1</h1>
			<img src="shop1.jpg">
			<center><p>1111</p></center>
			<center><form action="index.php"><input type="submit" name="Shop" value="Shop Now"></form></center>
		</div>	

		<div class="box-2">
			<h1>Shop2</h1>
			<img src="shop2.jpg">
			<center><p>2222</p></center>
			<center><button>Shop Now</button></center>
		</div>

		<div class="box-3">
			<h1>Shop3</h1>
			<img src="shop3.jpg">
			<center><p>3333</p></center>
			<center><button>Shop Now</button></center>
		</div>	

		<div class="box-3">
			<h1>Shop3</h1>
			<img src="shop3.jpg">
			<center><p>4444</p></center>
			<center><button>Shop Now</button></center>
		</div>

	</div>	
</body>
</html>