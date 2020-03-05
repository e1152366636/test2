<html>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<head><title>员工管理统计信息</title>
</head>
</html>

<?php
$host="localhost"; $user="root"; $pwd="";
$db_name="db_yggl";
$conn=mysql_connect($host,$user,$pwd) 
	or die("连接数据库服务器失败。".mysql_error());
mysql_select_db($db_name,$conn)
	or die("连接数据库失败。".mysql_error());
mysql_query("set names 'gb2312'");

$cmd="select * from tb_emp";
$data=mysql_query($cmd);
//**********found**********
$rec_count=mysql_num_rows(___$data____);
echo "<table width=220 border=1 align=center>";
echo "<caption>员工情况表</caption>";
//**********found**********
echo "<tr><td>总人数</td><td>_______$rec_count____________</td></tr>";
$sql="select * from tb_emp where sex='男'";
$result=mysql_query($sql);
$count_m=mysql_num_rows($result);
//**********found**********
$count_f=$rec_count-______$count_m_______;
echo "<tr><td>男</td><td>$count_m</td></tr>";
echo "<tr><td>女</td><td>$count_f</td></tr>";
echo "</table><br><br>";

echo "<table width=460 border=1 align=center>";
echo "<caption>部门统计信息<br>";
echo "<tr><td>部门名称</td><td>员工人数</td><td>平均年龄</td><td>平均工资</td></tr>";

$sql="SELECT deptname, COUNT(*),AVG(YEAR(CURDATE())-birth),AVG(salary) FROM tb_emp,tb_dept ";  
//**********found**********
$sql=$sql."WHERE tb_emp.deptno=tb_dept.deptno GROUP BY ________deptname______";

$result=mysql_query($sql);
while($row=mysql_fetch_row($result))
  {list($BM,$RS,$PJNL,$PJGZ)=$row;
   echo "<tr><td>$BM</td><td>$RS</td><td>$PJNL</td><td>$PJGZ</td></tr>";
  }
//**********found**********
$sql="SELECT COUNT(*),AVG(YEAR(CURDATE())-birth),AVG(salary) FROM tb_emp WHERE tb_emp.deptno __=tb_dept.deptno__________";
$result=mysql_query($sql); 
$row=mysql_fetch_row($result);
list($RS,$PJNL,$PJGZ)=$row;
echo "<tr><td>未分配</td><td>$RS</td><td>$PJNL</td><td>$PJGZ</td></tr>";
echo "</table>";
?>
