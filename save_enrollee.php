<?php

	include 'dao/PhoneBook2DAO.php';
	
	$id = $_POST['id'];
	$firstname = $_POST['firstname'];
	$lastname = $_POST['lastname'];
	$gender = $_POST['gender'];
	$age = $_POST['klase'];
	$address = $_POST['klase'];
	$number = $_POST['klase'];
	

	$action = new SystemDAO();
	$action->save($id, $firstname, $lastname, $gender, $age , $address, $number);

?>
