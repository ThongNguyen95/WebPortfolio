<?php
	session_start();
	$username = $_POST['username'];
	$password =  $_POST['password'];
	$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
	$address = $_POST['address'];

	if (isset($_POST['signin'])) {
		//Sign in
		$error = login($username, $password);
		if (!empty($error)) {
			$_SESSION['error'] = $error;
		 	header("Location:signin.php");
		}
	} else if (isset($_POST['signout'])) {
		//Sign out
		logout();
	} else if (isset($_POST['register'])) {
		//Register
		$error = register($username, $password, $email, $address);
		if (!empty($error)) {
			$_SESSION['error'] = $error;
		 	header("Location:register.php");
		}
	} else if (isset($_POST['register_page'])) {
		//Register Page
		unset($_SESSION['error']);
		header("Location:register.php");
	} else if (isset($_POST['cancel'])) {
		//Cancel
		header("Location:index.php");
		
	}
	exit();

	function login($username, $password) {
		//Validate input
		if (empty($username) || empty($password)) {
			return 'Username and password cannot be empty';
		}
		//Look into database
		try {
			$dsn = 'mysql:host=localhost;dbname=user_info';
			$dbUsername = 'thongnguyen';
			$dbPwd = 'miniproject4';
			$db = new PDO($dsn, $dbUsername, $dbPwd);
			$query = 
				'SELECT username, password '.
				'FROM login_table '.
				'WHERE username = :username';
			$statement = $db->prepare($query);
			$statement->bindValue(':username', $username);
			$statement->execute();
			$result = $statement->fetch();
			$statement->closeCursor();

			if ($result === null || $result === false) {
				return 'Username not found';
			}

			$true_pwd = $result['password'];

			if ($password !== $true_pwd) {
				return 'Incorrect password';
			}

			//Passed all validation
			$_SESSION['username'] = $username;
			unset($_SESSION['error']);
			header("Location:index.php");
			return '';

		} catch (PDOException $e) {
			return $e->getMessage();
		}
	}

	function logout() {	
		session_start();
		unset($_SESSION['username']);
		header("Location:index.php");
		return;
	}

	function register($username, $password, $email, $address) {
		//Input validation
		if (empty($username) || empty($password) ||  empty($address)) {
			return 'All the fields must be filled out.';
		}
		if ($email == FALSE) {
			return 'Invalid email.';
		}
		
		try {
			$dsn = 'mysql:host=localhost;dbname=user_info';
			$dbUsername = 'thongnguyen';
			$dbPwd = 'miniproject4';
			$db = new PDO($dsn, $dbUsername, $dbPwd);
			$query = 
				'SELECT username, password '.
				'FROM login_table '.
				'WHERE username = :username';
			$statement = $db->prepare($query);
			$statement->bindValue(':username', $username);
			$statement->execute();
			$result = $statement->fetch();
			$statement->closeCursor();
			if ($result !== null && $result !== false) {
				return 'Username already existed';
			}

			$query =
				'INSERT INTO login_table '.
					'(username, password, email, address) '.
				'VALUES '.
					'(:username, :password, :email, :address)';
			$statement = $db->prepare($query);
			$statement->bindValue(":username", $username);
			$statement->bindValue(":password", $password);
			$statement->bindValue(":email", $email);
			$statement->bindValue(":address", $address);
			$statement->execute();
			$statement->closeCursor();
			//Passed all validation
			$_SESSION['error'] = 'You successfully registered for your account.';
			header("Location:signin.php");
			return '';

		} catch (PDOException $e) {
			return $e->getMessage();
		}
	}
?>