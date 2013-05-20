<?php


include 'dao/SystemDAO.php';
	



 	$firstname = $_POST['firstname'];
	$lastname = $_POST['lastname'];
	$gender = $_POST['gender'];
	$age = $_POST['age'];
	$address = $_POST['address'];
	$number = $_POST['number'];

	$action = new SystemDAO();
	$action->addEnrollee($firstname,$lastname,$gender,$age,$address,$number);
?>
