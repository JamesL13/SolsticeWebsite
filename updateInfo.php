<?php
$infoId = empty($_GET['infoId']) ? 'solstice' : $_GET['infoId'];

switch($infoId) {
	case 'solstice':
		$info = 'This website was created and designed by Mizzou Student James Landy. Its purpose is to show off projects I have completed.';
		break;
	case 'skills':
		$info = 'My skills include coding in C, Java, HTML5/CSS3, PHP, MYSQL, Postgres, Javascript, Ajax, along with being able to learn new languages quickly. I have a strong drive to always be improving my skills and taking on new challenges.';
		break;
	case 'cubefield':
		$info = 'Cube Field is a game I built in Unity using 100% Unityscript. It was orignally built for Hack Illinois but was completed for a final project for a web class. It was released for the Google Play Store in May of 2014. Since then it has 700+ downloads and about a 4 star rating.';
		break;
	case 'allaboutme':
		$info = 'All About Me is a Webapp I created with 2 friends for Hack Mizzou. It is a social media conglomerate that took your Facebook and Twitter feeds and combined them into one for easy viewing. The Facebook and Twitter APIs were used to accomplish this while we coded in mostly in PHP and used bootstrap to build the website. It is functional but not released due to time constraints and other projects.';
		break;
	case 'pizza':
		$info = 'For a group project in a database class we built an online ordering system. We used Postgres to build the databse, PHP to make the database calls, and a bootstrap theme to build the website.';
		break;
	case 'maze':
		$info = 'In a group project in advanced algorithm and design we were given the group project of building a maze solving algorithm that gets the shortest path. The maze solver had to be treated like a robot who only knew where the start was. to solve this we coded an algorithm that visits every node in the maze and builds an queue of the nodes. We then run a BFS on the queue to build the shortest path. This was coded in C.';
		break;
	case 'contact':
		$info = 'To reach me with questions, comments, or suggestions feel free to email me at jmlmdf@mail.missouri.edu';
		break;
}

print $info;
?>