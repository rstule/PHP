<?php
session_start();
include_once 'conn.php';

$id=$_GET["id"];

?>
<!doctype html>
<html class="no-js" lang="zxx">
<head>
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>购买记录</title>
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
<script language="javascript">
	function OpenScript(url,width,height)
{
  var win = window.open(url,"SelectToSort",'width=' + width + ',height=' + height + ',resizable=1,scrollbars=yes,menubar=no,status=yes' );
}
	function OpenDialog(sURL, iWidth, iHeight)
{
   var oDialog = window.open(sURL, "_EditorDialog", "width=" + iWidth.toString() + ",height=" + iHeight.toString() + ",resizable=no,left=0,top=0,scrollbars=no,status=no,titlebar=no,toolbar=no,menubar=no,location=no");
   oDialog.focus();
}
</script>
<body>
    <?php include_once 'qttop.php';?>
    <main>
        <?php include_once 'bht.php';?>
        <section class="new-product-area section-padding30">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="section-tittle mb-70">
                            <h2>购买记录</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
					<div class="content-form">
                               						 <?php
$sql="select * from goumaijilu where id=".$id;
$query=mysql_query($sql);
$rowscount=mysql_num_rows($query);
if($rowscount>0)
{
?>

<table width="98%" border="0"  align="center" cellpadding="3" cellspacing="1" bordercolor="#00FFFF" style="border-collapse:collapse" class="newsline"> 
      <tr>
	  <td width='11%'>商品编号：</td><td width='39%'><?php echo mysql_result($query,0,shangpinbianhao);?></td>
    <td width='11%'>商品名称：</td><td width='39%'><?php echo mysql_result($query,0,shangpinmingcheng);?></td></tr><tr>
    <td width='11%'>价格：</td><td width='39%'><?php echo mysql_result($query,0,jiage);?></td>
    <td width='11%'>库存：</td><td width='39%'><?php echo mysql_result($query,0,kucun);?></td></tr><tr>
    <td width='11%'>销量：</td><td width='39%'><?php echo mysql_result($query,0,xiaoliang);?></td>
    <td width='11%'>CDK：</td><td width='39%'><?php echo mysql_result($query,0,CDK);?></td></tr><tr>
    <td width='11%'>购买数量：</td><td width='39%'><?php echo mysql_result($query,0,goumaishuliang);?></td>
    <td width='11%'>购买金额：</td><td width='39%'><?php echo mysql_result($query,0,goumaijine);?></td></tr><tr>
    <td width='11%'>购买人：</td><td width='39%'><?php echo mysql_result($query,0,goumairen);?></td>
    <td>&nbsp;</td><td>&nbsp;</td></tr><tr><td colspan=4 align=center>   <!--jixaaxnnxiu--></td></tr>
    
     
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
