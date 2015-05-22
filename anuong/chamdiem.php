<?php
	function re_id($id){
		mysql_connect("localhost", "root", "12345");
		mysql_query("set names utf8");
		mysql_select_db("anuong_db");
		$array = array();
		$result = mysql_query("select * from foods order by rating desc limit 8");
		while ($row = mysql_fetch_object($result)){
			array_push($array, $row->id);
		}
		$f_id = $array[$id];
		mysql_free_result($result);		
		return $f_id;
	}

  	$id = $_GET['id'];
	$rate = $_POST['select_r'];
  	$f_id = re_id($id);
  	$link = mysql_connect("localhost", "root", "12345");
  	mysql_select_db("anuong_db");
	$sql_1 = "select * from foods where id = $f_id";
	$result_1 = mysql_query("$sql_1");
	$row = mysql_fetch_array($result_1);
	$old_rate = $row['rating'];
	$new_rate = (float) ($old_rate + $rate)/2;
  	$sql_2 = "update foods set rating = $new_rate where id = $f_id";
  	$result_2 = mysql_query("$sql_2");
  	mysql_close($link);
	$msg = "Thanks for your rating";
	header("Refresh:0; url=index.php");
	echo "<script type='text/javascript'>alert(\"$msg\");</script>";
?>