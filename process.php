<!DOCTYPE HTML>
<html lang="en">
	<head>

		<title>Home</title>
	
		<meta charset="utf-8"/>
		<meta name="author" content="Gabriel Kong Qi Hao"/>
		<meta name="description" content=""/>
		<meta name="Keyword" content=""/>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	
		<link rel="stylesheet" type="text/css" href="style/style.css"/>
		<script src="script/enhancement.js"></script>
	</head>
	<body id="index">
	<?php
		include "include/header.php";
	?>
	<article>
	<?php
		$servername = "localhost";
		$username = "root";
		$password = "";
		$dbname = "c_booking";
		
		 $conn = mysqli_connect($servername, $username, $password, $dbname);
		
		  
		  $gname = $_POST['vgname'];
		  $fname = $_POST['vfname'];
		  $email = $_POST['vemail'];
		  $street = $_POST['vstreet'];
		  $city = $_POST['vcity'];
		  $state = $_POST['vstate'];
		  $postcode = $_POST['vpostcode'];
		  $phnum = $_POST['vphnum'];
		  $product = $_POST['vproduct'];
		  $rentaldura = $_POST['vduration'];
	   	  $comment = $_POST['vcomment'];	
			
		  $sql = "INSERT INTO enquiry(givename, famname, email, street, city, state, postcode, phone, room, duration, comment)
		  VALUES ('$gname', '$fname', '$email', '$street', '$city', '$state', '$postcode', '$phnum', '$product', '$rentaldura', '$comment')";
		  
		  
		  if (mysqli_query($conn, $sql)) {
				echo "<h1 class='hd1'>Booking successfully</h1>";
		} else {
				echo "<h1 class='hd1'>Booking Unseccessfully </h1>";
		}
mysqli_close($conn);
	?>
	
	<div id="proccess">
	<table class="process">
	<tr>
		<th>Description</th>
		<th>Details</th>
	</tr>
	<tr>
		<td>Given Name: </td>
		<td><?php echo $gname;?></td>
	</tr>
	<tr>
		<td>Family Name: </td>
		<td><?php echo $fname;?></td>
	</tr>
	<tr>
		<td>Email Address: </td>
		<td><?php echo $email;?></td>
	</tr>
	<tr>
		<td>Street Address: </td>
		<td><?php echo $street;?></td>
	</tr>
	<tr>
		<td>City: </td>
		<td><?php echo $city;?></td>
	</tr>
	<tr>
		<td>State: </td>
		<td><?php echo $state;?></td>
	</tr>
	<tr>
		<td>Postcode: </td>
		<td><?php echo $postcode;?></td>
	</tr>
	<tr>
		<td>Phone Number: </td>
		<td><?php echo $phnum;?></td>
	</tr>
	<tr>
		<td>Product: </td>
		<td><?php echo $product;?></td>
	</tr>
	<tr>
		<td>Rental Duration: </td>
		<td><?php echo $rentaldura;?></td>
	</tr>
	<tr>
		<td>Comment: </td>
		<td><?php echo $comment;?></td>
	</tr>
	</table>
	</div>
    <p id="bhome">
        <a href="index.php">Back to Homepage</a>
    </p>    
	</article>


	<?php
		include "include/footer.php";
	?>
	</body>
	</html>