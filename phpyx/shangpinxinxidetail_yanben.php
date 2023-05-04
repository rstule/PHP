<?php
session_start();
include_once 'conn.php';

$id=$_GET["id"];

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
                            <h2>商品信息</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
					<div class="content-form">
                               						 <?php
$sql="select * from shangpinxinxi where id=".$id;
$query=mysql_query($sql);
$rowscount=mysql_num_rows($query);
if($rowscount>0)
{
?>

<table width="98%" border="0"  align="center" cellpadding="3" cellspacing="1" bordercolor="#00FFFF" style="border-collapse:collapse" class="newsline"> 
      <tr>
	  <td width='11%' height=44>商品编号：</td><td width='39%'><?php echo mysql_result($query,0,shangpinbianhao);?></td><td  rowspan=6 align=center><a href=<?php echo mysql_result($query,0,tupian);?> target=_blank><img src=<?php echo mysql_result($query,0,tupian);?> width=228 height=215 border=0></a></td></tr><tr>    <td width='11%' height=44>商品名称：</td><td width='39%'><?php echo mysql_result($query,0,shangpinmingcheng);?></td></tr><tr>    <td width='11%' height=44>价格：</td><td width='39%'><?php echo mysql_result($query,0,jiage);?></td></tr><tr>    <td width='11%' height=44>库存：</td><td width='39%'><?php echo mysql_result($query,0,kucun);?></td></tr><tr>    <td width='11%' height=44>销量：</td><td width='39%'><?php echo mysql_result($query,0,xiaoliang);?></td></tr><tr>    <td width='11%' height=44>CDK：</td><td width='39%'><?php echo mysql_result($query,0,CDK);?></td></tr><tr>            <td width='11%' height=100  >备注：</td><td width='39%' colspan=2 height=100 ><?php echo mysql_result($query,0,beizhu);?></td></tr>	<tr>      <td colspan=3 align=center><table width="100%" border="1" align="center" cellpadding="3" cellspacing="1" bordercolor="#00FFFF" style="border-collapse:collapse">
        <tr>
          <td width="50" bgcolor="#D8E8F8">序号</td>
          <td width="323" align="left" bgcolor='#D8E8F8'>评论内容</td>
          <td width="98" align="left" bgcolor='#D8E8F8'>评论人</td>
          <td width="106" align="center" bgcolor="#D8E8F8">评分</td>
          <td width="106" align="center" bgcolor="#D8E8F8">评论时间</td>
        </tr>
        <?php 
    $sqlpl="select * from pinglun where wenzhangID='$id' and biao='shangpinxinxi' order by id desc";
    $querypl=mysql_query($sqlpl);
  $rowscountpl=mysql_num_rows($querypl);
  if($rowscounplt==0)
  {}
  else
  {
	for($i=0;$i<$rowscountpl;$i++)
	{
  	?>
        <tr>
          <td width="50"><?php echo $i+1;?></td>
          <td align="left"><?php echo mysql_result($querypl,$i,pinglunneirong);?></td>
          <td align="left"><?php echo mysql_result($querypl,$i,pinglunren);?></td>
          <td width="106" align="center"><?php echo mysql_result($querypl,$i,"pingfen");?></td>
          <td width="106" align="center"><?php echo mysql_result($querypl,$i,"addtime");?></td>
        </tr>
        <?php
			}
		}
		?>
      </table></td>
    </tr>
<tr><td colspan=3 align=center>  <!--jixaaxnnxiu--><input type=button name=Submit53 value=评论 onClick="javascript:OpenScript('hsgpinglun.php?biao=shangpinxinxi&id=<?php echo $id;?>',500,200)" class='hsgqiehuanshitu'  /></td></tr>
    
     
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
