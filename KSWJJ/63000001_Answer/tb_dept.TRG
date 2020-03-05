TYPE=TRIGGERS
triggers='CREATE DEFINER=`root`@`localhost` trigger tr_emp after DELETE\nON tb_dept \nFOR EACH row\nUPDATE tb_employee \nSET deptno=\'\' \nWHERE deptno=(select deptno from tb_dept)'
sql_modes=1344274432
definers='root@localhost'
client_cs_names='gbk'
connection_cl_names='gbk_chinese_ci'
db_cl_names='latin1_swedish_ci'
