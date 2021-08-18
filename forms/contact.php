<?php


// if(isset($_POST['sec'])){
              
//     $name = $_POST['name'];
//     $email = $_POST['email'];
//     $subject = $_POST['subject'];
//     $message = $_POST['message'];

//     $name = htmlspecialchars($name, ENT_QUOTES);
//     $email = htmlspecialchars($email, ENT_QUOTES);
//     $subject = htmlspecialchars($subject, ENT_QUOTES);
//     $message = htmlspecialchars($message, ENT_QUOTES);
    
//     $query = "INSERT INTO `responses` (``,`name`, `email`, `subject`, `message`) 
//       VALUES (\"$name\", \"$email\", \"$subject\", \"$message\", \"$date\")";
    
//       if(mysqli_query($connection,$query)){
        
//          echo '<script> alert("alright") </script>';
//       }else{
//         mysqli_error($connection);
//       }
      
// }else{
//   // header("location: " . REMOTE_PATH ."index.php");
// }


if(isset($_POST["name"]))
{
	sleep(5);
	$connect = new PDO("mysql:host=localhost; dbname=hng-resume", "root", "");

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
    
		$statement = $connect->prepare($query);

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
