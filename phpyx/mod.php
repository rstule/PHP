<?php
session_start();
include_once 'conn.php';
	$addnew=$_POST["addnew"];
	if($addnew=="1")
	{
	$username=$_POST['username'];
	$pwd=$_POST['xmm1'];
	$pwdy=$_POST['ymm'];
	$sql="select * from allusers where username='".$_SESSION['username']."'";
		$query=mysql_query($sql);
		$rowscount=mysql_num_rows($query);
		if($rowscount>0)
			{
					if(mysql_result($query,0,"pwd")==$pwdy)
					{
					$sql="update allusers set pwd='$pwd' where username='".$_SESSION['username']."'";
					$query=mysql_query($sql);
					echo "<script language='javascript'>alert('�޸ĳɹ���');history.back();</script>";
					}
					else
					{
					echo "<script language='javascript'>alert('�Բ���,ԭ���벻��ȷ��');history.back();</script>";
					}
			}
			else
			{
					echo "<script language='javascript'>alert('�Բ���,ԭ���벻��ȷ��');history.back();</script>";
			}
	 }
?>

<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>�޸�����</title>
<script type="text/javascript" src="ny/js/jquery.min.js"></script>
<script type="text/javascript" src="ny/js/bootstrap.min.js"></script>
<script src="ny/js/jconfirm/jquery-confirm.min.js"></script>
<link href="ny/css/bootstrap.min.css" rel="stylesheet">
<link href="ny/css/materialdesignicons.min.css" rel="stylesheet">
<link href="ny/css/style.min.css" rel="stylesheet">
<link rel="stylesheet" href="ny/js/jconfirm/jquery-confirm.min.css">
</head>
<script>
function check()
{
	if(document.form1.ymm.value=="")
	{
		
		$.alert("������ԭ����");
		
		document.form1.ymm.focus();
		return false;
	}
	if(document.form1.xmm1.value=="")
	{
	
		$.alert("������������");
		document.form1.xmm1.focus();
		return false;
	}
	if(document.form1.xmm2.value=="")
	{
		$.alert("������ȷ������");
		document.form1.xmm2.focus();
		return false;
	}
	if (document.form1.xmm1.value!=document.form1.xmm2.value)
	{
		$.alert("�Բ����������벻һ��������������");
		document.form1.xmm1.value="";
		document.form1.xmm2.value="";
		document.form1.xmm1.focus();
		return false;
	}
}

</script>
<body>
<div >
              <div class="card-header"><h4>�޸�����</h4></div>
              <div class="card-body">
<form id="form1" class="form-horizontal" name="form1" method="post" action="mod.php" onSubmit="return check();"><input type="hidden" name="addnew" value="1" />
 <div class='form-group'><label class='col-md-3 control-label'>�û���</label><div class='col-md-7'><input type='password' class='form-control' value='' name='ymm' id='ymm' style='width:45%' placeholder='' /></div></div>
 <div class='form-group'><label class='col-md-3 control-label'>����</label><div class='col-md-7'><input type='password' class='form-control' value='' name='xmm1' id='xmm1' style='width:45%' placeholder='' /></div></div>
 <div class='form-group'><label class='col-md-3 control-label'>ȷ������</label><div class='col-md-7'><input type='password' class='form-control' value='' name='xmm2' id='xmm2' style='width:45%' placeholder='' /></div></div>
      
	

   <div class="form-group">
                    <div class="col-md-9 col-md-offset-3">
                      <button class="btn btn-primary" type="submit" onClick="return check();"><i class="mdi mdi-check"></i> ȷ��</button>
                    </div>
                  </div>

</form>
   </div>
            </div>
			

</body>
</html>
