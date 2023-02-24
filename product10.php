<!DOCTYPE html>
<html lang="en">
<head>
			<title>City Room5</title>
	
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
			<img src="images/c5_room1.jpg" alt="room" onclick="onClid(this)" class="modal-hover-opacity"/>
		</div>
		
		<div class="img2"> 
			<img src="images/c5_room2.jpg" alt="room" onclick="onClid(this)" class="modal-hover-opacity"/>
		</div>
		
		<div class="img2">	
			<img src="images/c5_room3.jpg" alt="room" onclick="onClid(this)" class="modal-hover-opacity"/>
		</div>
		
		<div class="img2">		
			<img src="images/c5_room4.jpg" alt="room" onclick="onClid(this)" class="modal-hover-opacity"/>
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
			<i class="fa fa-thumbs-up"></i></p>
			
		<!--Hotel Contact-->
		<h1>Hotel Contact</h1>
		<p>Jalan Borneo, 93100, Kuching, Malaysia</p>
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
		<h1 id="roomname">My Place Hotel &amp; Lodge</h1>
		
		
		
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
					<div class="c5location">(7.4/10)</div>
				</div>
				
			<p>Rooms</p>
				<div class="mbox skills">
					<div class="c5Room">(8.0/10)</div>
				</div>
				
			<p>Service</p>
				<div class="mbox skills">
					<div class="c5service">(7.9/10)</div>
				</div>
				
			<p>Cleanliness</p>
				<div class="mbox skills">
					<div class="c5cleanliness">(7.9/10)</div>
				</div>
				
			<p>Value for money</p>
				<div class="mbox skills">
					<div class="c5Valueformoney">(7.7/10)</div>
				</div>
		</section>
		
		
		
		<!--Room Disscusstion-->
		<section  class="romminfo_S1">
		<p>Founded by a group of friends who enjoy traveling, My Place Hotel and Lodge offers
		basic yet cozy rooms with free WiFi in Kuching. The property has a 24-hour front 
		desk and can arranged airport shuttle services at a surcharge.</p>

		<p>The inn is 901 m from Kuching Waterfront Bazaar, 0.7 mi from St. Thomas's Cathedral
		and 0.9 mi from Sarawak Museum. Kuching Airport is 5 mi away.<span id = "dots"></span></p>
		<span id="more">
		<p>The nonsmoking rooms come with air conditioning and feature a desk and private 
		bathroom with shower and free toiletries. Linen and towels are provided. A hairdryer
		and electric kettle are available on request.</p>

		<p>Other facilities include a shared lounge and a tour desk. Free parking is available.</p></span>
		
		<!--button for readmore-->
		<button onclick="myFunction()" id="myBtn">Read more...</button>
		</section>
		
		
		
		<!--Amenities-->
		<section  class="romminfo_S1" id="Amenities">
		<h2>Amenities</h2>
		
		<!--Most Popular Facilities-->
		<h3>Most Popular Facilities</h3>
		<ul>
			<li><i class="fa fa-wifi"></i>Free Wifi</li>
			<li><i class="fa fa-car"></i>Free Parking</li>
			<li><i class='fas fa-ban'></i>Non-smoking rooms</li>
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
				<td>1 person</td>
				<td><ul>
					<li>Standard Single Room</li> 
					<li>1 twin bed </li>
				</ul></td>

			</tr>
			<tr>
				<td>2 person</td>
				<td><ul>
					<li> Standard Queen Room</li> 
					<li>2 twin beds  or 1 queen bed </li>
				</ul></td>
			</tr>
			
			<tr>
				<td>2 person</td>
				<td><ul>
					<li>Standard Twin Room</li> 
					<li>2 twin beds </li>
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
				<td>2:00 PM - 11:30 AM</td>
			</tr>
			<!--Time Check out-->
			<tr>
				<th>Check-out</th>
				<td>11:00 AM - 11:30 AM</td>
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
		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3988.34679732618!2d110.35220281253136!3d1.5561732613167218!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31fba7ea77380d81%3A0xdf9710de804755a9!2sMy+Place!5e0!3m2!1sen!2smy!4v1554546768412!5m2!1sen!2smy"></iframe>
		</div>
	
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
	
	<?php
		include "include/footer.php";
	?>
	<script src="script/enhancement.js"></script>
</body>
</html>