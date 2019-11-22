<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Widgetwerks Inc. | Contact Us</title>
<link rel="stylesheet" href="global.css" type="text/css">
</head>
<body>
<div id="wrapper">
	<header>
       <?php include("header.php"); ?>
	</header>
	<div id="container">
	<nav>
	    <?php include("nav.php"); ?>	
	</nav>
	<main>
		<h1>Contact Us</h1>
		
		<p>We are located at the corner of Dunderhead and Fleeb. Can't miss us, really. But in case you want to send us email or something, here's the info:</p>
		
		<p><b>WidgetWerks Inc.</b><br>
		#01 - 12786 Dunderhead Ave.<br>
		Springfield, BC<br>
		Canada V6Y 0H0</p>
		
		<p><b>Tel:</b> 778.312.3212<br>
		<b>Fax:</b> 778.312.3212<br>
		<b>Email:</b> <a href="mailto:info@widgetwerks.com">info@widgetwerks.com</a></p>
		
        <h2>Send us some feedback!</h2>
        
        <div id="contactform">
        
        <form method="post" action="formmail.php">
            
        <input type="hidden" name="recipient" id="recipient" value="dtanchak@gmail.com">
        <input type="hidden" name="subject" id="subject" value="Feedback from the website">
        <input type="hidden" name="redirect" id="redirect" value="thanks.html">
        <input type="hidden" name="sort" id="sort" value="order:name,email,comments,hear,thoughts,interests1,interests2,interests3,interests4">
        
        <div class="formrow">
        <label for="name" class="lcol">Name:</label>
        <input type="text" name="name" id="name" size="40">
        </div> 
            
        <div class="altrow">
        <label for="name" class="lcol">Email:</label>
        <input type="text" name="email" id="email" size="40">
        </div> 
            
        <div class="formrow">
        <label for="comments" class="lcol">Comments:</label>
        <textarea name="comments" id="comments" rows="5" cols="35"></textarea>
        </div>
        
        <div class="altrow">
        <label for="hear" class="lcol">Where did you hear about us?</label>
        <select name="hear" id="hear">
            <option selected="selected">Please choose...</option>
            <option value="search">Search engine</option>
            <option value="friend">From a friend</option>
            <option value="wall">On a bathroom wall</option>
        </select>
        </div>
        
        <div class="formrow">
        <span class="lcol">What do you think of our site?</span>
        <input type="radio" name="thoughts" id="perfect" value="perfect" checked="checked">
        <label for="perfect"> Perfect</label><br>
            
        <input type="radio" name="thoughts" id="awful" value="perfectly awful">
        <label for="awful"> Perfectly awful</label>
        </div>
            
        <div class="altrow">
        <span class="lcol">What are you interested in?</span>
        
            <div class="rcol">
            <input type="checkbox" name="interests1" id="interests1" value="cpts"> 
            <label for="interests1"> CPTs</label><br>
            
            <input type="checkbox" name="interests2" id="interests2" value="lbds"> 
            <label for="interests2"> LBDs</label><br>

            <input type="checkbox" name="interests3" id="interests3" value="bosts"> 
            <label for="interests3"> BoSTs</label><br>

            <input type="checkbox" name="interests4" id="interests4" value="money"> 
            <label for="interests4"> How to get my money back</label>
            </div>
        </div> 
            
        <div class="formsubmit">
        <input type="submit" value=" Submit form " class="subbutton">
        <input type="reset" value=" Reset form ">
        </div>
        
        </form>
        </div>

	</main>
	</div>
	<footer>
	<?php include("footer.php"); ?>
	</footer>
</div>
</body>
</html>