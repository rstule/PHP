<?php
session_start();
include_once 'conn.php';

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>������Ϣ</title>
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
              <div class="card-header"><h4>������Ϣ�б�</h4></div>
              <div class="card-body">
			   <form class="form-inline" action="" method="post">
                  <div class="form-group">
                     <input name="dingdanhao" type="text" id="dingdanhao" class="form-control" placeholder="�����붩����.." /> ������<input name="dingdanjine1" type="text" id="dingdanjine1"  value='' class="form-control" />-<input name="dingdanjine2" type="text" id="dingdanjine2"  value='' class="form-control" />
                  </div>
                  <div class="form-group">
                    <button class="btn btn-default" type="submit">����</button>
                  </div>
                </form>
            
 <table class="table table-hover">
  <thead>
  <tr>
    <th>���</th>
    <th>������</th>    <th>�������</th>    <th>������</th>    <th>�绰</th>    <th align='center'>�Ƿ�֧��</th>    <th align='center'>�Ƿ����</th>
    <th align="center"><div align="center">����</div></th>
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
  $pagelarge=5;//ÿҳ������
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
    <td><?php echo mysql_result($query,$i,dingdanhao);?></td>    <td><?php echo mysql_result($query,$i,dingdanjine);?></td>        <td><?php echo mysql_result($query,$i,goumairen);?></td>    <td><?php echo mysql_result($query,$i,dianhua);?></td>        <td align='center'><?php echo mysql_result($query,$i,iszf);?>  <?php if(mysql_result($query,$i,iszf)=="��"){?><a class='btn btn-info btn-small' href="zhifu/index.php?id=<?php echo mysql_result($query,$i,id);?>&biao=dingdanxinxi">֧��</a> <?php } ?> </td>    <td align='center'><?php echo mysql_result($query,$i,"issh")?></td>
    <td align="center"> <?php if(mysql_result($query,$i,issh)=="��"){?><a class='btn btn-primary' onclick="return hsgconfirm('<?php echo mysql_result($query,$i,"id");?>')"> <i class='mdi mdi-close'></i>ɾ��</a>  <a class='btn btn-warning' href="dingdanxinxi_updt.php?id=<?php echo mysql_result($query,$i,"id");?>"><i class='mdi mdi-delete-empty'></i> �޸�</a><?php } ?> <a class='btn btn-info' href="dingdanxinxidetail.php?id=<?php echo mysql_result($query,$i,"id");?>" target="_blank"><i class='mdi mdi-arrow-expand-all'></i> ��ϸ</a> </td>
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
		<p>�������ݹ�<?php echo $rowscount;?>��, </p>		
				
  </div>
</div>

</body>
</html>
<script language="javascript">
function hsgconfirm(nid)
{
  $.confirm({
        title: 'ȷ�϶Ի���',
        content: '��ȷ��Ҫɾ����',
        buttons: {
            confirm: {
                text: 'ȷ��',
                action: function(){
                    location.href="del.php?id="+nid+"&tablename=dingdanxinxi";
                }
            },
            cancel: {
                text: '�ر�',
                action: function(){
                   // $.alert('ȡ����!');
                }
            },
            
        }
    });
}
</script>
