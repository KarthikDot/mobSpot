<?php
	//Start session
	session_start();
	
	//Include database connection details
	require_once('../config.php');
	
	//Array to store validation errors
	$errmsg_arr = array();
	
	//Validation error flag
	$errflag = false;
	
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
	$username = clean($_POST['LoginUsername']);
	$password = clean($_POST['LoginPassword']);
	
	//Input Validations
	if($username == '') {
		$errmsg_arr[] = 'Username Missing';
		$errflag = true;
	}
	if($password == '') {
		$errmsg_arr[] = 'Password Missing';
		$errflag = true;
	}
	
	//If there are input validations, redirect back to the login form
	if($errflag) {
		$_SESSION['ERRMSG_ARR'] = $errmsg_arr;
		session_write_close();
		header("location: ../index.php");
		exit();
	}
	
	//Create query
	$query="SELECT * FROM users WHERE username='$username' AND password='".md5($_POST['LoginPassword'])."'";
	$result=mysql_query($query);
	//Check whether the query was successful or not
	if($result) {
		if(mysql_num_rows($result) == 1) {
			//Login Successful
			session_regenerate_id();
			$member = mysql_fetch_assoc($result);
			
			//Setting the Session Variables
			$_SESSION['SESS_MEMBER_ID'] = $member['id'];
			$_SESSION['SESS_USERNAME'] = $member['username'];
			$_SESSION['SESS_NAME'] = $member['name'];
			
			//Reset all Error Messages
			unset($_SESSION['ERRMSG_ARR']);
			
			session_write_close();
			header("location: ../home.php");
			exit();
		}else {
			//Login failed
			$_SESSION['STATUS']= "Incorrect Username/Password! Please Try Again...";
			unset($_SESSION['ERRMSG_ARR']);
			session_write_close();
			header("location: ../index.php");
			exit();
		}
	}else {
		die("Query failed");
	}
?>