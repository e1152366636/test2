<?php
$conn=mysql_connect("localhost","root","") or die("连接失败");	
mysql_select_db("xsxk", $conn) or die("连接数据库失败");
mysql_query("SET NAMES 'gb2312'");
$XH=""
?>
<html >
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<head><title>查询学生学分</title>
<style type="text/css">
<!--
.STYLE1 {font-size: 18px; font-family: "黑体";}
-->
</style>
</head>
<body  bgcolor="D9DFAA">
	<div align="center"><font face="幼圆" size="5" color="#008000">
					<b>查询学生学分</b></font></div><br><br>
<form name="frm1" method="post">
<table width="350" align="center">
<tr><td><span class="STYLE1">学号：</span></td>
	<td><input type="text" name="XH" size="10">	</td>
	<td><input type="submit" name="select" value="查询"></td></tr>
</table>
</form>
<br><br>
<?php
if(isset($_POST['select']))
{
// **********found**********
$XH=（1）;
	if(!$XH)
		echo "<script>alert('输入不正确！')</script>;";
	else
	{ 
// **********found**********
		$sql="select sum(课程学分) from 课程,选课 where 选课.学号=$XH and（2）";
// **********found**********
		$result=（3）;
                $row=@mysql_fetch_row($result);
// **********found**********
		if(（4）)
			echo "<script>alert('无选课记录！')</script>;";
	}
}
?>
<table width="400" align="center">
<caption><font  size=5>查询结果</font></caption><br>
<tr><th><span class="STYLE1">学号</span></th>
    <th><span class="STYLE1">总学分</span></th><tr>
<tr><td align=center><span class="STYLE1"><?php echo $XH;?></span></td>
<!--// **********found**********-->
<td align=center><spanclass="STYLE1"><?php  echo@$row[（5）];?> 
<size="10"></span></td></tr>
</table>
</body>
</html>
