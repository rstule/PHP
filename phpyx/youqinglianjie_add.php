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
	$wangzhanmingcheng=$_POST["wangzhanmingcheng"];
    $wangzhi=$_POST["wangzhi"];
    $LOGO=$_POST["LOGO"];
    
	
	
	
	
	
	
	$sql="insert into youqinglianjie(wangzhanmingcheng,wangzhi,LOGO) values('$wangzhanmingcheng','$wangzhi','$LOGO') ";
	mysql_query($sql);
	
	
	echo "<script>javascript:alert('操作成功!');history.back();</script>";



}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>友情连接</title>

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
	if(document.form1.wangzhanmingcheng.value==""){$.alert("请输入网站名称");document.form1.wangzhanmingcheng.focus();return false;}
    if(document.form1.wangzhi.value==""){$.alert("请输入网址");document.form1.wangzhi.focus();return false;}
    if(/^([hH][tT]{2}[pP]:\/\/|[hH][tT]{2}[pP][sS]:\/\/)(([A-Za-z0-9-~]+)\.)+([A-Za-z0-9-~\/])+$/.test(document.form1.wangzhi.value)){}else{$.alert("网址必需网址格式");document.form1.wangzhi.focus();return false;}
    
}
	function gow()
	{
		location.href='youqinglianjie_add.php?jihuabifffanhao='+document.form1.jihuabifffanhao.value+"&id=<?php echo $_GET["id"]?>";
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



<div >
              <div class="card-header"><h4>友情连接添加</h4></div>
              <div class="card-body">
                <form class="form-horizontal" action="?id=<?php echo $_GET["id"]?>" method="post" id="form1" name="form1" onSubmit="return check();"><input type="hidden" name="addnew" value="1" />
                 <div class='form-group'><label class='col-md-3 control-label'>网站名称</label><div class='col-md-7'><input class='form-control' type='text' id='wangzhanmingcheng' name='wangzhanmingcheng'  placeholder='请输入网站名称..' style='width:75%'></div></div>
    <div class='form-group'><label class='col-md-3 control-label'>网址</label><div class='col-md-7'><input class='form-control' type='text' id='wangzhi' name='wangzhi'  placeholder='请输入网址..' style='width:75%'></div></div>
    <div class='form-group'><label class='col-md-3 control-label'>LOGO</label><div class='col-md-7'><input name='LOGO' type='text' id='LOGO' data-place='right' class='form-control'  style='width:75%; float:left;'/>&nbsp;<input type='button' name='Submit2' class='btn btn-primary' value='上传' onClick="javaScript:OpenScript('upfile.php?Result=LOGO',460,180)" /></div></div>
    
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
