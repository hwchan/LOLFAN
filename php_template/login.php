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
	
	//Sanitize the REQUEST values - parameters may come from GET or POST
	$email = clean($_REQUEST['email']);
	$password = clean($_REQUEST['password1']);
	$password2 = clean($_REQUEST['password2']);
	
	//Create query (UNHASHED FOR DEBUG PURPOSES)
	$qry="SELECT * FROM users WHERE email='$email' AND password='".md5($password)."'";
	$result=mysql_query($qry);
	
	//Check whether the query was successful or not
	if($result) {
		if(mysql_num_rows($result) == 1) {
			//Login Successful
			session_regenerate_id();
			$member = mysql_fetch_assoc($result);
			$_SESSION['SESS_USERS_ID'] = $member['id'];
			$_SESSION['SESS_USERS_EMAIL'] = $member['email'];
			session_write_close();
			header("location: ".HOMEURL);
			exit();
		}else {
			//Login failed
			$errmsg_arr[] = 'Incorrect email/password';
			$_SESSION['ERRMSG_ARR'] = $errmsg_arr;
			header("location: ".HOMEURL);
			exit();
		}
	}else {
		die("Query failed");
	}
?>
