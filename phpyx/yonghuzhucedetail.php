<?php
session_start();
include_once 'conn.php';
$id=$_GET["id"];
?>
<!doctype html>
<html class="no-js" lang="zxx">
<head>
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>用户详细</title>
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
                            <h2>用户详细</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
					<div class="content-form">
                                <?php 
					$sql="select * from yonghuzhuce where id=".$id;
					$query=mysql_query($sql);
					 $rowscount=mysql_num_rows($query);
					  if($rowscount==0)
					  {}
					  else
					  {
					?>
           
  <table width="100%" border="0" align="center" cellpadding="3" cellspacing="1" bordercolor="#00FFFF" style="border-collapse:collapse"  class="newsline">  
      <tr>
		 <td width='11%' height=44>账号：</td><td width='39%'><?php echo mysql_result($query,0,"zhanghao"); ?></td><td width="39%"  rowspan=7 align=center><img src=<?php echo mysql_result($query,0,"zhaopian"); ?> width=228 height=215 border=0></td></tr><tr>
         <td width='11%' height=44>密码：</td><td width='39%'>******</td></tr><tr>
         <td width='11%' height=44>姓名：</td><td width='39%'><?php echo mysql_result($query,0,"xingming"); ?></td></tr><tr>
         <td width='11%' height=44>性别：</td><td width='39%'><?php echo mysql_result($query,0,"xingbie"); ?></td></tr><tr>
         
         <td width='11%' height=44>地区：</td><td width='39%'><?php echo mysql_result($query,0,"diqu"); ?></td></tr>
         <tr>
           <td height=44>Email：</td>
           <td><?php echo mysql_result($query,0,"Email"); ?></td>
         </tr>
         <tr>
           <td height=44>手机：</td>
           <td><?php echo mysql_result($query,0,"shouji"); ?></td>
         </tr>
		 <tr><td colspan=3 align=center height=44><input type=button name=Submit5 value=返回 onClick="javascript:history.back()" class="content-form-signup" />
</td></tr>
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