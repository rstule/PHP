<?php 

include_once 'conn.php';
$id=$_GET["id"];
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>商品信息详细</title>
<script type="text/javascript" src="ny/js/jquery.min.js"></script>
<script type="text/javascript" src="ny/js/bootstrap.min.js"></script>
<script src="ny/js/jconfirm/jquery-confirm.min.js"></script>
<link href="ny/css/bootstrap.min.css" rel="stylesheet">
<link href="ny/css/materialdesignicons.min.css" rel="stylesheet">
<link href="ny/css/style.min.css" rel="stylesheet">
<link rel="stylesheet" href="ny/js/jconfirm/jquery-confirm.min.css">
</head>
<body>
<p>商品信息详细：</p>
					<?php
$sql="select * from shangpinxinxi where id=".$id;
$query=mysql_query($sql);
$rowscount=mysql_num_rows($query);
if($rowscount>0)
{
?>

 <table class="table table-hover">
      <tr>
	  <td width='11%' height=44>商品编号：</td><td width='39%'><?php echo mysql_result($query,0,shangpinbianhao);?></td><td  rowspan=6 align=center><a href=<?php echo mysql_result($query,0,tupian);?> target=_blank><img src=<?php echo mysql_result($query,0,tupian);?> width=228 height=215 border=0></a></td></tr><tr>      <td width='11%' height=44>商品名称：</td><td width='39%'><?php echo mysql_result($query,0,shangpinmingcheng);?></td></tr><tr>      <td width='11%' height=44>价格：</td><td width='39%'><?php echo mysql_result($query,0,jiage);?></td></tr><tr>      <td width='11%' height=44>库存：</td><td width='39%'><?php echo mysql_result($query,0,kucun);?></td></tr><tr>      <td width='11%' height=44>销量：</td><td width='39%'><?php echo mysql_result($query,0,xiaoliang);?></td></tr><tr>      <td width='11%' height=44>CDK：</td><td width='39%'><?php echo mysql_result($query,0,CDK);?></td></tr><tr>                  <td width='11%' height=100  >备注：</td><td width='39%' colspan=2 height=100 ><?php echo mysql_result($query,0,beizhu);?></td></tr><tr>      <td colspan=3 align=center><input type=button name=Submit5 value=返回 onClick="javascript:history.back()" class='btn btn-primary m-r-5'   /> </td></tr>
    
     
  </table>

<?php
	}
?>
<p>&nbsp;</p>
</body>
</html>

