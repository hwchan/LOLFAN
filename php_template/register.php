<?php
	//Include database connection details
	require_once('config.php');
	
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
	
	//Function to sanitize values received from the form. Prevents SQL injection
	function clean($str) {
		$str = @trim($str);
		if(get_magic_quotes_gpc()) {
			$str = stripslashes($str);
		}
		return mysql_real_escape_string($str);
	}
	
	//Sanitize the POST values
	$email = clean($_POST['email']);
	$password1 = clean($_POST['password1']);
	
	//Check for duplicate email ID
	if($email != '') {
		$qry = "SELECT * FROM users WHERE email='$email'";
		$result = mysql_query($qry);
		if($result) {
			if(mysql_num_rows($result) > 0) {
				$errmsg_arr[] = 'Email already in use';
				$errflag = true;
			}
			@mysql_free_result($result);
		}
		else {
			die("Query failed");
		}
	}
	
	//If there are input validations, redirect back to the index
	if($errflag) {
		$_SESSION['ERRMSG_ARR'] = $errmsg_arr;
		session_write_close();
		header("location: ".HOMEURL);
		exit();
	}

	//Create INSERT query
	$qry = "INSERT INTO users(email, password) VALUES('$email','".md5($_POST['password1'])."')";
	$result = @mysql_query($qry);
	
	//Check whether the query was successful or not
	if($result) {
		// Don't know why this doesn't work anymore:
		//header("location: login.php?email=".$email."&password1=".$password1);
		// So let's just force the log in
		$_SESSION['SESS_USERS_EMAIL'] = $email;
		$_SESSION['SESS_USERS_ID'] = mysql_insert_id();
		header("location: login.php?email=".$email."&password1=".$password1);
		exit();
	}else {
		die("Query failed");
	}
?>
