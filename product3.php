<!DOCTYPE html>
<html lang="en">
<head>
			<title>Sea_Room3</title>
	
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
			<img src="images/jm1.jpg" alt="room" onclick="onClid(this)" class="modal-hover-opacity"/>
		</div>
		
		<div class="img2">
			<img src="images/jm2.jpg" alt="room" onclick="onClid(this)" class="modal-hover-opacity"/>
		</div>
		
		<div class="img2">	
			<img src="images/jm3.jpg" alt="room" onclick="onClid(this)" class="modal-hover-opacity"/>
		</div>
		
		<div class="img2">		
			<img src="images/jm4.jpg" alt="room" onclick="onClid(this)" class="modal-hover-opacity"/>
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
		<p>Jumeira Road، Umm Suqeim 3 - Dubai - United Arab Emirates</p>
		<p>Tel: +971 4 366 8888</p>
		
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
		<h1 id="roomname">Jumeirah Al Naseem</h1>
		
		
		
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
					<div class="c3location">(9.3/10)</div>
				</div>
				
			<p>Rooms</p>
				<div class="mbox skills">
					<div class="c3Room">(8.2/10)</div>
				</div>
				
			<p>Service</p>
				<div class="mbox skills">
					<div class="c3service">(9.0/10)</div>
				</div>
				
			<p>Cleanliness</p>
				<div class="mbox skills">
					<div class="c3cleanliness">(9.3/10)</div>
				</div>
				
			<p>Value for money</p>
				<div class="mbox skills">
					<div class="c3Valueformoney">(8.0/10)</div>
				</div>
		</section>
		
		
		
		<!--Room Disscusstion-->
		<section  class="romminfo_S1">
		<p>Offering a spa centre and a private beach area, Jumeirah Al Naseem-Madinat Jumeirah is located in the Umm Suqeim district in Dubai. The resort has a hot tub and water sports facilities, and guests can enjoy a meal at the restaurant. Guests at the property can avail complimentary Wild Wadi Access.</p>

		<p>Every room at this resort is air conditioned and has a flat-screen TV with cable channels. Some units feature a seating area for your convenience. Certain units include views of the sea or garden. All rooms are equipped with a private bathroom fitted with a bath. For your comfort, you will find bathrobes, slippers and free toiletries.<span id = "dots"></span></p>
		<span id="more">
		<p>You can play tennis at this resort, and the area is popular for golfing. The resort also offers car hire. Mall of the Emirates is 2.4 km from Jumeirah Al Naseem-Madinat Jumeirah, while Galleria Shopping Mall is 10 km from the property. The nearest airport is Dubai International Airport, 21 km from the property.</p>

		<p>Umm Suqeim is a great choice for travellers interested in beaches, relaxation and food.</p></span>
		
		<button onclick="myFunction()" id="myBtn">Read more...</button>
		
		</section>
		
		
		<!--Amenities-->
		<section  class="romminfo_S1" id="Amenities">
		<h2>Amenities</h2>
		
		<!--Most Popular Facilities-->
		<h3>Most Popular Facilities</h3>
		<ul>
			<li>Airport shuttle</li>
			<li>Beachfront</li>
			<li>Swimming pool</li>
            <li>Outdoor pool</li>
			<li>Free WiFi</li>
			<li>Bar</li>
            <li>Family rooms</li>
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
				<td>3 Adults + 1 Child</td>
				<td><ul>
					<li>Ocean Club Superior</li> 
					<li>1 extra-large double bed </li>
				</ul></td>

			</tr>
			<tr>
				<td>3 Adults + 1 Child</td>
				<td><ul>
					<li>Resort Deluxe</li> 
					<li>1 extra-large double bed</li>
				</ul></td>
			</tr>
			
			<tr>
				<td>3 Adults + 1 Child</td>
				<td><ul>
					<li>Family Suite</li> 
					<li>Living room: 1 sofa bed</li>
                    <li>Bedroom 2: 1 extra-large double bed</li>
				</ul></td>
			</tr>
			
			<tr>
				<td>4 Adults + 1 Child</td>
				<td><ul>
					<li> Presidential Suite</li> 
					<li>Bedroom 1: 1 extra-large double bed</li>
                    <li>Living room: 1 sofa bed</li>
                    <li>Bedroom 3: 1 extra-large double bed</li>
				</ul></td>
			</tr>
			
			<tr>
				<td>4 Adults + 1 Child</td>
				<td><ul>
					<li>Royal Suite</li> 
					<li>Bedroom 1: 1 extra-large double bed</li>
                    <li>Bedroom 2: 1 extra-large double bed</li>
                    <li>Living room: 1 sofa bed</li>
			</ul></td>
			</tr>
			
			<tr>
				<td>3 Adults + 1 Child</td>
				<td><ul>
					<li>Ocean Terrace Room</li> 
					<li>1 extra-large double bed</li>
				</ul></td>
			</tr>
			
			
		</table>
		</section>
		
		
		
		<!--The Reason-->
		<section  class="romminfo_S1">
		<h2>5 reasons to choose Jumeirah Al Naseem</h2>
		<ol>
		<li>Prices you can't beat!</li>
		<li>Manage your bookings online</li>
		<li>The staff speaks English</li>
		<li>Booking is safe</li>
		<li>One of our top picks in Dubai</li>
		</ol>
		</section>
		


		<!--House Rules-->
		<section class="romminfo_S1">
		<table class="rule_table">
			<caption>House Rules</caption>
			<!--Time Check in-->
			<tr>
				<th>Check-in</th>
				<td>3:00 PM - 11:59 AM</td>
			</tr>
			<!--Time Check out-->
			<tr>
				<th>Check-out</th>
				<td>12:00 AM - 12:00 PM</td>
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
		<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14447.891368174322!2d55.1870349!3d25.136609!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x80eea7ccfd9506b!2sJumeirah+Al+Naseem!5e0!3m2!1sen!2smy!4v1554388996103!5m2!1sen!2smy">
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