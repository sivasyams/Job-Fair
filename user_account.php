<?php
	session_start();
	require_once('db_connect.php');
	require_once('query.php');
	$verify=fetch_by_id(($_SESSION['USER_ID']),$con);

	if($_SESSION['LOGIN']==1  && $_SESSION['PASSWORD']==$verify)	
	{
		
		include("user_account_view.php");
		unset($_SESSION['LOGIN']);
		unset($_SESSION['PASSWORD']);
		//user's page
	}
	else
	{
		$_SESSION['MESSAGE']="LOGIN FAILED";
		header("location:index.php");
	}	





?>