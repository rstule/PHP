<?php
//验证登录信息
session_start();
 if($_SESSION["username"]=="")
 {
	echo "<script>javascript:alert('对不起，请您先登录！');location.href='index.php';</script>";
	exit;
 }
include_once 'conn.php';
//if($_POST['submit']){
	$id=$_GET["id"];
	$biao=$_GET["biao"];
	$ziduan=$_GET["ziduan"];
	$sql="insert into shoucangjilu(username,xwid,ziduan,biao) values('".$_SESSION["username"]."','$id','$ziduan','$biao')";
	//echo $sql;
	 	mysql_query($sql);
		$comewhere=$_SERVER['HTTP_REFERER'];
		echo "<script language='javascript'>alert('操作成功！');location.href='$comewhere';</script>";
	
//}
?>