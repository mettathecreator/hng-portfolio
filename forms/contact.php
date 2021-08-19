<?php

$state = 'production';

if ($state === 'production') {
    // $connectionStringHerokuEnv = 'mysql://ba8a0ffe44363d:330cb2d3@us-cdbr-east-04.cleardb.com/heroku_e00f674c3f63fbb?reconnect=true';
    // $parsed = parse_url($connectionStringHerokuEnv);
    // $dbname = ltrim($parsed['path']. '/'); 
    // $connection = new PDO("{$parsed['scheme']}:host={$parsed};$dbname={$dbname};charset=utf8mb4", $parsed['user'], $parsed['pass'], [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);

    $url = parse_url("mysql://ba8a0ffe44363d:330cb2d3@us-cdbr-east-04.cleardb.com/heroku_e00f674c3f63fbb?reconnect=true");

    $server = $url["host"];
    $username = $url["user"];
    $password = $url["pass"];
    $db = substr($url["path"], 1);

    // $connection = new mysqli($server, $username, $password, $db);
    $connection = new PDO("mysql:host=$server;dbname=$db", "$username", "$password");
	
}else{

    $connection = new PDO("mysql:host=localhost;dbname=hng-resume", "root", "");
    $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}



if(isset($_POST["name"]))
{
	sleep(5);
	// $connect = new PDO("mysql:host=localhost; dbname=hng-resume", "root", "");

	$success = '';

  $date = date('Y-m-d');
	$name = $_POST["name"];

	$email = $_POST["email"];

	$subject = $_POST["subject"];

	$message = $_POST["message"];


	$name_error = '';
	$email_error = '';
	$subject_error = '';
	$message_error = '';

	if(empty($name))
	{
		$name_error = 'Name is Required';
	}
	else
	{
		if(!preg_match("/^[a-zA-Z-' ]*$/", $name))
		{
			$name_error = 'Only Letters and White Space Allowed';
		}
	}

	if(empty($email))
	{
		$email_error = 'Email is Required';
	}
	else
	{
		if(!filter_var($email, FILTER_VALIDATE_EMAIL))
		{
			$email_error = 'EMail is invalid';
		}
	}

	if(empty($subject))
	{
		$subject_error = 'subject is Required';
	}

	if(empty($message))
	{
		$message_error = 'message is Required ';
	}



	if($name_error == '' && $email_error == '' && $subject_error == '' && $message_error == '')
	{
		//put insert data code here 

		$data = array(
			':name'			=>	$name,
			':email'		=>	$email,
			':subject'		=>	$subject,
			':message'		=>	$message,
			':date'		=>	$date
		);

		$query = "
		INSERT INTO responses 
		(name, subject, message, email, date) 
		VALUES (:name, :subject, :message, :email, :date)
		";
    
		$statement = $connection->prepare($query);

		$statement->execute($data);

		$success = '<div class="alert alert-success">Your message has been recieved! Thank you for reaching out.</div>';
	}

	$output = array(
		'success'		=>	$success,
		'name_error'	=>	$name_error,
		'email_error'	=>	$email_error,
		'subject_error'	=>	$subject_error,
		'message_error'	=>	$message_error,
	);

	echo json_encode($output);
	
}
?>
