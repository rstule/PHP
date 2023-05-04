<?php 
session_start();
include_once 'conn.php';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>商品信息</title>
<script type="text/javascript" src="js/My97DatePicker/WdatePicker.js" charset="gb2312"></script>
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
              <div class="card-header"><h4>商品信息列表</h4></div>
              <div class="card-body">
			   <form class="form-inline" action="" method="post">
                  <div class="form-group">
                     <input name="shangpinbianhao" type="text" id="shangpinbianhao" class="form-control" placeholder="请输入商品编号.." /> <input name="shangpinmingcheng" type="text" id="shangpinmingcheng" class="form-control" placeholder="请输入商品名称.." />
                  </div>
                  <div class="form-group">
                    <button class="btn btn-default" type="submit">搜索</button>
                  </div>
                </form>
            
 <table class="table table-hover">
  <thead>
  <tr>
    <th>序号</th>
   <th>商品编号</th>    <th>商品名称</th>    <th>价格</th>    <th>库存</th>    <th>销量</th>    <th>CDK</th>    <th>图片</th>    
   
    <th align="center"><div align="center">操作</div></th>
  </tr>
  </thead>
   <tbody>
  <?php 
    $sql="select * from shangpinxinxi where 1=1";
  if ($_POST["shangpinbianhao"]!=""){$nreqshangpinbianhao=$_POST["shangpinbianhao"];$sql=$sql." and shangpinbianhao like '%$nreqshangpinbianhao%'";}if ($_POST["shangpinmingcheng"]!=""){$nreqshangpinmingcheng=$_POST["shangpinmingcheng"];$sql=$sql." and shangpinmingcheng like '%$nreqshangpinmingcheng%'";}
  if($_POST["paixu"]!="")
  {
  	$sql=$sql." order by ".$_POST["paixu"]." ".$_POST["px"]."";
  }
  else
  {
  	$sql=$sql." order by id desc";
  }
$query=mysql_query($sql);
  $rowscount=mysql_num_rows($query);
  if($rowscount==0)
  {}
  else
  {
  $pagelarge=5;//每页行数；
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




  ?>
  <tr>
    <td ><?php echo $i+1;?></td>
    <td><?php echo mysql_result($query,$i,shangpinbianhao);?></td>    <td><?php echo mysql_result($query,$i,shangpinmingcheng);?></td>    <td><?php echo mysql_result($query,$i,jiage);?></td>    <td><?php echo mysql_result($query,$i,kucun);?></td>    <td><?php echo mysql_result($query,$i,xiaoliang);?></td>    <td><?php echo mysql_result($query,$i,CDK);?></td>    <td ><a href="<?php echo mysql_result($query,$i,tupian) ?>" target='_blank'><img src='<?php echo mysql_result($query,$i,tupian) ?>' width='80' height='88' border='0' style='border-radius:10px'></a></td>        
    <td align="center"><a class='btn btn-primary m-r-5' href='goumaijilu_add.php?id=<?php echo mysql_result($query,$i,"id");?>'><i class='mdi mdi-plus'></i> 添加购买记录</a>  </td>
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
                      <a href="shangpinxinxi_goumaijilu.php?pagecurrent=<?php echo $t;?>">
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
	 ?>><a href="shangpinxinxi_goumaijilu.php?pagecurrent=<?php echo $fyi;?>"><?php echo $fyi;?></a></li>
					 <?php
	 }
	 ?>
                    <li>
                      <a href="shangpinxinxi_goumaijilu.php?pagecurrent=<?php echo $pagecurrent+1;?>">
                        <span><i class="mdi mdi-chevron-right"></i></span>
                      </a>
                    </li>
                  </ul>
                </nav>
		<p>以上数据共<?php echo $rowscount;?>条, </p>		
				
  </div>
</div>

</body>
</html>

