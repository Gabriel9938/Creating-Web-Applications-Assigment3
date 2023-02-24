<!DOCTYPE html>
<html lang="en">
<head>
			<title>Sea_Room2</title>
	
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
			<img src="images/cr1.jpg" alt="room" onclick="onClid(this)" class="modal-hover-opacity"/>
		</div>
		
		<div class="img2">
			<img src="images/cr2.jpg" alt="room" onclick="onClid(this)" class="modal-hover-opacity"/>
		</div>
		
		<div class="img2">	
			<img src="images/cr3.jpg" alt="room" onclick="onClid(this)" class="modal-hover-opacity"/>
		</div>
		
		<div class="img2">		
			<img src="images/cr4.jpg" alt="room" onclick="onClid(this)" class="modal-hover-opacity"/>
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
            <span class="fa fa-star checked"></span></p>
			
		<!--Hotel Contact-->
		<h1>Hotel Contact</h1>
		<p>1105 South Ocean Boulevard, Myrtle Beach, SC 29577, USA</p>
		<p>Tel: +1 800-314-8060</p>
		
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
		<h1 id="roomname">Coral Beach Resort</h1>
		
		
		
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
					<div class="c2location">(8.9/10)</div>
				</div>
				
			<p>Rooms</p>
				<div class="mbox skills">
					<div class="c2Room">(8.1/10)</div>
				</div>
				
			<p>Service</p>
				<div class="mbox skills">
					<div class="c2service">(8.3/10)</div>
				</div>
				
			<p>Cleanliness</p>
				<div class="mbox skills">
					<div class="c2cleanliness">(8.1/10)</div>
				</div>
				
			<p>Value for money</p>
				<div class="mbox skills">
					<div class="c2Valueformoney">(8.2/10)</div>
				</div>
		</section>
		
		
		
		<!--Room Disscusstion-->
		<section  class="romminfo_S1">
		<p>This beachfront Myrtle Beach resort features 10 pools, which includes a water park, lazy river, and hot tubs, and free WiFi. Broadway at the Beach and Coastal Grand Mall are less than 10 minutes' drive away.</p>

		<p>Coral Beach Resort offers an 8-lane bowling alley, arcade games, and table games with an ice cream parlour and snack bar in the Entertainment Zone. A fitness centre and sauna are also available.<span id = "dots"></span></p>
		<span id="more">
		<p>Splash Oceanfront Beach Bar and Grill is opened seasonally and offers on-site casual dining, and a hot breakfast buffet is available at the Atlantis Restaurant daily. Pastries and Starbucks Coffee are served at the New Coral Bean Cafe.</p>

		<p>The Carolina Opry Theater, a live entertainment venue, is 15 minutes’ drive from the resort. The Myrtle Beach International Airport is less than 4.8 km away.</p></span>
		
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
            <li>Indoor pool</li>
			<li>Free WiFi</li>
			<li>Bar</li>
            <li>Non-smoking rooms</li>
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
					<li>Angle Oceanfront Room with Full Kitchen and Partial View</li> 
					<li>2 large double beds</li>
				</ul></td>

			</tr>
			<tr>
				<td>6 Person</td>
				<td><ul>
					<li>Oceanfront Suite</li> 
					<li>1 sofa bed and 2 large double beds </li>
				</ul></td>
			</tr>
			
			<tr>
				<td>6 Person</td>
				<td><ul>
					<li>Premium Oceanfront One-Bedroom Queen Suite</li> 
					<li>Living room: 1 sofa bed</li>
                    <li>Bedroom 2: 1 large double bed</li>
				</ul></td>
			</tr>
			
			<tr>
				<td>4 Person</td>
				<td><ul>
					<li>Angle Oceanfront Standard Room with Two Queen Beds and Partial View</li> 
					<li>2 large double beds</li>
				</ul></td>
			</tr>
			
			<tr>
				<td>4 Person</td>
				<td><ul>
					<li>Premium Ocean Front One Bedroom King Suite</li> 
					<li>Bedroom 1: 1 extra-large double bed</li>
                    <li>Living room: 1 sofa bed</li>
			</ul></td>
			</tr>
			
			<tr>
				<td>3 Person</td>
				<td><ul>
					<li>Angle Oceanfront King Room and Partial View</li> 
					<li>1 extra-large double bed</li>
				</ul></td>
			</tr>
			
			
		</table>
		</section>
		
		
		
		<!--The Reason-->
		<section  class="romminfo_S1">
		<h2>5 reasons to choose Coral Beach Resort</h2>
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
		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3320.2552425609147!2d-78.90023018479481!3d33.67645448070977!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x890069b858c3a58f%3A0x4c65773d1c6afb90!2sCoral+Beach+Resort+and+Suites!5e0!3m2!1sen!2smy!4v1554387839721!5m2!1sen!2smy"></iframe>
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