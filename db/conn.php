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

    $connection = new mysqli($server, $username, $password, $db);
    // $connection = new PDO("mysql:host=$server;dbname=hng-resume", "root", "");
	
}else{

    $connection = new PDO("mysql:host=localhost;dbname=hng-resume", "root", "");
    $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
		
	

?>

