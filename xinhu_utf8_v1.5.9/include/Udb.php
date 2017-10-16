<?php
	$mysqli=new mysqli('localhost','root','root','test');

	//var_dump('$mysqli');

	if ($mysqli->connect_error>0) {
		echo "连接错误";
		echo $mysqli->connect_error;
		exit;
	}

	echo '这是测试能不能输出数据';
?>
