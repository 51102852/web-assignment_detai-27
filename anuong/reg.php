<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>ANUONG.ESY.ES</title>
<style type="text/css">	
				
	.search_input{
		height: 35px;	
	}
	
	input[type="button"]{
    	width: 80px;
		height: 40px;
	}	
	
	ul{
		list-style-type: none;
		margin: 0;
		padding: 0;
		overflow: hidden;
	}
		
	li{
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
		min-height: 200px;
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
  				<li id="signup"><a href="reg.php"></a></li>
                <li id="signin"><a href="login.php"></a></li>
			</ul>
        </div>
  	</div>
    <div ads><img src="images/menufood.png" height="400" width="1100"/></div>    
    <div id="menu">
        <br /><div><center><b>ĐĂNG KÍ TÀI KHOẢN NGAY VÀ LUÔN NHÉ BẠN</b></center></div><br/>
        <center>
		<form action="reg.php" method="post">
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
        	<td><label>Re-password: </label></td>
            <td><input type="password" name="repassword" size="50" /></td>
        </tr>    
		<tr>
        	<td><label>Real name: </label></td>
            <td><input type="text" name="realname" size="50" /></td>
        </tr>          
		<tr>
        	<td><label>Email: </label></td>
            <td><input type="text" name="email" size="50" /></td>
        </tr>          
		<tr>
        	<td><label>Birthday: </label></td>
            <td><input type="date" name="birthday" size="50" /></td>
        </tr>   
		<tr>
        	<td><label>Avatar: </label></td>
            <td><input type="text" name="avatar" size="50" /></td>
        </tr>                  
        <tr>
			<td><input type="submit" name="ok" value="Dang Ki" /></td>
        </tr>
        </table>
		</form>
        <br />
        </center>
    </div>
</div>
</body>
</html>
<?php
include "error.php";
if(isset($_POST['ok'])){
	$u=$p1=$p2="";
 	if($_POST['username'] == NULL){
		echo no_name_reg();
 	}
 	else{
  		$u=$_POST['username'];
 	}
 	if($_POST['password'] == NULL){
		echo no_pass_reg();
 	}
 	else{
  		$p1=$_POST['password'];
 	}
 	if($_POST['repassword'] == NULL){
		echo no_pass_reg();
 	}
 	else{
  		$p2=$_POST['repassword'];
	} 
	if($p1 != $p2){
		echo not_match_reg();
 	}
 	else{
 		if($u && $p1 && $p2){
			$realname=$_POST['realname'];
			$email=$_POST['email'];
			$birthday=$_POST['birthday'];
			$avatar=$_POST['avatar'];
  			$conn=mysql_connect("localhost","root","12345") or die("can't connect this database");
			mysql_query("set names utf8");
  			mysql_select_db("anuong_db",$conn);
			$sql="select * from user where username='{$u}'";
			$query=mysql_query($sql);
			$array = array();
			while ($row = mysql_fetch_object($query)){
				array_push($array, $row->id);
			}
			if (count($array) == 0){
  				$sql="insert into user (username, password, realname, email, birthday, avatar) values ('{$u}', '{$p1}', '{$realname}', '{$email}', '{$birthday}', '{$avatar}')";
  				$query=mysql_query($sql);
  				if($query){
					$msg = "Your account {$u} has been created . Please login!";
					echo "<script type='text/javascript'>alert(\"$msg\");</script>";			
  				}
  				else{
					$msg = "An error has occurred!";
					echo "<script type='text/javascript'>alert(\"$msg\");</script>";
  				}
			}
			else{
				echo in_use();
			}
 		}
 	}
}
?>