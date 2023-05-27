
<?php
session_start();
include $_SERVER['DOCUMENT_ROOT']  . "/configure/db_con.php";


$que = "select * from userInfo where userId='".$_REQUEST['id']."' and userPd = '".$_REQUEST['password']."' ";
$res = mysql_query($que);
$count = mysql_num_rows($res);
if($count == 0 ){
    echo "<script>alert('아이디 및 비밀번호가 틀렸습니다.'); location='index.php';</script>";
}else{
    $row = mysql_fetch_array($res);
    $_SESSION['USER_ID']=$row["userId"];
    $_SESSION['USER_NAME']=$row["userName"];
    $_SESSION['SAVE_ID']=$_REQUEST["remId"];
    $_SESSION['SAVE_LOGIN']=$_REQUEST["remLogin"];
}
echo "<script>location='page/index.php';</script>";
?>

