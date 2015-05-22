<?php
	include "error.php";
	session_start();
	if (!(isset($_SESSION['userid']) && $_SESSION['userid'] != '')) {
		echo not_login();
	}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<style type="text/css">	
				
	.search_input {
		height: 35px;	
	}
	
	input[type="button"] {
    	width: 80px;
		height: 40px;
	}	
	
	ul {
		list-style-type: none;
		margin: 0;
		padding: 0;
		overflow: hidden;
	}
		
	li {
		float: left;
	}	

	body{
		background:url(images/bg-body.png);
	}

	#wrapper{
		margin: 0 auto;
		width: 1100px;
		border-style: dashed;
	}
	
	#header{
		height: 150px;
		border-bottom-style: dashed;
		background-image: url(images/menu_header.jpg);
	}
	
	#logo{
		float: left;
		width: 150px;
		height: 150px;
	}
	
	#search{
		margin-left: 40px;
		margin-top: 45px;
		float: left;
	}	
		
	#search_field{

	}
	
	#search_button{
		background: url(images/search_button.png);
		background-size: 80px 40px;
	}
	
	#register{
		margin-left: 30px;
		margin-top: 45px;
		height: 55px;
		width: 288px;
		float: left;
	}	
	
	#signup{
        height: 58px;
        width: 144px;
		float: left;
		display: block;
        background:  url(images/signup.png) 0 0;	
	}
	
    #signup a:hover{
        background:  url(images/signup.png) 0 58px; 
    }		

	#signin{
        height: 50px;
        width: 144px;
		float: left;
		display: block;
        background:  url(images/signin.png) 0 0;	
	}

    #signin a:hover{
        background:  url(images/signin.png) 0 58px; 
    }

    #navlist li, #navlist a {
        height: 54px;
        display: block;
    }

	#menu{
		height: 200px;
		background-color: #F0FFFF;
	}

	#logo img:hover{
		transform: scale(1.2);	
	}

</style>
</head>
<body>
<div id="wrapper">
   	<div id="header">
        <div id="logo">
        	<a href="index.php">
            <img src="images/logo.png" height="150" width="150"/>
            </a>
        </div>
        <div id="search">
            <ul>
               <li><input id="search_field" class="search_input" type="text" placeholder=" Tìm kiếm món ăn, địa điểm ... " style="font-size:18px" size="50"/></li>
                <input id="search_button" type="button" onclick="showUser()" />
            </ul>
        </div>
        <div id="register">
            <ul id="navlist">
  				<li id="signup"><a href="register.html"></a></li>
                <li id="signin"><a href="login.html"></a></li>
			</ul>
        </div>
  	</div>
    <div ads>
    	<img src="images/menufood.png" height="400" width="1100"/>
    </div>    
    <div id="menu">
        <br /><center><b>LOGIN</b></center><br />
        <center>
		<form action="login.php" method="post">
        <table>
        <tr>
			<td><label>Username: </label></td>
            <td><input type="text" name="username" size="50" /></td>
        </tr>
		<tr>
        	<td><label>Password: </label></td>
            <td><input type="password" name="password" size="50" /></td>
        </tr>   
        <tr>
			<td><input type="submit" name="ok" value="Dang Nhap" /></td>
        </tr>
        </table>
		</form>
        </center>
    </div>
</div>
</body>
</html>
<?php
include "error.php";
if(isset($_POST['ok'])){
$u=$p="";
	if($_POST['username'] == NULL){
  		echo no_name();
	}
 	else{
  		$u=$_POST['username'];
	}
 	if($_POST['password'] == NULL){
  		echo no_pass();
 	}
 	else{
  		$p=$_POST['password'];
 	}
 	if($u && $p){
  		$conn=mysql_connect("localhost","root","12345") or die("can't connect this database");
  		mysql_select_db("anuong_db",$conn);
  		$sql="select * from user where username='".$u."' and password='".$p."'";
  		$query=mysql_query($sql);
  		if(mysql_num_rows($query) == 0){
   			echo not_match_log();
  		}
  		else{
   			$row=mysql_fetch_array($query);
   			session_start();
   			$_SESSION['userid'] = $row['id'];
			$msg = "Welcome ".$u;
			echo "<script type='text/javascript'>alert(\"$msg\");</script>";
  		}
 	}
}
?>