
<?php
//��֤��¼��Ϣ
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
	echo "<script>javascript:alert('��δѡ���κ�����');history.back();</script>";
	die;
}
	$tablename=$_POST["tablename"];
	$sql="delete from $tablename where id in ($nbh)";
	mysql_query($sql);
	$comewhere=$_SERVER['HTTP_REFERER'];
	echo "<script language='javascript'> alert('����ɾ���ɹ�');location.href='$comewhere';</script>";
	
//}
?>