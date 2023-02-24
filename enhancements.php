<!DOCTYPE html>
<html lang="en">
<head>
	<title>Enhancements</title>
	
	<meta charset="utf-8"/>
	<meta name="author" content="Gabriel Kong Qi Hao"/>
	<meta name="description" content=""/>
	<meta name="Keyword" content=""/>
	<script src="script/enhancement.js"></script>
	<link rel="stylesheet" type="text/css" href="style/style.css"/>
</head>
<?php
		include "include/header.php";
	?>
<article id="enhancements">
	<h1>CSS enhancements</h1>
		<h2><a href="Enquiry.html">Multiple Steps form</a></h2>
		<img src="images/form.png" alt="Multiple Steps form"/>
		<p>The form is split in to several step after the user done filling the first form then they can press the
		next button to move to the next from.to do it, first the form is given a same class and the showTab(n)function
		to decide which form should be show out. After that the nextPrev(n) is used to let the user go to the next form.
		Lastly when the user goes into the last form the next button will become a submit the button. </p>
		
		<h2><a href="index.html">Auto change Slide show</a></h2>
		<img src="images/slide.png" alt="Auto change Slide show"/>
		<p>Firstly, using a for loop to let the images display into none one by one. Second when the slideIndex is
		large then the length of the slide slideIndex will equal 1 then the images will be display in block. lastly
		the using the setTimeout function to change images every 3 seconds</p>
		
		<h2><a href="index.html">Search bar</a></h2>
		<img src="images/search.png" alt="Search bar"/>
		<p>This enhancement includes 2 function. First openSearch()  function is used to let the searcher bar display in 
		full screen. Second function filter(), it converts all the user input upper case after that use the input to find
		out the most simile word and show it out on the screen as above. </p>
		
		<h2><a href="index.html">Back to top button</a></h2>
		<img src="images/bttop.png" alt="Back to top button"/>
		<p>This enhancement will bring the user back to the top of the page after they press this this 
		is because scrollTop is set as 0 in the function. </p>
		
		<h2><a href="index.html">Drop-down list</a></h2>
		<img src="images/ddl.png" alt="Drop-down list"/>
		<p>This enhancement the drop-down list will show out when the user clicks on the “Product”. To achieve 
		this the team function to change the list class to “show”. </p>







</article>
		<?php
		include "include/footer.php";
	?>
</body>
</html>