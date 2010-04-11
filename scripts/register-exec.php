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
	$name = clean($_POST['UserFullName']);
	$username = clean($_POST['UserName']);
	$password = clean($_POST['UserPassword']);
	$cpassword = clean($_POST['UserConfirmPassword']);
	$phone = clean($_POST['UserPhone']);
	$email = clean($_POST['UserEmail']);
	
	//Input Validations
	if($name == '') {
		$errmsg_arr[] = 'Name Missing';
		$errflag = true;
	}
	if($email == '') {
		$errmsg_arr[] = 'Email Address Missing';
		$errflag = true;
	}
	if($username == '') {
		$errmsg_arr[] = 'Username Missing';
		$errflag = true;
	}
	if($password == '') {
		$errmsg_arr[] = 'Password Missing';
		$errflag = true;
	}
	if($cpassword == '') {
		$errmsg_arr[] = 'Confirmation Password Missing';
		$errflag = true;
	}
	if($phone == '') {
		$errmsg_arr[] = 'Phone Missing';
		$errflag = true;
	}
	
	
	if( strcmp($password, $cpassword) != 0 ) {
		$errmsg_arr[] = 'Passwords do not match';
		$errflag = true;
	}
	
	//Check for duplicate login ID
	if($username != '') {
		$query = "SELECT * FROM users WHERE username='$username'";
		$result = mysql_query($query);
		if($result) {
			if(mysql_num_rows($result) > 0) {
				$errmsg_arr[] = 'Username already in use';
				$errflag = true;
			}
			@mysql_free_result($result);
		}
		else {
			die("Query failed");
		}
	}
	
	//If there are input validations, redirect back to the registration form
	if($errflag) {
		$_SESSION['ERRMSG_ARR'] = $errmsg_arr;
		session_write_close();
		header("location: ../register.php");
		exit();
	}
    
	//Create INSERT query
	$query = "INSERT INTO users(name, username, password, email, mobile) VALUES('$name','$username','".md5($_POST['UserPassword'])."','$email', '$phone')";
	$result = @mysql_query($query);
	
	//Check whether the query was successful or not
	if($result) {
		$_SESSION['STATUS'] = "Congratulations! Registration was Successful!";
		unset($_SESSION['ERRMSG_ARR']);
		session_write_close();
		header("location: ../register.php");
		exit();
	}else {
		die("Query failed");
	}
?>