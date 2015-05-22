<?php
function count_fid(){
  	$conn=mysql_connect("localhost","root","12345") or die("can't connect this database");
	mysql_query("set names utf8");
  	mysql_select_db("anuong_db",$conn);
	$sql="select * from foods";
	$query=mysql_query($sql);
	$array = array();
	while ($row = mysql_fetch_object($query)){
		array_push($array, $row->id);
	}
	$c = count($array);
	mysql_free_result($query);		
	return $c;	
}
?>