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
			top: 29%;
			left: 17%;
			/*transform: translate(-50%,-50%);*/
			border: 2px solid #fff;
			padding: 10px 30px;
			color: #fff;
			text-align: center;
			/*text-decoration: none;*/
			transition: 0.6s ease;
			font-size: 15px;
			width: 70%;
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
				<li class="active"><a href="#">Passengers</a></li>
				<li><a href="adminchoice.html">Admin</a></li>
				<li><a href="homepage.html">Logout</a></li>
			</ul>
		</div>
	<div class="title">
		<h1>Passengers</h1>
	</div>
	<table class="a">
		<tr>
			<th>FIRST NAME</th>
			<th>LAST NAME</th>
			<th>PASSPORT NO</th>
			<th>FLIGHT CODE</th>
			<th>AGE</th>
			<th>SEX</th>
			<th>PHONE NO</th>
			<th>ADDRESS</th>
			
			<th></th>
		</tr>
		<tr><td>&emsp;</td></tr>
		<form>
		<?php
			$query=mysqli_query($con,"select * from passenger");
			$rowscount=mysqli_num_rows($query);
			for($i=1;$i<=$rowscount;$i++)
			{
				$rows=mysqli_fetch_array($query);
		?>
				<tr>
						<td><?php echo $rows['FNAME'] ?></td>
						<td><?php echo $rows['LNAME'] ?></td>
						<td><?php echo $rows['PASSPORT_NO'] ?></td>
						<td><?php echo $rows['FLIGHT_CODE']?></td>
						<td><?php echo $rows['AGE'] ?></td>
						<td><?php echo $rows['SEX'] ?></td>
						<td><?php echo $rows['PHONE']?></td>
						<td><?php echo $rows['ADDRESS']?></td>
						
						
				</tr>
		<?php	
			}
		?>
	</form>
	</table>
</body>
</html>