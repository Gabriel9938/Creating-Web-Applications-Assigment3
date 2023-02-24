<!DOCTYPE HTML>
<html lang="en">
	<head>

		<title>Home</title>
	
		<meta charset="utf-8"/>
		<meta name="author" content="Gabriel Kong Qi Hao"/>
		<meta name="description" content=""/>
		<meta name="Keyword" content=""/>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	
		<link rel="stylesheet" type="text/css" href="style/style.css"/>
		<script src="script/enhancement.js"></script>
	</head>
	<body id="index">
	<?php
		include "include/header.php";
	?>

<button onclick="topFunction()" id="BTTT" title="Go to top">Top</button>
	<!--SlideShow-->
	<div id="slidecon"  onload="return showSlides()">
	<div id="index_slideshow">
		<!--Butten-->
			<input type="radio" name="images" id="i1" checked="checked"/>
			<input type="radio" name="images" id="i2"/>
			<input type="radio" name="images" id="i3"/>
		
			<div class="slide" id="one">
			<div class="imgnum">1 / 3</div>
				<img id="img1" src="images/sea.jpg" alt="sea"/>
				
				<label for="i3" class="pre"></label>
				<label for="i2" class="next"></label>
			</div>
		
		
			<div class="slide" id="two">
			<div class="imgnum">2 / 3</div>
				<img id="img2" src="images/homestay.jpg" alt="sea"/>
				
				<label for="i1" class="pre"></label>
				<label for="i3" class="next"></label>
			</div>
		
		
			<div class="slide" id="three">
			  <div class="imgnum">3 / 3</div>
				<img id="img3" src="images/city.jpg" alt="sea"/>
				
				<label for="i2" class="pre"></label>
				<label for="i1" class="next"></label>
			</div>
		
	</div>
	</div>

	<p id="try"></p>

	<!--Search Booking-->
	<section class="homesec">
	<div id="myOverlay" class="overlay">
  <span class="closebtn" onclick="closeSearch()" title="Close Overlay">×</span>
  <div class="overlay-content">
    <form action="">
	
	<input type="text" id="myInput" onkeyup="filter()" placeholder="Search..">
	
	<ul id="myUL">
  <li><a href="sea.php">Sea</a></li>
  <li><a href="jungle.php">Forest</a></li>
  <li><a href="City.php">City</a></li>
  <li><a href="homestay.php">Homestay</a></li>
</ul>
      <button type="submit"><i class="fa fa-search"></i></button>
    </form>
  </div>
</div>
<button class="openBtn" onclick="openSearch()">Search</button>
	</section>
	
	
	
	<!--information-->
	<article id="index_a">
	<!--Promotion-->
		<section id="h_c1">
		<h1>Hotel search</h1>
		<p>This Web site allows user to find hotel with diffrent environment and 
		diffrents view. Get information for weekend trips to destinations and find 
		a right hotel. Mose of the information were gether form the <a href="https://www.trivago.com.my/">Trevago</a> and 
		<a href="https://www.booking.com">Booking</a>.</p>
		</section>
		
		<section id="h_c4">
		<h1>Why We Need Travel</h1>
		<p>Travel Bring many benifit to people and people travel with diffrent reason. Some people travel beacuse the want to konw other people couter. 
		Some want to relex their self during the holiday and improve the reltionship between friend and family.</p>
		</section>
		
		<section id="h_c3">
		<h1>Help you find your ideal hotel</h1>
		<p> To get an extended overview of a hotel property, trivago shows the average rating and extensive reviews from other booking sites, 
		e.g. Trevago and Booking</p>
		</section>
		

	</article>
		
	
	<!--Room tupe-->
		<section id="h_roomtype">

			<div class="card">
				<input type="checkbox" name=""/>
				<div class="toggle">+</div>
				<div class="imgbx">
				<img src="images/cv.jpg" alt="City View" />
				</div>
				<div class="h_details">
				<h1>City</h1>
				<p></p>
				
				</div>
				<div class="content"></div>
			</div>
			
			<div class="card">
				<input type="checkbox" name=""/>
				<div class="toggle">+</div>
				<div class="imgbx">
				<img src="images/fv.jpg" alt="Forest View" />
				</div>
				<div class="h_details">
				<h1>Forest</h1>
				<p></p>
				
				</div>
				<div class="content"></div>
			</div>
			
			<div class="card">
				<input type="checkbox" name=""/>
				<div class="toggle">+</div>
				<div class="imgbx">
				<img src="images/sv.jpg" alt="Sea View" />
				</div>
				<div class="h_details">
				<h1>Sea View</h1>
				<p></p>
				
				</div>
				<div class="content"></div>
			</div>
			
			<div class="card">
				<input type="checkbox" name=""/>
				<div class="toggle">+</div>
				<div class="imgbx">
				<img src="images/hv.jpg" alt="Homestay" />
				</div>
				<div class="h_details">
				<h1>Homestay</h1>
				<p></p>
				
				</div>
				<div class="content"></div>
			</div>
		</section>
	<?php
		include "include/footer.php";
	?>
	</body>
	</html>