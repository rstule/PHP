<?php 

include_once 'conn.php';
$id=$_GET["id"];
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>用户详细</title>
<script type="text/javascript" src="ny/js/jquery.min.js"></script>
<script type="text/javascript" src="ny/js/bootstrap.min.js"></script>
<script src="ny/js/jconfirm/jquery-confirm.min.js"></script>
<link href="ny/css/bootstrap.min.css" rel="stylesheet">
<link href="ny/css/materialdesignicons.min.css" rel="stylesheet">
<link href="ny/css/style.min.css" rel="stylesheet">
<link rel="stylesheet" href="ny/js/jconfirm/jquery-confirm.min.css">
</head>
<body>
<p>用户详细：</p>
					<?php
$sql="select * from yonghu where id=".$id;
$query=mysql_query($sql);
$rowscount=mysql_num_rows($query);
if($rowscount>0)
{
?>

 <table class="table table-hover">
      <tr>
	  <td width='11%' height=44>账号：</td><td width='39%'><?php echo mysql_result($query,0,zhanghao);?></td><td  rowspan=6 align=center><a href=<?php echo mysql_result($query,0,zhaopian);?> target=_blank><img src=<?php echo mysql_result($query,0,zhaopian);?> width=228 height=215 border=0></a></td></tr><tr>      <td width='11%' height=44>密码：</td><td width='39%'><?php echo mysql_result($query,0,mima);?></td></tr><tr>      <td width='11%' height=44>姓名：</td><td width='39%'><?php echo mysql_result($query,0,xingming);?></td></tr><tr>      <td width='11%' height=44>性别：</td><td width='39%'><?php echo mysql_result($query,0,xingbie);?></td></tr><tr>      <td width='11%' height=44>手机：</td><td width='39%'><?php echo mysql_result($query,0,shouji);?></td></tr><tr>      <td width='11%' height=44>身份证：</td><td width='39%'><?php echo mysql_result($query,0,shenfenzheng);?></td></tr><tr>                  <td width='11%' height=100  >备注：</td><td width='39%' colspan=2 height=100 ><?php echo mysql_result($query,0,beizhu);?></td></tr><tr>      <td colspan=3 align=center></td></tr>
    
     
  </table>

<?php
	}
?>
<p>&nbsp;</p>
</body>
</html>

