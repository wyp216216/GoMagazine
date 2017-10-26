<?php
	header("Content-type:text/html;charset=utf-8");
	$uid = isset($_POST['uuid'])?$_POST['uuid']:'';
	echo $uid."</br>";
	$dir = "uuid/".$uid."/img";
	if(is_dir($dir)){
		echo "目录已存在！";
	}else{
		$res = mkdir(iconv("UTF-8","GBK","$dir"),0777,true);
		
		if($res){
			echo "目录创建成功！";
		}else{
			echo "目录创建失败！";
		}
	}
	$uuid = array("uuid"=>$uid);
	$json = json_encode($uuid);
	file_put_contents('uuid/'.$uid.'/'.$uid.'.json',$json);
?>