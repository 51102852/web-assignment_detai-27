<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<form action="post.php" method="post" enctype="multipart/form-data">
	<center>
    <table>
        <tr>
			<td><label>username : </label></td>
            <td><input type="text" name="name" size="50" /></td>
        </tr>
		<tr>
        	<td><label>password : </label></td>
            <td><input type="text" name="address" size="50" /></td>
        </tr>
        <tr>
			<td><input type="submit" name="ok" value="login" /></td>
        </tr>		
    </table>
    </center>
</form>       
</body>
</html>
<?php
if(isset($_POST['ok'])){
	$name=$pass="";
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