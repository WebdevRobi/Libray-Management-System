<?php
	include 'includes/session.php';

	if(isset($_POST['add'])){
		$student = $_POST['student'];
		$date_created = $_POST['date_created'];
		$action = $_POST['Admin added New Borrowed Books.'];
		$protocol = ((!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off') || $_SERVER['SERVER_PORT'] == 443) ? "https://" : "http://"; 
		$user_current_url = $protocol . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'] . $_SERVER['QUERY_STRING']; 
		// Get server related info 
		$user_ip_address = $_SERVER['REMOTE_ADDR']; 

		$referrer_url = !empty($_SERVER['HTTP_REFERER'])?$_SERVER['HTTP_REFERER']:'/'; 
		$user_agent = $_SERVER['HTTP_USER_AGENT']; 


		$sql = "SELECT * FROM students WHERE student_id = '$student'";
		$query = $conn->query($sql);
		if($query->num_rows < 1){
			if(!isset($_SESSION['error'])){
				$_SESSION['error'] = array();
			}
			$_SESSION['error'][] = 'Student not found';
		}
		else{
			$row = $query->fetch_assoc();
			$student_id = $row['id'];

			$added = 0;
			foreach($_POST['isbn'] as $isbn){
				if(!empty($isbn)){
					$sql = "SELECT * FROM books WHERE isbn = '$isbn' AND status != 1";
					$query = $conn->query($sql);
					if($query->num_rows > 0){
						$brow = $query->fetch_assoc();
						$bid = $brow['id'];

						$sql = "INSERT INTO borrow (student_id, book_id, date_borrow) VALUES ('$student_id', '$bid', NOW())";
						if($conn->query($sql))
							$update= "UPDATE books SET quantity = quantity - 1 WHERE id='$bid'";
							$result=mysqli_query($conn,$update);
						$sql = "INSERT INTO activity_log (id, username, action, user_ip_address, date_time) VALUES ('$id', 'Administrator', 'Admin added New Borrowed Book $title', '$user_ip_address', NOW())";
						if($conn->query($sql))
						
						{
							$added++;
							$sql = "UPDATE books SET status = 1 WHERE id = '$bid'";
							$conn->query($sql);
						}
						else{
							if(!isset($_SESSION['error'])){
								$_SESSION['error'] = array();
							}
							$_SESSION['error'][] = $conn->error;
						}

					}
					else{
						if(!isset($_SESSION['error'])){
							$_SESSION['error'] = array();
						}
						$_SESSION['error'][] = 'Book with ISBN - '.$isbn.' unavailable';
					}
		
				}
			}

			if($added > 0){
				$book = ($added == 1) ? 'Book' : 'Books';
				$_SESSION['success'] = $added.' '.$book.' successfully borrowed';
				$_SESSION['action'] = 'Admin added new borrowed book'.$title;
			}

		}
	}	
	else{
		$_SESSION['error'] = 'Fill up add form first';
	}

	header('location: borrow.php');

?>