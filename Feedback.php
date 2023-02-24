<!DOCTYPE html>
<html lang="en">
<head>
		<title>Feedback</title>
	
		<meta charset="utf-8"/>
		<meta name="author" content=""/>
		<meta name="description" content=""/>
		<meta name="Keyword" content=""/>
		<link href="style/style.css" type="text/css" rel="stylesheet"/>
		<script src="script/enhancement.js"></script>
</head>
<body>
<?php
		include "include/header.php";
	?>

<article class="feedback">
    
<form name="feedback" id="fbform" method="post" action="" enctype="text/plain">
    
<fieldset>
    
<legend>Feedback Form</legend>
    
<div class="feedbackdiv">
<table>

<tr id="ugname">
<td><label for="First_name">Name: </label></td>
<td><input id="First_name" type="text" name="name" placeholder="Enter your Given Name" size="25" onkeypress="return limitinput(this, event, alphaOnly);" onkeydown="limit(this,25);" onkeyup="limit(this,25);"  /><br/>
<span id="gname_e"></span></td>
</tr>

<tr id="uemail">
<td><label for="Email">Email Address:</label></td>
<td><input type="text" name="email"  id="Email" placeholder="Ex: myname@exmaple.com" size="30" /><br/>
<span id="uemail_e"></span></td>
</tr>

<tr>

<tr id="fbss">
<td><label for="State">Category: </label></td>
<td><select name="Category" id="Category" onload="fbddl()"></select><br/>
<span id="category_e" ></span></td>
</tr>
<!-- <td><label for="Category">Category: </label></td>
<td><select name="Category">
    <option value="Compilment">Compliment</option>
    <option value="Suggestion">Suggestion</option>
    <option value="Question">Question</option>
    </select>
</td> -->
</tr>
    
<tr id="feedbcom">
<td><label for="message">Your Feedback: </label></td>
<td><textarea id="fbcom" name="message" placeholder="Your Suggestion to Improve The Website" rows="10" cols="40"></textarea>
<br/><span id="command_e"></span></td>
</tr>

</table>
<p>*Make sure you have filled all information before you submit it!*</p>
<p class="submit"><input type="reset" value="Reset All" onclick="noroom()"/></p>
<p class="reset"><input class="buttonfeedback" type="submit" value="Submit" onclick="return feedbakcvalit()"/></p>


</div>
</fieldset>
</form>
</article>

		<?php
		include "include/footer.php";
	?>
	<script src="script/jvs.js"></script>
</body>
</html>