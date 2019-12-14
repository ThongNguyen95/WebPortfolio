<?php 
	session_start();
	if (isset($_SESSION['error'])) $error = $_SESSION['error'];
?>
<!doctype html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="description" content="My name is Thong Nguyen. This is my online-portfolio. Here you can have access to my Computer Science projects and personal artworks.">
		<meta name="keywords" content="portfolio, Thong Nguyen, Computer Science, Software Engineer">
		<meta name="author" content="Thong Nguyen">
		<title>Portfolio: Thong Nguyen - Home </title>
		<style>

	</style>

	</head>
	<body>
		<header>
			<div class="top">
				<h1 id="header_name">Thong Nguyen</h1>
				<h4>Computer Science - Software Engineer</h4>
				<p >“The quality of a man's life is in direct proportion to his commitment to excellence,<br> regardless of his chosen field of endeavor.”<br>- Vince Lombardi -</p>
			</div>
		</header>
		
		<nav>
			<ul>
				<li><a href="index.php" class="active">Home</a></li>
				<li><a href="projects.php">Programming Projects</a></li>
				<li><a href="artworks.php">Art Gallery</a></li>

			</ul>
		</nav>
		
		<main>
			<div id="main_text">
				<div id="signin_page">
					<h2>Sign in</h2>
					<form id="signin_page_form" name="signin_page_form" action="account.php" method="post">
						<p>Please sign in to gain access to my Programming Projects and Art Gallery pages.</p>
						<?php
							if (isset($error)) {echo "<p id='error'>$error</p>";}
						?>
						<input type="text" name="username" id="username" placeholder="Username"> <br>
						<input type="password" name="password" id="password" placeholder="Password"> <br>
						<input type="submit" name="signin" value="Sign in"> <br>
						<input type="submit" name="register_page" value="Register">
					</form>
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
<link rel="stylesheet" href="resource/stylesheet/index.css">