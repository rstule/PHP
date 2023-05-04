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
	$dingdanhao=$_POST["dingdanhao"];
    $dingdanjine=$_POST["dingdanjine"];
    $dingdanneirong=$_POST["dingdanneirong"];
    $goumairen=$_POST["goumairen"];
    $dianhua=$_POST["dianhua"];
    $beizhu=$_POST["beizhu"];
    
	
	
	
	
	
	
	$sql="insert into dingdanxinxi(dingdanhao,dingdanjine,dingdanneirong,goumairen,dianhua,beizhu) values('$dingdanhao','$dingdanjine','$dingdanneirong','$goumairen','$dianhua','$beizhu') ";
	mysql_query($sql);
	$sql2="update goumaijilu set issh='是' where goumairen='".$_SESSION["username"]."'";
mysql_query($sql2);
	
	echo "<script>javascript:alert('操作成功!');history.back();</script>";



}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>订单信息</title>

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
	if(document.form1.dingdanjine.value==""){$.alert("请输入订单金额");document.form1.dingdanjine.focus();return false;}
    if((/^[0-9]+.?[0-9]*$/.test(document.form1.dingdanjine.value))){}else{$.alert("订单金额必需数字型");document.form1.dingdanjine.focus();return false;}
    if(/^1[3|4|5|6|7|8|9][0-9]\d{8,8}$/.test(document.form1.dianhua.value) || /^(([0\+]\d{2,3}-)?(0\d{2,3})-)?(\d{7,8})(-(\d{3,}))?$/.test(document.form1.dianhua.value)){}else{$.alert("电话必需电话格式");document.form1.dianhua.focus();return false;}
    
}
	function gow()
	{
		location.href='dingdanxinxi_add.php?jihuabifffanhao='+document.form1.jihuabifffanhao.value+"&id=<?php echo $_GET["id"]?>";
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
	$sql="select * from goumaijilu where goumairen='".$_SESSION["username"]."' and issh='否'";
	$query=mysql_query($sql);
		$rowscount=mysql_num_rows($query);
		 if($rowscount==0)
		 {
		 	$goumaijinez=0;
			$ddnr="";
		 }
		 else
		 {
		 	 for($i=0;$i<$rowscount;$i++)
			 {
			 	$goumaijinez=$goumaijinez+mysql_result($query,$i,jiage)*mysql_result($query,$i,goumaishuliang);
				$ddnr=$ddnr."商品编号：".mysql_result($query,$i,shangpinbianhao). "CDK：".mysql_result($query,$i,CDK)."购买数量：".mysql_result($query,$i,goumaishuliang).";\n";
			 }
		 }
?>


<div >
              <div class="card-header"><h4>订单信息添加</h4></div>
              <div class="card-body">
                <form class="form-horizontal" action="?id=<?php echo $_GET["id"]?>" method="post" id="form1" name="form1" onSubmit="return check();"><input type="hidden" name="addnew" value="1" />
                 <div class='form-group'><label class='col-md-3 control-label'>订单号</label><div class='col-md-7'><input readonly type='text' class='form-control' value='<?php echo makefilename2()?>' name='dingdanhao' id='dingdanhao' style='width:45%' placeholder='请输入订单号' /></div></div>
    <div class='form-group'><label class='col-md-3 control-label'>订单金额</label><div class='col-md-7'><input type='text' class='form-control' value='<?php echo $goumaijinez?>' name='dingdanjine' id='dingdanjine' style='width:45%' placeholder='请输入订单金额' />
    </div>
    </div>
    <div class='form-group'><label class='col-md-3 control-label'>订单内容</label><div class='col-md-7'><textarea id='dingdanneirong' placeholder='' name='dingdanneirong' class='form-control'  style='width:75%'><?php echo $ddnr?></textarea>
</div>
    </div>
    <div class='form-group'><label class='col-md-3 control-label'>购买人</label><div class='col-md-7'><input type='text' class='form-control' value='<?php echo $_SESSION['username'];?>' style='width:45%;' name='goumairen' id='goumairen' readonly='readonly' /></div></div>
    <div class='form-group'><label class='col-md-3 control-label'>电话</label><div class='col-md-7'><input type='text' class='form-control' value='' name='dianhua' id='dianhua' style='width:45%' placeholder='请输入电话' /></div></div>
    <div class='form-group'><label class='col-md-3 control-label'>备注</label><div class='col-md-7'><textarea id='beizhu' placeholder='' name='beizhu' class='form-control'  style='width:75%'></textarea></div></div>
    
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
