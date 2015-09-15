<?php
	require_once('php_template/config.php');
	
	//Connect to mysql server
	$link = mysql_connect(DB_HOST, DB_USER, DB_PASSWORD);
	if(!$link) {
		die('Failed to connect to server: ' . mysql_error());
	}
		
	//Select database
	$db = mysql_select_db(DB_DATABASE);
	if(!$db) {
		die("Unable to select database");
	}
	
	// Delete row
	$qry ="DELETE FROM users WHERE id = ".$_SESSION['SESS_USERS_ID'];
	mysql_query($qry);
	
	// Sign out
	unset($_SESSION);
	session_destroy();
	
	// Show alert message
	session_start();
	$errmsg_arr = array();
	$errmsg_arr[] = 'Unregistered';
	$_SESSION['ERRMSG_ARR'] = $errmsg_arr;
	session_write_close();
	header("location: index.php");
	exit();
?>