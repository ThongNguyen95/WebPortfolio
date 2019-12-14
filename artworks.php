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
		<meta name="keywords" content="portfolio, Thong Nguyen, artwork, gallery">
		<meta name="author" content="Thong Nguyen">
		<title>Portfolio: Thong Nguyen - Art Gallery</title>
	</head>
	<script>
		var displayDesc = function(x) {
			(x.nextElementSibling).hidden = false;
		}
		var hideDesc = function(x) {
			(x.nextElementSibling).hidden = true;
		}
	</script>
	
	<body>
		<header>
			<div class="top">
				<h1 id="header_name">Thong Nguyen</h1>
				<h4>Computer Science - Software Engineer</h4>
				<p >“The quality of a man's life is in direct proportion to his commitment to excellence,<br> regardless of his chosen field of endeavor.”<br>- Vince Lombardi -</p>
			</div>
			<div id='sign_in'>
				<form id='sign_in_form' name='sign_in' method='post' action='account.php'>
					<label>Hello, <?php echo $name;?></label>
					<input type='submit' name='signout' id='signout' value='Sign out'>
				</form>
			</div>
		</header>
		
		<nav>
			<ul>
				<li><a href="index.php">Home</a></li>
				<li><a href="projects.php">Programming Projects</a></li>
				<li><a href="artworks.php" class="active">Art Gallery</a></li>

			</ul>
		</nav>
		
		<main>
			<div id="main_text">
				<h1>Art Gallery</h1>
				<p id ="desc"> <b>** This is where I upload personal artworks I've created as a hobby. I even used some of them as materials for my programming projects like game design, drawing app, etc.**</b></p>
				<hr>
				<div class = "artwork">
					<img src="resource/img/img00.jpg" alt="Collage: Fragments of Me" onMouseOver="displayDesc(this)" onMouseOut="hideDesc(this)">
					<div class="art_desc" hidden>
						<p><b>Name:</b>&nbsp;Fragment of Me</p>
						<p><b>Year:</b>&nbsp;2018</p>
						<p><b>Tool:</b>&nbsp;Adobe Illustrator</p>
					</div>
				</div>
				<div class = "artwork">	
					<img src="resource/img/img01.png" alt="Man of Fire"   onMouseOver="displayDesc(this)" onMouseOut="hideDesc(this)">
					<div class="art_desc" hidden>
						<p><b>Name:</b>&nbsp;Heart of Fire</p>
						<p><b>Year:</b>&nbsp;2017</p>
						<p><b>Tool:</b>&nbsp;Adobe Photoshop</p>
					</div>
				</div>
				<div class = "artwork">	
					<img src="resource/img/img02.png" alt="Girl with a Katana" onMouseOver="displayDesc(this)" onMouseOut="hideDesc(this)">
					<div class="art_desc" hidden>
						<p><b>Name:</b>&nbsp;Crimson Blade</p>
						<p><b>Year:</b>&nbsp;2017</p>
						<p><b>Tool:</b>&nbsp;Paint Tool Sai</p>
					</div>
				</div>
				
				<div class = "artwork">	
					<img src="resource/img/img03.jpg" alt="Soi Fon" onMouseOver="displayDesc(this)" onMouseOut="hideDesc(this)">
					<div class="art_desc" hidden>
						<p><b>Name:</b>&nbsp;Soi Fon (Bleach)</p>
						<p><b>Year:</b>&nbsp;2016</p>
						<p><b>Tool:</b>&nbsp;Pencil</p>
					</div>
				</div>
				
				<div class = "artwork">	
					<img src="resource/img/img04.jpg" alt="Monkey D. Luffy" onMouseOver="displayDesc(this)" onMouseOut="hideDesc(this)">
					<div class="art_desc" hidden>
						<p><b>Name:</b>&nbsp;Monkey D. Luffy</p>
						<p><b>Year:</b>&nbsp;2016</p>
						<p><b>Tool:</b>&nbsp;Pencil</p>
					</div>
				</div>
				<div class = "artwork">	
					<img src="resource/img/img05.jpg" alt="Organization_1" onMouseOver="displayDesc(this)" onMouseOut="hideDesc(this)">
					<div class="art_desc" hidden>
						<p><b>Name:</b>&nbsp;Perspective #1</p>
						<p><b>Year:</b>&nbsp;2018</p>
						<p><b>Tool:</b>&nbsp;Adobe Illustrator</p>
					</div>
				</div>
				<div class = "artwork">	
					<img src="resource/img/img06.jpg" alt="Organization_2" onMouseOver="displayDesc(this)" onMouseOut="hideDesc(this)">
					<div class="art_desc" hidden>
						<p><b>Name:</b>&nbsp;Perspective #2</p>
						<p><b>Year:</b>&nbsp;2018</p>
						<p><b>Tool:</b>&nbsp;Adobe Illustrator</p>
					</div>
				</div>
			</div>
		</main>
		
		<footer>
			<p>&copy; 2019. Created by Thong Nguyen</p>
			<a href="#none"><img src="resource/img/logo00.png" alt="LinkedIn logo"></a>
			<a href="#none"><img src="resource/img/logo01.png" alt="GitHub logo"></a>
		</footer>
	</body>
</html>
<link rel="stylesheet" href="resource/stylesheet/index.css">
<link rel="stylesheet" href="resource/stylesheet/artworks.css">