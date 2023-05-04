<?php
session_start();
if($_SESSION["username"]=="")
{
	echo "<script>javascript:alert('对不起，请您先登录！');location.href='index.php';</script>";
	exit;
}
include_once 'conn.php';

$addnew=$_POST["addnew"];
if ($addnew=="1" )
{
	$zhanghao=$_POST["zhanghao"];$zhaopian=$_POST["zhaopian"];$xingming=$_POST["xingming"];$liuyan=$_POST["liuyan"];
	$sql="insert into liuyanban(zhanghao,zhaopian,xingming,liuyan) values('$zhanghao','$zhaopian','$xingming','$liuyan') ";

	mysql_query($sql);
	echo "<script>javascript:alert('留言成功!');location.href='lyblist.php';</script>";
}
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
                               <form name="form1" method="post" action="">
                      <table width="80%" height="400" border="1" align="center" cellpadding="3" class="newsline" cellspacing="1" bordercolor="#67B41A" style="border-collapse:collapse">
                        <tr>
                          <td>账号：</td>
                          <td align="left"><input name='zhanghao' type='text' id='zhanghao' value='<?php echo $_SESSION["username"];?>' readonly="readonly"  class="user"  />
                          &nbsp;*</td>
                        </tr>
                        

                        <tr>
                          <td>姓名：</td>
                          <td align="left"><input name='xingming' type='text' id='xingming' value='<?php echo $_SESSION["xm"];?>' class="user" style="width:200px;" />
                          &nbsp;*</td>
                        </tr>
                        <tr>
                          <td>留言：</td>
                          <td align="left"><textarea name='liuyan' cols='50' rows='8' id='liuyan' class="user" style="width:500px; height:100px;"></textarea>
                          &nbsp;*</td>
                        </tr>
                        <tr>
                          <td>&nbsp;</td>
                          <td align="left"><input type="hidden" name="addnew" value="1" />
                              <input type="submit" name="Submit" value="添加" onClick="return check();" class="content-form-signup" />                          
                        </tr>
      </table>
    </form>
	<script language="javascript">
	function check()
{
	if(document.form1.zhanghao.value==""){alert("请输入账号");document.form1.zhanghao.focus();return false;}if(document.form1.xingming.value==""){alert("请输入姓名");document.form1.xingming.focus();return false;}if(document.form1.liuyan.value==""){alert("请输入留言");document.form1.liuyan.focus();return false;}
}
</script>  
					</div>
                </div>
            </div>
        </section>
        <?php include_once 'sidebufen.php';?>
    </main>
   <?php include_once 'qtdown.php';?>
</body>
</html>
