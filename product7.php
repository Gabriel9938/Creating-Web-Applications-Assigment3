<!DOCTYPE html>
<html lang="en">
<head>
			<title>City Room2</title>
	
		<meta charset="utf-8"/>
		<meta name="author" content="Gabriel Kong Qi Hao"/>
		<meta name="description" content=""/>
		<meta name="Keyword" content=""/>
		

	<link href="style/style.css" type="text/css" rel="stylesheet"/>
	
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"/>
	<link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.7.0/css/all.css' integrity='sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ' crossorigin='anonymous'/>
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
			<img src="images/c2_room1.jpg" alt="room" onclick="onClid(this)" class="modal-hover-opacity"/>
		</div>
		
		<div class="img2">
			<img src="images/c2_room2.jpeg" alt="room" onclick="onClid(this)" class="modal-hover-opacity"/>
		</div>
		
		<div class="img2">	
			<img src="images/c2_room3.jpg" alt="room" onclick="onClid(this)" class="modal-hover-opacity"/>
		</div>
		
		<div class="img2">		
			<img src="images/c2_room4.jpg" alt="room" onclick="onClid(this)" class="modal-hover-opacity"/>
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
	<aside>
		<p><span class="fa fa-star checked"></span>
			<span class="fa fa-star checked"></span>
			<span class="fa fa-star checked"></span>
			<i class="fa fa-thumbs-up"></i></p>
			
		<!--Hotel Contact-->
		<h1>Hotel Contact</h1>
		<p>Jalan Tunku Abdul Rahman, 93100, Kuching, Malaysia</p>
		<p>Tel: +60(37)9625888</p>
		<p>Fax: +60(37)9555899</p>
		
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
		<h1 id="roomname">Imperial Riverbank Hotel Kuching</h1>
		
		
		
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
					<div class="c2location">(9.0/10)</div>
				</div>
				
			<p>Rooms</p>
				<div class="mbox skills">
					<div class="c2Room">(8.1/10)</div>
				</div>
				
			<p>Service</p>
				<div class="mbox skills">
					<div class="c2service">(8.8/10)</div>
				</div>
				
			<p>Cleanliness</p>
				<div class="mbox skills">
					<div class="c2cleanliness">(8.8/10)</div>
				</div>
				
			<p>Value for money</p>
				<div class="mbox skills">
					<div class="c2Valueformoney">(8.6/10)</div>
				</div>
		</section>
		
		
		
		<!--Room Disscusstion-->
		<section  class="romminfo_S1">
		<p>Located along the banks of the Sarawak River, Imperial Riverbank Hotel Kuching 
		offers accommodations in Kuching. Guests can enjoy meals at the in-house restaurant
		. Free WiFi is available throughout the property.</p>

		<p>It is 111 m to the Cat Statue and 500 m to Upside Down House Kuching. Kuching 
		Waterfront is 701 m from Imperial Riverbank Hotel Kuching, while Kuching Waterfront
		Bazaar is 801 m away. Kuching International Airport is 6.2 mi from the property.<span id = "dots"></span></p>
		<span id="more">
		<p>At the hotel, every room comes with a wardrobe, a flat-screen TV and a private bathroom.</p>

		<p>Guests can approach the 24-hour front desk for luggage storage and laundry services</p>
		<p>A continental or halal breakfast is available each morning at the property.</p>
		<p>This is our guests' favorite part of Kuching, according to independent reviews.</p>
		<p>This property also has one of the top-rated locations in Kuching! Guests are happier about 
		it compared to other properties in the area.</p></span>
		
		<!--button for readmore-->
		<button onclick="myFunction()" id="myBtn">Read more...</button>
		</section>
		
		
		
		<!--Amenities-->
		<section  class="romminfo_S1" id="Amenities">
		<h2>Amenities</h2>
		
		<!--Most Popular Facilities-->
		<h3>Most Popular Facilities</h3>
		<ul>
			<li><i class="fa fa-wifi"></i>Free WiF</li>
			<li><i class='fas fa-ban'></i>Non-smoking rooms</li>
			<li><i class='fas fa-user'></i>24-hour front desk</li>
			<li><i class='fas fa-utensils'></i>Restaurant</li>
			<li><i class='fas fa-quidditch'></i>Room service</li>
		</ul>
		</section>
		
		
		
		<!--Bathrooms information-->
			<section  class="romminfo_S1" id="room">
		<h3>Bathrooms</h3>
		<table>
			<tr>
				<th>Sleeps</th>
				<th>Room Type</th>
			</tr>
			<tr>
				<td>2 person</td>
				<td><ul>
					<li>Standard King Room (No Window)</li> 
					<li>1 king bed</li>
				</ul></td>

			</tr>
			<tr>
				<td>2 person</td>
				<td><ul>
					<li>Superior King Room</li> 
					<li>1king bed</li>
				</ul></td>
			</tr>
			
			<tr>
				<td>2 person</td>
				<td><ul>
					<li>Deluxe Twin Room</li> 
					<li>2 twin beds</li>
				</ul></td>
			</tr>
			
		</table>
		</section>
		
		
		
		<!--The Reason-->
		<section  class="romminfo_S1">
		<h2>5 reasons to choose Tune Hotel - Waterfront Kuching</h2>
		<ol>
		<li>Prices you can't beat!</li>
		<li>Manage your bookings online</li>
		<li>The staff speaks English</li>
		<li>Booking is safe</li>
		</ol>
		</section>
		


		<!--House Rules-->
		<section class="romminfo_S1">
		<table class="rule_table">
			<caption>House Rules</caption>
			<!--Time Check in-->
			<tr>
				<th>Check-in</th>
				<td>After 2:00 PM</td>
			</tr>
			<!--Time Check out-->
			<tr>
				<th>Check-out</th>
				<td>Before 12:00 AM</td>
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
		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3988.3425512274475!2d110.3495523125314!3d1.5584169613093792!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31fba7ee62fe6b3b%3A0x24a79a02c2b9a5f!2sImperial+Riverbank+Hotel+Kuching!5e0!3m2!1sen!2smy!4v1554545900414!5m2!1sen!2smy"></iframe>
		</div>
	
	<!--Others Room-->
	<div class="m_room">
		<h2>More Home You May Like!</h2>
		
		<div class="section1"><a href="sea.html">
			<img src="images/cr1.jpg" alt="room"/></a>
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