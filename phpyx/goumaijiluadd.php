<?php
session_start();
 if($_SESSION["username"]=="")
 {
	echo "<script>javascript:alert('对不起，请您先登录！');location.href='index.php';</script>";
	exit;
 }
include_once 'conn.php';
$ndate =date("Y-m-d");
$addnew=$_POST["addnew"];
if ($addnew=="1" )
{
	$shangpinbianhao=$_POST["shangpinbianhao"];
    $shangpinmingcheng=$_POST["shangpinmingcheng"];
    $jiage=$_POST["jiage"];
    $kucun=$_POST["kucun"];
    $xiaoliang=$_POST["xiaoliang"];
    $CDK=$_POST["CDK"];
    $goumaishuliang=$_POST["goumaishuliang"];
    $goumaijine=$_POST["goumaijine"];
    $goumairen=$_POST["goumairen"];
    
	
	$goumaijinej=$jiage*$goumaishuliang;
	$sql2="update shangpinxinxi set kucun=kucun-'".$goumaishuliang."'  where shangpinbianhao='".$shangpinbianhao."'";
mysql_query($sql2);
$sql3="update shangpinxinxi set xiaoliang=xiaoliang+'".$goumaishuliang."'  where shangpinbianhao='".$shangpinbianhao."'";
mysql_query($sql3);
	
	
	$sql="insert into goumaijilu(shangpinbianhao,shangpinmingcheng,jiage,kucun,xiaoliang,CDK,goumaishuliang,goumaijine,goumairen) values('$shangpinbianhao','$shangpinmingcheng','$jiage','$kucun','$xiaoliang','$CDK','$goumaishuliang','$goumaijinej','$goumairen') ";
	mysql_query($sql);
	
	
	echo "<script>javascript:alert('操作成功!');history.back();</script>";



}
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
<link rel="stylesheet" href="images/hsgcommon/divqt.css" type="text/css">
<link rel="stylesheet" href="images/hsgcommon/commonqt.css" type="text/css">



<script type="text/javascript" src="js/My97DatePicker/WdatePicker.js" charset="gb2312"></script>
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
	function check()
{
	if((/^[0-9]+.?[0-9]*$/.test(document.form1.goumaishuliang.value))){}else{$.alert("购买数量必需数字型");document.form1.goumaishuliang.focus();return false;}
    
}
	function gow()
	{
		location.href='goumaijiluadd.php?jihuabifffanhao='+document.form1.jihuabifffanhao.value+"&id=<?php echo $_GET["id"]?>";
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
 $sql="select * from shangpinxinxi where id=".$_GET["id"];
 $query=mysql_query($sql);
 $rowscount=mysql_num_rows($query);
 if($rowscount>0)
 {
 	$shangpinbianhao=mysql_result($query,0,shangpinbianhao);
 	$shangpinmingcheng=mysql_result($query,0,shangpinmingcheng);
 	$jiage=mysql_result($query,0,jiage);
 	$kucun=mysql_result($query,0,kucun);
 	$xiaoliang=mysql_result($query,0,xiaoliang);
 	$CDK=mysql_result($query,0,CDK);
 	
 }
?>

<form id="form1" name="form1" method="post" action="">
<table width="98%" border="0"  align="center" cellpadding="3" cellspacing="1" bordercolor="#cccccc"  class="newsline">    
	<tr><td>商品编号：</td><td><input name='shangpinbianhao' type='text' id='shangpinbianhao' value='' class="form-control" /></td></tr><script language="javascript">document.form1.shangpinbianhao.value='<?php echo $shangpinbianhao?>';document.form1.shangpinbianhao.setAttribute("readOnly",'true');</script>
    <tr><td>商品名称：</td><td><input name='shangpinmingcheng' type='text' id='shangpinmingcheng' value='' class="form-control" /></td></tr><script language="javascript">document.form1.shangpinmingcheng.value='<?php echo $shangpinmingcheng?>';document.form1.shangpinmingcheng.setAttribute("readOnly",'true');</script>
    <tr><td>价格：</td><td><input name='jiage' type='text' id='jiage' value='' class="form-control" /></td></tr><script language="javascript">document.form1.jiage.value='<?php echo $jiage?>';document.form1.jiage.setAttribute("readOnly",'true');</script>
    <tr><td>库存：</td><td><input name='kucun' type='text' id='kucun' value='' class="form-control" /></td></tr><script language="javascript">document.form1.kucun.value='<?php echo $kucun?>';document.form1.kucun.setAttribute("readOnly",'true');</script>
    <tr><td>销量：</td><td><input name='xiaoliang' type='text' id='xiaoliang' value='' class="form-control" /></td></tr><script language="javascript">document.form1.xiaoliang.value='<?php echo $xiaoliang?>';document.form1.xiaoliang.setAttribute("readOnly",'true');</script>
    <tr style='display:none'><td>CDK：</td><td><input name='CDK' type='text' id='CDK' value='' class="form-control" /></td></tr><script language="javascript">document.form1.CDK.value='<?php echo $CDK?>';document.form1.CDK.setAttribute("readOnly",'true');</script>
    <tr><td>购买数量：</td><td><input name='goumaishuliang' type='text' id='goumaishuliang' value='' class="form-control" /><div style="margin-top:16px;">&nbsp;必需为数字</div></td></tr>   
    <tr><td>购买人：</td><td><input name='goumairen' type='text' id='goumairen' value='<?php echo $_SESSION['username'];?>' class="form-control" readonly='readonly' /></td></tr>
    
    <tr>
      <td>&nbsp;</td>
      <td><input type="hidden" name="addnew" value="1" />
        <input type="submit" name="Submit" value="确定" onClick="return check();"  class="btn btn-info btn-small" />
      <input type="reset" name="Submit2" value="重置" class="btn btn-info btn-small" /></td>
    </tr>
  </table>
</form>


					</div>
                </div>
            </div>
        </section>
        <?php include_once 'sidebufen.php';?>
    </main>
   <?php include_once 'qtdown.php';?>
   
</body>
</html>
