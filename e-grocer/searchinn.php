<?php
include 'search.php';
include 'shops.php';
?>
<h1>search Page</h1>
<div class="show-search">
	<?php
		if (isset($_POST['submit-search'])) {
			//$search=mysqli_real_escape_string($conn,$_POST['search']);
			$search1=$_GET['search'];
			echo $search1;
			$sql="SELECT * from shop where shop_name='$search1'";
			$result=mysqli_query($conn,$sql);
			$queryResults=mysqli_num_rows($result);
			echo $queryResults;
			if ($queryResults==1) {
				while ($row=mysqli_fetch_assoc($result)){
					echo "hii";
					echo "<div>
				<h1>".$row['shop_name']."</h1>
				<p>".$row['id']."</p>
				</div>";
				}
			}
			else{
				echo"there no result matching your search!!!";

			}

		}
	?>


</div>