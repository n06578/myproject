
<?php
session_start();


if($_SESSION['SAVE_ID']=="on"){
    $_SESSION['USER_NAME']="";
    $_SESSION['SAVE_LOGIN']="";
    
}else{
    $_SESSION['USER_ID']="";
    $_SESSION['USER_NAME']="";
    $_SESSION['SAVE_ID']="";
    $_SESSION['SAVE_LOGIN']="";
}
echo "<script>location='".$root."index.php';</script>";
?>

