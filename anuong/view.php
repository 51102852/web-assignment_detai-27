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
	}
	div.img{
    	margin: 5px;
    	padding: 5px;
    	height: auto;
    	width: auto;
    	float: left;
    	text-align: center;
		background-color: #FFFFFF;
		border-top-left-radius: 1em;
		border-top-right-radius: 1em;
		border-bottom-left-radius: 1em;
		border-bottom-right-radius: 1em;	
		border: 6px solid #8FBC8F;
	}	
	
	div.img:hover{
		border: 6px solid #00FFFF;
		transform: scale(1.3);
	}

	div.img img{
    	display: inline;
    	margin: 5px;
	}

	div.desc{
  		text-align: center;
  		font-weight: bold;
		font-style: inherit;
  		width: 220px;
  		margin: 5px;
	}
	
	div.add{
		text-align: center;
		font-weight: normal;
		font-style: italic;
		width: 220px;
		margin: 5px;
	}
	
</style>
<?php 
include "if_login.php";
include "get_name_and_address.php";
include "error.php";
include "get_image.php";
include "count_id.php";
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
	<br /><br /><br /><br />
	<div id="body">
		<div id="food">
			<?php
				for ($i=0; $i < count_fid(); $i++){
					$p=re_pic($i);
					//$n=get_name($i);
					//$a=get_adđ($i); 
					echo "<div class='img'>";
					echo "<a href='foods.php?id=$i'>"."<img src=".$p." width='227' height='140'></a>";
					//echo "<div class='desc'>".$n."</div>";
					//echo "<div class='add'>".$a."</div>";
					echo "</div>";
				}
			?>
                                                                                           
        </div>	
	</div>
	<br /><br /><br /><br />
</div>
</body>
</html>	