<html>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<head><title>ְ����Ϣ��ѯ�����ҳ��</title>
<style type="text/css">
<!--
.STYLE1 {font-size: 15px; font-family: "��Բ";}
-->
</style>
</head>
<body>
        <div align="center"><font face="��Բ" size="5" color="#008000">
					<b>ְ����Ϣ��ѯ�����</b></font></div><br><br>
<form name="frm1" method="post">
<table width="300" align="center">
<tr><td width="120"><span class="STYLE1">����ְ���Ų�ѯ:</span></td>
	<td><input name="ZGH" id="ZGH" type="text" size="10">	
<!-- **********found********** -->
	<input type=__________ name="select" class="STYLE1" value="��ѯ"></td></tr>
</table>
</form>
<?php
$conn=mysql_connect("localhost","root","") or die("����ʧ��");	
mysql_select_db("db_emp",$conn) or die("�������ݿ�ʧ��");	
mysql_query("SET NAMES 'gb2312'");				
$ZGH=@$_POST['ZGH'];			
//**********found**********
$sql="select eno, ename, age, salary, dname from tb_employee, tb_dept WHERE tb_employee.deptno=tb_dept.deptno and ___________";
	
$result=mysql_query($sql);	
$row=@mysql_fetch_array($result);				
if(($ZGH!=NULL)&&(!$row))						
	echo "<script>alert('��ְ����Ϣ�����ڣ�')</script>";
?>
<form name="frm2" method="post">
<table bgcolor="#CCCCCC" width="300" border="1" align="center" cellpadding="0" cellspacing="0">
<tr>	<td bgcolor="#CCCCCC" width="90"><span class="STYLE1">ְ����:</span></td>
	<td><input name="GH" type="text" class="STYLE1" value="<?php echo $row['eno']; ?>">
		<input name="h_GH" type="hidden" value="<?php echo $row['eno']; ?>"></td></tr>
<tr>	<td bgcolor="#CCCCCC" width="90"><span class="STYLE1">����:</span></td>
	<td><input name="XM" type="text" class="STYLE1" 
		value="<?php echo $row['ename']; ?>"></td></tr>
<tr><td bgcolor="#CCCCCC"><div class="STYLE1">����:</div></td>
	<td><input name="NL" type="text" class="STYLE1" 
		value="<?php echo $row['age']; ?>"></td></tr>	
<tr><td bgcolor="#CCCCCC"><span class="STYLE1">����:</span></td>
	<td><input name="GZ" type="text" class="STYLE1" 
		value="<?php echo $row['salary']; ?>"></td></tr>	
<tr><td bgcolor="#CCCCCC"><span class="STYLE1">��������:</span></td>
	<td><input name="BM" type="text" class="STYLE1" 
		value="<?php echo $row['dname']; ?>"></td></tr>	
<tr><td  align="center" colspan="2" bgcolor="#CCCCCC">
	<input name="b" type="submit" value="�޸�" class="STYLE1">&nbsp;
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
	    echo "<script>alert('ְ���Ų���Ϊ��!');location.href='sj3.php';</script>";
            exit;
        }
	elseif(!$XM){								
    	    echo "<script>alert('��������Ϊ��!');location.href='sj3.php';</script>";
            exit;
        }
	elseif(!is_numeric($NL)){								
    	    echo "<script>alert('�������Ϊ����!');location.href='sj3.php';</script>"; 				
	    exit;
        }
	elseif(!is_numeric($GZ)){								
    	    echo "<script>alert('���ʱ���Ϊ����!');location.href='sj3.php';</script>"; 				
	    exit;
        }
}
//**********found**********
if(@$_POST["b"]==________)						
{
	test($GH, $XM, $NL, $GZ);
//**********found**********
	if(____________)
     	 	echo "<script>alert('ְ�����ѱ仯���޷��޸�ְ����Ϣ!');</script>"; 
else
{
	$sql_update="UPDATE tb_employee SET ename='$XM', age='$NL', salary='$GZ' WHERE eno='$GH' ";
	$result_update =mysql_query($sql_update);
//**********found**********		
if(____________________($conn)!=0)
     	 	echo "<script>alert('�޸ĳɹ�!');</script>"; 
		else
     	 	echo "<script>alert('ְ����Ϣ�޸�ʧ��!');</script>"; 
	}
}
?>
