<?php
	function no_name_reg(){
		$msg = "Please enter your username";
		header("Refresh:0; url=reg.php");
		echo "<script type='text/javascript'>alert(\"$msg\");</script>";		
	}
	function no_pass_reg(){
		$msg = "Please enter your password";
		header("Refresh:0; url=reg.php");
		echo "<script type='text/javascript'>alert(\"$msg\");</script>";		
	}	
	function not_match_reg(){
		$msg = "Retype password not match";
		header("Refresh:0; url=reg.php");
		echo "<script type='text/javascript'>alert(\"$msg\");</script>";		
	}	
	function no_name_log(){
		$msg = "Please enter your username";
		header("Refresh:0; url=login.php");
		echo "<script type='text/javascript'>alert(\"$msg\");</script>";		
	}
	function no_pass_log(){
		$msg = "Please enter your password";
		header("Refresh:0; url=login.php");
		echo "<script type='text/javascript'>alert(\"$msg\");</script>";		
	}	
	function not_match_log(){
		$msg = "Username or password is not correct, please try again";
		header("Refresh:0; url=login.php");
		echo "<script type='text/javascript'>alert(\"$msg\");</script>";		
	}
	function not_login(){
		$msg = "Please login to write new thread";
		header("Refresh:0; url=login.php");
		echo "<script type='text/javascript'>alert(\"$msg\");</script>";
	}
	function in_use(){
		$msg = "This username has been used, please take another";
		echo "<script type='text/javascript'>alert(\"$msg\");</script>";
	}	
	
	function check_if_log($s){
		if (!(isset($_SESSION['userid']) && $_SESSION['userid'] != '')) {
			return 0;
		}
		else return $_SESSION['userid'];
	}
?>