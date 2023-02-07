<?php
require_once "dbconnection.php";
?>
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
			left: 40%;
			/*transform: translate(-50%,-50%);*/	
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
			top: 27%;
			left: 0%;
			/*transform: translate(-50%,-50%);*/
			border: 2px solid #fff;
			padding: 10px 30px;
			color: #fff;
			text-align: center;
			/*text-decoration: none;*/
			transition: 0.6s ease;
			font-size: 15px;
			width: 100%;
		}
		button[type="submit"]{
			border: 1px solid #fff;
			padding: 10px 30px;
			text-decoration: none;
			transition: 0.6s ease;
		}
		button[type="submit"]:hover{
			background-color: #fff;
			color: #000;
		}
	</style>
</head>
<body>
	<div class="main">
			<ul>
				<li class="active"><a href="#">All Flights</a></li>
				<li><a href="adminchoice.html">Admin</a></li>
				<li><a href="homepage.html">Logout</a></li>
			</ul>
		</div>
	<div class="title">
		<h1>All Flights</h1>
	</div>
	<table class="a">
		<tr>
			<th>SOURCE</th>
			<th>DESTINATION</th>
			<th>DEPARTURE</th>
			<th>ARRIVAL</th>
			<th>DURATION(hr)</th>
			<th>FLIGHT_CODE</th>
			<th>AIRLINE_ID</th>
			<th>PRICE(BUSINESS)</th>
			<th>PRICE(ECONOMY)</th>
			<th>PRICE(STUDENT)</th>
			<th>PRICE(DIFF)</th>
			<th>DATE</th>
			<th></th>
		</tr>
		<tr><td>&emsp;</td></tr>
		<form>
		<?php
			$query=mysqli_query($con,"select * from flight");
			$rowscount=mysqli_num_rows($query);
			for($i=1;$i<=$rowscount;$i++)
			{
				$rows=mysqli_fetch_array($query);
		?>
				<tr>
						<td><?php echo $rows['SOURCE'] ?></td>
						<td><?php echo $rows['DESTINATION'] ?></td>
						<td><?php echo $rows['DEPARTURE'] ?></td>
						<td><?php echo $rows['ARRIVAL'] ?></td>
						<td><?php echo $rows['DURATION'] ?></td>
						<td><?php echo $rows['FLIGHT_CODE']?></td>
						<td><?php echo $rows['AIRLINE_ID']?></td>
						<td><?php echo $rows['PRICE_BUSINESS']?></td>
						<td><?php echo $rows['PRICE_ECONOMY']?></td>
						<td><?php echo $rows['PRICE_STUDENTS']?></td>
						<td><?php echo $rows['PRICE_DIFFERENTLYABLED']?></td>
						<td><?php echo $rows['DATE'] ?></td>
				</tr>
		<?php	
			}
		?>
	</form>
	</table>
</body>
</html>