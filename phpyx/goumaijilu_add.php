<script type="text/javascript" src="ny/js/jquery.min.js"></script>
<script type="text/javascript" src="ny/js/bootstrap.min.js"></script>
<script src="ny/js/jconfirm/jquery-confirm.min.js"></script>
<link href="ny/css/bootstrap.min.css" rel="stylesheet">
<link href="ny/css/materialdesignicons.min.css" rel="stylesheet">
<link href="ny/css/style.min.css" rel="stylesheet">
<link rel="stylesheet" href="ny/js/jconfirm/jquery-confirm.min.css">
<?php
session_start();
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
	
	
	
	
	$sql="insert into goumaijilu(shangpinbianhao,shangpinmingcheng,jiage,kucun,xiaoliang,CDK,goumaishuliang,goumaijine,goumairen) values('$shangpinbianhao','$shangpinmingcheng','$jiage','$kucun','$xiaoliang','$CDK','$goumaishuliang','$goumaijinej','$goumairen') ";
	mysql_query($sql);
	
	
	echo "<script>javascript:alert('操作成功!');history.back();</script>";



}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>购买记录</title>

<script type="text/javascript" src="js/My97DatePicker/WdatePicker.js" charset="gb2312"></script>
</head>
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

<script language="javascript">
	function check()
{
	if((/^[0-9]+.?[0-9]*$/.test(document.form1.goumaishuliang.value))){}else{$.alert("购买数量必需数字型");document.form1.goumaishuliang.focus();return false;}
    
}
	function gow()
	{
		location.href='goumaijilu_add.php?jihuabifffanhao='+document.form1.jihuabifffanhao.value+"&id=<?php echo $_GET["id"]?>";
	}
	function hsgxia2shxurxu(nstr,nwbk)
{
	if (eval("form1."+nwbk).value.indexOf(nstr)>=0)
	{
		eval("form1."+nwbk).value=eval("form1."+nwbk).value.replace(nstr+"；", "");
	}
	else
	{
		eval("form1."+nwbk).value=eval("form1."+nwbk).value+nstr+"；";
	}
}
</script>

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

<div >
              <div class="card-header"><h4>购买记录添加</h4></div>
              <div class="card-body">
                <form class="form-horizontal" action="?id=<?php echo $_GET["id"]?>" method="post" id="form1" name="form1" onSubmit="return check();"><input type="hidden" name="addnew" value="1" />
                 <div class='form-group'><label class='col-md-3 control-label'>商品编号</label><div class='col-md-7'><input type='text' class='form-control' value='' name='shangpinbianhao' id='shangpinbianhao' style='width:45%' placeholder='请输入商品编号' /></div></div><script language="javascript">document.form1.shangpinbianhao.value='<?php echo $shangpinbianhao?>';document.form1.shangpinbianhao.setAttribute("readOnly",'true');</script>
    <div class='form-group'><label class='col-md-3 control-label'>商品名称</label><div class='col-md-7'><input type='text' class='form-control' value='' name='shangpinmingcheng' id='shangpinmingcheng' style='width:45%' placeholder='请输入商品名称' /></div></div><script language="javascript">document.form1.shangpinmingcheng.value='<?php echo $shangpinmingcheng?>';document.form1.shangpinmingcheng.setAttribute("readOnly",'true');</script>
    <div class='form-group'><label class='col-md-3 control-label'>价格</label><div class='col-md-7'><input type='text' class='form-control' value='' name='jiage' id='jiage' style='width:45%' placeholder='请输入价格' /></div></div><script language="javascript">document.form1.jiage.value='<?php echo $jiage?>';document.form1.jiage.setAttribute("readOnly",'true');</script>
    <div class='form-group'><label class='col-md-3 control-label'>库存</label><div class='col-md-7'><input type='text' class='form-control' value='' name='kucun' id='kucun' style='width:45%' placeholder='请输入库存' /></div></div><script language="javascript">document.form1.kucun.value='<?php echo $kucun?>';document.form1.kucun.setAttribute("readOnly",'true');</script>
    <div class='form-group'><label class='col-md-3 control-label'>销量</label><div class='col-md-7'><input type='text' class='form-control' value='' name='xiaoliang' id='xiaoliang' style='width:45%' placeholder='请输入销量' /></div></div><script language="javascript">document.form1.xiaoliang.value='<?php echo $xiaoliang?>';document.form1.xiaoliang.setAttribute("readOnly",'true');</script>
    <div class='form-group'><label class='col-md-3 control-label'>CDK</label><div class='col-md-7'><input type='text' class='form-control' value='' name='CDK' id='CDK' style='width:45%' placeholder='请输入CDK' /></div></div><script language="javascript">document.form1.CDK.value='<?php echo $CDK?>';document.form1.CDK.setAttribute("readOnly",'true');</script>
    <div class='form-group'><label class='col-md-3 control-label'>购买数量</label><div class='col-md-7'><input type='text' class='form-control' value='' name='goumaishuliang' id='goumaishuliang' style='width:45%' placeholder='请输入购买数量' /></div></div>
    <div class='form-group'><label class='col-md-3 control-label'>购买金额</label><div class='col-md-7'><input type='text' class='form-control' value='' name='goumaijine' id='goumaijine' readonly='readonly' /></div></div>
    <div class='form-group'><label class='col-md-3 control-label'>购买人</label><div class='col-md-7'><input type='text' class='form-control' value='<?php echo $_SESSION['username'];?>' style='width:45%;' name='goumairen' id='goumairen' readonly='readonly' /></div></div>
    
				 <div class="form-group">
                    <div class="col-md-9 col-md-offset-3">
                      <button class="btn btn-primary" type="submit" onClick="return check();"><i class="mdi mdi-check"></i> 添加</button>
                    </div>
                  </div>
                </form>
              </div>
            </div>
<p>&nbsp;</p>

</body>
</html>
