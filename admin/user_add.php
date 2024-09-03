

<?php
include 'includes/session.php';

if(isset($_POST['add'])) {


session_start();
$username = $_POST['username'];
$password = $_POST['password'];
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$user_type = $_POST['user_type'];
$created_on = $_POST['created_on'];

$hashedpassword = password_hash($password, PASSWORD_DEFAULT);



$sql = $conn->query("INSERT INTO admin (username, password, firstname, lastname, user_type, created_on)VALUES('{$username}', '{$hashedpassword}', '{$firstname}', '{$lastname}', '{$user_type}', NOW())");

if (password_verify($password, $hashedpassword)) {

	$_SESSION['success'] = 'User added successfully';
 header('Location: adduser.php'); 
 }



 }

 ?>