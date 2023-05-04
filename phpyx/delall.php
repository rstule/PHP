
<?php
//验证登录信息
include_once 'conn.php';
 $area_arr = array(); 
 
$area_arr = $_POST['bh']; 
$t=0;
foreach ($area_arr as $k=>$v){ 
$nbh=$nbh.$v.","; 
$t=$t+1;
}
$nbh=substr($nbh,0,strlen($nbh)-1);
if($t<1)
{
	echo "<script>javascript:alert('您未选中任何数据');history.back();</script>";
	die;
}
	$tablename=$_POST["tablename"];
	$sql="delete from $tablename where id in ($nbh)";
	mysql_query($sql);
	$comewhere=$_SERVER['HTTP_REFERER'];
	echo "<script language='javascript'> alert('批量删除成功');location.href='$comewhere';</script>";
	
//}
?>