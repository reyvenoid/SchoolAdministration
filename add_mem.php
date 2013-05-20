<?php

 include 'dao/SystemDAO.php';
 
 	$Baptisimal_name = $_POST['Baptisimal_name'];
	$Codename = $_POST['Codename'];
	$Position = $_POST['Position'];
	$Number = $_POST['Number'];

	$action = new SystemDAO();
	$action->addMember(	$Baptisimal_name,$Codename,$Position,$Number);


