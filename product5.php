<!DOCTYPE html>
<html lang="en">
<head>
			<title>Sea_Room5</title>
	
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
			<img src="images/pm1.jpg" alt="room" onclick="onClid(this)" class="modal-hover-opacity"/>
		</div>
		
		<div class="img2">
			<img src="images/pm2.jpg" alt="room" onclick="onClid(this)" class="modal-hover-opacity"/>
		</div>
		
		<div class="img2">	
			<img src="images/pm3.jpg" alt="room" onclick="onClid(this)" class="modal-hover-opacity"/>
		</div>
		
		<div class="img2">		
			<img src="images/pm4.jpg" alt="room" onclick="onClid(this)" class="modal-hover-opacity"/>
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
		<p>99 Muen-Ngoen Road Tri-Trang Beach, Patong Patong Phuket, Phuket 83150, Thailand</p>
		<p>Tel: +66 76 335 300</p>
		
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
		<h1 id="roomname">Phuket Marriott Resort &amp; Spa, Merlin Beach</h1>
		
		
		
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
					<div class="c5location">(8.0/10)</div>
				</div>
				
			<p>Rooms</p>
				<div class="mbox skills">
					<div class="c5Room">(8.5/10)</div>
				</div>
				
			<p>Service</p>
				<div class="mbox skills">
					<div class="c5service">(8.6/10)</div>
				</div>
				
			<p>Cleanliness</p>
				<div class="mbox skills">
					<div class="c5cleanliness">(8.9/10)</div>
				</div>
				
			<p>Value for money</p>
				<div class="mbox skills">
					<div class="c5Valueformoney">(7.7/10)</div>
				</div>
		</section>
		
		
		
		<!--Room Disscusstion-->
		<section  class="romminfo_S1">
		<p>Located on peaceful Tri-Trang Beach, Phuket Marriott Resort &#38; Spa, Merlin Beach is 16 km from Phuket Town and 3 km from bustling Patong. This family-friendly resort offers 3 landscape swimming pools, 8 dining options, premium spa, kids club, recreational activities and private beach. Free WiFi is available in all rooms and throughout hotel's public areas.</p>

		<p>Featuring modern décor, each room has a private balcony, a flat-screen TV and a safety deposit box. Some rooms come with direct access to the pool or beach. With a separate bathtub and shower, the en suite bathroom provides a hairdryer, slippers and THANN amenities.<span id = "dots"></span></p>
		<span id="more">
		<p>Guest can relax in one of the two whirlpools, work out in the 24-hour fitness centre, indulge in a relaxing massage or take a free shuttle service to explore Patong and Jungceylon Shopping Mall. For guests' convenience, there is a 24-hour front desk available at the property.</p>

		<p>Phuket Marriott Resort &#38; Spa, Merlin Beach is 3 km from Patong Beach and 40 km from Phuket International Airport.</p></span>
		
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
            <li>good fitness centre</li>
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
				<td>2 Adults and 2 Children</td>
				<td><ul>
					<li>Deluxe Guest Room with Balcony and Pool View</li> 
					<li>1 extra-large double bed</li>
				</ul></td>

			</tr>
			<tr>
				<td>2 Adults and 2 Children</td>
				<td><ul>
					<li>Premier King or Double Guest Room with Pool View</li> 
					<li>1 extra-large double bed</li>
				</ul></td>
			</tr>
			
			<tr>
				<td>2 Person</td>
				<td><ul>
					<li> Premier King Guest Room with Balcony and Pool Access</li> 
					<li>1 extra-large double bed</li>
				</ul></td>
			</tr>
			
			<tr>
				<td>2 Adults and 2 Children</td>
				<td><ul>
					<li>One-Bedroom Merlin Suite with Balcony and Sea View</li> 
					<li>Bedroom 1: 1 extra-large double bed</li>
                    <li>Living room: 1 sofa bed</li>
				</ul></td>
			</tr>
			
			<tr>
				<td>2 Adults and 2 Children</td>
				<td><ul>
					<li>Guest Room with One King Bed or Two Double Beds and Terrace - Poolside View</li> 
					<li>2 double beds</li>
			</ul></td>
			</tr>
			
			<tr>
				<td>2 Person</td>
				<td><ul>
					<li>Deluxe Room 8-night special deal</li> 
					<li>2 single beds or 1 extra-large double bed</li>
				</ul></td>
			</tr>
			
			
		</table>
		</section>
		
		
		
		<!--The Reason-->
		<section  class="romminfo_S1">
		<h2>5 reasons to choose Phuket Marriott Resort &#38; Spa, Merlin Beach</h2>
		<ol>
		<li>Prices you can't beat!</li>
		<li>Manage your bookings online</li>
		<li>The staff speaks English</li>
		<li>Booking is safe</li>
		<li>One of our top picks in Patong Beach</li>
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
		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d126437.11661907032!2d98.21062681364779!3d7.982417612585231!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x305025326e58d0db%3A0x680e6f48a2d46c2f!2sPhuket+Marriott+Resort+%26+Spa%2C+Merlin+Beach!5e0!3m2!1sen!2smy!4v1554392011010!5m2!1sen!2smy"></iframe>
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