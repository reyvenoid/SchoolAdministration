<?php
	include 'dao/SystemDAO.php';

	$firstname = $_POST['firstname'];
	
	$action = new SystemDAO();
	
	$action->searchName($firstname);
