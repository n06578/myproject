<?php
session_start();
$root="../"; // 모든 페이지의 경로가 달라 동일한 위치의 경로를 지정
include $_SERVER['DOCUMENT_ROOT']  . "/configure/db_con.php"; //db 연동
include $_SERVER['DOCUMENT_ROOT']  . "/setting/header.php";  //상단 메뉴바
?>
<div style="margin-top:100px;">
    <?include $_SERVER['DOCUMENT_ROOT']  . "/setting/navigation.php";  //이미지 슬라이드?>
    <div style="margin-top:50px;">        
        <div class="is-fluid box">
            <?
            $title = array("전체","아우터","상의","하의","원피스","신발<br>&<br>가방","악세<br>사리");
            for($i=0; $i<7; $i++){?>
            <div class="notification is-primary part<?=$i?>">
                <div class="level-item has-text-centered">
                    <div>
                        <p class="title title<?=$i?>"onclick="widthSize('<?=$i?>')"><a><?=$title[$i]?></a></p>
                        <!-- <br> -->
                        <!-- <p class="heading">part1</p> -->
                    </div>
                </div>
            </div>
            <?}?>
        </div>
        <div>

        </div>
    </div>
</div>
<?include $_SERVER['DOCUMENT_ROOT']  . "/setting/footer.php"; // 내용 출력?>
<script>
    $(function () {
        $(".part0").css("width","30%");
        $(".notification").not($(".part0")).css("width","10%");
    });
    function widthSize(i){
        $(".notification").not($(".part"+i)).css("width","10%");
        $(".part"+i).css("width","30%");
    }

</script>