<<?php require_once "dbconnection.php"; ?>
<!DOCTYPE html>
<html>
<head>
	<title>Modify Flight Details</title>
	<style>
		*{
			margin: 0;
			padding: 0;
			font-family: Century Gothic;
		}
		body{
			background-image:linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)), url(plane.jpg);
			height: 100vh;
			background-size: cover;
			background-position: center;
		}
		ul{
			float: right;
			list-style-type: none;
			margin-top: 25px;
		}
		ul li{
			display: inline-block;
		}
		ul li a{
			text-decoration: none;
			color: #fff;
			padding: 5px 20px;
			border: 1px solid #fff;
			transition: 0.6s ease;
		}
		ul li a:hover{
			background-color: #fff;
			color: #000;
		}
		ul li.active a{
			background-color: #fff;
			color: #000;
		}
		.title{
			position: absolute;
			top: 40%;
			left: 50%;
			transform: translate(-50%,-50%);	
		}
		.title h1{
			color: #fff;
			font-size: 70px;
		}
		table.a{
			position: absolute;
			top: 60%;
			left: 50%;
			transform: translate(-50%,-50%);
			border: 1px solid #fff;
			padding: 10px 30px;
			color: #fff;
			text-decoration: none;
			transition: 0.6s ease;
			font-size: 25px;
		}
		input[type=submit]{
			border: 1px solid #fff;
			padding: 10px 30px;
			text-decoration: none;
			transition: 0.6s ease;
		}
		input[type=submit]:hover{
			background-color: #fff;
			color: #000;
		}
		input[type=text], select {
		  width: 100%;
		  padding: 12px 20px;
		  margin: 8px 0;
		  display: inline-block;
		  border: 1px solid #ccc;
		  border-radius: 4px;
		  box-sizing: border-box;
		}
	</style>
</head>
<body>
	<div class="main">
			<ul>
				<li class="active"><a href="#">Modify Flights</a></li>
				<li><a href="adminchoice.html">Admin</a></li>
				<li><a href="homepage.html">Logout</a></li>
			</ul>
		</div>
	<div class="title">
		<h1>Modify Flights</h1>
	</div>
	<form action="modifyadmindetailsview.php" method="POST">
		<table class="a" width=35%>
			<tr>
				<td>Enter Flight Code</td>
				<td>
					<?php
						$query=mysqli_query($con,"select * from flight");
						$rowcount=mysqli_num_rows($query);
					 ?>
					 <select name="flightcode" required >
					 	<option value="">Flight Code</option>
					 	<?php
					 		for ($i=1; $i <=$rowcount ; $i++) { 
					 			$row=mysqli_fetch_array($query);
					 			?>
					 			<option><?php echo $row["FLIGHT_CODE"]?></option>
					 			<?php
					 		}
					 	?>
					 </select>
				</td>
			</tr>
			<tr>
				<td>
					<input type="Submit" value="Modify" name="submit">
				</td>
			</tr>
		</table>
</body>
</html>