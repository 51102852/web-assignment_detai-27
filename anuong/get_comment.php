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
	
	function get_cmt($id){
  		$f_id = re_id($id);
  		$link = mysql_connect("localhost", "root", "12345");
  		mysql_select_db("anuong_db");
		$sql_1 = "select * from comments where fid = $f_id";
		$result_1 = mysql_query("$sql_1");
		$array = array();
		while ($row = mysql_fetch_array($result_1)){
			array_push($array, $row['user']);
			array_push($array, $row['content']);
		}	
  		mysql_close($link);
		return $array;		
	}
?>