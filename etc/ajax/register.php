
<?php
include $_SERVER['DOCUMENT_ROOT']  . "/configure/db_con.php";

if($_REQUEST['mode']=="check"){
    $que = "select * from userInfo where userId='".$_REQUEST['id']."'";
    $res = mysql_query($que);
    $count = mysql_num_rows($res);
    if($count==0){
        echo "ok";
    }else{
        echo "";
    }
}
else if($_REQUEST['mode']=="register"){
    $que="insert into userInfo set 
    userId ='".$_REQUEST['id']."',
    userPd ='".$_REQUEST['password']."',
    userName ='".$_REQUEST['name']."'
    ";
    $res=mysql_query($que);
    echo $que;
}

else if($_REQUEST['mode']=="repass"){
    $que="update userInfo set 
    userPd ='".$_REQUEST['password']."'
    where userId ='".$_REQUEST['id']."'
    ";
    $res=mysql_query($que);
    echo $que;
}else{
    
}       
?>
