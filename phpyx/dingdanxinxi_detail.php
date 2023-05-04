<?php 

include_once 'conn.php';
$id=$_GET["id"];
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>订单信息详细</title>
<script type="text/javascript" src="ny/js/jquery.min.js"></script>
<script type="text/javascript" src="ny/js/bootstrap.min.js"></script>
<script src="ny/js/jconfirm/jquery-confirm.min.js"></script>
<link href="ny/css/bootstrap.min.css" rel="stylesheet">
<link href="ny/css/materialdesignicons.min.css" rel="stylesheet">
<link href="ny/css/style.min.css" rel="stylesheet">
<link rel="stylesheet" href="ny/js/jconfirm/jquery-confirm.min.css">
</head>
<body>
<p>订单信息详细：</p>
					<?php
$sql="select * from dingdanxinxi where id=".$id;
$query=mysql_query($sql);
$rowscount=mysql_num_rows($query);
if($rowscount>0)
{
?>

 <table class="table table-hover">
      <tr>
	  <td width='11%'>订单号：</td><td width='39%'><?php echo mysql_result($query,0,dingdanhao);?></td>      <td width='11%'>订单金额：</td><td width='39%'><?php echo mysql_result($query,0,dingdanjine);?></td></tr><tr>      <td width='11%'>订单内容：</td><td width='39%'><?php echo mysql_result($query,0,dingdanneirong);?></td>      <td width='11%'>购买人：</td><td width='39%'><?php echo mysql_result($query,0,goumairen);?></td></tr><tr>      <td width='11%'>电话：</td><td width='39%'><?php echo mysql_result($query,0,dianhua);?></td>      <td width='11%'>备注：</td><td width='39%'><?php echo mysql_result($query,0,beizhu);?></td>      </tr><tr>      <td colspan=4 align=center></td></tr>
    
     
  </table>

<?php
	}
?>
<p>&nbsp;</p>
</body>
</html>

