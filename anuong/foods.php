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
	
	#food{
		min-height: 500px;
	}
	
	#load_food{
		min-height: 1200px;
		width: 920px;
		background-image: url(images/load_food.png);
		background-repeat:no-repeat;
	}
	
	#food_image{
		margin-left: 50px;
		margin-top: 60px;		
        height: 210px;
        width: 210px;
		float: left;		
		display: block;
	}

	#food_name{
		min-height: 100px;
		width: 520px;
		margin-left: 60px;
		margin-top: 60px;		
		float: left;		
		display: block;		
		border-style: dashed;
	}

	#content{
		min-height: 100px;
		width: 650px;
		margin-left: 150px;
		margin-top: 60px;	
		float: left;		
		display: block;	
		border-style: dashed;
	}

	#cham_diem{
		min-height: 30px;
		width: 200px;
		margin-left: 600px;
		margin-top: 60px;	
		float: left;		
		display: block;	
		border-style: dashed;
	}

	#comment{
		min-height: 30px;
		width: 650px;
		margin-left: 150px;
		margin-top: 60px;	
		float: left;		
		display: block;	
	}

	#write_comment{
		min-height: 30px;
		width: 650px;
		margin-left: 150px;
		margin-top: 60px;	
		float: left;		
		display: block;	
	}

	#noidung{
		min-height: 0px;
		width: 500px;
		margin-left: 50px;
		float: left;		
		display: block;	
	}

	.img{
		border-radius: 50%;
	}
	
	div.add{
		text-align: center;
		font-weight: normal;
		font-style: italic;
		width: 450px;
		margin: 5px;
	}	
	
	div.cont{
		text-align: left;
		font-weight: normal;
		font-style: italic;
		width: 600px;
		margin: 5px;
	}	
</style>
<?php 
include "get_name_and_address.php";
include "get_comment.php";
include "if_login.php";
include "error.php";
include "get_image.php";
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
    <div id="food">
    	<div id="ads">
    		<br />
    		<center><img src="images/quang cao.jpg" /></center>
            <br />
    	</div>
      	<center>
        <div id="load_food">        	
       		<div id="food_image">
 				<img class="img" src="<?php echo re_pic($_GET['id']); ?>"  height="200" width="200"/>
        	</div>
            <div id="food_name">
            	<h2><?php get_name($_GET['id']); ?></h2>
                <div class="add"><h3>Địa chỉ : <?php get_add($_GET['id']); ?></h3></div>
                <h3>Giá cả cho 1 người : <?php get_cost($_GET['id']); ?></h3>
                <h3>Rating : <?php get_rating($_GET['id']); ?></h3>
            </div>
         	<div id="content">
            	 <div class="cont"><h3><?php get_content($_GET['id']); ?></h3></div>
        	</div>       
            <div id="cham_diem">
            	 <form name="chamdiem" action="chamdiem.php?id=<?php echo $_GET['id']; ?>" method="post">
                 	<table>
                    	<tr>
                        	<td>
                    			<label>Chấm điểm : </label>
                            </td>
                            <td>
                            	<select name='select_r'>
								<option>1</option>
								<option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                                <option>6</option>
                                <option>7</option>
                                <option>8</option>
                                <option>9</option>
                                <option>10</option>
								</select>
                            </td>
                            <td>
                            	<input type="submit" value="Submit"/>
                            </td>
                        </tr>
                    </table>    
                 </form>
            </div>  
            <div id="comment">
            	<h3 align="left"><label>Bình luận : </label></h3>  
                <div id="noidung" align="left">           
                <?php 
					$array = get_cmt($_GET['id']); 
					$a = count($array);
					for($i=0; $i<$a; $i++) {
						if ($i%2==0) { 
   							echo "<strong>" . $array[$i] . "</strong>" . " đã bình luận : ";
						}
						else {
							echo "<i>" . $array[$i] . "<br />" . "</i>";	
						}
					} 
				?>
                </div>
            </div>  
            <div id="write_comment">
            	<h3 align="left"><label>Viết một bình luận : </label></h3>  
                <form name="binhluan" action="binhluan.php?id=<?php echo $_GET['id']; ?>" method="post">
                <table>
                	<tr>
                    	<td>
                        <label>Tên của bạn : </label>
                        </td>
                        <td>
                        <input type="text" id="user" name="user"/>
                        </td>
                    </tr>
                	<tr>
                    	<td>
                        <label>Nội dung bình luận : </label>
                        </td>
                        <td>
                        <textarea id="cmt" name="cmt" rows="10" cols="60">
						</textarea>
                        </td>
                    </tr>  
                    <tr>
                    	<td><input type="submit" value="Submit"/></td>
                    </tr>                  
                </table>    
                </form>       
            </div>              
        </div>
    	</center>
    </div>
</div>
</body>
</html>
