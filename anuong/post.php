<?php session_start(); ?>
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
	}
	
	#header{
		height: 150px;
		border-style: dashed;
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

	#profile{
        height: 58px;
        width: 144px;
		float: left;
		display: block;
        background:  url(images/profile.png) 0 0;	
	}
	
    #profile a:hover{
        background:  url(images/profile.png) 0 54px; 
    }

	#newpost{
        height: 50px;
        width: 144px;
		float: left;
		display: block;
        background:  url(images/post.png) 0 0;	
	}

    #newpost a:hover{
        background:  url(images/post.png) 0 54px; 
    }

    #navlist li{
        height: 54px;
        display: block;
    }
	
 	.navlist_a{
        height: 54px;
        display: block;		
	}
	
	#wc{
		text-align: right;	
	}

	#logo img:hover{
		transform: scale(1.2);	
	}
	
	#body{
		min-height: 500px;
		background-image: url(images/web.png);
		border-bottom-style: dashed;
		border-left-style: dashed;
		border-right-style: dashed;
	}
	
</style>
<?php 
include "get_name_and_address.php";
include "get_comment.php";
include "if_login.php";
include "error.php";
?>
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
            	<?php
					$s = 0;
					$log = if_log($s);
					if ($log == 0){
  						echo "<li id='signup'>"."<a class='navlist_a' href='reg.php'>"."</a></li>";
                		echo "<li id='signin'>"."<a class='navlist_a' href='login.php'>"."</a></li>";
					}
					else {
  						echo "<li id='profile'>"."<a class='navlist_a' href='profile.php'>"."</a></li>";
                		echo "<li id='newpost'>"."<a class='navlist_a' href='post.php'>"."</a></li>";
						echo "<br /><br /><br /><br /><div id='wc'>Welcome <b>".get_user($_SESSION['userid'])."</b><a href='logout.php'> (logout)<a/></div>" ;			
					}					
				?>
			</ul>
        </div>
  	</div>   
    <div id="body">
<div id="info">
        <br /><br /><br /><br /><center><b>VIẾT BÀI MỚI</b><br /><br /><br />
		<form action="post.php" method="post" enctype="multipart/form-data">
        <table>
        <tr>
			<td><label>Tên món ăn : </label></td>
            <td><input type="text" name="name" size="50" /></td>
        </tr>
		<tr>
        	<td><label>Địa chỉ : </label></td>
            <td><input type="text" name="address" size="50" /></td>
        </tr>
		<tr>
        	<td><label>Mô tả hình ảnh : </label></td>
            <td><input type="text" name="pic" size="50" /></td>
        </tr>    
		<tr>
        	<td><label>Nội dung bài viết : </label></td>
            <td><textarea name="content" rows="10" cols="51"></textarea></td>
        </tr>         
		<tr>
        	<td><label>Giá cả cho 1 người : </label></td>
            <td><input type="int" name="cost" size="50" /></td>
        </tr>                           
        <tr>
			<td><input type="submit" name="ok" value="post" /></td>
        </tr>
        </table>
        </center>
		</form>        
        </div>		
    </div>
</div>
</body>
</html>
<?php
if(isset($_POST['ok'])){
	$name=$address=$file=$content=$cost="";
	$name=$_POST['name'];
	$address=$_POST['address'];
	$pic=$_POST['pic'];
	$content=$_POST['content'];
	$cost=$_POST['cost'];
 	//if($name && $address && $pic && $content && $cost){
  		$conn=mysql_connect("localhost","root","12345") or die("can't connect this database");
		mysql_query("set names utf8");
  		mysql_select_db("anuong_db",$conn);
		$sql="insert into foods (id, name, address, pic, rating, content, cost) values ('', '{$name}', '{$address}', '{$pic}', '0', '{$content}', '{$cost}')";
		$query=mysql_query($sql);
		$msg = "Your wrote a new post";
		//header("Refresh:0; url=index.php");
		echo "<script type='text/javascript'>alert(\"$msg\");</script>";
 	//}
}
?>