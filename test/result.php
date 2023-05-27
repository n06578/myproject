<input type="button" value="검색조건 가지고 돌아가기" id="back"/>

<?
echo $_SERVER[ "QUERY_STRING" ];
?>

<script src="../js/jquery-2.0.0.min.js"></script>
<script>
    $("back").click(function(){

    })
</script>


<?
$a="1,442,944";
$b="10%";
echo "<br>";
$a= str_replace(",","",$a);
echo $a;
echo "<br>";
$b= str_replace("%","",$b);
echo "<br>";
echo (int)($a-($a*$b/100));
?>