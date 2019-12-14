<?php
	function validateInput($user_data) {
		$error = "";
		if (empty($user_data['first_name'])) {
			$error = "A first name is required for subscribing!";
		} else if (empty($user_data['last_name'])) {
			$error = "A last name is required for subscribing!";
		} else if ($user_data['email'] === FALSE) {
			$error = "Email is not valid!";
		} else if ($user_data['age'] === FALSE) {
			$error = "Age is not valid!";
		} else if ($user_data['age'] < 1) {
			$error = "Age must be a positive number.";
		} else if ($user_data['number'] === FALSE) {
			$error = "Number is not valid!";
		} else if ($user_data['number'] < 1 || $user_data['number'] > 100) {
			$error = "Your lucky number must be between 1 and 100.";
		}
		return $error;
	}

	$first_name = $_POST['first_name'];
	$last_name =  $_POST['last_name'];
	$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
	$age = filter_input(INPUT_POST, 'age', FILTER_VALIDATE_INT);
	$number = filter_input(INPUT_POST, 'number', FILTER_VALIDATE_INT);

	//Write to log file (log file created based on date)
	date_default_timezone_set('America/Los_Angeles');
	$date = date("Y_m_d");
	$file_name = "log_".$date.".csv";
	$fp = fopen($file_name, "a");
	$line = $first_name.",".$last_name.",".$_POST["email"].",".$_POST["age"].",".$_POST["number"]."\n";
	fprintf($fp, $line);
	fclose($fp);

	//Input validation
	$user_data = array(
		'first_name' => $first_name,
		'last_name' => $last_name,
		'email' => $email,
		'age' => $age,
		'number' => $number
	);

	$error = validateInput($user_data);
	if (!empty($error)) {
		$status = "** Error: ".$error." **";
	} else {
		$status = "** Successfully joined the friend list! **";

		//Calculation with the input data
		$random = rand(1,100);
		$diff = $user_data['number'] - $random;
		$status = $status."<br>Game Result: My lucky number is $random.<br>";
		if ($diff > 0) {
			$status = $status." Congratulation! your number is greater than mine by ".abs($diff).".";
		} else if ($diff < 0) {
			$status = $status." Unfortunately, your number is smaller than mine by ".abs($diff).".";
		} else {
			$status = $status." We have the same lucky number.";
		}
	}

	header("Location:index.php");
	exit();
?>