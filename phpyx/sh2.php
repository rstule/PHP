<?php
include_once 'conn.php';
	$id=$_GET["id"];
	$tablename=$_GET["tablename"];
	$addnew=$_POST["addnew"];
	if($addnew==1)
	{
	$sql="update ".$_POST["tablename"]." set issh='".$_POST["issh"]."',shhf='".$_POST["shhf"]."' where id=".$_POST["id"]."";
	
	 	mysql_query($sql);
		echo "<script language='javascript'>alert('��˳ɹ���');</script>";
	}
?>
<form id="form1" name="form1" method="post" action="">
  <table width="41%" border="1" align="center" cellpadding="0" cellspacing="0" bordercolor="9DC9FF" style="border-collapse:collapse">
    <tr>
      <td height="30" colspan="2"><div align="center">�������</div></td>
    </tr>
    <tr>
      <td>��˽����</td>
      <td height="30"><select name="issh" id="issh">
        <option value="�����">�����</option>
        <option value="��ͨ��">��ͨ��</option>
        <option value="δͨ��">δͨ��</option>
      </select>
	  <script language="javascript">document.form1.issh.value="<?php readzd($tablename,"issh","id",$id)?>";</script>
      <input name="addnew" type="hidden" id="addnew" value="1" /><input name="tablename" type="hidden" id="tablename" value="<?php echo $tablename?>" /><input name="id" type="hidden" id="id" value="<?php echo $id?>" /></td>
    </tr>
    <tr>
      <td>��˻ظ���</td>
      <td height="80"><textarea name="shhf" cols="50" rows="5" id="shhf"><?php readzd($tablename,"shhf","id",$id)?></textarea></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td height="30"><input type="submit" name="Submit" value="ȷ��"  />
      <input type="reset" name="Submit2" value="����" /></td>
    </tr>
  </table>
</form>