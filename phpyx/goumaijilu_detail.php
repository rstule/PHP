<?php 

include_once 'conn.php';
$id=$_GET["id"];
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>�����¼��ϸ</title>
<script type="text/javascript" src="ny/js/jquery.min.js"></script>
<script type="text/javascript" src="ny/js/bootstrap.min.js"></script>
<script src="ny/js/jconfirm/jquery-confirm.min.js"></script>
<link href="ny/css/bootstrap.min.css" rel="stylesheet">
<link href="ny/css/materialdesignicons.min.css" rel="stylesheet">
<link href="ny/css/style.min.css" rel="stylesheet">
<link rel="stylesheet" href="ny/js/jconfirm/jquery-confirm.min.css">
</head>
<body>
<p>�����¼��ϸ��</p>
					<?php
$sql="select * from goumaijilu where id=".$id;
$query=mysql_query($sql);
$rowscount=mysql_num_rows($query);
if($rowscount>0)
{
?>

 <table class="table table-hover">
      <tr>
	  <td width='11%'>��Ʒ��ţ�</td><td width='39%'><?php echo mysql_result($query,0,shangpinbianhao);?></td>
      <td width='11%'>��Ʒ���ƣ�</td><td width='39%'><?php echo mysql_result($query,0,shangpinmingcheng);?></td></tr><tr>
      <td width='11%'>�۸�</td><td width='39%'><?php echo mysql_result($query,0,jiage);?></td>
      <td width='11%'>��棺</td><td width='39%'><?php echo mysql_result($query,0,kucun);?></td></tr><tr>
      <td width='11%'>������</td><td width='39%'><?php echo mysql_result($query,0,xiaoliang);?></td>
      <td width='11%'>CDK��</td><td width='39%'><?php echo mysql_result($query,0,CDK);?></td></tr><tr>
      <td width='11%'>����������</td><td width='39%'><?php echo mysql_result($query,0,goumaishuliang);?></td>
      <td width='11%'>�����</td><td width='39%'><?php echo mysql_result($query,0,goumaijine);?></td></tr><tr>
      <td width='11%'>�����ˣ�</td><td width='39%'><?php echo mysql_result($query,0,goumairen);?></td>
      <td>&nbsp;</td><td>&nbsp;</td></tr><tr>
      <td colspan=4 align=center><input type=button name=Submit5 value=���� onClick="javascript:history.back()" class='btn btn-primary m-r-5'  /> </td></tr>
    
     
  </table>

<?php
	}
?>
<p>&nbsp;</p>
</body>
</html>

