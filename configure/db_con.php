<?php 
// include $_SERVER['DOCUMENT_ROOT'] . "/configure/mysql.php";

$host='z4.pims.co.kr';	# 호스트명 또는 IP
$user='n06578';			# Mysql 유저이름
$dbpass='skdbsdk';		# DB 패스워드
$dbname='n06578';		# 데이타 베이스 이름
										
$sock = mysql_connect($host,$user,$dbpass) or die(mysql_error());
$db = mysql_select_db($dbname,$sock);
mysql_query('SET NAMES utf8');
															
// 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  - key