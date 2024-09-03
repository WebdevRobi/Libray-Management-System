<?php
	session_start();
	include 'includes/conn.php';

	if(isset($_POST['login'])){
		$username = $_POST['username'];
		$password = $_POST['password'];
		$action = $_POST['Admin login was to the system.'];
		$protocol = ((!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off') || $_SERVER['SERVER_PORT'] == 443) ? "https://" : "http://"; 
		$user_current_url = $protocol . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'] . $_SERVER['QUERY_STRING']; 
		// Get server related info 
$user_ip_address = $_SERVER['REMOTE_ADDR']; 

$referrer_url = !empty($_SERVER['HTTP_REFERER'])?$_SERVER['HTTP_REFERER']:'/'; 
$user_agent = $_SERVER['HTTP_USER_AGENT']; 

		
		

		$sql = "SELECT * FROM admin WHERE username = '$username'";
		$query = $conn->query($sql);
		$sql = "INSERT INTO activity_log (id, username, action, user_ip_address, date_time) VALUES ('$id', 'Administrator', 'Admin was login to the system', '$user_ip_address', NOW())";
		if($conn->query($sql))

		if($query->num_rows < 1){
			$_SESSION['error'] = 'Cannot find account with the username';
		}
		else{
			$row = $query->fetch_assoc();
			if(password_verify($password, $row['password'])){
				$_SESSION['admin'] = $row['id'];
			}
			else{
				$_SESSION['error'] = 'Incorrect password';
			}
		}
		
	}
	else{
		$_SESSION['error'] = 'Input admin credentials first';
	}

	header('location: index.php');

?>