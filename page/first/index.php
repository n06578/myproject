<?php
session_start();
include $_SERVER['DOCUMENT_ROOT']  . "/page/setting.php";  //연결 경로 지정
include $_SERVER['DOCUMENT_ROOT']  . "/configure/db_con.php"; // db 연결
include $_SERVER['DOCUMENT_ROOT']  . "/setting/header.php";  //상단 메뉴바
?>

<link rel="stylesheet" type="text/css" href="<?=$root?>/css/first/main.css" />
<div style="margin-top:100px;">
    <?include "mainContents.php"; // 내용 출력?>
    <div class="contents">
    </div>
</div>

<?include $_SERVER['DOCUMENT_ROOT']  . "/setting/footer.php"; // 내용 출력
?>



<script>
$(".container ul li").click(function(e){
    // console.log($(this).val);
    var contents =$(this).attr('id'); //이벤트가 발생한 class명 가져오기 
    var afterClick =$(this).closest('li');
    $(this).siblings('li').removeClass("is-active");
    $(this).addClass('is-active');
    console.log(contents);

    // 클릭한 내용의 대한 data를 가져올 수 있도록 하는 ajax 통신
    $.ajax({
        url : "contents.php",
        data : "contents="+contents,
        success : function(html){
            $(".contents").html(html);
        }
    });
});

</script>