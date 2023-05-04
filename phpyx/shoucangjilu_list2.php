<?php 
session_start();
include_once 'conn.php';

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>我的收藏</title>
<script type="text/javascript" src="ny/js/jquery.min.js"></script>
<script type="text/javascript" src="ny/js/bootstrap.min.js"></script>
<script src="ny/js/jconfirm/jquery-confirm.min.js"></script>
<link href="ny/css/bootstrap.min.css" rel="stylesheet">
<link href="ny/css/materialdesignicons.min.css" rel="stylesheet">
<link href="ny/css/style.min.css" rel="stylesheet">
<link rel="stylesheet" href="ny/js/jconfirm/jquery-confirm.min.css">
</head>

<body>
 <div class="card">
              <div class="card-header"><h4>我的收藏列表</h4></div>
              <div class="card-body">
<table class="table table-hover">
 <thead>
  <tr>
    <th  >序号</th>
    <th >标题 </th>
    <th align="center" >收藏时间</th>
    <th  align="center" >操作</th>
  </tr>
   </thead>
    <tbody>
  <?php 
    $sql="select * from shoucangjilu where username='".$_SESSION['username']."'";
  
  $sql=$sql." order by id desc";
  
$query=mysql_query($sql);
  $rowscount=mysql_num_rows($query);
  if($rowscount==0)
  {}
  else
  {
  $pagelarge=10;//每页行数；
  $pagecurrent=$_GET["pagecurrent"];
  if($rowscount%$pagelarge==0)
  {
		$pagecount=$rowscount/$pagelarge;
  }
  else
  {
   		$pagecount=intval($rowscount/$pagelarge)+1;
  }
  if($pagecurrent=="" || $pagecurrent<=0)
{
	$pagecurrent=1;
}
 
if($pagecurrent>$pagecount)
{
	$pagecurrent=$pagecount;
}
		$ddddd=$pagecurrent*$pagelarge;
	if($pagecurrent==$pagecount)
	{
		if($rowscount%$pagelarge==0)
		{
		$ddddd=$pagecurrent*$pagelarge;
		}
		else
		{
		$ddddd=$pagecurrent*$pagelarge-$pagelarge+$rowscount%$pagelarge;
		}
	}

	for($i=$pagecurrent*$pagelarge-$pagelarge;$i<$ddddd;$i++)
{
$goumaishuliangz=$goumaishuliangz+floatval(mysql_result($query,$i,goumaishuliang));

  ?>
  <tr>
    <td ><?php echo $i+1;?></td>
    <td><?php readzd(mysql_result($query,$i,"biao"),mysql_result($query,$i,"ziduan"),"id",mysql_result($query,$i,"xwid"));?></td>
    <td ><?php echo mysql_result($query,$i,"addtime");?></td>
    <td><a class="btn btn-warning" href="del.php?id=<?php echo mysql_result($query,$i,"id");?>&tablename=shoucangjilu" onclick="return confirm('真的要删除？')" >删除</a> 
	<a class="btn btn-primary"  href="<?php echo mysql_result($query,$i,"biao"); ?>detail.php?id=<?php echo mysql_result($query,$i,"xwid");?>" target="_blank">详细</a></td>
  </tr>
  	<?php
	}
}
?>
 </tbody>
</table>
<nav>
                  <ul class="pagination pagination-circle" style="width:95%">
                    <li 
					<?php
					 if($pagecurrent==1)
	 {
					?>
					class="disabled"
					 <?php
	 }
	 else
	 {
	 	$t=$pagecurrent-1;
	 }
	 ?>
					>
                      <a href="yonghuzhuce_list.php?pagecurrent=<?php echo $t;?>">
                        <span><i class="mdi mdi-chevron-left"></i></span>
                      </a>
                    </li>
					<?php
					 for($fyi=1;$fyi<=$pagecount;$fyi++)
	 {
	 ?>
                    <li <?php
	 if($pagecurrent==$fyi)
	 {
	 	echo " class='active'";
	 }
	 ?>><a href="yonghuzhuce_list.php?pagecurrent=<?php echo $fyi;?>"><?php echo $fyi;?></a></li>
					 <?php
	 }
	 ?>
                    <li>
                      <a href="yonghuzhuce_list.php?pagecurrent=<?php echo $pagecurrent+1;?>">
                        <span><i class="mdi mdi-chevron-right"></i></span>
                      </a>
                    </li>
                  </ul>
                </nav>
				
				</div>
				</div>

</body>
</html>

