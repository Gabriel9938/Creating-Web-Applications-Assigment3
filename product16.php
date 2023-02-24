<!DOCTYPE html>
<html lang="en">
<head>
			<title>Homestay Room1</title>
	
		<meta charset="utf-8"/>
		<meta name="author" content="Gabriel Kong Qi Hao"/>
		<meta name="description" content=""/>
		<meta name="Keyword" content=""/>
		

	<link href="style/style.css" type="text/css" rel="stylesheet"/>
	
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"/>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css"/>

</head>

<body>

<?php
		include "include/header.php";
	?>
<button onclick="topFunction()" id="BTTT" title="Go to top">Top</button>
	<h1>Room Detail</h1>
	<!--Room Images-->
	<div class="room_fig" >
	<figure>
		<div class="img1">
			<img src="images/room1.jpg" alt="room" onclick="onClid(this)" class="modal-hover-opacity"/>
		</div>
		
		<div class="img2">
			<img src="images/room1.2.jpg" alt="room" onclick="onClid(this)" class="modal-hover-opacity"/>
		</div>
		
		<div class="img2">	
			<img src="images/room1.3.jpg" alt="room" onclick="onClid(this)" class="modal-hover-opacity"/>
		</div>
		
		<div class="img2">		
			<img src="images/room1.4.jpg" alt="room" onclick="onClid(this)" class="modal-hover-opacity"/>
		</div>
	</figure>
	</div>
	
	<!--modal for lightbox-->
	<div id="modal01" class="modal" onclick="this.style.display='none'"> 
		<span class="close">&times;&nbsp;&nbsp;&nbsp;&nbsp;</span>
		<div class="modal-content">
		<img id="img01" style="max-width:100%">
		</div>
	</div>
	
	<!--Side social media nav-->
	<div id="icon-bar">
		  <a href="https://www.facebook.com/" class="facebook"><i class="fa fa-facebook"></i></a> 
		  <a href="https://twitter.com/login?lang=en" class="twitter"><i class="fa fa-twitter"></i></a> 
		  <a href="https://www.google.com/" class="google"><i class="fa fa-google"></i></a> 
		  <a href="https://www.instagram.com/" class="linkedin"><i class="fa fa-linkedin"></i></a>
	</div>
	
	
<article class="pro_d">
			<!--Side -->
	<aside class="sideform">
		<p><span class="fa fa-star checked"></span>
			<span class="fa fa-star checked"></span>
			<span class="fa fa-star checked"></span>
			<span class="fa fa-star checked"></span>
			<span class="fa fa-star checked"></span></p>
			
		<!--Hotel Contact-->
		<h1>Hotel Contact</h1>
		<p>Jalan Satu, 93100, Kuching, Malaysia</p>
		<p>Tel: +60(37)1625888</p>
		<p>Fax: +60(37)1555899</p>
		
		<!--Form-->
		<form method="post" action="mailto:XXX@gmail.com">
		<table>
		<tr>
			<td><label for="ue">Email:</label></td>
		</tr>
		
		<tr>
			<td><input type="text" name="usere" id="ue" placeholder="abc123@example.com"/></td>
		</tr>
		<tr>
			<td><label for="com">Missing information:</label></td>
		</tr>
		<tr>
			<td><textarea type="number" name="com" id="com" placeholder="Comment"></textarea></td>
		</tr>
		<!--Submit button-->
		<tr>
			<td><input type="submit" value="Report"/></td>
		</tr>
		</table>
		<p class="booking"><a href="Enquiry.html" onclick="passProduct()">Booking</a></p>
		</form>
	</aside>
			
		<section  class="romminfo_S1 in-nav">
		<!--Name of the hotel-->
		<h1 id="roomname">Ile-de-France</h1>
		
		
		
		<!--sub nevigation-->
		<ul>
			<li><a href="#overview">Overview</a></li>
			<li><a href="#Amenities">Amenities</a></li>
			<li><a href="#room">Room</a></li>
		</ul>
		</section>
		
		
		
		<!--Rating Overview-->
		<section  class="romminfo_S1" id="overview">
		<h2>Rating Overview</h2>
			<p>Location</p>
				<div class="mbox skills">
					<div class="hs1location">(8.0/10)</div>
				</div>
				
			<p>Rooms</p>
				<div class="mbox skills">
					<div class="hs1Room">(6.8/10)</div>
				</div>
				
			<p>Service</p>
				<div class="mbox skills">
					<div class="hs1service">(7.9/10)</div>
				</div>
				
			<p>Cleanliness</p>
				<div class="mbox skills">
					<div class="hs1cleanliness">(7.4/10)</div>
				</div>
				
			<p>Value for money</p>
				<div class="mbox skills">
					<div class="hs1Valueformoney">(7.3/10)</div>
				</div>
		</section>
		
		
		
		<!--Room Disscusstion-->
		<section  class="romminfo_S1">
		<p>Stay at Ile-De-France and enjoy its luxurious and stylish decor. In a beautiful building from XIX 
		century , an apartment on two levels (ground floor and first floor) with elevator of 524 sqm and 185 
		sqm garden , this luxurious apartment will give you the experience of a lifetime.<span id = "dots"></span></p>
		<span id="more">
		<p>Featuring an apartment on two levels (ground floor and first floor) with elevator of 524sq.m and 185sq.m garden , luxury and comfort
		is assured in this homestay. </p>

		<p>Rooms come with both air conditioning and  fan. Bed linen, hot water shower and towels are 
		provided. TV programs are available free of charge.</p></span>

		<!--button for readmore-->
		<button onclick="myFunction()" id="myBtn">Read more...</button>
		</section>
		
		
		
		<!--Amenities-->
		<section  class="romminfo_S1" id="Amenities">
		<h2>Amenities</h2>
		
		<!--Most Popular Facilities-->
		<h3>Most Popular Facilities</h3>
		<ul>
			<li>Free Wifi</li>
			<li>Parking</li>
			<li>Non-smoking policy</li>
			<li>Comfy library</li>
			<li>Comfortable garden</li>
			<li>Fully-equipped kitchen</li>
		</ul>
		</section>
		
		
		
		<!--Bathrooms information-->
			<section  class="romminfo_S1" id="room">
		<h3>Bathrooms</h3>
		<table>
			
			<tr>
				<td>1-2 person</td>
				<td><ul>
					<li>Large Room</li> 
					<li> 1 large queen-size bed</li>
				</ul></td>
			</tr>
			
		</table>
		</section>
		
		
		
		<!--The Reason-->
		<section  class="romminfo_S1">
		<h2>5 reasons to choose Ile-de-France</h2>
		<ol>
		<li>Luxurious design and interior</li>
		<li>Manage your bookings online</li>
		<li>Friendly owner and housemates</li>
		<li>Booking safety ensured</li>
		<li>One of our top picks in Kuching</li>
		</ol>
		</section>
		


		<!--House Rules-->
		<section class="romminfo_S1">
		<table class="rule_table">
			<caption>House Rules</caption>
			<!--Time Check in-->
			<tr>
				<th>Check-in</th>
				<td>2:00 PM - 12:00 AM</td>
			</tr>
			<!--Time Check out-->
			<tr>
				<th>Check-out</th>
				<td>12:00 AM - 11:00 AM</td>
			</tr>
			<!--Age restriction-->
			<tr>
				<th>Age restriction</th>
				<td>The minimum age for check-in is 18</td>
			</tr>
			<!--Pets-->
			<tr>
				<th>Pets</th>
				<td>Pets are not allowed.</td>
			</tr>
		</table>
		</section>
</article>
	
	
	<!--Hotel location-->
		<div id="map">
		<h2>Map</h2>
		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1348854.3478740496!2d1.38114130005254!3d48.67716487504878!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e5e1c403a68c17%3A0x10b82c3688b2570!2s%C3%8Ele-de-France%2C+France!5e0!3m2!1sen!2smy!4v1554546869600!5m2!1sen!2smy"></iframe>
		</div>
	
		<!--Others Room-->
	<div class="m_room">
		<h2>More Home You May Like!</h2>
		
		<div class="section1"><a href="sea.html">
			<img src="images/cr1.jpg" alt="room"/></a>
		</div>
		
		<div class="section2"><a href="city.html">
			<img src="images/c1_room4.jpg" alt="room"/></a>
		</div>
		
		<div class="section3"><a href="jungle.html">
			<img src="images/f_room4.jpg" alt="room"/></a>
		</div>
		
	</div>
	
	<!--Footer-->
	<?php
		include "include/footer.php";
	?>
	<script src="script/enhancement.js"></script>
</body>
</html>