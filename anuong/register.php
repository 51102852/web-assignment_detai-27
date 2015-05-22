<?php
if(isset($_POST['ok'])){
	$u=$p1=$p2="";
 	if($_POST['username'] == NULL){
  		echo "Please enter your username<br />";
 	}
 	else{
  		$u=$_POST['username'];
 	}
 	if($_POST['password'] == NULL){
		echo "Please enter your password<br />";
 	}
 	else{
  		$p1=$_POST['password'];
 	}
 	if($_POST['repassword'] == NULL){
		echo "Please enter your password<br />";
 	}
 	else{
  		$p2=$_POST['password'];
	} 
	if($p1 != $p2){
		echo "Not Match<br />";
 	}
 	else{
 		if($u && $p1 && $p2){
  			$conn=mysql_connect("localhost","root","12345") or die("can't connect this database");
  			mysql_select_db("anuong_db",$conn);
  			$sql="insert into user (username, password, level) values ('{$u}', '{$p1}', '1')";
  			$query=mysql_query($sql);
  		if($query){
   			echo "Your account {$u} has been created. <a href='login.php'>Click here to login</a>";
  		}
  		else{
			echo "error has occurred";
  		}
 	}
 }
}
?>