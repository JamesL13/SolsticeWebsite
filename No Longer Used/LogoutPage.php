		<?php 

    // First we execute our common code to connection to the database and start the session 
    require("connect.php"); 
     
    // At the top of the page we check to see whether the user is logged in or not 
    if(empty($_SESSION['user'])) 
    { 
		
		    // We remove the user's data from the session  
        // If they are not, we redirect them to the login page. 
        header("Location: MustBeLoggedInPage.php"); 
         
        // Remember that this die statement is absolutely critical.  Without it, 
        // people can view your members-only content without logging in. 
        die("Redirecting to MustBeLoggedInPage.php"); 
    } 
		?>


<html>
	<head>
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
	<link rel="stylesheet" type="text/css" href="main.css"/>
			
	
	</head>
	<body>
		
		
		<!--
			TOP IMAGE CODE
		-->
		
		<div class="img">
		<img align="middle" src="SolsticeLogoBlackPS.png"/>
		</div>
		
		
		<!--
			NAVIGATION BAR CODE 
		-->
		
		<div class ="headerBar">		
		<nav>
			<ul>
        <li class="NavBar"><a href="home.php">Home</a></li>
        <li class="NavBar"><a href="Android.php">Game</a></li>
        <li class="NavBar"><a href="Linux.php">Linux</a></li>
        <li class="NavBar"><a href="ContactUs.php">Contact Us</a></li>
		<li class="NavBar"><a href="loginpage.php">Login</a></li>
		<li class="NavBar"><a href="LogoutPage.php">Logout</a></li>
    		</ul>
		</nav>
		
		</div>
		
		<?php 

    // First we execute our common code to connection to the database and start the session 
    require("connect.php"); 
     
    // We remove the user's data from the session 
    unset($_SESSION['user']); 
     
    // We redirect them to the login page 
    header("Location: home.php"); 
    die("Redirecting to: home.php");
		
	
	