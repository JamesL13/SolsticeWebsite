<html>
	<head>
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
	<link rel="stylesheet" type="text/css" href="main.css"/>
	<script type='text/javascript' src='/menu_source/menu_jquery.js'></script>
			
	
	</head>
	<body>
		
		
		
			<!--
			OPENING OF WEBSITE CODE
		
		
		<div id="top" class="text">Welcome to</div>
		<div id="bot" class="text">Solstice</div>
		<script>
			$(document).ready(function(){
				$("#top").fadeOut(2500);
				$("#bot").fadeOut(2500);
			}); 
		</script>	
-->		
		
		
		
		
		
		
		
		
		
		<!--
			TOP IMAGE CODE
		-->
		
		<div class="img">
		<img align="middle" src="SolsticeLogoBlackPS.png"/>
		</div>
		
		
		<!--
			NAVIGATION BAR CODE 
		-->
		
		<div id='cssmenu'>
<ul>
   <li class='active'><a href='home.php'><span>Home</span></a></li>
      
   
   <li class='has-sub'><a href='Android.php'><span>Game</span></a>

   <li class= 'has-sub'><a href='Linux.php'><span>Linux</span></a></li>
      
   <li class='last'><a href='ContactUs.php'><span>Contact Us</span></a></li>
</ul>
</div>
		
		<!--
			MAIN CONTENT: EDIT HERE TO EDIT PAGE
		-->
		
		<div id="mainCont">
			<div>
				<h1 id="header">Welcome to Solstice!</h1>
				<hr>
			</div>	
			<div>
				<div>
				<?php 
				
				//EDIT HERE FOR EDITING CONTENT
				
				$var = array(
				
				"This webpage is used to promote projects Mizzou students
				James Landy and Jack Boening accomplish.", 
				"",
				"You may be wondering why go under a name like Solstice? Well since we accomplish
				some projects together we wanted a joint name to go under to release apps and 
				other software. Working together allows us to accomplish more faster than working
				alone.", 
				"",
				"The buttons above contain items you can download and use as you please. As
				we release more apps or software the amount of buttons will increase.",
				"",
				"We have some upcoming projects we are working on. With summer coming up, this
				will allow us to spend more time on these projects and release them to you!",
				"",
				"So enjoy our page and check back often as we release more and more apps and 
				software for you to download and use."
				
				); 
				
				 foreach($var as $word){
				 	echo "<p>$word</p>"; 
				 } 
				
				?>
			</div>
			</div>
		</div>	
	</body>
</html>