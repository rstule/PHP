<?php
session_start();
if($_SESSION["username"]=="")
{
	echo "<script>javascript:alert('对不起，请您先登录！');location.href='index.php';</script>";
	exit;
}
include_once 'conn.php';
?>
<!doctype html>
<html class="no-js" lang="zxx">
<head>
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>在线留言</title>
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
                            <h2>在线留言</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
					<div class="content-form">
                              <table width="100%" border="0" align="center" cellpadding="0" cellspacing="1"  class="newsline">
                      <?php
					$sql="select * from liuyanban where 1=1";
					$sql=$sql." order by id desc";
					
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
                        <td width="11" rowspan="3" valign="top" ><!--DWLayoutEmptyCell-->&nbsp;</td>
                        <td height="20" colspan="2" align="left" valign="middle">&nbsp; &nbsp; 留言于:<?php echo mysql_result($query,$i,"addtime");?> &nbsp;</td>
                        <td width="10" rowspan="3" valign="top" style="width: 10px"><!--DWLayoutEmptyCell-->&nbsp;</td>
                      </tr>
                      <tr>
                        <td width="491" height="78" align="left" valign="top">&nbsp;<?php echo mysql_result($query,$i,"liuyan");?></td>
                        <td width="573" align="left" valign="top"><p>回复：</p>
                        <p><?php echo mysql_result($query,$i,"huifu");?></p></td>
                      </tr>
                      <tr>
                        <td colspan="2" align="left" valign="middle" style="height: 25px">&nbsp; &nbsp;账号：<?php echo mysql_result($query,$i,"zhanghao");?> &nbsp; &nbsp;姓名：<?php echo mysql_result($query,$i,"xingming");?>&nbsp;&nbsp;</td>
                      </tr>
                      <?php
						  }
  	}
  ?>
                    </table>
					
					<div class="fy">
                     <a href="lyblist.php?pagecurrent=1">首页</a> <a href="lyblist.php?pagecurrent=<?php echo $pagecurrent-1;?>">前一页</a> <a href="lyblist.php?pagecurrent=<?php echo $pagecurrent+1;?>">后一页</a> <a href="lyblist.php?pagecurrent=<?php echo $pagecount;?>">末页</a>  当前第<?php echo $pagecurrent;?>页,共<?php echo $pagecount;?>页 以上数据共
                        <?php
		echo $rowscount;
	?>
                        条,
					</div> 
					</div>
                </div>
            </div>
        </section>
        <?php include_once 'sidebufen.php';?>
    </main>
   <?php include_once 'qtdown.php';?>
</body>
</html>
