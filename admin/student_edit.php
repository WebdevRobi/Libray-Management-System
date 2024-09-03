<?php
	include 'includes/session.php';

	if(isset($_POST['edit'])){
		$id = $_POST['id'];
		$firstname = $_POST['firstname'];
		$lastname = $_POST['lastname'];
		$gender = $_POST['gender'];
		$class_year = $_POST['class_year'];
		$course = $_POST['course'];

		$sql = "UPDATE students SET firstname = '$firstname', lastname = '$lastname', gender = '$gender', course_id = '$course' WHERE id = '$id'";
		if($conn->query($sql)){
			$_SESSION['success'] = 'Student updated successfully';
		}
		else{
			$_SESSION['error'] = $conn->error;
		}
	}
	else{
		$_SESSION['error'] = 'Fill up edit form first';
	}

	header('location:student.php');

?>