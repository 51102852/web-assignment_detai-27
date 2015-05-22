<?php
	function re_id($id){
		mysql_connect("localhost", "root", "12345");
		mysql_query("SET NAMES utf8");
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
?>