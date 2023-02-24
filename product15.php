<!DOCTYPE html>
<html lang="en">
<head>
			<title>Margaret River Tourist Park</title>
	
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
			<img src="images/f5_room2.jpg" alt="room" onclick="onClid(this)" class="modal-hover-opacity"/>
		</div>
		
		<div class="img2">
			<img src="images/f5_room1.jpg" alt="room" onclick="onClid(this)" class="modal-hover-opacity"/>
		</div>
		
		<div class="img2">	
			<img src="images/f5_room3.jpg" alt="room" onclick="onClid(this)" class="modal-hover-opacity"/>
		</div>
		
		<div class="img2">		
			<img src="images/f5_room4.jpg" alt="room" onclick="onClid(this)" class="modal-hover-opacity"/>
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
		<p>44 Station Road, 6285, Margaret River, Australia</p>
		<p>Tel: +61(8)97572180</p>
		<p>Fax: +61(8)97573159</p>
		
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
		<h1 id="roomname">Margaret River Tourist Park</h1>
		
		
		
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
					<div class="j5location">(8.7/10)</div>
				</div>
				
			<p>Rooms</p>
				<div class="mbox skills">
					<div class="j5Room">(7.9/10)</div>
				</div>
				
			<p>Service</p>
				<div class="mbox skills">
					<div class="j5service">(8.5/10)</div>
				</div>
				
			<p>Cleanliness</p>
				<div class="mbox skills">
					<div class="j5cleanliness">(8.7/10)</div>
				</div>
				
			<p>Value for money</p>
				<div class="mbox skills">
					<div class="j5Valueformoney">(8.4/10)</div>
				</div>
		</section>
		
		
		
		<!--Room Disscusstion-->
		<section  class="romminfo_S1">
		<p>Margaret River Tourist Park offers simple cottages and cabins, as well as motorhome sites, just a ten-minute walk from Margaret River town centre.</p>

		<p>The bright accommodation has a private veranda, flat-screen TV and DVD player, and air-conditioning. The well-equipped kitchens include a hob, microwave, full size fridge, and toaster. The private bathrooms have a hairdryer and there are ironing facilities. All linens and towels are included. Motorhome sites have access to a shared kitchen and bathroom facilities.<span id = "dots"></span></p>
		<span id="more">
		<p>Facilities at Margaret River Tourist Park include a seasonal outdoor pool, children’s playground, and barbecue areas around the park. There is a coin-operated laundry and free parking on-site. Reception offers tour desk services.</p>

		<p>Guests may choose to self-cater and will find shops for groceries in nearby Margaret River. There are cafes, bars and restaurants for those guests who prefer to eat out.</p>
		
		<p>Leeuwin Estate winery and Surfers Point are both just over ten-minute’s drive away.</p></span>
		
		<!--button for readmore-->
		<button onclick="myFunction()" id="myBtn">Read more...</button>
		</section>
		
		
		
		<!--Amenities-->
		<section  class="romminfo_S1" id="Amenities">
		<h2>Amenities</h2>
		
		<!--Most Popular Facilities-->
		<h3>Most Popular Facilities</h3>
		<ul>
			<li>Free Parking</li>
			<li>Swimming pool</li>
			<li>Free Wifi</li>
			<li>Non-smoking rooms</li>
			<li>Facilities for disabled guests</li>
		</ul>
		</section>
		
		
		
		<!--Bathrooms information-->
			<section  class="romminfo_S1" id="room">
		<h3>Availability</h3>
		<table>
			<tr>
				<th>Sleeps</th>
				<th>Room Type</th>
			</tr>
			<tr>
				<td>2 person</td>
				<td><ul>
					<li>One Bedroom Cottage</li> 
					<li>1 large double bed</li>
				</ul></td>

			</tr>
			<tr>
				<td>2 person</td>
				<td><ul>
					<li>Double Room with Private Bathroom</li> 
					<li>2 single beds and 1 large double bed</li>
				</ul></td>
			</tr>
			
			<tr>
				<td>2 person</td>
				<td><ul>
					<li>Two-Bedroom Cottage</li> 
					<li>1 single bed and 1 large double bed</li>
				</ul></td>
			</tr>
		</table>
		</section>
		
		
		
		<!--The Reason-->
		<section  class="romminfo_S1">
		<h2>2 reasons to choose the Rosewood Guesthouse</h2>
		<ol>
		<li>Prices you can't beat!</li>
		<li>The staff speaks English</li>
		</ol>
		</section>
		


		<!--House Rules-->
		<section class="romminfo_S1">
		<table class="rule_table">
			<caption>House Rules</caption>
			<!--Time Check in-->
			<tr>
				<th>Check-in</th>
				<td>2:00 PM - 6:00 PM</td>
			</tr>
			<!--Time Check out-->
			<tr>
				<th>Check-out</th>
				<td>12:00 AM - 10:00 AM</td>
			</tr>
			<!--Age restriction-->
			<tr>
				<th>Cancellation</th>
				<td>Non-refundable</td>
			</tr>
			<tr>
				<th>Prepayment</th>
				<td>Prepayment policies vary according to apartment type. Please check what conditions may apply to each option when making your selection.</td>
			</tr>
			<tr>
				<th>Smoking</th>
				<td>Smoking is not allowed.</td>
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
		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3309.298331120488!2d115.06703737959712!3d-33.95917078072617!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2a2fad3fdbdcbc5f%3A0x40d6631619d95f04!2s44+Station+Rd%2C+Margaret+River+WA+6285%2C+Australia!5e0!3m2!1sen!2smy!4v1554461558377!5m2!1sen!2smy"></iframe>
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