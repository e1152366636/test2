TYPE=VIEW
query=select `db_emp`.`tb_employee`.`eno` AS `eno`,`db_emp`.`tb_employee`.`ename` AS `ename`,`db_emp`.`tb_employee`.`age` AS `age`,`db_emp`.`tb_employee`.`salary` AS `salary` from `db_emp`.`tb_employee` where (`db_emp`.`tb_employee`.`deptno` = (select `db_emp`.`tb_dept`.`deptno` from `db_emp`.`tb_dept` where (`db_emp`.`tb_dept`.`dname` = \'采购部\')))
md5=a64f50ba2ad2dcaef2c2525d85795cec
updatable=1
algorithm=0
definer_user=root
definer_host=localhost
suid=2
with_check_option=0
timestamp=2016-07-01 03:47:07
create-version=1
source=select eno,ename,age,salary from tb_employee where deptno=(select deptno from tb_dept where dname=\'采购部\')
client_cs_name=gbk
connection_cl_name=gbk_chinese_ci
view_body_utf8=select `db_emp`.`tb_employee`.`eno` AS `eno`,`db_emp`.`tb_employee`.`ename` AS `ename`,`db_emp`.`tb_employee`.`age` AS `age`,`db_emp`.`tb_employee`.`salary` AS `salary` from `db_emp`.`tb_employee` where (`db_emp`.`tb_employee`.`deptno` = (select `db_emp`.`tb_dept`.`deptno` from `db_emp`.`tb_dept` where (`db_emp`.`tb_dept`.`dname` = \'閲囪喘閮╘')))
