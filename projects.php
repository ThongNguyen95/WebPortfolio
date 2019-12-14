<?php
	session_start();
	$session = isset($_SESSION['username']);
	if (!$session) {
		unset($_SESSION['error']);
		header("Location:signin.php");
	} else {
		$name = $_SESSION['username'];
	}
?>
<!doctype html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="description" content="My name is Thong Nguyen. This is my online-portfolio. Here you can have access to my Computer Science projects and personal artworks.">
		<meta name="keywords" content="portfolio, Thong Nguyen, Computer Science, Software Engineer, Projects">
		<meta name="author" content="Thong Nguyen">
		<title>Portfolio: Thong Nguyen - Programming</title>
		<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
		<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
		<script>
		$(function() {
			$( "#projects" ).accordion({
				collapsible: true,
				active: false,
				heightStyle: "content"
			});
		});
		</script>
		
		<link rel="stylesheet" href="resource/stylesheet/index.css">
		<link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/smoothness/jquery-ui.css">
	</head>

	<body>
		<header>
			<div class="top">
				<h1 id="header_name">Thong Nguyen</h1>
				<h4>Computer Science - Software Engineer</h4>
				<p >“The quality of a man's life is in direct proportion to his commitment to excellence,<br> regardless of his chosen field of endeavor.”<br>- Vince Lombardi -</p>
			</div>
			<div id='sign_in'>
				<form id='sign_in_form' name='sign_in' action='account.php' method='post'>
					<label>Hello, <?php echo $name;?></label>
					<input type='submit' name='signout' id='signout' value='Sign out'>
				</form>
			</div>
		</header>
		
		<nav>
			<ul>
				<li><a href="index.php">Home</a></li>
				<li><a href="projects.php" class="active">Programming Projects</a></li>
				<li><a href="artworks.php">Art Gallery</a></li>

			</ul>
		</nav>
		
		<main>
			<div id="main_text">
				<h1 align="center">Programming Projects</h1>
				<p id ="desc"> <b>** This is where I upload some personal programming projects I have been working on in my free time **</b></p> <hr>
				<p><b>Note:</b><br>Please feel free to share any feedback on my portfolio and my personal projects using the message box in the homepage. It would help me a lot in improving my website as well as improving the efficiency of my code. I am truly grateful for that. Also, feel free to ask if you need more information or clarification on anything. It would be great if this becomes a healthy educational environment where we can learn from each other to improve our own knowledge and skills. Thank you!</p>
				<hr>
				
			<div id="projects">
				<h3>Bank Account Manager (C++)</h3>
				<div><p>This application simulates how an online bank system works, which allows for the management of multiple bank accounts, including their usernames and passwords. Each bank account is given the options for withdrawing, depositing and checking account balance. An admin account is also available, which allows the user to access any other accounts using their usernames, modifying or removing them from the system: <br><br>
				Default Admin Account (you can change the username and password later): <br>
				<b>Username:</b> admin <br>
				<b>Password:</b>  admin <br>
				</p></div>
				<h3>The Last Spaceship (Video Game - Java)</h3>
				<div><p>This is a short but challenging shoot-em-up game with some survival element in it. The player only has a limited supply of bullets and health points, and to win the game, they have to destroy all the enemy ships while trying to survive with their limited supply. There is also a multi-phased boss fight to add up to the challenge. Enjoy!<br></p></div>
				<h3>Customer Relation Management (Android - Java)</h3>
				<div><p>*In Progress*</p></div>
				<h3>Get Host Name (Socket Programming - C)</h3>
				<div><p>*In Progress*</p></div>
				<h3>Mille Borne Card Game (OOP - Java)</h3>
				<div><p>*In Progress*</p></div>
				<h3>Reminder App (OOP - Java)</h3>
				<div><p>*In Progress*</p></div>
				<h3>C++ String Class (rebuild)</h3>
				<div><p>*In Progress*</p></div>
				<h3>Vector Object (C++)</h3>
				<div><p>*In Progress*</p></div>
				<h3>Word Game (Hangman) (C)</h3>
				<div><p>*In Progress*</p></div>
				<h3>Calculator (C)</h3>
				<div><p>*In Progress*</p></div>
				<h3>Change User Permission of A File (C)</h3>
				<div><p>*In Progress*</p></div>
				<h3>Print Contents of a File (C)</h3>
				<div><p>*In Progress*</p></div>
				<h3>Remove Directory Entry Using Inode (C)</h3>
				<div><p>*In Progress*</p></div>
				<h3>Shell Simulator (C)</h3>
				<div><p>*In Progress*</p></div>
				<h3>Timer Controller (C)</h3>
				<div><p>*In Progress*</p></div>
				<h3>Tic-Tac-Toe (Video Game - Java)</h3>
				<div><p>*In Progress*</p></div>
				<h3>Periodic Table Element Searcher (Python)</h3>
				<div><p>*In Progress*</p></div>
				</div>
			</div>
		</main>
		
		<footer>
			<p>&copy; 2019. Created by Thong Nguyen</p>
			<a href="#none"><img src="resource/img/logo00.png" alt=""></a>
			<a href="#none"><img src="resource/img/logo01.png" alt=""></a>
		</footer>
	</body>
</html>