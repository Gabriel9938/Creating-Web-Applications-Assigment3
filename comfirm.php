<!DOCTYPE html>
<html lang="en">
<head>
			<title>Enquiry</title>
	
		<meta charset="utf-8"/>
		<meta name="author" content=""/>
		<meta name="description" content=""/>
		<meta name="Keyword" content=""/>
		<link href="style/style.css" type="text/css" rel="stylesheet"/>
		<script src="script/enhancement.js"></script>
</head>
<body id="comfirm">
<?php
		include "include/header.php";
		
		$servername = "localhost";
		$username = "root";
		$password = "";
		$dbname = "c_booking";

		// Create connection
		$conn = mysqli_connect($servername, $username, $password,$dbname);
		// Check connection
		if (!$conn) {
			die("Connection failed: " . mysqli_connect_error());
		}
		
		
		
		
		$gname = $_POST["Gname"];
		$fname = $_POST["Fname"];
		$email = $_POST["email"];
		$street = $_POST["Street_Address"];
		$city = $_POST["City"];
		$state = $_POST["State"];
		$postcode = $_POST["Postcode"];
		$phnum = $_POST["phone"];
		$product = $_POST["Product"];
		$rentaldura = $_POST["Duration"];
		$comment = $_POST["message"];
		
		$gname_error = '';
		$fname_error = '';
		$email_error ='';
		$street_error = '';
		$city_error = '';
		$state_error = '';
		$postcode_error = '';
		$phnum_error = '';
		$product_error = '';
		$rentaldura_error = '';
		
		if (isset($_POST["submit"]))
			if (empty($gname))
				$gname_error = "<p class='con_p'>Please Enter Name</p>";
			else if (!preg_match("/^[a-zA-Z ]*$/", $gname))
				$gname_error = "<p class='con_p'>Name field should not contain number character</p>";
			
			if (empty($fname))
				$fname_error = "<p class='con_p'>Please Enter Name</p>";
			else if (!preg_match("/^[a-zA-Z ]*$/", $fname))
				$fname_error = "<p class='con_p'>Name field should not contain number character</p>";
			
			if(empty($email))
				$email_error ="<p class='con_p'>Please Enter Email</p>";
			else if(!filter_var($_POST["email"],FILTER_VALIDATE_EMAIL))
				$email_error = "<p class='con_p'>Please Enter a valid email format</p>";
			
			if (empty($state))
				$state_error = "<p class='con_p'>Please Enter a State</p>";
			
			if (empty($street))
				$street_error = "<p class='con_p'>Please Enter Street Address</p>";
			
			if (empty($city))
				$city_error = "<p class='con_p'>Please Enter a City</p>";
			else if (!preg_match("/^[a-zA-Z ]*$/", $city))
				$city_error = "<p class='con_p'>City field should not contain number character</p>";
			
			if (empty($postcode))
				$postcode_error = "<p class='con_p'>Please Enter a Postcode</p>";
			else if (!is_numeric($postcode))
				$postcode_error = "<p class='con_p'>Postcode field should not contain string character</p>";
			else if (strlen($postcode) != 5)
				$postcode_error = "<p class='con_p'>Invalid Postcode Format</p>";
			
			if (empty($phnum))
				$phnum_error = "<p class='con_p'>Please Enter a Phone Number</p>";
			else if (!is_numeric($phnum))
				$phnum_error = "<p class='con_p'>Phone Number field should not contain string character</p>";
			else if (strlen($phnum) <10)
                $phnum_error = "<p class='con_p'>Invalid Phone Number Format</p>";
             else if  (strlen($phnum) > 11)
                $phnum_error = "<p class='con_p'>Invalid Phone Number Format</p>";
			
			if (empty($product))
				$product_error = "<p class='con_p'>Please choose a product</p>";
			
			if (empty($rentaldura))
				$rentaldura_error = "<p class='con_p'>Please Enter a Duration</p>";
			else if (!is_numeric($rentaldura))
				$rentaldura_error = "<p class='con_p'>Duration field should not contain any alphabet</p>";
			
			if($gname_error == '' && $fname_error == '' && $email_error == '' && $street_error == '' && $state_error == '' && $city_error == '' && $postcode_error == '' && $phnum_error == '' && $product_error == '' && $rentaldura_error == ''){	
			
			$sql = "CREATE TABLE enquiry (
			userID int(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
			givename varchar(30) NOT NULL,
			famname varchar(30) NOT NULL,
			email varchar(255) NOT NULL,
			street varchar(25) NOT NULL,
			city varchar(25) NOT NULL,
			state text NOT NULL,
			postcode varchar(5) NOT NULL,
			phone varchar(10) NOT NULL,
			room text NOT NULL,
			duration varchar(100) NOT NULL,
			comment text NOT NULL
			)";
			
			if (mysqli_query($conn, $sql)) {
			echo "<h1 class='con_b'>Booking Successfully</h1>";
			}
			
			?>
			<article>
			<form id="bookconfrim" action="process.php" onload="return Booking_D()" method="post"  enctype="text">
				<input type="hidden" name="vgname" value="<?php echo $gname; ?>">
				<input type="hidden" name="vfname" value="<?php echo $fname; ?>">
				<input type="hidden" name="vemail" value="<?php echo $email; ?>">
				<input type="hidden" name="vstreet" value="<?php echo $street; ?>">
				<input type="hidden" name="vcity" value="<?php echo $city; ?>">
				<input type="hidden" name="vstate" value="<?php echo $state; ?>">
				<input type="hidden" name="vpostcode" value="<?php echo $postcode; ?>">
				<input type="hidden" name="vphnum" value="<?php echo $phnum; ?>">
				<input type="hidden" name="vproduct" value="<?php echo $product; ?>">
				<input type="hidden" name="vduration" value="<?php echo $rentaldura; ?>">
				<input type="hidden" name="vcomment" value="<?php echo $comment; ?>">
				<fieldset>
					<legend>Details</legend>
					<p> Name		  : <span id="confirm_name"></span></p>
					<p> Email		  : <span id="confirm_email"></span></p>
					<p> Street Address:	<span id="confirm_SA"></span></p>
					<p> City		  : <span id="confirm_city"></span></p>
					<p> State		  : <span id="confirm_state"></span></p>
					<p> Postcode	  : <span id="confirm_Postcode"></span></p>
					<p> Phone Number  :	<span id="confirm_hp"></span></p>
					<p>	Room		  : <span id="confirm_room"></span></p>
					<p>	Duration	  :	<span id="confirm_dur"></span></p>
					<p>	Comments	  :	<span id="confirm_com"></span></p>
					
					<p class="submit"><input type="button" value="Cancel" id="cancelButton" onclick="cBooking()"/></p>
					<p class="submit"><input type="submit" value="Confirm Booking" id="comButton" onclick="validate()"/></p>
				</fieldset>
			</form>
			<?php
			}
			else{
				echo "<span class='con_b'><h1>Booking Failed</h1></span>";
				if ($gname_error != "")
					echo $gname_error;
				if ($fname_error != "")
					echo $fname_error;
				if ($email_error != "")
					echo $email_error;
				if ($street_error != "")
					echo $street_error;
				if ($city_error != "")
					echo $city_error;
				if ($state_error != "")
					echo $state_error;
				if ($postcode_error != "")
					echo $postcode_error;
				if ($phnum_error != "")
					echo $phnum_error;
				if ($product_error != "")
					echo $product_error;
				if ($rentaldura_error != "")
					echo $rentaldura_error;
				echo "<p class='con_p'>Please click the Back button and try again!</p>";
			}
			?>
        </article>
		<footer>
		<?php
		include "include/footer.php";
		?>
		</footer>
<script src="script/jvs.js"></script>
</body>
</html>