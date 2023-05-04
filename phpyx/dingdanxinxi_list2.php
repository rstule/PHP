<?php
session_start();
include_once 'conn.php';

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>订单信息</title>
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
              <div class="card-header"><h4>订单信息列表</h4></div>
              <div class="card-body">
			   <form class="form-inline" action="" method="post">
                  <div class="form-group">
                     <input name="dingdanhao" type="text" id="dingdanhao" class="form-control" placeholder="请输入订单号.." /> 订单金额：<input name="dingdanjine1" type="text" id="dingdanjine1"  value='' class="form-control" />-<input name="dingdanjine2" type="text" id="dingdanjine2"  value='' class="form-control" />
                  </div>
                  <div class="form-group">
                    <button class="btn btn-default" type="submit">搜索</button>
                  </div>
                </form>
            
 <table class="table table-hover">
  <thead>
  <tr>
    <th>序号</th>
    <th>订单号</th>    <th>订单金额</th>    <th>购买人</th>    <th>电话</th>    <th align='center'>是否支付</th>    <th align='center'>是否审核</th>
    <th align="center"><div align="center">操作</div></th>
  </tr>
  </thead>
   <tbody>
  <?php 
     $sql="select * from dingdanxinxi where goumairen='".$_SESSION['username']."'";
  if ($_POST["dingdanhao"]!=""){$nreqdingdanhao=$_POST["dingdanhao"];$sql=$sql." and dingdanhao like '%$nreqdingdanhao%'";}if ($_POST["dingdanjine1"]!=""){$nreqdingdanjine1=$_POST["dingdanjine1"];$sql=$sql." and dingdanjine >= $nreqdingdanjine1";}if ($_POST["dingdanjine2"]!=""){$nreqdingdanjine2=$_POST["dingdanjine2"];$sql=$sql." and dingdanjine <= $nreqdingdanjine2";}
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
    <td><?php echo mysql_result($query,$i,dingdanhao);?></td>    <td><?php echo mysql_result($query,$i,dingdanjine);?></td>        <td><?php echo mysql_result($query,$i,goumairen);?></td>    <td><?php echo mysql_result($query,$i,dianhua);?></td>        <td align='center'><?php echo mysql_result($query,$i,iszf);?>  <?php if(mysql_result($query,$i,iszf)=="否"){?><a class='btn btn-info btn-small' href="zhifu/index.php?id=<?php echo mysql_result($query,$i,id);?>&biao=dingdanxinxi">支付</a> <?php } ?> </td>    <td align='center'><?php echo mysql_result($query,$i,"issh")?></td>
    <td align="center"> <?php if(mysql_result($query,$i,issh)=="否"){?><a class='btn btn-primary' onclick="return hsgconfirm('<?php echo mysql_result($query,$i,"id");?>')"> <i class='mdi mdi-close'></i>删除</a>  <a class='btn btn-warning' href="dingdanxinxi_updt.php?id=<?php echo mysql_result($query,$i,"id");?>"><i class='mdi mdi-delete-empty'></i> 修改</a><?php } ?> <a class='btn btn-info' href="dingdanxinxidetail.php?id=<?php echo mysql_result($query,$i,"id");?>" target="_blank"><i class='mdi mdi-arrow-expand-all'></i> 详细</a> </td>
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
                      <a href="dingdanxinxi_list2.php?pagecurrent=<?php echo $t;?>">
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
	 ?>><a href="dingdanxinxi_list2.php?pagecurrent=<?php echo $fyi;?>"><?php echo $fyi;?></a></li>
					 <?php
	 }
	 ?>
                    <li>
                      <a href="dingdanxinxi_list2.php?pagecurrent=<?php echo $pagecurrent+1;?>">
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
<script language="javascript">
function hsgconfirm(nid)
{
  $.confirm({
        title: '确认对话框',
        content: '您确定要删除？',
        buttons: {
            confirm: {
                text: '确认',
                action: function(){
                    location.href="del.php?id="+nid+"&tablename=dingdanxinxi";
                }
            },
            cancel: {
                text: '关闭',
                action: function(){
                   // $.alert('取消的!');
                }
            },
            
        }
    });
}
</script>
