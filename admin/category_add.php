<?php
	include 'includes/session.php';

	if(isset($_POST['add'])){
		$name = $_POST['name'];
		$action = $_POST['Admin added new Category.'];
		$protocol = ((!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off') || $_SERVER['SERVER_PORT'] == 443) ? "https://" : "http://"; 
		$user_current_url = $protocol . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'] . $_SERVER['QUERY_STRING']; 
		// Get server related info 
$user_ip_address = $_SERVER['REMOTE_ADDR']; 

$referrer_url = !empty($_SERVER['HTTP_REFERER'])?$_SERVER['HTTP_REFERER']:'/'; 
$user_agent = $_SERVER['HTTP_USER_AGENT']; 
		
		$sql = "INSERT INTO category (name) VALUES ('$name')";
		if($conn->query($sql))
		$sql = "INSERT INTO activity_log (id, username, action, user_ip_address, date_time) VALUES ('$id', 'Administrator', 'Admin added new category', '$user_ip_address', NOW())";
		if($conn->query($sql)){
			$_SESSION['success'] = 'Category added successfully';
		}
		else{
			$_SESSION['error'] = $conn->error;
		}
	}	
	else{
		$_SESSION['error'] = 'Fill up add form first';
	}

	header('location: category.php');

?>