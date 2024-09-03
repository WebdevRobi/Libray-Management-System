

<?php
	include 'includes/session.php';

	if(isset($_POST['add'])){
		$class_year = $_POST['class_year'];


        //creating year code id
		$letters = '';
		$numbers = '';
		foreach (range('A', 'Z') as $char) {
		    $letters .= $char;
		}
		for($i = 0; $i < 10; $i++){
			$numbers .= $i;
		}
		$year_code = substr(str_shuffle($letters), 0, 3).substr(str_shuffle($numbers), 0, 9);
		//
		
		$sql = "INSERT INTO class_year (year_code, class_year, created_on) VALUES ('$year_code', '$class_year', NOW())";
		if($conn->query($sql)){
			$_SESSION['success'] = 'Class Year added successfully';
		}
		else{
			$_SESSION['error'] = $conn->error;
		}
	}	
	else{
		$_SESSION['error'] = 'Fill up add form first';
	}

	header('location: class_year.php');

?>