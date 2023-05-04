<?php
session_start();
include_once 'conn.php';

?>
<!doctype html>
<html class="no-js" lang="zxx">
<head>
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>商品信息</title>
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
<!--hxsglxiangdxongjxs-->
<body>
    <?php include_once 'qttop.php';?>
    <main>
        <?php include_once 'bht.php';?>
        <section class="new-product-area section-padding30">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="section-tittle mb-70">
                            <h2>商品信息</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
					<div class="content-form">
                               <form id="form1" name="form1" method="post" action="">
  &nbsp;搜索: 商品编号：<input name="shangpinbianhao" type="text" id="shangpinbianhao" class="form-control2" /> 商品名称：<input name="shangpinmingcheng" type="text" id="shangpinmingcheng" class="form-control2" />
    <input type="submit" name="Submit" value="查找" class="content-form-signup"  />&nbsp;<input type="button" name="Submit3" value="切换视图" onClick="location.href='shangpinxinxilist.php';" class="content-form-signup"  />
</form>

                          <table width="98%" height="7%" border="0" align="center" cellpadding="0" cellspacing="0">
                          <tr>
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
  $pagelarge=20;//每页行数；
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
$k=0;
	for($i=$pagecurrent*$pagelarge-$pagelarge;$i<$ddddd;$i++)
{
$k=$k+1;
  ?>
                            <td height="165" align="center"><table  height="160" border="0" cellpadding="0" cellspacing="0">
                                <tr>
                                  <td height="123" align="center"><a href="shangpinxinxidetail.php?id=<?php echo mysql_result($query,$i,id);?>"><img src="<?php echo mysql_result($query,$i,tupian);?>" width="210" height="250" border="0" style="border-radius: 18px;" /></a></td>
                                </tr>
                                <tr>
                                  <td height="25" align="center"><?php echo mysql_result($query,$i,shangpinmingcheng);?></td>
                                </tr>
                            </table></td>
                             	<?php
								if ($k==4)
									{
										echo "</tr><tr>";
										$k=0;
									}
	}
}
?>
                          </tr>
                        </table>
						<p>
</p>
<div class="fy"><a href="shangpinxinxilisttp.php?pagecurrent=1">首页</a> <a href="shangpinxinxilisttp.php?pagecurrent=<?php echo $pagecurrent-1;?>">前一页</a> <a href="shangpinxinxilisttp.php?pagecurrent=<?php echo $pagecurrent+1;?>">后一页</a> <a href="shangpinxinxilisttp.php?pagecurrent=<?php echo $pagecount;?>">末页</a> 以上数据共<?php echo $pagecount;?>页,当前第<?php echo $pagecurrent;?>页,<?php echo $pagelarge;?>条每页              
</div>
					</div>
                </div>
            </div>
        </section>
        <?php include_once 'sidebufen.php';?>
    </main>
   <?php include_once 'qtdown.php';?>
   <!-- dfexnxxiaxng -->
</body>
</html>
