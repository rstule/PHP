<?php
session_start();
include_once 'conn.php';
$id=$_GET["id"];
mysql_query("update xinwentongzhi set dianjilv=dianjilv+1 where id=$id");
?>
<!doctype html>
<html class="no-js" lang="zxx">
<head>
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>内容详细</title>
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
                            <h2>内容详细</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
					<div class="content-form">
                                <?php 
					$sql="select * from xinwentongzhi where id=".$id;
					$query=mysql_query($sql);
					 $rowscount=mysql_num_rows($query);
					  if($rowscount==0)
					  {}
					  else
					  {
					?>
                   
                      <table width="99%" border="0" align="center" cellpadding="3" cellspacing="1" bordercolor="#67B41A" style="border-collapse:collapse" class="newsline">
                        <tr>
                          <td height="74" align="center"><font style="color:#e0b508; font-size:18px;font-weight:bold" ><?php echo mysql_result($query,0,"biaoti"); ?> (被点击<?php echo mysql_result($query,0,"dianjilv"); ?>次)</font></td>
                        </tr>
                        <tr>
                          <td height="104"><?php echo mysql_result($query,0,"neirong");?></td>
                        </tr>
                        <tr>
                          <td align="right" height="60"><input type="button" onClick="javaScript:history.back();" value="返回" class="content-form-signup" /></td>
                        </tr>
                      </table>
                      <?php
					}
					?>
					</div>

                </div>
            </div>
        </section>
        <?php include_once 'sidebufen.php';?>
    </main>
   <?php include_once 'qtdown.php';?>
</body>
</html>
