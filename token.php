<?php
	define('TOKEN','weixin');
	function checkSignature(){
		$signature = $_GET['signature'];
		$nonce = $_GET['nonce'];
		$timestamp = $_GET['timestamp'];
		
		$tmpArr = array($timestamp,$nonce,TOKEN);
		
		sort($tmpArr);
		
		$tmpStr = implode($tmpArr);
		
		$tmpStr = sha1($tmpStr);
		if($tmpStr == $signature){
			return true;
		}
		return false;
	}
	if(checkSignature()){
		$echostr = $_GET['echostr'];
		if($echostr){
			echo $echostr;
			exit;
		}
	}
?>