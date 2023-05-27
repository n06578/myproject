<?php 
include $_SERVER['DOCUMENT_ROOT'] . "/configure/mysql.php";
$host='localhost';												# 호스트명 또는 IP
$user='everytest';												# Mysql 유저이름
$dbpass='Nyoun003310!';												# DB 패스워드
$dbname='everytest';	
										# 데이타 베이스 이름

$sock = mysql_connect($host,$user,$dbpass);
$db = mysql_select_db($dbname,$sock);

mysql_query('set names utf8');

?>
