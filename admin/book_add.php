<?php
	include 'includes/session.php';

	if(isset($_POST['add'])){
		$isbn = $_POST['isbn'];
		$title = $_POST['title'];
		$category = $_POST['category'];
		$author = $_POST['author'];
		$publisher = $_POST['publisher'];
		$pub_date = $_POST['pub_date'];
		$quantity = $_POST['quantity'];
		$action = $_POST['Admin added new books'].$title;
		$protocol = ((!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off') || $_SERVER['SERVER_PORT'] == 443) ? "https://" : "http://"; 
		$user_current_url = $protocol . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'] . $_SERVER['QUERY_STRING']; 
		// Get server related info 
		$user_ip_address = $_SERVER['REMOTE_ADDR']; 

		$referrer_url = !empty($_SERVER['HTTP_REFERER'])?$_SERVER['HTTP_REFERER']:'/'; 
		$user_agent = $_SERVER['HTTP_USER_AGENT']; 
		$machineName = gethostname(); 

		$sql = "INSERT INTO books (isbn, category_id, title, author, publisher, publish_date, quantity) VALUES ('$isbn', '$category', '$title', '$author', '$publisher', '$pub_date', '$quantity')";
		if($conn->query($sql))
		$sql = "INSERT INTO activity_log (id, username, action, user_ip_address, date_time) VALUES ('$id', 'Administrator', 'Admin added new book $title', '$user_ip_address', NOW())";
		if($conn->query($sql))
		
		
		{
			$_SESSION['success'] = 'Book added successfully';
			$_SESSION['action'] = 'Admin added new book'.$title;
		}
		
		else{
			$_SESSION['error'] = $conn->error;
		}
	}	
	else{
		$_SESSION['error'] = 'Fill up add form first';
	}
	
	header('location: book.php');

?>