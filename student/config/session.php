<?php

	session_start();
	
	require_once 'login-function.php';
	$session = new USER();
	

	
	if(!$session->is_loggedin())
	{
		// session no set redirects to login page
		$session->redirect('dashboard.php');
	}
	