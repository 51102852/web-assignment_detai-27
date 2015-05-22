<?php session_start(); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<meta name="viewport" content="user-scalable = yes">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>ANUONG.ESY.ES</title>
<style type="text/css">	
	input[type="text"] {
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
		background:url(images/bg-body.png)
	}

	#wrapper{
		margin: 0 auto;
		width: 1100px;
	}
	
	#header{
		height: 150px;
		background-image: url(images/menu_header.jpg);
		border-style: dashed;		
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
	
	#flash{

	}

	#food{

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
	
	#logo img:hover{
		transform: scale(1.2);	
	}
	
	#footer{
		float: right;
	}
	
	#diadiem{
		height: 300px;
	}
	
	#diadiem img{
    	margin: 5px;
    	padding: 5px;
    	float: left;
    	text-align: center;
		background-color: #FFFFFF;
		border: 6px solid #8FBC8F;		
	}
	
	#diadiem img:hover{
		transform: scale(1.2);
		border: 6px solid #00FFFF;
	}
	
	#name{
        height: 30px;
        width: 200px;
		float: right;
		display: block;
	}
	
</style>
<?php 
include "if_login.php";
include "get_name_and_address.php";
include "error.php";
include "get_image.php";
?>
</head>
<body>
	<div id="wrapper">
    	<div id="header">
        	<div id="logo">
            	<a href="index.php">
            	<img id="w_logo" src="images/logo.png" height="150" width="150"/>
                </a>
            </div>
            <div id="search">
            	<ul>
                <li><input id="search_field" type="text" placeholder=" Tìm kiếm món ăn, địa điểm ... " style="font-size:18px" size="50"/></li>
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
        
        <div id="flash"><img id="w_flash" src="images/flash.gif"/></div>

		<div id="theomonan">
        	<h2>
        		<center>TOP MÓN NGON TRONG NGÀY</center>
            </h2>
        </div>

		<div id="food">
        	<div id="brotzeit" class="img">
             	<a target="_blank" href="foods.php?id=0"><img src="<?php echo re_pic(0); ?>" alt="Klematis" width="227" height="140"></a>
  				<div class="desc"><?php echo get_name(0)?></div>
                <div class="add"><?php echo get_add(0)?></div>
            </div>
        	<div id="logres" class="img">
             	<a target="_blank" href="foods.php?id=1"><img src="<?php echo re_pic(1); ?>" alt="Klematis" width="227" height="140"></a>
  				<div class="desc"><?php echo get_name(1)?></div>
                <div class="add"><?php echo get_add(1)?></div>
            </div>      
        	<div id="bbq" class="img">
             	<a target="_blank" href="foods.php?id=2"><img src="<?php echo re_pic(2); ?>" alt="Klematis" width="227" height="140"></a>
  				<div class="desc"><?php echo get_name(2)?></div>
                <div class="add"><?php echo get_add(2)?></div>
            </div>              
         	<div id="hana" class="img">
             	<a target="_blank" href="foods.php?id=3"><img src="<?php echo re_pic(3); ?>" alt="Klematis" width="227" height="140"></a>
  				<div class="desc"><?php echo get_name(3)?></div>
                <div class="add"><?php echo get_add(3)?></div>
            </div>   
         	<div id="laude" class="img">
             	<a target="_blank" href="foods.php?id=4"><img src="<?php echo re_pic(4); ?>" alt="Klematis" width="227" height="140"></a>
  				<div class="desc"><?php echo get_name(4)?></div>
                <div class="add"><?php echo get_add(4)?></div>
            </div>              
         	<div id="chimcut" class="img">
             	<a target="_blank" href="foods.php?id=5"><img src="<?php echo re_pic(5); ?>" alt="Klematis" width="227" height="140"></a>
  				<div class="desc"><?php echo get_name(5)?></div>
                <div class="add"><?php echo get_add(5)?></div>
            </div>     
         	<div id="pho" class="img">
             	<a target="_blank" href="foods.php?id=6"><img src="<?php echo re_pic(6); ?>" alt="Klematis" width="227" height="140"></a>
  				<div class="desc"><?php echo get_name(6)?></div>
                <div class="add"><?php echo get_add(6)?></div>
            </div>  
         	<div id="kacyo" class="img">
             	<a target="_blank" href="foods.php?id=7"><img src="<?php echo re_pic(7); ?>" alt="Klematis" width="227" height="140"></a>
  				<div class="desc"><?php echo get_name(7)?></div>
                <div class="add"><?php echo get_add(7)?></div>
            </div>      
			<a href="view.php"><img src="images/xemthem.png"></a>	
        </div>
        
     	<div id="theodiadiem">
        	<h2><center>THEO ĐỊA ĐIỂM</center></h2>
        </div>
        
        <div id="diadiem">
        	<div id="quan1">
            	<a target="_blank" href="klematis_big.htm"><img src="images/diadiem/quan1.jpg" alt="Klematis" width="241" height="100"></a>
        	</div>       
        	<div id="quan2">
            	<a target="_blank" href="klematis_big.htm"><img src="images/diadiem/quan2.jpg" alt="Klematis" width="241" height="100"></a>
        	</div>      
        	<div id="quan3">
            	<a target="_blank" href="klematis_big.htm"><img src="images/diadiem/quan3.jpg" alt="Klematis" width="241" height="100"></a>
        	</div>  
        	<div id="quan4">
            	<a target="_blank" href="klematis_big.htm"><img src="images/diadiem/quan4.jpg" alt="Klematis" width="241" height="100"></a>
        	</div>
        	<div id="quan5">
            	<a target="_blank" href="klematis_big.htm"><img src="images/diadiem/quan5.jpg" alt="Klematis" width="241" height="100"></a>
        	</div>       
        	<div id="quan6">
            	<a target="_blank" href="klematis_big.htm"><img src="images/diadiem/quan6.jpg" alt="Klematis" width="241" height="100"></a>
        	</div>      
        	<div id="quan7">
            	<a target="_blank" href="klematis_big.htm"><img src="images/diadiem/quan7.jpg" alt="Klematis" width="241" height="100"></a>
        	</div>  
        	<div id="quan8">
            	<a target="_blank" href="klematis_big.htm"><img src="images/diadiem/quan8.jpg" alt="Klematis" width="241" height="100"></a>
        	</div>                                                                                      
        </div>      
    </div>
    
    <div id="footer">
        <img src="images/footer.png" width="270" height="220"/>
    </div>
</body>
</html>