<?php
session_start();
include_once 'conn.php';
?>
<!doctype html>
<html class="no-js" lang="zxx">
<head>
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>游戏商城系统</title>
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
						<h2>商品推荐</h2>
					</div>
				</div>
			</div>
			<div class="row">
				<?php
		$ishangpinxinxi=0;						
	$sql="select * from shangpinxinxi order by id desc";
  $query=mysql_query($sql);
  $rowscount=mysql_num_rows($query);
 for($ishangpinxinxi=0;$ishangpinxinxi<$rowscount;$ishangpinxinxi++)
 {
	if($ishangpinxinxi<6)
	{
	  ?>
				<div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
					<div class="single-new-pro mb-30 text-center">
						<div class="product-img">
							<img src="<?php echo mysql_result($query,$ishangpinxinxi,"tupian") ?>" alt="" style="height:350px"></div>
						<div class="product-caption">
							<h3><a href="shangpinxinxidetail.php?id=<?php echo mysql_result($query,$ishangpinxinxi,"id") ?>"><?php echo mysql_result($query,$ishangpinxinxi,"shangpinmingcheng") ?></a></h3>
					  </div>
					</div>
				</div>
													  <?php
	}
}
?>	
			</div>
		</div>
	</section>
      <div class="popular-items section-padding30"></div>
        <?php include_once 'sidebufen.php';?>
    </main>
   <?php include_once 'qtdown.php';?>
</body>
</html>
