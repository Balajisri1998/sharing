<?php
	session_start();
	ini_set('display_errors', 1);
	/*
		Description : Redirect to the controller
		Authour : Balaji P
		created Date : 29-07-2019
		Updated Date : 29-07-2019
	*/

	include_once 'controller/controller.php';
	/* Create object for controller */
	$control = new controller();
	$control->invoke();
	
?>