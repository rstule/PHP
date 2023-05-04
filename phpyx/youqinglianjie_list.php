<?php 
session_start();
include_once 'conn.php';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>友情连接</title>
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
              <div class="card-header"><h4>友情连接列表</h4></div>
              <div class="card-body">
			   <form class="form-inline" action="" method="post">
                  <div class="form-group">
                     <input name="wangzhanmingcheng" type="text" id="wangzhanmingcheng" class="form-control" placeholder="请输入网站名称.." /> <input name="wangzhi" type="text" id="wangzhi" class="form-control" placeholder="请输入网址.." />
                  </div>
                  <div class="form-group">
                    <button class="btn btn-default" type="submit">搜索</button>
                  </div>
                </form>
            
 <table class="table table-hover">
  <thead>
  <tr>
    <th>序号</th>
    <th>网站名称</th>
    <th>网址</th>
    <th>LOGO</th>
    
	
   
    <th align="center"><div align="center">操作</div></th>
  </tr>
  </thead>
   <tbody>
  <?php 
    $sql="select * from youqinglianjie where 1=1";
  
if ($_POST["wangzhanmingcheng"]!=""){$nreqwangzhanmingcheng=$_POST["wangzhanmingcheng"];$sql=$sql." and wangzhanmingcheng like '%$nreqwangzhanmingcheng%'";}
if ($_POST["wangzhi"]!=""){$nreqwangzhi=$_POST["wangzhi"];$sql=$sql." and wangzhi like '%$nreqwangzhi%'";}
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
    <td><?php echo mysql_result($query,$i,wangzhanmingcheng);?></td>
    <td><?php echo mysql_result($query,$i,wangzhi);?></td>
    <td ><a href="<?php echo mysql_result($query,$i,LOGO) ?>" target='_blank'><img src='<?php echo mysql_result($query,$i,LOGO) ?>' width='224' height='88' border='0' style='border-radius:10px'></a></td>
    
	
    <td align="center"><a class="btn btn-primary"  onclick="return hsgconfirm('<?php echo mysql_result($query,$i,"id");?>')"> <i class="mdi mdi-close"></i>删除</a> 
	<a class="btn btn-warning" href="youqinglianjie_updt.php?id=<?php echo mysql_result($query,$i,"id");?>"><i class="mdi mdi-delete-empty"></i> 修改</a>  </td>
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
                      <a href="youqinglianjie_list.php?pagecurrent=<?php echo $t;?>">
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
	 ?>><a href="youqinglianjie_list.php?pagecurrent=<?php echo $fyi;?>"><?php echo $fyi;?></a></li>
					 <?php
	 }
	 ?>
                    <li>
                      <a href="youqinglianjie_list.php?pagecurrent=<?php echo $pagecurrent+1;?>">
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
                    location.href="del.php?id="+nid+"&tablename=youqinglianjie";
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
