<?php
session_start();
include_once 'conn.php';
?>
<!doctype html>
<html class="no-js" lang="zxx">
<head>
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>��Ա�б�</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="manifest" href="site.webmanifest">
    <link rel="shortcut icon" type="image/x-icon" href="qtimages/img/favicon.ico">
    <link rel="stylesheet" href="qtimages/css/bootstrap.min.css">
    <link rel="stylesheet" href="qtimages/css/owl.carousel.min.css">
    <link rel="stylesheet" href="qtimages/css/flaticon.css">
    <link rel="stylesheet" href="qtimages/css/slicknav.css">
    <link rel="stylesheet" href="qtimages/css/animate.min.css">
    <link rel="stylesheet" href="qtimages/css/magnific-popup.css">
    <link rel="stylesheet" href="qtimages/css/fontawesome-all.min.css">
    <link rel="stylesheet" href="qtimages/css/themify-icons.css">
    <link rel="stylesheet" href="qtimages/css/slick.css">
    <link rel="stylesheet" href="qtimages/css/nice-select.css">
    <link rel="stylesheet" href="qtimages/css/style.css">
	<link rel="stylesheet" href="./qtimages/sl_common_form.css">
<meta http-equiv="Content-Type" content="text/html; charset=gb2312"></head>
<body>
    <?php include_once 'qttop.php';?>
    <main>
        <?php include_once 'bht.php';?>
        <section class="new-product-area section-padding30">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="section-tittle mb-70">
                            <h2>��Ա�б�</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
					<div class="content-form">
                                 <form id="form1" name="form1" method="post" action="">
                                          <div align="left">����:�˺�:
                                            <input name="bh" type="text" id="bh" class="password" />
  ����:
  <input name="mc" type="text" id="mc" class="password" />
  <input type="submit" name="Submit" value="����" class='hsgqiehuanshitu' />
                                          </div>
										</form>
<table width="100%" border="1" align="center" cellpadding="3" cellspacing="1" bordercolor="#CC99CC" style="border-collapse:collapse" class="newsline">  
  <tr>
    <td width="25" bgcolor="#EBE2FE">���</td>
    <td width="94" bgcolor='#EBE2FE'>�˺�</td>
    <td width="94" bgcolor='#EBE2FE'>����</td>
    <td width="94" bgcolor='#EBE2FE'>�Ա�</td>
    <td width="167" bgcolor='#EBE2FE'>����</td>
    <td width="204" bgcolor='#EBE2FE'>Email</td>
    <td width="86" bgcolor='#EBE2FE'>��Ƭ</td>
    <td width="120" align="center" bgcolor="#EBE2FE">���ʱ��</td>
    </tr>
  <?php 
    $sql="select * from yonghuzhuce where 1=1";
  if ($_POST["bh"]!="")
{
  	$nreqbh=$_POST["bh"];
  	$sql=$sql." and zhanghao like '%$nreqbh%'";
}
     if ($_POST["mc"]!="")
{
  	$nreqmc=$_POST["mc"];
  	$sql=$sql." and xingming like '%$nreqmc%'";
}
  $sql=$sql." order by id desc";
  
$query=mysql_query($sql);
  $rowscount=mysql_num_rows($query);
  if($rowscount==0)
  {}
  else
  {
  $pagelarge=10;//ÿҳ������
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
  <tr onClick="location.href='yonghuzhucedetail.php?id=<?php echo mysql_result($query,$i,id);?>'" style="cursor:pointer">
    <td width="25"><?php
	echo $i+1;
?></td>
    <td><?php echo mysql_result($query,$i,zhanghao);?></td><td><?php echo mysql_result($query,$i,xingming);?></td><td><?php echo mysql_result($query,$i,xingbie);?></td><td><?php echo mysql_result($query,$i,diqu);?></td><td><?php echo mysql_result($query,$i,Email);?></td><td align="center"><img src="<?php echo mysql_result($query,$i,zhaopian);?>" width="73" height="77" /></td>
    <td width="120" align="center"><?php
echo mysql_result($query,$i,"addtime");
?></td>
    </tr>
  	<?php
	}
}
?>
</table>
<p>�������ݹ�<?php
		echo $rowscount;
	?>��,
  
</p>
<p align="center" class="fy"><a href="yonghuzhucelist.php?pagecurrent=1">��ҳ</a>, <a href="yonghuzhucelist.php?pagecurrent=<?php echo $pagecurrent-1;?>">ǰһҳ</a> ,<a href="yonghuzhucelist.php?pagecurrent=<?php echo $pagecurrent+1;?>">��һҳ</a>, <a href="yonghuzhucelist.php?pagecurrent=<?php echo $pagecount;?>">ĩҳ</a>, ��ǰ��<?php echo $pagecurrent;?>ҳ,��<?php echo $pagecount;?>ҳ </p>
	
					</div>
                </div>
            </div>
        </section>
        <?php include_once 'sidebufen.php';?>
    </main>
   <?php include_once 'qtdown.php';?>
</body>
</html>