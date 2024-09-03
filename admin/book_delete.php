<?php
	include 'includes/session.php';

	if(isset($_POST['delete'])){
		$id = $_POST['id'];
		$action = $_POST['Admin deleted books.'];

		$protocol = ((!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off') || $_SERVER['SERVER_PORT'] == 443) ? "https://" : "http://"; 
		$user_current_url = $protocol . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'] . $_SERVER['QUERY_STRING']; 
		// Get server related info 
$user_ip_address = $_SERVER['REMOTE_ADDR']; 

$referrer_url = !empty($_SERVER['HTTP_REFERER'])?$_SERVER['HTTP_REFERER']:'/'; 
$user_agent = $_SERVER['HTTP_USER_AGENT']; 

		$sql = "DELETE FROM books WHERE id = '$id'";
		if($conn->query($sql))
		$sql = "INSERT INTO activity_log (id, username, action, user_ip_address, date_time) VALUES ('$id', 'Administrator', 'Admin deleted books', '$user_ip_address', NOW())";
		if($conn->query($sql)){
			$_SESSION['success'] = 'Book deleted successfully';
		}
		else{
			$_SESSION['error'] = $conn->error;
		}
	}
	else{
		$_SESSION['error'] = 'Select item to delete first';
	}

	header('location: book.php');
	
?>