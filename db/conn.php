<?php 

$state = 'local';

if ($state === 'local') {
	define("SERVER_HOST", "localhost");
	define("SERVER_USERNAME", "root");
	define("SERVER_PASSWORD", "");
	define("DATABASE", "hng-resume");
	define("REMOTE_PATH", "https://hng-portfolio.test/");
	
}else{

	define("SERVER_HOST", "localhost");
	define("SERVER_USERNAME", "alphamin_mettacreator");
	define("SERVER_PASSWORD", "R5qPjiu9TdZUK52");
	define("DATABASE", "alphamin_bitcoin");
	define("REMOTE_PATH", "https://alphaminning.com/");

}
	
	
	$connection = mysqli_connect(SERVER_HOST, SERVER_USERNAME, SERVER_PASSWORD, DATABASE);
	
	if(!$connection){
		die("Connection Error: " . mysqli_connect_error());
	} 

?>