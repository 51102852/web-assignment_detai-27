<?php
	function if_log($s){		
		if (!(isset($_SESSION['userid']) && $_SESSION['userid'] != '')) {
			return 0;
		}
		else return $_SESSION['userid'];
	}
?>