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
    $tupian=$_POST["tupian"];
    $beizhu=$_POST["beizhu"];
    
	
	
	
	
	
	
	$sql="insert into shangpinxinxi(shangpinbianhao,shangpinmingcheng,jiage,kucun,xiaoliang,CDK,tupian,beizhu) values('$shangpinbianhao','$shangpinmingcheng','$jiage','$kucun','$xiaoliang','$CDK','$tupian','$beizhu') ";
	mysql_query($sql);
	
	
	echo "<script>javascript:alert('�����ɹ�!');history.back();</script>";



}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>��Ʒ��Ϣ</title>

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
	if(document.form1.shangpinmingcheng.value==""){$.alert("��������Ʒ����");document.form1.shangpinmingcheng.focus();return false;}
    if(document.form1.jiage.value==""){$.alert("������۸�");document.form1.jiage.focus();return false;}
    if((/^[0-9]+.?[0-9]*$/.test(document.form1.jiage.value))){}else{$.alert("�۸����������");document.form1.jiage.focus();return false;}
    if(document.form1.kucun.value==""){$.alert("��������");document.form1.kucun.focus();return false;}
    if((/^[0-9]+.?[0-9]*$/.test(document.form1.kucun.value))){}else{$.alert("������������");document.form1.kucun.focus();return false;}
    
}
	function gow()
	{
		location.href='shangpinxinxi_add.php?jihuabifffanhao='+document.form1.jihuabifffanhao.value+"&id=<?php echo $_GET["id"]?>";
	}
	function hsgxia2shxurxu(nstr,nwbk)
{
	if (eval("form1."+nwbk).value.indexOf(nstr)>=0)
	{
		eval("form1."+nwbk).value=eval("form1."+nwbk).value.replace(nstr+"��", "");
	}
	else
	{
		eval("form1."+nwbk).value=eval("form1."+nwbk).value+nstr+"��";
	}
}
</script>



<div >
              <div class="card-header"><h4>��Ʒ��Ϣ���</h4></div>
              <div class="card-body">
                <form class="form-horizontal" action="?id=<?php echo $_GET["id"]?>" method="post" id="form1" name="form1" onSubmit="return check();"><input type="hidden" name="addnew" value="1" />
                 <div class='form-group'><label class='col-md-3 control-label'>��Ʒ���</label><div class='col-md-7'><input type='text' class='form-control' value='<?php echo makefilename2()?>' name='shangpinbianhao' id='shangpinbianhao' style='width:45%' placeholder='��������Ʒ���' /></div></div>
    <div class='form-group'><label class='col-md-3 control-label'>��Ʒ����</label><div class='col-md-7'><input type='text' class='form-control' value='' name='shangpinmingcheng' id='shangpinmingcheng' style='width:45%' placeholder='��������Ʒ����' /></div></div>
    <div class='form-group'><label class='col-md-3 control-label'>�۸�</label><div class='col-md-7'><input type='text' class='form-control' value='' name='jiage' id='jiage' style='width:45%' placeholder='������۸�' /></div></div>
    <div class='form-group'><label class='col-md-3 control-label'>���</label><div class='col-md-7'><input type='text' class='form-control' value='' name='kucun' id='kucun' style='width:45%' placeholder='��������' /></div></div>
    <div class='form-group'><label class='col-md-3 control-label'>����</label><div class='col-md-7'><input type='text' class='form-control' value='' name='xiaoliang' id='xiaoliang' style='width:45%' placeholder='����������' /></div></div>
    <div class='form-group'><label class='col-md-3 control-label'>CDK</label><div class='col-md-7'><input type='text' class='form-control' value='BGRBZBZG3K' name='CDK' id='CDK' style='width:45%' placeholder='������CDK' />
    </div></div>
    <div class='form-group'><label class='col-md-3 control-label'>ͼƬ</label><div class='col-md-7'><input name='tupian' type='text' id='tupian' data-place='right' class='form-control'  style='width:75%; float:left;'/>&nbsp;<input type='button' name='Submit2' class='btn btn-primary' value='�ϴ�' onClick="javaScript:OpenScript('upfile.php?Result=tupian',600,500)" /></div></div>
    <div class='form-group'><label class='col-md-3 control-label'>��ע</label><div class='col-md-7'><textarea id='beizhu' placeholder='' name='beizhu' class='form-control'  style='width:75%'></textarea></div></div>
    
				 <div class="form-group">
                    <div class="col-md-9 col-md-offset-3">
                      <button class="btn btn-primary" type="submit" onClick="return check();"><i class="mdi mdi-check"></i> ���</button>
                    </div>
                  </div>
                </form>
              </div>
            </div>
<p>&nbsp;</p>

</body>
</html>
