<?php 
include_once 'conn.php';
header("Content-Type: application/vnd.ms-execl");   
header("Content-Disposition: attachment; filename=购买记录.xls");   
header("Pragma: no-cache");   
header("Expires: 0");  
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>购买记录</title>
</head>

<body>

<p>已有购买记录列表：</p>
<table width="100%" border="1" align="center" cellpadding="3" cellspacing="1" bordercolor="#00FFFF" style="border-collapse:collapse">  
  <tr>
    <td width="25" bgcolor="#CCFFFF">序号</td>
    <th>商品编号</th>
    <th>商品名称</th>
    <th>价格</th>
    <th>库存</th>
    <th>销量</th>
    <th>CDK</th>
    <th>购买数量</th>
    <th>购买金额</th>
    <th>购买人</th>
    <th align='center'>是否审核</td>
    
    <td width="120" align="center" bgcolor="#CCFFFF">添加时间</td>
  </tr>
  <?php 
    $sql="select * from goumaijilu order by id desc";
  
$query=mysql_query($sql);
  $rowscount=mysql_num_rows($query);
  

for($i=0;$i<$rowscount;$i++)
{
  ?>
  <tr>
    <td width="25"><?php
	echo $i+1;
?></td>
    <td><?php echo mysql_result($query,$i,shangpinbianhao);?></td>
    <td><?php echo mysql_result($query,$i,shangpinmingcheng);?></td>
    <td><?php echo mysql_result($query,$i,jiage);?></td>
    <td><?php echo mysql_result($query,$i,kucun);?></td>
    <td><?php echo mysql_result($query,$i,xiaoliang);?></td>
    <td><?php echo mysql_result($query,$i,CDK);?></td>
    <td><?php echo mysql_result($query,$i,goumaishuliang);?></td>
    <td><?php echo mysql_result($query,$i,goumaijine);?></td>
    <td><?php echo mysql_result($query,$i,goumairen);?></td>
    <td><a class='<?php if(mysql_result($query,$i,"issh")=="是"){echo "btn btn-success m-r-5";}else{echo "btn btn-danger";}?>' href="sh.php?id=<?php echo mysql_result($query,$i,"id") ?>&yuan=<?php echo mysql_result($query,$i,"issh")?>&tablename=goumaijilu" onclick="return confirm('您确定要执行此操作？')"><?php echo mysql_result($query,$i,"issh")?></a></td>
    <td width="120" align="center"><?php echo mysql_result($query,$i,"addtime");?></td>
    
  </tr>
  	<?php
}
?>
</table>

</body>
</html>

