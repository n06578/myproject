
<?php
include $_SERVER['DOCUMENT_ROOT']  . "/page/setting.php";  //연결 경로 지정
include $_SERVER['DOCUMENT_ROOT']  . "/configure/db_con.php"; // db 연결
$contents = $_REQUEST['contents'];
$que = "select * from prodInfo where Pcontents='".$contents."'";
$res = mysql_query($que);
$count = mysql_num_rows($res);
$i=0;
while($row= mysql_fetch_array($res)){
    if($i%5==0){
        echo '<div class="is-fluid box">';
    }
?>
    <div class="notification is-primary part1">
        <div class="level-item has-text-centered">
            <div>
                <p class="title"><?=$row['Pcontents']?></p>
                <br>
                <p class="heading">part1</p>
            </div>
        </div>
    </div>
<? if($i!=0 && $i%5==0){
        echo '</div>';
    }
    $i++;
}
if($count ==0){?>
   등록된 내용이 존재하지 않습니다.
   <input type="button" onclick="addProd('<?=$contents?>')" value="상품 등록하기">
<?}?>



<script>
function addProd(contents){
    location.href="../addinfo/addProd.php?contents="+contents;
}
</script>