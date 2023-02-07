<?php
	require_once "dbconnection.php";
	$query=mysqli_query($con,("select * from selected"));
	$rows=mysqli_fetch_array($query);
	$flight=$rows['FLIGHT_CODE'];
	$query=mysqli_query($con,("select * from pass"));
	$rows=mysqli_fetch_array($query);
	$passportno=$rows['PASSPORT_NO'];
	$query=mysqli_query($con,("select * from ticket where PASSPORT_NO='$passportno'"));
	$rows=mysqli_fetch_array($query);
	$ticketno=$rows['TICKET_NO'];
	$source=$rows['SOURCE'];
	$destination=$rows['DESTINATION'];
	$date=$rows['DATE_OF_TRAVEL'];
	$query=mysqli_query($con,("select * from passenger where PASSPORT_NO='$passportno'"));
	$rows=mysqli_fetch_array($query);
	$fname=$rows['FNAME'];
	$lname=$rows['LNAME'];
	$age=$rows['AGE'];
	$sex=$rows['SEX'];
	$phone=$rows['PHONE'];
	$address=$rows['ADDRESS'];
	$query=mysqli_query($con,("select * from flight where FLIGHT_CODE='$flight'"));
	$rows=mysqli_fetch_array($query);
	$arrival=$rows['ARRIVAL'];
	$departure=$rows['DEPARTURE'];
	$duration=$rows['DURATION'];
	$airlineid=$rows['AIRLINE_ID'];
	$query=mysqli_query($con,("select * from airline where AIRLINE_ID='$airlineid'"));
	$rows=mysqli_fetch_array($query);
	$airlinename=$rows['AIRLINE_NAME'];
	$query=mysqli_query($con,("select PRICE,TYPE from price"));
	$rows=mysqli_fetch_array($query);
	$price=$rows['PRICE'];
	$type=$rows['TYPE'];
	#$sql1=mysqli_query($con,"DELETE FROM selected WHERE FLIGHT_CODE='$flight'");
	#$sql2=mysqli_query($con,"DELETE FROM pass WHERE PASSPORT_NO='$passportno'");
	#$sql3=mysqli_query($con,"DELETE FROM price WHERE PRICE='$price'");
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
			.choices{
			position: absolute;
			top: 95%;
			left: 50%;
			transform: translate(-50%,-50%);
			}
			.a1{
				border: 1px solid #fff;
				padding: 10px 30px;
				color: #fff;
				text-decoration: none;
				transition: 0.6s ease;
			}
			.a1:hover{
			background-color: #fff;
			color: #000;
			}
			.a2:hover{
			background-color: #fff;
			color: #000;
			}
			body{
			background-image:linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)), url(plane.jpg);
			height: 100vh;
			background-size: cover;
			background-position: center;
			}
			div.a{
				position: absolute;
				left: 40%;
				top: 5%;
				color: #fff;
				font-size: 40px;
			}
			div.b{
				border: 1px solid #fff;
				padding: 10px 30px;
				color: #fff;
				text-decoration: none;
				position: absolute;
				top: 55%;
				left: 50%;
				transform: translate(-50%,-50%);
				font-size: 23px;
			}
			table.a{
			position: absolute;
			top: 55%;
			left: 50%;
			transform: translate(-50%,-50%);
			border: 1px solid #fff;
			padding: 10px 30px;
			color: #fff;
			text-decoration: none;
			transition: 0.6s ease;
			font-size: 20px;
			width: 40%;
		}

	</style>
</head>
<body>
	<div class="main">
			<ul>
				<li class="active"><a href="#">E-Ticket</a></li>
			</ul>
		</div>
	<div class="a"><h1>E-Ticket</h1></div>
	<div>
		<table class="a">
			<tr>
				<td>First Name &emsp;&emsp;&emsp;:</td>
				<td><?=$fname?></td>
			</tr>
			<tr>
				<td>Last Name&emsp;&emsp;&emsp;:</td>
				<td><?=$lname?></td>
			</tr>
			<tr>
				<td>Age&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;:</td>
				<td><?=$age?></td>
			</tr>
			<tr>
				<td>Gender&emsp;&emsp;&emsp;&emsp;&ensp;:</td>
				<td><?=$sex?></td>
			</tr>
			<tr>
				<td>Phone&emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;:</td>
				<td><?=$phone?></td>
			</tr>
			<tr>
				<td>Address&emsp;&emsp;&emsp;&emsp;&ensp;:</td>
				<td><?=$address?></td>
			</tr>
			<tr>
				<td>Passport Number:</td>
				<td><?=$passportno?></td>
			</tr>
			<tr>
				<td>Source&emsp;&emsp;&emsp;&emsp;&emsp;:</td>
				<td><?=$source ?></td>
			</tr>
			<tr>
				<td>Destination&emsp;&emsp;&emsp;:</td>
				<td><?=$destination ?></td>
			</tr>
			<tr>
				<td>Arrival &emsp;&emsp;&emsp;&emsp;&emsp;:</td>
				<td><?=$arrival?></td>
			</tr>
			<tr>
				<td>Departure &emsp;&emsp;&emsp;:</td>
				<td><?=$departure?></td>
			</tr>
			<tr>
				<td>Duration&emsp;&emsp;&emsp;&emsp;:</td>
				<td><?=$duration?></td>
			</tr>
			<tr>
				<td>Date &emsp;&emsp;&emsp;&emsp;&emsp;&ensp;:</td>
				<td><?=$date?></td>
			</tr>
			<tr>
				<td>Price &emsp;&emsp;&emsp;&emsp;&emsp;&ensp;:</td>
				<td><?=$price?></td>
			</tr>
			<tr>
				<td>Type&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;:</td>
				<td><?=$type?></td>
			</tr>
			<tr>
				<td>Airline Name&emsp;&emsp;:</td>
				<td><?=$airlinename?></td>
			</tr>
			<tr>
				<td>Flight Code &emsp;&emsp; :</td>
				<td><?=$flight?></td>
			</tr>
			<tr>
				<td>Ticket Number &emsp;:</td>
				<td><?=$ticketno?></td>
			</tr>
		</table>
	</div>
	
	<div class="choices" >
			<a href="homepage.html" class="a1">Home</a>
			<a href="pdf.php"> <button type="button" class="a1"	style="background: grey;" >Print</button> </a> 
	</div>
</body>
</html>