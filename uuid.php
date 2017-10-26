<?php
	session_start();
	$uid=isset($_POST['uuid'])?$_POST['uuid']:'';
		if($uid==''){
		function create_uuid($prefix = ""){    //可以指定前缀
		    $str = md5(uniqid(mt_rand(), true));   
		    $uuid  = substr($str,0,8) . '-';   
		    $uuid .= substr($str,8,4) . '-';   
		    $uuid .= substr($str,12,4) . '-';   
		    $uuid .= substr($str,16,4) . '-';   
		    $uuid .= substr($str,20,12);   
		    return $prefix . $uuid;
		}
			$_SESSION["uuid"]=create_uuid();
			define("UID",$_SESSION["uuid"]);
			echo $_SESSION["uuid"];
		}else{
			echo $uid;
		}
?>