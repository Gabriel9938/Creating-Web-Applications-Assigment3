<!DOCTYPE html>
<html lang="en">
<head>
			<title>Sea_Room1</title>
	
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
			<img src="images/HL1.jpg" alt="room" onclick="onClid(this)" class="modal-hover-opacity"/>
		</div>
		
		<div class="img2 img2">
			<img src="images/HL2.jpg" alt="room" onclick="onClid(this)" class="modal-hover-opacity"/>
		</div>
		
		<div class="img2 img2">	
			<img src="images/HL3.jpg" alt="room" onclick="onClid(this)" class="modal-hover-opacity"/>
		</div>
		
		<div class="img2 img2">		
			<img src="images/HL4.jpg" alt="room" onclick="onClid(this)" class="modal-hover-opacity"/>
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
	<div id="icon-bar" onscroll="sMs()">
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
            <span class="fa fa-star checked"></span></p>
			
		<!--Hotel Contact-->
		<h1>Hotel Contact</h1>
		<p>Rruga Aleksandër Moisiu, Vlorë, Albania</p>
		<p>Tel: +355 69 249 20018</p>
		
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
		<h1 id="roomname">Hotel Liro</h1>
		<h1 id="noroom"></h1>
		
		
		
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
					<div class="c1location">(9.0/10)</div>
				</div>
				
			<p>Rooms</p>
				<div class="mbox skills">
					<div class="c1Room">(7.7/10)</div>
				</div>
				
			<p>Service</p>
				<div class="mbox skills">
					<div class="c1service">(7.8/10)</div>
				</div>
				
			<p>Cleanliness</p>
				<div class="mbox skills">
					<div class="c1cleanliness">(8.1/10)</div>
				</div>
				
			<p>Value for money</p>
				<div class="mbox skills">
					<div class="c1Valueformoney">(7.9/10)</div>
				</div>
		</section>
		
		
		
		<!--Room Disscusstion-->
		<section  class="romminfo_S1">
		<p>Located in Vlorë, Hotel Liro offers a private beach area with free-to-use sun loungers and parasols. The on-site bar and restaurant offers a spacious terrace where guests can enjoy the Mediterranean dishes it serves. Free WiFi access is available throughout the property.</p>

		<p>All the rooms are air-conditioned and come with a furnished balcony overlooking the sea. Each room is equipped with satellite TV, a minibar and a safe. Featuring a shower, private bathrooms also come with a hairdryer and free toiletries.<span id = "dots"></span></p>
		<span id="more">
		<p>The local bus stop is right in front of the hotel. Tirana Airport is 150 km away. The property offers free parking.</p>

		<p>Hotel Liro offers several water sports facilities at its beach. An array of activities can be enjoyed on site or in the surroundings, including windsurfing, diving and snorkelling.</p></span>
		
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
			<li>Swimming pool</li>
			<li>Free WiFi</li>
			<li>Airport shuttle</li>
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
				<td>2 person</td>
				<td><ul>
					<li> Double Room with Balcony and Sea View</li> 
					<li>1 large double bed</li>
				</ul></td>

			</tr>
			<tr>
				<td>2 person</td>
				<td><ul>
					<li>Twin Room with Balcony and Sea View</li> 
					<li>2 single beds</li>
				</ul></td>
			</tr>
			
			<tr>
				<td>4 person</td>
				<td><ul>
					<li>Hilltop Sea View Deluxe</li> 
					<li>1 large double bed</li>
				</ul></td>
			</tr>
			
			<tr>
				<td>2 person</td>
				<td><ul>
					<li>Quadruple Room with Balcony and Sea View</li> 
					<li>2 large double beds</li>
				</ul></td>
			</tr>
			
			<tr>
				<td>2 person</td>
				<td><ul>
					<li>Suite with Balcony and Sea View</li> 
					<li>1 large double bad</li>
			</ul></td>
			</tr>
			
			<tr>
				<td>4 person</td>
				<td><ul>
					<li>Comfort Quadruple Room with Balcony and Sea View</li> 
					<li>2 single beds and 1 large double bed</li>
				</ul></td>
			</tr>
			
			
		</table>
		</section>
		
		
		
		<!--The Reason-->
		<section  class="romminfo_S1">
		<h2>5 reasons to choose Hotel Liro</h2>
		<ol>
		<li>Prices you can't beat!</li>
		<li>Manage your bookings online</li>
		<li>The staff speaks English</li>
		<li>Booking is safe</li>
		<li>One of our top picks in Vlorë</li>
		</ol>
		</section>
		


		<!--House Rules-->
		<section class="romminfo_S1">
		<table class="rule_table">
			<caption>House Rules</caption>
			<!--Time Check in-->
			<tr>
				<th>Check-in</th>
				<td>3:00 PM - 11:00 PM</td>
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
		<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12150.957916480842!2d19.4811959!3d40.4146218!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xf8da3056a4560055!2sHotel+Liro!5e0!3m2!1sen!2smy!4v1554385155019!5m2!1sen!2smy">
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