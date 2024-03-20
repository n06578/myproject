<?php
session_start();
include $_SERVER['DOCUMENT_ROOT']  . "/page/setting.php";  //연결 경로 지정
include $_SERVER['DOCUMENT_ROOT']  . "/configure/db_con.php"; // db 연결
include $_SERVER['DOCUMENT_ROOT']  . "/setting/header.php";  //상단 메뉴바
?>

<link rel="stylesheet" type="text/css" href="<?=$_SERVER['DOCUMENT_ROOT']?>/css/first/main.css" />
<div class="contents-box">
    <div class="contemts-top">
        <?include "mainContents.php"; // 내용 출력?>
    </div>
    <div class="contents">

    </div>
</div>
<div class="footer-box">
    <?include $_SERVER['DOCUMENT_ROOT']  . "/setting/footer.php"; // 내용 출력?>
</div>



<script>
    $(document).ready(function(){
        getContent('all');
    });
$(".container ul li").click(function(e){
    // console.log($(this).val);
    var contents =$(this).attr('id'); //이벤트가 발생한 class명 가져오기 
    var afterClick =$(this).closest('li');
    $(this).siblings('li').removeClass("is-active");
    $(this).addClass('is-active');
    console.log(contents);

    // 클릭한 내용의 대한 data를 가져올 수 있도록 하는 ajax 통신
    getContent(contents)
});


function getContent(contents){
    $.ajax({
        url : "contents.php",
        data : "contents="+contents,
        success : function(html){
            $(".contents").html(html);
        }
    });
}
</script>