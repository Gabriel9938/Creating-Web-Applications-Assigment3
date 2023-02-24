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
	<body id="ve">
	<?php
		include "include/header.php";
	?>
	<article id="view_boo">
	<?php
		$servername = "localhost";
		$username = "root";
		$password = "";
		$dbname = "c_booking";
		
		 $conn = mysqli_connect($servername, $username, $password, $dbname);

		$sql = "SELECT userID, givename, famname, email, street, city, state, postcode, phone, room, duration, comment FROM enquiry";
		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) > 0) {
			// output data of each row
			while($row = mysqli_fetch_assoc($result)) {
				$id = $row["userID"];
				$gname = $row["givename"];
				$fname = $row["famname"];
				$email = $row["email"];
				$street = $row["street"];
				$city = $row["city"];
				$state = $row["state"];
				$postcode = $row["postcode"];
				$phone = $row["phone"];
				$room = $row["room"];
				$duration = $row["duration"];
				$com = $row["comment"];
				
				echo "
				<table class='view_D'>
				<tr>
					<th rowspan='2' id='userif' onclick='show_cd()'>".$id."</th>
					<th>Given Name</th>
					<th>Family Name</th>
					<th class ='cdetail'>E-mail Address</th>
					<th class ='cdetail'>Street Address</th>
					<th class ='cdetail'>City</th>
					<th class ='cdetail'>State</th>
					<th class ='cdetail'>Postcode</th>
					<th class ='cdetail'>Phone Number</th>
					<th class ='cdetail'>Room</th>
					<th class ='cdetail'>Duration</th>
					<th class ='cdetail'>Comment</th>
				</tr>
				<tr>
							
					<td>".$gname."</td>
					<td>".$fname."</td>
					<td class ='cdetail'>".$email."</td>
					<td class ='cdetail'>".$street."</td>
					<td class ='cdetail'>".$city."</td>
					<td class ='cdetail'>".$state."</td>
					<td class ='cdetail'>".$postcode."</td>
					<td class ='cdetail'>".$phone."</td>
					<td class ='cdetail'>".$room."</td>
					<td class ='cdetail'>".$duration."</td>
					<td class ='cdetail'>".$com."</td>
				</tr>
				</table>
				";
		}
		} else {
			echo "0 results";
			}

			mysqli_close($conn);
	?>
	</article>


	<?php
		include "include/footer.php";
	?>
	</body>
	</html>