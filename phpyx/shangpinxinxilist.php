<?php
session_start();
include_once 'conn.php';

?>
<!doctype html>
<html class="no-js" lang="zxx">
<head>
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>��Ʒ��Ϣ</title>
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
<script type="text/javascript" src="js/My97DatePicker/WdatePicker.js" charset="gb2312"></script>
<link rel="stylesheet" href="images/hsgcommon/divqt.css" type="text/css">

<body>
    <?php include_once 'qttop.php';?>
    <main>
        <?php include_once 'bht.php';?>
        <section class="new-product-area section-padding30">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="section-tittle mb-70">
                            <h2>��Ʒ��Ϣ</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
					<div class="content-form">
                               <form id="form1" name="form1" method="post" action="">
  ����: ��Ʒ��ţ�<input name="shangpinbianhao" type="text" id="shangpinbianhao" class="form-control2" /> ��Ʒ���ƣ�<input name="shangpinmingcheng" type="text" id="shangpinmingcheng" class="form-control2" />
  <input type="submit" name="Submit" value="����" class='hsgqiehuanshitu' />&nbsp;<input type='button' name='Submit5' value='�л���ͼ' class='hsgqiehuanshitu' onClick="javascript:location.href='shangpinxinxilisttp.php';" /> 
</form>
<table width="98%" border="0"  align="center" cellpadding="3" cellspacing="1" bordercolor="#00FFFF" style="border-collapse:collapse" class="newsline">  
  <tr>
    <td width="25" bgcolor="#CCFFFF">���</td>
    <td bgcolor='#CCFFFF'>��Ʒ���</td><td bgcolor='#CCFFFF'>��Ʒ����</td><td bgcolor='#CCFFFF'>�۸�</td><td bgcolor='#CCFFFF'>���</td><td bgcolor='#CCFFFF'>����</td><td bgcolor='#CCFFFF'>CDK</td><td bgcolor='#CCFFFF'>ͼƬ</td>
    
    <td width="30" align="center" bgcolor="#CCFFFF">����</td>
  </tr>
  <?php 
    $sql="select * from shangpinxinxi where 1=1";
  if ($_POST["shangpinbianhao"]!=""){$nreqshangpinbianhao=$_POST["shangpinbianhao"];$sql=$sql." and shangpinbianhao like '%$nreqshangpinbianhao%'";}if ($_POST["shangpinmingcheng"]!=""){$nreqshangpinmingcheng=$_POST["shangpinmingcheng"];$sql=$sql." and shangpinmingcheng like '%$nreqshangpinmingcheng%'";}
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
  <tr>
    <td width="25"><?php echo $i+1;?></td>
    <td><?php echo mysql_result($query,$i,shangpinbianhao);?></td><td><?php echo mysql_result($query,$i,shangpinmingcheng);?></td><td><?php echo mysql_result($query,$i,jiage);?></td><td><?php echo mysql_result($query,$i,kucun);?></td><td><?php echo mysql_result($query,$i,xiaoliang);?></td><td>********</td><td width='80'><a href="<?php echo mysql_result($query,$i,tupian) ?>" target='_blank'><img src='<?php echo mysql_result($query,$i,tupian) ?>' width='80' height='88' border='0'></a></td>
    
    <td width="30" align="center"><a href="shangpinxinxidetail.php?id=<?php echo mysql_result($query,$i,"id");?>">��ϸ</a></td>
  </tr>
  	<?php
	}
}
?>
</table>
<p>�������ݹ�<?php echo $rowscount;?>��,
</p>
<div class="fy"><a href="shangpinxinxilist.php?pagecurrent=1">��ҳ</a> <a href="shangpinxinxilist.php?pagecurrent=<?php echo $pagecurrent-1;?>">ǰһҳ</a> <a href="shangpinxinxilist.php?pagecurrent=<?php echo $pagecurrent+1;?>">��һҳ</a> <a href="shangpinxinxilist.php?pagecurrent=<?php echo $pagecount;?>">ĩҳ</a> ��ǰ��<?php echo $pagecurrent;?>ҳ,��<?php echo $pagecount;?>ҳ </div>

					</div>
                </div>
            </div>
        </section>
        <?php include_once 'sidebufen.php';?>
    </main>
   <?php include_once 'qtdown.php';?>
   
</body>
</html>
