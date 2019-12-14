<?php
	session_start();
	$session = isset($_SESSION['username']);
	if ($session) $name = $_SESSION['username'];
?>
<?php 
	if (!isset($first_name)) $first_name = '';
	if (!isset($last_name)) $last_name = '';
	if (!isset($email)) $email = '';
	if (!isset($age)) $age = '';
	if (!isset($number)) $number = '';
?>


<!doctype html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="description" content="My name is Thong Nguyen. This is my online-portfolio. Here you can have access to my Computer Science projects and personal artworks.">
		<meta name="keywords" content="portfolio, Thong Nguyen, Computer Science, Software Engineer">
		<meta name="author" content="Thong Nguyen">
		<title>Portfolio: Thong Nguyen - Home </title>

	</head>
	<body>
		<header>
			<div class="top">
				<h1 id="header_name">Thong Nguyen</h1>
				<h4>Computer Science - Software Engineer</h4>
				<p >“The quality of a man's life is in direct proportion to his commitment to excellence,<br> regardless of his chosen field of endeavor.”<br>- Vince Lombardi -</p>
			</div>
			<div id='sign_in'>
				<form id='sign_in_form' action='account.php' name='sign_in' method='post'>
					
					<?php
					if (!$session) {
						echo "
							<input type='text' name='username' id='username' placeholder='Username'>
							<input type='password' name='password' id='password' placeholder='Password'>
							<input type='submit' name='signin' id='signin' value='Sign in'>
							<input type='submit' name='register_page' value='Register'>
						";
					} else {
						echo "
							<label>Hello, $name</label>
							<input type='submit' name='signout' id='signout' value='Sign out'>
						";
					}?>
				</form>
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
				<h2>Welcome to my Online Portfolio!</h2>
				<p>What can you find in this online portfolio?</p>

				<ul>
					<li>Here on this main page, you get to know a little more about me, my interest, my motivation as well as my contact information.</li>
					<li>In the Programming Projects section, you can get access to personal programming projects I have been working on in my free time. Some I came up on my own, other I continued to build up on my school projects. </li>
					<li>I also have an interest in drawing, painting and other types of digital arts. If you are interested, you can have a look at some of the artworks I created in the past.</li>
				</ul>
				
				<hr>
				<h2>About Me</h2>

				<p>Before we go any further, I want to share with you why I am so fascinated with Computer Science. </p>

				<p>I have a very deep interest in solving puzzles, complex mathematic problems or anything similar, and that is one of the main reasons I am in love with Computer Science. Only with Computer Science, I get to experience the excitement when we successfully put all the puzzle pieces together, seeing how they fit perfectly, how they interact with each other smoothly in a complex system. Only with Computer Science, I am given the freedom to imagine, to explore and to let my creativity go wild. Nothing can beat that feeling of achievement when all of your ideas, your creativity and imagination successfully materialize into a piece of software, an application that other people would get to use, get to experience. It is an endless sea of fun, an endless sea of possibilities. That's why I would never get bored of writing code. </p>
				<hr>
				<h2>Information</h2>
				<p><b>Email:</b> ducthong1995@gmail.com</p>
				<p><b>Phone:</b> (510) 604 - 7877</p>
				<p><b>Location:</b> San Lorenzo, California, U.S.</p>
				<p><b>Languages:</b> English, Vietnamese</p>
				<p><b>Degree:</b> B.S. in Computer Science</p>
				<p><b>Expected:</b> Dec 2019</p>
				<hr>
				<div id="friendlist">
					<h2>Join My Friend List!</h2>
					<form id="friendlist_form" name="friendlist_form" action="process_data.php" method="post">
						<p>Let's be friends! Let me know more about yourself:</p>
						<input type="text" name="first_name" id="first_name" placeholder="First Name"
						value="<?php echo htmlspecialchars($first_name) ?>"> <br>
						<input type="text" name="last_name" id="last_name" placeholder="Last Name"
						value="<?php echo htmlspecialchars($last_name) ?>"> <br>
						<input type="text" name="email" id="email" placeholder="Email"
						value="<?php echo htmlspecialchars($email) ?>"> <br>
						<input type="text" name="age" id="age" placeholder="Age"
						value="<?php echo htmlspecialchars($age) ?>"> <br>
						<p>Before you subscribe, let's play a quick game for fun! Pick a positive number (1-100) and I'll pick one too. Let's see who got the higher number.</p>
						<input type="text" name="number" id="number" placeholder="Enter Your Lucky Number Here (1-100)" value="<?php echo htmlspecialchars($number) ?>"> <br><br>
						
						<?php
							if (isset($status)) {
								if (!empty($error)) echo "<div id='error_message'>$status</div><br>";
								else echo "<div id='success_message'>$status</div><br>";
							}
						?>
						<input type="submit" id="subscribe" value="Join">
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