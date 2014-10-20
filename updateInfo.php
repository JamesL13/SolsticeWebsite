<?php
$infoId = empty($_GET['infoId']) ? 'quote1' : $_GET['infoId'];

switch($infoId) {
	case 'quote1':
		$info = 'This website was created and designed by Mizzou Student James Landy. Its purpose is to show off projects I have completed.';
		break;
	case 'quote2':
		$info = 'If you have an android device, you should download Cube Field! It is a easy to learn game about finding the blue sphere in a field of blue cubes within the time limit.';
		break;
	case 'quote3':
		$info = 'If you want a website designed feel free to email me. I can build a website to get you noticed.';
		break;
	case 'quote4':
		$info = 'To reach me with questions, comments, or suggestions feel free to email me at jmlmdf@mail.missouri.edu';
		break;
}

print $info;
?>