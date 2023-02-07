<?php require_once "dbconnection.php";?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style>
		*{
			margin: 0;
			padding: 0;
			font-family: Century Gothic;
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
			top: 15%;
			left: 50%;
			transform: translate(-50%,-50%);	
		}
		.title h1{
			color: #fff;
			font-size: 70px;
		}
		body{
			background-image:linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)), url(plane.jpg);
			height: 100vh;
			background-size: cover;
			background-position: center;
		}
		table.a{
			position: absolute;
			top: 60%;
			left: 50%;
			transform: translate(-50%,-50%);
			border: 2px solid #fff;
			padding: 10px 30px;
			color: #fff;
			text-align: center;
			text-decoration: none;
			transition: 0.6s ease;
			font-size: 20px;
			width: 95%;
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
		input[type=number], select {
		  width: 100%;
		  padding: 12px 20px;
		  margin: 8px 0;
		  display: inline-block;
		  border: 1px solid #ccc;
		  border-radius: 4px;
		  box-sizing: border-box;
		}
		input[type=date], select {
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
				<li class="active"><a href="#">Add Flights</a></li>
				<li><a href='airlinescode.php'>Airlines ID(Reference)</a></li>
				<li><a href='adminchoice.html'>Admin</a></li>
				<li><a href='homepage.html'>Logout</a></li>
			</ul>
	</div>
	<div class="title">
		<h1>Flight Details</h1>
	</div>
	<form action="postadmindetails.php" method="post">
		<table class='a' cellspacing="30">
			<tr>
				<td>Flight Code:</td>
				<td><input type="text" placeholder="Flight Code" name="flightcode" required></td>
				<td>Airlines ID:</td>
				<td>
					<?php
						$query=mysqli_query($con,"select * from airline");
						$rowcount=mysqli_num_rows($query);
					 ?>
					 <select name="airlinesid" required >
					 	<option value="">Airlines ID</option>
					 	<?php
					 		for ($i=1; $i <=$rowcount ; $i++) { 
					 			$row=mysqli_fetch_array($query);
					 			?>
					 			<option><?php echo $row["AIRLINE_ID"]?></option>
					 			<?php
					 		}
					 	?>
				</td>
				<td>Country:</td>
				<td><input type="text" placeholder="Country" name="country" required></td>
				<td>State:</td>
				<td><input type="text" placeholder="State" name="state" required></td>
			</tr>
			<tr>
				<td>Airport Name:</td>
				<td><input type="text" placeholder="Airport Name" name="airportname" required></td>
				<td>Source:</td>
				<td><input type="text" placeholder="Source" name="source" required></td>
				<td>Destination:</td>
				<td><input type="text" placeholder="Destination" name="destination" required></td>
			</tr>
			<tr>
				<td>Departure:</td>
				<td><input type="time" placeholder="Departure" name="departure" required></td>
				<td>Arrival:</td>
				<td><input type="time" placeholder="Arrival" name="arrival" required></td>
				<td>Duration:</td>
				<td><input type="text" placeholder="Duration" name="duration" required></td>
				<td>Date:</td>
				<td><input type="Date" name="date" required></td>
			</tr>
			<tr><td colspan="8" align="center" style="font-size:30px;"><u>Price:</u></td></tr>
			<tr>
				<td>Economy Class:</td>
				<td>
					<input type="number" placeholder="Economy" name="economyclass" required>
				</td>
				<td>Business Class:</td>
				<td>
					<input type="number" placeholder="Business" name="businessclass" required>
				</td>
				<td>For Students:</td>
				<td>
					<input type="number" placeholder="For Students" name="students" required>
				</td>
				<td>For Differently Abled:</td>
				<td>
					<input type="number" placeholder="For Differently Abled" name="diff" required>
				</td>
			</tr>
			<tr></tr>
			<tr>
				<td colspan="8" align="center">
					<input type="Submit" value="Submit" name="submit">
				</td>
			</tr>
		</table>
</body>
</html>