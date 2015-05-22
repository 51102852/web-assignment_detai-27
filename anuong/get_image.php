<?php
	function re_id_f($id){
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
	
	function re_pic($id){
		$f_id = re_id_f($id);	
		$link = mysql_connect("localhost", "root", "12345");
		mysql_select_db("anuong_db");
		$sql = "select * from foods where id = $f_id";
		$result = mysql_query("$sql");
		$array = array();
		while ($row = mysql_fetch_object($result)){
			array_push($array, $row->pic);
		}	
		return $array[0];
	}

?>