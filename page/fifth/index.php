<?php
session_start();
include $_SERVER['DOCUMENT_ROOT']  . "/page/setting.php";  //연결 경로 지정
include $_SERVER['DOCUMENT_ROOT']  . "/configure/db_con.php"; // db 연결
include $_SERVER['DOCUMENT_ROOT']  . "/setting/header.php";  //상단 메뉴바?>

<div style="margin-top:50px;">
    <?
    include $_SERVER['DOCUMENT_ROOT']  . "/setting/mainContents.php"; // 내용 출력
    ?>
</div>
<?include $_SERVER['DOCUMENT_ROOT']  . "/setting/footer.php"; // 내용 출력?>