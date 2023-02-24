<!DOCTYPE html>
<html lang="en">
<head>
			<title>Sea_Room4</title>
	
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
	<div class="room_fig" >
	<figure>
        <div class="img1">
			<img src="images/dv1.jpg" alt="room" onclick="onClid(this)" class="modal-hover-opacity"/>
		</div>
		
		<div class="img2">
			<img src="images/dv2.jpg" alt="room" onclick="onClid(this)" class="modal-hover-opacity"/>
		</div>
		
		<div class="img2">	
			<img src="images/dv3.jpg" alt="room" onclick="onClid(this)" class="modal-hover-opacity"/>
		</div>
		
		<div class="img2">		
			<img src="images/dv4.jpg" alt="room" onclick="onClid(this)" class="modal-hover-opacity"/>
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
			<span class="fa fa-star checked"></span></p>
			
		<!--Hotel Contact-->
		<h1>Hotel Contact</h1>
		<p>5200 Ocean Blvd, Myrtle Beach, SC 29577, USA</p>
		<p>Tel: +1 877-828-2237</p>
		
		<!--Form-->
		<form method="post" action="mailto:XXX@gmail.com">
		<table>
		<tr>
		<td>
			<label for="ue">Email:</label>
			<input type="text" name="usere" id="ue" placeholder="abc123@example.com"/>
		</td>
		</tr>
		<tr>
			<td><label for="com">Missing information:</label></td>
		</tr>
		
		<tr>
		<td>
			<textarea type="number" name="com" id="com" placeholder="Comment"></textarea></td>
		</tr>
		<!--Submit button-->
		<tr>
			<td>
			<input type="submit" value="Report"/>
			</td>
		</tr>
		</table>
		<p class="booking"><a href="Enquiry.html" onclick="passProduct()">Booking</a></p>
		</form>
	</aside>
			
		<section  class="romminfo_S1 in-nav">
		<!--Name of the hotel-->
		<h1 id="roomname">Dunes Village</h1>
		
		
		
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
					<div class="c4location">(9.2/10)</div>
				</div>
				
			<p>Rooms</p>
				<div class="mbox skills">
					<div class="c4Room">(8.7/10)</div>
				</div>
				
			<p>Service</p>
				<div class="mbox skills">
					<div class="c4service">(8.7/10)</div>
				</div>
				
			<p>Cleanliness</p>
				<div class="mbox skills">
					<div class="c4cleanliness">(8.6/10)</div>
				</div>
				
			<p>Value for money</p>
				<div class="mbox skills">
					<div class="c4Valueformoney">(8.6/10)</div>
				</div>
		</section>
		
		
		
		<!--Room Disscusstion-->
		<section  class="romminfo_S1">
		<p>This smoke-free, oceanfront Dunes Village resort in Myrtle Beach features Palm Water Park, a 30,000-square-foot indoor water park with a lazy river. Guests will be 5 km from the Myrtle Beach Boardwalk and 11 km from the Myrtle Beach Airport.</p>

		<p>The suites at the Myrtle Beach resort include a seating area with a sofa bed. Each is air-conditioned and offers a private patio and a dining area.<span id = "dots"></span></p>
		<span id="more">
		<p>On-site activities include a basketball court and tennis court. Oceanfront cabana massages, a game room, and an water park with themed children's play areas are offered in addition to a year-round kid's club.</p>

		<p>Myrtlewood Golf Course is 3 km from the South Carolina Dunes resort. Guests will also be 5.4 km from Myrtle Beach Skywheel.</p></span>
		
		<button onclick="myFunction()" id="myBtn">Read more...</button>
		
		</section>
		
		
		<!--Amenities-->
		<section  class="romminfo_S1" id="Amenities">
		<h2>Amenities</h2>
		
		<!--Most Popular Facilities-->
		<h3>Most Popular Facilities</h3>
		<ul>
			<li>Free Parking</li>
			<li>Beachfront</li>
            <li>Free WiFi</li>
			<li>Swimming pool</li>
            <li>Non-smoking rooms</li>
            <li>Family rooms</li>
			<li>Bar</li>
            
		</ul>
		</section>
		
		
		
		<!--Bathrooms information-->
			<section  class="romminfo_S1" id="room">
		<h3>Rooms</h3>
		<table>
			<tr>
				<th>Sleeps</th>
				<th>Room Type</th>
			</tr>
			<tr>
				<td>4 Person</td>
				<td><ul>
					<li>Oceanfront King Studio</li> 
					<li>1 extra-large double bed and 1 sofa bed</li>
				</ul></td>

			</tr>
			<tr>
				<td>6 Person</td>
				<td><ul>
					<li>Oceanfront Queen Suite</li> 
					<li>Bedroom 1: 2 large double beds</li>
                    <li>Living room: 1 sofa bed</li>
                    <li>Living room: 1 sofa bed</li>
				</ul></td>
			</tr>
			
			<tr>
				<td>4 Person</td>
				<td><ul>
					<li>Oceanfront Deluxe Double Studio</li> 
					<li>2 double beds</li>
				</ul></td>
			</tr>
			
			<tr>
				<td>6 Person</td>
				<td><ul>
					<li>Oceanfront Queen Suite with Partial View</li> 
					<li>Living room: 1 sofa bed</li>
                    <li>Living room: 1 sofa bed</li>
                    <li>Bedroom 3: 2 large double beds</li>
				</ul></td>
			</tr>
			
			<tr>
				<td>6 Person</td>
				<td><ul>
					<li>Oceanfront Two-Bedroom Apartment with Partial View</li> 
					<li>Living room: 1 sofa bed</li>
                    <li>Bedroom 2: 2 large double beds</li>
                    <li>Bedroom 3: 1 extra-large double bed</li>
			</ul></td>
			</tr>
			
			<tr>
				<td>4 Person</td>
				<td><ul>
					<li>Room Selected at Check In</li> 
					<li>1 extra-large double bed and 1 sofa bed</li>
				</ul></td>
			</tr>
			
			
		</table>
		</section>
		
		
		
		<!--The Reason-->
		<section  class="romminfo_S1">
		<h2>5 reasons to choose Dunes Village</h2>
		<ol>
		<li>Prices you can't beat!</li>
		<li>Manage your bookings online</li>
		<li>The staff speaks English</li>
		<li>Booking is safe</li>
		<li>One of our top picks in Myrtle Beach</li>
		</ol>
		</section>
		


		<!--House Rules-->
		<section class="romminfo_S1">
		<table class="rule_table">
			<caption>House Rules</caption>
			<!--Time Check in-->
			<tr>
				<th>Check-in</th>
				<td>4:00 PM - 11:59 AM</td>
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
		<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d13273.648533740476!2d-78.8413762!3d33.7241575!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x57c7d9e4f7e74784!2sDunes+Village+Resort!5e0!3m2!1sen!2smy!4v1554390962070!5m2!1sen!2smy">
        </iframe>
		</div>
	
	<!--Others Room-->
	<div class="m_room">
		<h2>More Home You May Like!</h2>
		
		<div class="section1"><a href="city.html">
			<img src="images/c1_room4.jpg" alt="room"/></a>
		</div>
		
		<div class="section2"><a href="jungle.html">
			<img src="images/f_room4.jpg" alt="room"/></a>
		</div>
		
		<div class="section3"><a href="homestay.html">
			<img src="images/room3.4.jpg" alt="room"/></a>
		</div>
		
	</div>
	
	
	<!--Footer-->
	<?php
		include "include/footer.php";
	?>
	<script src="script/enhancement.js"></script>
</body>
</html>