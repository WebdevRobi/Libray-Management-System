<?php
include 'includes/session.php';
	extract($_POST);
	$data= array();
	$qry = $conn->query("SELECT * from students where student_id ='$student_id' ");
	if($qry->num_rows > 0){
		$emp = $qry->fetch_array();
		$save_log= $conn->query("INSERT INTO attendance (log_type,student_id) values('$type','".$emp['student_id']."')");
		$student_id = ucwords($emp['firstname'].' '.$emp['firstname']);
		if($type == 1){
			$log = ' time in this morning';
		}elseif($type == 2){
			$log = ' time out this morning';
		}elseif($type == 3){
			$log = ' time in this afternoon';
		}elseif($type == 4){
			$log = ' time out this afternoon';
		}
		if($save_log){
				$data['status'] = 1;
				$data['msg'] = $student_id .', your '.$log.' has been recorded. <br/>' ;
			}
	}else{
		$data['status'] = 2;
		$data['msg'] = 'Unknown Student ID Number';
	}
	echo json_encode($data);
	$conn->close();
