<?php
$root="../../";
$contents = $_REQUEST["contents"];
?>
<form action="addProdOk.php" id="addProdOk">
    제품명 : <input type="text" name="Pname" /><br>
    제품분류 : 
    <select name="Pcontents" >
        <option value="outer" <?echo ($contents==""|| $contents=="outer")? "selected":  ""?>>outer</option>
        <option value="top" <?echo ($contents =="top")? "selected":""?>>top</option>
        <option value="pants" <?echo ($contents =='pants')? "selected":""?>>pants</option>
        <option value="skirt" <?echo ($contents =='skirt')? "selected":""?>>skirt</option>
        <option value="set" <?echo ($contents =='set')? "selected":""?>>set</option>
        <option value="bag" <?echo ($contents =='bag')? "selected":""?>>bag</option>
        <option value="shoes" <?echo ($contents =='shoes')? "selected":""?>>shoes</option>
        <option value="acc" <?echo ($contents =='acc')? "selected":""?>>acc</option>
    </select></br>
    제품컨셉 : <input type="text" name="Ptype" /><br>
    제품가격 : <input type="text" name="Pprice" /><br>
    색상종류 : <input type="text" name="Pcolor" /><br>
    <input type="button" id="submit" value="제품 등록하기 " />
</form>



<script type="text/javascript" src="<?=$root?>js/jquery-2.0.0.min.js"></script>
<!--데이터를 일일이 선언하지 않고  form에 있는 내용을 전부 전송하는 library-->
<script src="https://malsup.github.io/jquery.form.js"></script>
<script> 
$("#submit").click(function(e){
    if($("input[name='Pname']").val()==""||$("input[name='Pcontents']").val()==""||$("input[name='Ptype']").val()==""||$("input[name='Pprice']").val()==""||$("input[name='Pcolor']").val()==""){
        alert("해당 내용을 모두 작성해주세요");
        return false;
    }
   
    $("#addProdOk").ajaxSubmit({
        url : "addProdOk.php",
            type: 'post',
            success : function(html){
                console.log(html);
                if('<?=$contents?>'!=""){
                    var contents= $("input[name='Pcontents']").val()
                    location.href='../first/index.php?conents='+contents;
                }
            }
        });

});

</script>

