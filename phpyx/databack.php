<?php
session_start();
include_once 'conn.php';




$dbname = $database; //���ݿ�����
// ������˺š����롢���ƶ��Ǵ�ҳ�洫������
if (!mysql_connect($host, $user, $password)) // ����mysql���ݿ�
    {
        echo '���ݿ�����ʧ�ܣ���˶Ժ�����';
    exit;
} 
if (!mysql_select_db($dbname)) // �Ƿ���ڸ����ݿ�
    {
        echo '���������ݿ�:' . $dbname . ',��˶Ժ�����';
    exit;
} 
mysql_query("set names 'utf8'");
$mysql = "set charset utf8;\r\n";
$q1 = mysql_query("show tables");
while ($t = mysql_fetch_array($q1))
{
    $table = $t[0];
    $q2 = mysql_query("show create table `$table`");
    $sql = mysql_fetch_array($q2);
    $mysql .= $sql['Create Table'] . ";\r\n";
    $q3 = mysql_query("select * from `$table`");
    while ($data = mysql_fetch_assoc($q3))
    {
        $keys = array_keys($data);
        $keys = array_map('addslashes', $keys);
        $keys = join('`,`', $keys);
        $keys = "`" . $keys . "`";
        $vals = array_values($data);
        $vals = array_map('addslashes', $vals);
        $vals = join("','", $vals);
        $vals = "'" . $vals . "'";
        $mysql .= "insert into `$table`($keys) values($vals);\r\n";
    } 
} 
 
$filename = $dbname . date('Ymjgi') . ".sql"; //���·����Ĭ�ϴ�ŵ���Ŀ�����
$fp = fopen($filename, 'w');
fputs($fp, $mysql);
fclose($fp);
echo "<script>javascript:alert('���ݳɹ���');location.href='sy.php';</script>";
 
?>
	
//}
?>