<!doctype html>

<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Project 1 DWA fall 2018 29 mins</title>
<!-- Links to styling CSS" -->
  <link rel="stylesheet" href="css/p1dwa.css">
 </head>
 <body>
 
 <h1>Sudhir Bhargava</h1>
 
 <div  id="photo" title="My photo">
	
	<img src="image/p1dwa.jpg" alt="My photo"/>
	
</div>
 
 <h2>About me</h2>
 
  <p>Hello. My name is Sudhir. I'm originally Indian but have spent most of my adult life in Australia. I currently live in New York having moved here in 
  December 2011 from Sydney.  I've studied Finance (University of Melbourne, 2003) and have been working in Business Banking since. I find web pages very 
  interesting and am studying for a Grad Cert in Web Technologies at Harvard Extension. I have studied Fundamentals in Web Development in the Spring term
  of 2018, and Python through Udemy, but this fall have quit my job at JP Morgan Chase to take on 3 subjects and accelerate my certificate. </p>
  
  <h2>Random quote</h2>
  
<?php
$qnumber = (rand(1,3));
if ($qnumber == 1) { 
echo "The secret of getting things done is to act!	
Dante Alighieri ";
}
elseif ($qnumber == 2) {
echo "I wept not, so to stone within I grew.	 
Dante Alighieri ";
}
else {
echo "Follow your own star!	 
Dante Alighieri ";
}
?>
  
</body>                         
</html>



