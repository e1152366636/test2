<?php
$conn=mysql_connect("localhost","root","") or die("����ʧ��");	
mysql_select_db("xsxk", $conn) or die("�������ݿ�ʧ��");
mysql_query("SET NAMES 'gb2312'");
$XH=""
?>
<html >
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<head><title>��ѯѧ��ѧ��</title>
<style type="text/css">
<!--
.STYLE1 {font-size: 18px; font-family: "����";}
-->
</style>
</head>
<body  bgcolor="D9DFAA">
	<div align="center"><font face="��Բ" size="5" color="#008000">
					<b>��ѯѧ��ѧ��</b></font></div><br><br>
<form name="frm1" method="post">
<table width="350" align="center">
<tr><td><span class="STYLE1">ѧ�ţ�</span></td>
	<td><input type="text" name="XH" size="10">	</td>
	<td><input type="submit" name="select" value="��ѯ"></td></tr>
</table>
</form>
<br><br>
<?php
if(isset($_POST['select']))
{
// **********found**********
$XH=��1��;
	if(!$XH)
		echo "<script>alert('���벻��ȷ��')</script>;";
	else
	{ 
// **********found**********
		$sql="select sum(�γ�ѧ��) from �γ�,ѡ�� where ѡ��.ѧ��=$XH and��2��";
// **********found**********
		$result=��3��;
                $row=@mysql_fetch_row($result);
// **********found**********
		if(��4��)
			echo "<script>alert('��ѡ�μ�¼��')</script>;";
	}
}
?>
<table width="400" align="center">
<caption><font  size=5>��ѯ���</font></caption><br>
<tr><th><span class="STYLE1">ѧ��</span></th>
    <th><span class="STYLE1">��ѧ��</span></th><tr>
<tr><td align=center><span class="STYLE1"><?php echo $XH;?></span></td>
<!--// **********found**********-->
<td align=center><spanclass="STYLE1"><?php  echo@$row[��5��];?> 
<size="10"></span></td></tr>
</table>
</body>
</html>
