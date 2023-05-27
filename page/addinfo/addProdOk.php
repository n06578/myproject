<?php
include $_SERVER['DOCUMENT_ROOT']  . "/configure/db_con.php"; // db 연결

$data = $_REQUEST;
$myArray = array();
foreach ($data as $key => $value) {
    if($key=="Pcontents"){
        $pid = strtoupper(substr($value,0,2));
        $que_id =  "select * from prodInfo where pid like '".$pid."%' order by pid desc";
        $res_id = mysql_query($que_id);
        $count_id = mysql_num_rows($res_id);
        if($count_id == 0){
            $count_id =0;
        }
        $count = sprintf("%04d",$count_id + 1);
        $queryData.=  "pid='".$pid.$count ."',";   
    }
        $myArray[$key] = $value;
        $queryData.=  $key."='".$myArray[$key]."',";        
}

$que = "insert into prodInfo set ".substr($queryData,0,-1);
mysql_query($que);
?>