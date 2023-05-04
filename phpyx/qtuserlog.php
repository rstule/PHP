 <script src="./qtimages/jquery-1.11.3.min.js"></script>
    <script src="./qtimages/sweetalert.min.js"></script>
    <script src="./qtimages/x-sweetalert.js"></script>
	<link rel="stylesheet" type="text/css" href="./qtimages/sweetalert.css">
 <script language="javascript">
function checklog()
{
	if(document.userlog.username.value=="" || document.userlog.pwd1.value=="" || document.userlog.yzm.value=="")
	{
		swal("请输入完整");
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
                                <td width='240' height='28' align="right" style="padding-right:10px;">用户名:</td>
                                <td height='28' colspan='2' align="left"><input name='username' type='text' id='username' placeholder='请输入用户名' class="user"  /></td>
                              </tr>
                              <tr>
                                <td height='28'>&nbsp;</td>
                             <td height='28' align="right" style="padding-right:10px;">密码:</td>
                                <td height='28' colspan='2' align="left"><input name='pwd1' type='password' id='pwd1' placeholder='请输入密码' class="user" /></td>
                              </tr>
                              <tr >
                                <td height='28'>&nbsp;</td>
                                <td height='28' align="right" style="padding-right:10px;">权限:</td>
                                <td height='28' colspan='2' align="left"><select name='cx' id='cx' class="xingbie" >
                                
<option value='用户'>用户</option>

                                </select></td>
                              </tr>
                              <tr >
                                <td height='28'>&nbsp;</td>
                                <td height='28' align="right" style="padding-right:10px;">验证码:</td>
                                <td width='67' height='28' align="left"><input name="yzm" type="text" id="yzm" placeholder='请输入验证码' class="password"  /></td>
                                <td width='653' align="left">&nbsp;&nbsp;<img alt="刷新验证码" onClick="this.src='code.php?time='+new Date().getTime();" src="code.php?time='+new Date().getTime();" style="cursor:pointer" /></td>
                              </tr>
                              <tr>
                                <td height='38' align='center'>&nbsp;</td>
                                <td height='38' align='left'>&nbsp;</td>
                                <td height='38' colspan='2' align="left"><input type='submit' name='Submit' value='登录'  onclick='return checklog();' class="content-form-signup" />
                                <input type='reset' name='Submit2' value='重置' class="content-form-signup" /></td>
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
                              <td height='28' align='left' style='padding-left:20px; font-size:20px;'>当前用户：<?php echo $_SESSION['username']?></td>
                            </tr>
							 <tr>
                              <td height='28' align='left' style='padding-left:20px; font-size:20px;'>您的权限：<?php echo $_SESSION['cx']?></td>
                            </tr>
                            <tr>
                              <td height='28' align='left' style='padding-left:20px; font-size:20px;'>欢迎您的到来!!!</td>
                            </tr>
                            <tr>
                              <td height='28' align='center'><input type='button' name='Submit3' value='退出' onclick="javascript:location.href='logout.php';"  />
                                  <input type='button' name='Submit22' value='个人后台' onclick="javascript:location.href='main.php';"  /></td>
                            </tr>
                          </table>
 <?php } ?>
