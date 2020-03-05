<html>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<head><title>职工信息查询与更新页面</title>
<style type="text/css">
<!--
.STYLE1 {font-size: 15px; font-family: "幼圆";}
-->
</style>
</head>
<body>
        <div align="center"><font face="幼圆" size="5" color="#008000">
					<b>职工信息查询与更新</b></font></div><br><br>
<form name="frm1" method="post">
<table width="300" align="center">
<tr><td width="120"><span class="STYLE1">根据职工号查询:</span></td>
	<td><input name="ZGH" id="ZGH" type="text" size="10">	
<!-- **********found********** -->
	<input type=__________ name="select" class="STYLE1" value="查询"></td></tr>
</table>
</form>
<?php
$conn=mysql_connect("localhost","root","") or die("连接失败");	
mysql_select_db("db_emp",$conn) or die("连接数据库失败");	
mysql_query("SET NAMES 'gb2312'");				
$ZGH=@$_POST['ZGH'];			
//**********found**********
$sql="select eno, ename, age, salary, dname from tb_employee, tb_dept WHERE tb_employee.deptno=tb_dept.deptno and ___________";
	
$result=mysql_query($sql);	
$row=@mysql_fetch_array($result);				
if(($ZGH!=NULL)&&(!$row))						
	echo "<script>alert('该职工信息不存在！')</script>";
?>
<form name="frm2" method="post">
<table bgcolor="#CCCCCC" width="300" border="1" align="center" cellpadding="0" cellspacing="0">
<tr>	<td bgcolor="#CCCCCC" width="90"><span class="STYLE1">职工号:</span></td>
	<td><input name="GH" type="text" class="STYLE1" value="<?php echo $row['eno']; ?>">
		<input name="h_GH" type="hidden" value="<?php echo $row['eno']; ?>"></td></tr>
<tr>	<td bgcolor="#CCCCCC" width="90"><span class="STYLE1">姓名:</span></td>
	<td><input name="XM" type="text" class="STYLE1" 
		value="<?php echo $row['ename']; ?>"></td></tr>
<tr><td bgcolor="#CCCCCC"><div class="STYLE1">年龄:</div></td>
	<td><input name="NL" type="text" class="STYLE1" 
		value="<?php echo $row['age']; ?>"></td></tr>	
<tr><td bgcolor="#CCCCCC"><span class="STYLE1">工资:</span></td>
	<td><input name="GZ" type="text" class="STYLE1" 
		value="<?php echo $row['salary']; ?>"></td></tr>	
<tr><td bgcolor="#CCCCCC"><span class="STYLE1">部门名称:</span></td>
	<td><input name="BM" type="text" class="STYLE1" 
		value="<?php echo $row['dname']; ?>"></td></tr>	
<tr><td  align="center" colspan="2" bgcolor="#CCCCCC">
	<input name="b" type="submit" value="修改" class="STYLE1">&nbsp;
	</td></tr>
</table>
</form>
</body>
</html>

<?php
$GH=@$_POST['GH'];				
$h_GH=@$_POST['h_GH'];		
$XM=@$_POST['XM'];			
$NL=@$_POST['NL'];		
$GZ=@$_POST['GZ'];				
$BM=@$_POST['BM'];			

Function test($GH, $XM, $NL, $GZ)
{	
        if(!$GH){									
	    echo "<script>alert('职工号不能为空!');location.href='sj3.php';</script>";
            exit;
        }
	elseif(!$XM){								
    	    echo "<script>alert('姓名不能为空!');location.href='sj3.php';</script>";
            exit;
        }
	elseif(!is_numeric($NL)){								
    	    echo "<script>alert('年龄必须为数字!');location.href='sj3.php';</script>"; 				
	    exit;
        }
	elseif(!is_numeric($GZ)){								
    	    echo "<script>alert('工资必须为数字!');location.href='sj3.php';</script>"; 				
	    exit;
        }
}
//**********found**********
if(@$_POST["b"]==________)						
{
	test($GH, $XM, $NL, $GZ);
//**********found**********
	if(____________)
     	 	echo "<script>alert('职工号已变化，无法修改职工信息!');</script>"; 
else
{
	$sql_update="UPDATE tb_employee SET ename='$XM', age='$NL', salary='$GZ' WHERE eno='$GH' ";
	$result_update =mysql_query($sql_update);
//**********found**********		
if(____________________($conn)!=0)
     	 	echo "<script>alert('修改成功!');</script>"; 
		else
     	 	echo "<script>alert('职工信息修改失败!');</script>"; 
	}
}
?>
