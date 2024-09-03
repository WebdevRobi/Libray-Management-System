<?php
	session_start();
	include 'includes/conn.php';
	session_destroy();

	$action = $_POST['Admin was logout on the system.'];
		$protocol = ((!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off') || $_SERVER['SERVER_PORT'] == 443) ? "https://" : "http://"; 
		$user_current_url = $protocol . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'] . $_SERVER['QUERY_STRING']; 
		// Get server related info 
$user_ip_address = $_SERVER['REMOTE_ADDR']; 

$referrer_url = !empty($_SERVER['HTTP_REFERER'])?$_SERVER['HTTP_REFERER']:'/'; 
$user_agent = $_SERVER['HTTP_USER_AGENT']; 

$sql = "INSERT INTO activity_log (id, username, action, user_ip_address, date_time) VALUES ('$id', 'Administrator', 'Admin was logout on the system', '$user_ip_address', NOW())";
		if($conn->query($sql))

	header('location: index.php');
?>