<?php
	function re_id($id){
		mysql_connect("localhost", "root", "12345");
		mysql_query("set names utf8");
		mysql_select_db("anuong_db");
		$array = array();
		$result = mysql_query("select * from foods order by rating desc");
		while ($row = mysql_fetch_object($result)){
			array_push($array, $row->id);
		}
		$f_id = $array[$id];
		mysql_free_result($result);		
		return $f_id;
	}

  	$id = $_GET['id'];
	$f_id = re_id($id);
	$user = $_POST['user'];
	if ($user =="") {$user = "anonymous";}
	$binhluan = $_POST['cmt'];	
	if ($binhluan =="") {
		$msg = "Your comment is missing!";
		header("Refresh:0; url=foods.php?id=$id");
		echo "<script type='text/javascript'>alert(\"$msg\");</script>";
	}
  	$link = mysql_connect("localhost", "root", "12345", "anuong_db");
	mysql_query("set names utf8");
  	mysql_select_db("anuong_db");
  	$sql_2 = "insert into comments (id, fid, user, content) values ('', $f_id, '$user', '$binhluan')";
  	$result_2 = mysql_query($sql_2);
  	mysql_close($link);
	$msg = "Thanks for your comments";
	header("Refresh:0; url=foods.php?id=$id");
	echo "<script type='text/javascript'>alert(\"$msg\");</script>";
?>