<?php		
	function get_name($id){
		mysql_connect("localhost", "root", "12345");
		mysql_query("set names utf8");
		mysql_select_db("anuong_db");
		$array = array();
		$result = mysql_query("select * from foods order by rating desc");
		while ($row = mysql_fetch_object($result)){
			array_push($array, $row->name);
		}
		echo $array[$id];
		mysql_free_result($result);
	}
	
	function get_add($id){
		mysql_connect("localhost", "root", "12345");
		mysql_query("set names utf8");
		mysql_select_db("anuong_db");
		$array = array();
		$result = mysql_query("select * from foods order by rating desc");
		while ($row = mysql_fetch_object($result)){
			array_push($array, $row->address);
		}
		echo $array[$id];
		mysql_free_result($result);
	}	
	
	function get_rating($id){
		mysql_connect("localhost", "root", "12345");
		mysql_query("set names utf8");
		mysql_select_db("anuong_db");
		$array = array();
		$result = mysql_query("select * from foods order by rating desc");
		while ($row = mysql_fetch_object($result)){
			array_push($array, $row->rating);
		}
		echo number_format($array[$id],2);
		mysql_free_result($result);
	}	

	function get_cost($id){
		mysql_connect("localhost", "root", "12345");
		mysql_query("set names utf8");
		mysql_select_db("anuong_db");
		$array = array();
		$result = mysql_query("select * from foods order by rating desc");
		while ($row = mysql_fetch_object($result)){
			array_push($array, $row->cost);
		}
		echo $array[$id];
		mysql_free_result($result);
	}
	
	function get_content($id){
		mysql_connect("localhost", "root", "12345");
		mysql_query("set names utf8");
		mysql_select_db("anuong_db");
		$array = array();
		$result = mysql_query("select * from foods order by rating desc");
		while ($row = mysql_fetch_object($result)){
			array_push($array, $row->content);
		}
		echo $array[$id];
		mysql_free_result($result);
	}
	
	function get_user($id){
		mysql_connect("localhost", "root", "12345");
		mysql_query("set names utf8");
		mysql_select_db("anuong_db");
		$array = array();
		$result = mysql_query("select * from user where id=$id");
		while ($row = mysql_fetch_object($result)){
			array_push($array, $row->username);
		}		
		mysql_free_result($result);	
		return  $array[0];
	}
?>