 <script src="./qtimages/jquery-1.11.3.min.js"></script>
    <script src="./qtimages/sweetalert.min.js"></script>
    <script src="./qtimages/x-sweetalert.js"></script>
	<link rel="stylesheet" type="text/css" href="./qtimages/sweetalert.css">
 <script language="javascript">
function checklog()
{
	if(document.userlog.username.value=="" || document.userlog.pwd1.value=="" || document.userlog.yzm.value=="")
	{
		swal("����������");
		return false;
	}
}
</script>
<?php 
					if ($_SESSION['username']=="" )
					{
				?>
	  <form action="userlog_post.php" method="post" name="userlog" id="userlog">
 <table width='100%' height='302' border='0' cellpadding='0' cellspacing='0' bgcolor='#FFFFFF' >
                             
                              <tr>
                                <td width='40' height='28'>&nbsp;</td>
                                <td width='240' height='28' align="right" style="padding-right:10px;">�û���:</td>
                                <td height='28' colspan='2' align="left"><input name='username' type='text' id='username' placeholder='�������û���' class="user"  /></td>
                              </tr>
                              <tr>
                                <td height='28'>&nbsp;</td>
                             <td height='28' align="right" style="padding-right:10px;">����:</td>
                                <td height='28' colspan='2' align="left"><input name='pwd1' type='password' id='pwd1' placeholder='����������' class="user" /></td>
                              </tr>
                              <tr >
                                <td height='28'>&nbsp;</td>
                                <td height='28' align="right" style="padding-right:10px;">Ȩ��:</td>
                                <td height='28' colspan='2' align="left"><select name='cx' id='cx' class="xingbie" >
                                
<option value='�û�'>�û�</option>

                                </select></td>
                              </tr>
                              <tr >
                                <td height='28'>&nbsp;</td>
                                <td height='28' align="right" style="padding-right:10px;">��֤��:</td>
                                <td width='67' height='28' align="left"><input name="yzm" type="text" id="yzm" placeholder='��������֤��' class="password"  /></td>
                                <td width='653' align="left">&nbsp;&nbsp;<img alt="ˢ����֤��" onClick="this.src='code.php?time='+new Date().getTime();" src="code.php?time='+new Date().getTime();" style="cursor:pointer" /></td>
                              </tr>
                              <tr>
                                <td height='38' align='center'>&nbsp;</td>
                                <td height='38' align='left'>&nbsp;</td>
                                <td height='38' colspan='2' align="left"><input type='submit' name='Submit' value='��¼'  onclick='return checklog();' class="content-form-signup" />
                                <input type='reset' name='Submit2' value='����' class="content-form-signup" /></td>
                              </tr>
        </table>
		  </form>

								  
<?php 
							}
				  else
				  {
				 ?>

<table width='100%' height='300' border='0' align='center' cellpadding='0' cellspacing='0' bgcolor='#FFFFFF'>
                            <tr>
                              <td height='28' align='left' style='padding-left:20px; font-size:20px;'>��ǰ�û���<?php echo $_SESSION['username']?></td>
                            </tr>
							 <tr>
                              <td height='28' align='left' style='padding-left:20px; font-size:20px;'>����Ȩ�ޣ�<?php echo $_SESSION['cx']?></td>
                            </tr>
                            <tr>
                              <td height='28' align='left' style='padding-left:20px; font-size:20px;'>��ӭ���ĵ���!!!</td>
                            </tr>
                            <tr>
                              <td height='28' align='center'><input type='button' name='Submit3' value='�˳�' onclick="javascript:location.href='logout.php';"  />
                                  <input type='button' name='Submit22' value='���˺�̨' onclick="javascript:location.href='main.php';"  /></td>
                            </tr>
                          </table>
 <?php } ?>
