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
	$sql1=mysqli_query($con,"DELETE FROM selected WHERE FLIGHT_CODE='$flight'");
	$sql2=mysqli_query($con,"DELETE FROM pass WHERE PASSPORT_NO='$passportno'");
	$sql3=mysqli_query($con,"DELETE FROM price WHERE PRICE='$price'");
require_once 'vendor/autoload.php';
		$mpdf=new \Mpdf\Mpdf();
		$data='';
		$data.='
		<h1 align="center" >E-Ticket<h1>
		<center>
		<table align="center">
			<tr>
				<td>First Name &emsp;&emsp;&emsp;:</td>
				<td>' . $fname . '</td>
			</tr>
			<tr>
				<td>Last Name&emsp;&emsp;&emsp;:</td>
				<td>' . $lname . '</td>
			</tr>
			<tr>
				<td>Age&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;:</td>
				<td>' . $age . '</td>
			</tr>
			<tr>
				<td>Gender&emsp;&emsp;&emsp;&emsp;&ensp;:</td>
				<td>' . $sex . '</td>
			</tr>
			<tr>
				<td>Phone&emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;:</td>
				<td>' . $phone . '</td>
			</tr>
			<tr>
				<td>Address&emsp;&emsp;&emsp;&emsp;&ensp;:</td>
				<td>' . $address . '</td>
			</tr>
			<tr>
				<td>Passport Number:</td>
				<td>' . $passportno . '</td>
			</tr>
			<tr>
				<td>Source&emsp;&emsp;&emsp;&emsp;&emsp;:</td>
				<td>' . $source  . '</td>
			</tr>
			<tr>
				<td>Destination&emsp;&emsp;&emsp;:</td>
				<td>' . $destination  . '</td>
			</tr>
			<tr>
				<td>Arrival &emsp;&emsp;&emsp;&emsp;&emsp;:</td>
				<td>' . $arrival . '</td>
			</tr>
			<tr>
				<td>Departure &emsp;&emsp;&emsp;:</td>
				<td>' . $departure . '</td>
			</tr>
			<tr>
				<td>Duration&emsp;&emsp;&emsp;&emsp;:</td>
				<td>' . $duration . '</td>
			</tr>
			<tr>
				<td>Date &emsp;&emsp;&emsp;&emsp;&emsp;&ensp;:</td>
				<td>' . $date . '</td>
			</tr>
			<tr>
				<td>Price &emsp;&emsp;&emsp;&emsp;&emsp;&ensp;:</td>
				<td>' . $price . '</td>
			</tr>
			<tr>
				<td>Type&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;:</td>
				<td>' . $type . '</td>
			</tr>
			<tr>
				<td>Airline Name&emsp;&emsp;:</td>
				<td>' . $airlinename . '</td>
			</tr>
			<tr>
				<td>Flight Code &emsp;&emsp; :</td>
				<td>' . $flight . '</td>
			</tr>
			<tr>
				<td>Ticket Number &emsp;:</td>
				<td>' . $ticketno . '</td>
			</tr>
			</table>
			</center>';
		$mpdf->WriteHTML($data);
		$date=date("y/m/d h:i:sa");
		$mpdf->output($date . '.pdf','D');
		
?>