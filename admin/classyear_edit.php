<?php
	include 'includes/session.php';

	if(isset($_POST['edit'])){
		$id = $_POST['id'];
		$class_year = $_POST['class_year'];
	
		$sql = "UPDATE class_year SET class_year = '$class_year' WHERE id = '$id'";
		if($conn->query($sql)){
			$_SESSION['success'] = 'Class Year updated successfully';
		}
		else{
			$_SESSION['error'] = $conn->error;
		}
	}
	else{
		$_SESSION['error'] = 'Fill up edit form first';
	}

	header('location:class_year.php');

?>