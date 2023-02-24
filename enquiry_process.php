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
<body id="EPage">
<?php
		include "include/header.php";
	?>
	
<article class="feedback">

<?php
// set the servername,username and password
$servername = "localhost";
$username = "root";
$password = "";

// Create connection
$conn = mysqli_connect($servername, $username, $password);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Create database
$sql = "CREATE DATABASE c_booking";
if (mysqli_query($conn, $sql)) {
    echo "";
} else {
    echo "";
}
mysqli_close($conn);
?>
	
<form name="booking" id="bkform" action="comfirm.php" method="post" enctype="multipart/form-data">
<input type="text"  id="RoomPage" disabled="disabled"/>

<div class="feedbackdiv">
<fieldset class="sform"> 
<legend>Basic Information</legend>
    
<table>

<tr id="ugname">
<td><label for="First_name">Given Name: </label></td>
<td><input id="First_name" type="text" name="Gname" placeholder="Enter your Given Name" size="25" onkeypress="return limitinput(this, event, alphaOnly);" onkeydown="limit(this,25);" onkeyup="limit(this,25);"  /><br/>
<span id="gname_e"></span></td>
</tr>
    
<tr id="ufname">
<td><label for="Second_name">Family Name: </label></td>
<td><input id="Second_name" type="text" name="Fname" placeholder="Enter your Family Name" size="25" onkeypress="return limitinput(this, event, alphaOnly);" onkeydown="limit(this,25);" onkeyup="limit(this,25);" /><br/>
<span id="fname_e"></span></td>
</tr>

<tr id="uemail">
<td><label for="Email">Email Address:</label></td>
<td><input type="text" name="email"  id="Email" placeholder="Ex: myname@exmaple.com" size="30" /><br/>
<span id="uemail_e"></span></td>
</tr>
</table>
</fieldset>
    
<fieldset class="sform">
<legend>Your Address</legend>
<table>
<tr id="uaddress">
<td><label for="Street_Address">Street Address: </label></td>  
<td><input type="text" id="Street_Address" name="Street_Address"  onkeypress="return limitinput(this, event, digitalphaOnly);" onkeydown="limit(this,40);" onkeyup="limit(this,40);" /><br/>
<span id="uaddress_e" ></span></td>
</tr> 
    
<tr id="ucity">
<td><label for="City">City: </label></td>  
<td><input type="text" name="City" id="City" placeholder="Lawas"  onkeypress="return limitinput(this, event, alphaOnly);" onkeydown="limit(this,20);" onkeyup="limit(this,20);" /><br/>
<span id="ucity_e" ></span></td>
</tr>

<tr id="uss">
<td><label for="State">State: </label></td>
<td><select name="State" id="State" onload="sddl()"></select><br/>
<span id="state_e" ></span></td>
</tr>
    
<tr id="uPostcode">
<td><label for="Postcode">Postcode: </label></td>  
<td><input type="text" name="Postcode" id="Postcode" placeholder="eg.93050" onkeypress="return limitinput(this, event, digitsOnly);" onkeydown="limit(this,5);" onkeyup="limit(this,5);" /><br/>
<span id="Postcode_e" ></span></td>
</tr>

</table>    
</fieldset>

<fieldset class="sform">
<legend>Details</legend>
<table>
<tr id="uphonenumber">
<td><label for="phone_number">Phone Number:</label></td>
<td><input id="phone_number" type="text" name="phone" placeholder="01119876543" onkeypress="return limitinput(this, event, digitsOnly);" onkeydown="limit(this,10);" onkeyup="limit(this,10);" /><br/>
<span id="uphonenumber_e" ></span></td>
</tr>

<tr id="uroom">
<td><label for="Product">Room: </label></td>
<td><select id="Product" name="Product" onload="rddl()" onclick="return storeRoom()"></select><br/>
<span id="pd_e" ></span></td>
</tr>

<tr id="rental_d">
<td><label for="Rental_duration">Rental Duration (days): </label></td>
<td><input type="text" id="Rental_duration" name="Duration" placeholder="0" min="1" max="30" onkeypress="return limitinput(this, event, digitsOnly);" onkeydown="limit(this,3);" onkeyup="limit(this,3);"  /><br/>
<span id="rental_d_e" ></span></td>
</tr>
    
<tr>
<td><label for="message">Comments: </label></td>
<td><textarea name="message" id="message" placeholder="Your Comment About Our Product" rows="10" cols="40"></textarea></td>
</tr>

</table>
</fieldset>
<div id="f_butt">
      <button type="button" id="prevBtn" onclick="nextPrev(-1)">Previous</button>
      <button type="button" id="nextBtn" onclick="nextPrev(1)">Next</button>
    </div>
	
  <div id="form_schedule">
    <span class="step"></span>
    <span class="step"></span>
    <span class="step"></span>
  </div>

</form>
</article>

		<?php
		include "include/footer.php";
	?>
<script src="script/jvs.js"></script>
</body>
</html>