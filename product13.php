<!DOCTYPE html>
<html lang="en">
<head>
			<title>the Rosewood Guesthouse</title>
	
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
			<img src="images/f3_room1.jpg" alt="room" onclick="onClid(this)" class="modal-hover-opacity"/>
		</div>
		
		<div class="img2">
			<img src="images/f3_room2.jpg" alt="room" onclick="onClid(this)" class="modal-hover-opacity"/>
		</div>
		
		<div class="img2">	
			<img src="images/f3_room3.jpg" alt="room" onclick="onClid(this)" class="modal-hover-opacity"/>
		</div>
		
		<div class="img2">		
			<img src="images/f3_room4.jpg" alt="room" onclick="onClid(this)" class="modal-hover-opacity"/>
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
		<p>54 Wallcliffe Road, 6285, Margaret River, Australia</p>
		<p>Email: info@rosewoodguesthouse.com.au</p>
		<p>Fax: +61(8)9757 2845</p>
		
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
		<h1 id="roomname">the Rosewood Guesthouse</h1>
		
		
		
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
					<div class="j3location">(9.2/10)</div>
				</div>
				
			<p>Rooms</p>
				<div class="mbox skills">
					<div class="j3Room">(8.7/10)</div>
				</div>
				
			<p>Service</p>
				<div class="mbox skills">
					<div class="j3service">(9.4/10)</div>
				</div>
				
			<p>Cleanliness</p>
				<div class="mbox skills">
					<div class="j3cleanliness">(9.4/10)</div>
				</div>
				
			<p>Value for money</p>
				<div class="mbox skills">
					<div class="j3Valueformoney">(8.7/10)</div>
				</div>
		</section>
		
		
		
		<!--Room Disscusstion-->
		<section  class="romminfo_S1">
		<p>the Rosewood Guesthouse is a luxurious bed and breakfast in Margaret River near the renowned wine region. It features beautiful gardens, complimentary breakfast and rooms with en-suite bathrooms.</p>

		<p>The six guest rooms are individually decorated and furnished to a high standard. Each features a safe, flat-screen TV, and some have a separate powder room and garden views.</p>

		<p>Complimentary Wi-Fi is available and laundry facilities are on site. Guests have access to a communal lounge.<span id = "dots"></span></p>
		<span id="more">
		<p>Breakfast is homemade with the freshest and finest local ingredients. The waffles are famed but many other items are available including healthy options like porridge, diabetic and gluten-free options and staples such as eggs, breads and meat.</p>
		
		<p>Margaret River's main street is a ten-minute walk away from the Rosewood Guesthouse and a golf course, wineries and beautiful beaches are all only a ten-minute drive away. The Eagles Heritage Raptor Wildlife Centre is just over four kilometres away.</p></span>
		
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
			<li>Free Wifi</li>
			<li>Non-smoking rooms</li>
			<li>BBQ facilities</li>
			<li>Superb breakfast</li>
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
					<li>Superior Queen Room</li> 
					<li>1 double bed</li>
				</ul></td>

			</tr>
			<tr>
				<td>2 person</td>
				<td><ul>
					<li>Superior Queen Room</li> 
					<li>1 Large Double beds</li>
				</ul></td>
			</tr>
			
			<tr>
				<td>2 person</td>
				<td><ul>
					<li>Superior King Room</li> 
					<li>1 extra-large double bed</li>
				</ul></td>
			</tr>
			<tr>
				<td>2 person</td>
				<td><ul>
					<li>Deluxe King Room</li> 
					<li>1 extra-large double bed</li>
				</ul></td>
			</tr>
		</table>
		</section>
		
		
		
		<!--The Reason-->
		<section  class="romminfo_S1">
		<h2>3 reasons to choose the Rosewood Guesthouse</h2>
		<ol>
		<li>Prices you can't beat!</li>
		<li>The staff speaks English</li>
		<li>Great location and facilities for couples</li>
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
				<td>7:30 AM - 10:00 AM</td>
			</tr>
			<!--Age restriction-->
			<tr>
				<th>Cancellation</th>
				<td>Partially refundable</td>
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
		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3309.5289932261103!2d115.06225517959707!3d-33.9532404807279!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2a2fad3bdf652563%3A0xc939f2c8b88c0815!2s54+Wallcliffe+Rd%2C+Margaret+River+WA+6285%2C+Australia!5e0!3m2!1sen!2smy!4v1554461320327!5m2!1sen!2smy"></iframe>
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
	<?php
		include "include/footer.php";
	?>
	<script src="script/enhancement.js"></script>
</body>
</html>