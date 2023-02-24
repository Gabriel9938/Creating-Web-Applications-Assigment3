<!DOCTYPE html>
<html lang="en">
<head>
			<title>Margarets in Town apartments</title>
	
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
			<img src="images/f4_room2.jpg" alt="room" onclick="onClid(this)" class="modal-hover-opacity"/>
		</div>
		
		<div class="img2">
			<img src="images/f4_room1.jpg" alt="room" onclick="onClid(this)" class="modal-hover-opacity"/>
		</div>
		
		<div class="img2">	
			<img src="images/f4_room3.jpg" alt="room" onclick="onClid(this)" class="modal-hover-opacity"/>
		</div>
		
		<div class="img2">		
			<img src="images/f4_room4.jpg" alt="room" onclick="onClid(this)" class="modal-hover-opacity"/>
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
		<p>Bussell Highway &amp; Tunbridge Street, 6285, Margaret River, Australia</p>
		<p>Tel: +61(800)807667</p>
		<p>Fax: +61(8)97572959</p>
		
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
		<h1 id="roomname">Margarets in Town apartments</h1>
		
		
		
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
					<div class="j4location">(9.3/10)</div>
				</div>
				
			<p>Rooms</p>
				<div class="mbox skills">
					<div class="j4Room">(8.2/10)</div>
				</div>
				
			<p>Service</p>
				<div class="mbox skills">
					<div class="j4service">(8.4/10)</div>
				</div>
				
			<p>Cleanliness</p>
				<div class="mbox skills">
					<div class="j4cleanliness">(8.5/10)</div>
				</div>
				
			<p>Value for money</p>
				<div class="mbox skills">
					<div class="j4Valueformoney">(8.0/10)</div>
				</div>
		</section>
		
		
		
		<!--Room Disscusstion-->
		<section  class="romminfo_S1">
		<p>Situated on the border of a state forest, Margarets in Town apartments offers modern, four-star accommodations just a 10 minute drive from Gnarabup Beach.</p>

		<p>Lodging is available in the form of studios, as well as apartments with one to three bedrooms. Guests can enjoy complimentary Wi-Fi, televisions, and balconies in each room. Larger units feature full kitchens, whirlpool tubs, and separate living areas with sofa beds.</p>

		<p>The building has a games room and DVD library, and guests can also utilise the onsite tennis courts and outdoor pool. Parking is free.<span id = "dots"></span></p>
		<span id="more">
		<p>In addition to self-catering, guests can opt to walk to the nearby Margaret River-area restaurants, including Settlers Tavern, Goodfellas Café, and The Noshery 6285, all of which are favourites among visitors.</p>
		
		<p>Margarets in Town apartments is just under five kilometres from Cape Mentelle Vineyards, and is just a five minute walk from the scenic picnic area at Margaret River.</p></span>
		
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
					<li>Superior King Room</li> 
					<li>1 extra-large bed</li>
				</ul></td>

			</tr>
			<tr>
				<td>2 person</td>
				<td><ul>
					<li>Studio</li> 
					<li>1 extra-large Double beds</li>
				</ul></td>
			</tr>
			
			<tr>
				<td>2 person</td>
				<td><ul>
					<li>One-Bedroom Apartment - Disability Access</li> 
					<li>1 extra-large double bed</li>
				</ul></td>
			</tr>
			<tr>
				<td>4 person</td>
				<td><ul>
					<li>Family Loft</li> 
					<li>1 large double bed</li>
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
				<td>2:00 PM - 12:00 AM</td>
			</tr>
			<!--Time Check out-->
			<tr>
				<th>Check-out</th>
				<td>1:00 AM - 10:00 AM</td>
			</tr>
			<!--Age restriction-->
			<tr>
				<th>Cancellation</th>
				<td>FREE cancellation</td>
			</tr>
			<tr>
				<th>Prepayment</th>
				<td>Prepayment policies vary according to apartment type. Please check what conditions may apply to each option when making your selection.</td>
			</tr>
			<tr>
				<th>Age restriction</th>
				<td>The minimum age for check-in is 18</td>
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
		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3308.011799461955!2d114.99218957959818!3d-33.992230680717206!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2a2fab7ec12619d5%3A0x8a428e8d518a9d09!2s1+Resort+Pl%2C+Gnarabup+WA+6285%2C+Australia!5e0!3m2!1sen!2smy!4v1554461456822!5m2!1sen!2smy"></iframe>
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