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
$id=$_GET["id"];
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
    
	
	$sql="update goumaijilu set shangpinbianhao='$shangpinbianhao',shangpinmingcheng='$shangpinmingcheng',jiage='$jiage',kucun='$kucun',xiaoliang='$xiaoliang',CDK='$CDK',goumaishuliang='$goumaishuliang',goumaijine='$goumaijine',goumairen='$goumairen' where id= ".$id;
	mysql_query($sql);
	echo "<script>javascript:alert('修改成功!');</script>";
}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>修改购买记录</title>

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

<body>
<?php
$sql="select * from goumaijilu where id=".$id;
$query=mysql_query($sql);
$rowscount=mysql_num_rows($query);
if($rowscount>0)
{

?>

<div >
              <div class="card-header"><h4>购买记录修改</h4></div>
              <div class="card-body">
                <form class="form-horizontal" action="" method="post" id="form1" name="form1" onSubmit="return check();"><input type="hidden" name="addnew" value="1" />
                 <div class='form-group'><label class='col-md-3 control-label'>商品编号</label><div class='col-md-7'><input type='text' class='form-control' value='<?php echo mysql_result($query,0,shangpinbianhao);?>' name='shangpinbianhao' id='shangpinbianhao' style='width:45%' placeholder='请输入商品编号' /></div></div>
      <div class='form-group'><label class='col-md-3 control-label'>商品名称</label><div class='col-md-7'><input type='text' class='form-control' value='<?php echo mysql_result($query,0,shangpinmingcheng);?>' name='shangpinmingcheng' id='shangpinmingcheng' style='width:45%' placeholder='请输入商品名称' /></div></div>
      <div class='form-group'><label class='col-md-3 control-label'>价格</label><div class='col-md-7'><input type='text' class='form-control' value='<?php echo mysql_result($query,0,jiage);?>' name='jiage' id='jiage' style='width:45%' placeholder='请输入价格' /></div></div>
      <div class='form-group'><label class='col-md-3 control-label'>库存</label><div class='col-md-7'><input type='text' class='form-control' value='<?php echo mysql_result($query,0,kucun);?>' name='kucun' id='kucun' style='width:45%' placeholder='请输入库存' /></div></div>
      <div class='form-group'><label class='col-md-3 control-label'>销量</label><div class='col-md-7'><input type='text' class='form-control' value='<?php echo mysql_result($query,0,xiaoliang);?>' name='xiaoliang' id='xiaoliang' style='width:45%' placeholder='请输入销量' /></div></div>
      <div class='form-group'><label class='col-md-3 control-label'>CDK</label><div class='col-md-7'><input type='text' class='form-control' value='<?php echo mysql_result($query,0,CDK);?>' name='CDK' id='CDK' style='width:45%' placeholder='请输入CDK' /></div></div>
      <div class='form-group'><label class='col-md-3 control-label'>购买数量</label><div class='col-md-7'><input type='text' class='form-control' value='<?php echo mysql_result($query,0,goumaishuliang);?>' name='goumaishuliang' id='goumaishuliang' style='width:45%' placeholder='请输入购买数量' /></div></div>
      <div class='form-group'><label class='col-md-3 control-label'>购买金额</label><div class='col-md-7'><input type='text' class='form-control' value='<?php echo mysql_result($query,0,goumaijine);?>' name='goumaijine' id='goumaijine' style='width:45%' placeholder='请输入购买金额' /></div></div>
      <div class='form-group'><label class='col-md-3 control-label'>购买人</label><div class='col-md-7'><input type='text' class='form-control' value='<?php echo mysql_result($query,0,goumairen);?>' name='goumairen' id='goumairen' style='width:45%' placeholder='请输入购买人' /></div></div>
      
				 <div class="form-group">
                    <div class="col-md-9 col-md-offset-3">
                      <button class="btn btn-primary" type="submit" onClick="return check();"><i class="mdi mdi-check"></i> 修改</button>
                    </div>
                  </div>
                </form>
              </div>
            </div>

<?php
	}
?>
<p>&nbsp;</p>
</body>
</html>
