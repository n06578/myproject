<div id="modal-repass" class="modal">
  <div class="modal-background"></div>

  <div class="modal-content">
      
      <div class="box">
        <div class="field is-horizontal logoBox">
            <image src="style/logo2.png" class="ccustom" />
        </div>
        <div class="field is-horizontal">
            <div class="field-label is-normal">
                <label class="label">Id</label>
            </div>
            <div class="field-body">
                <div class="field">
                    <p class="control">
                        <input class="input f_id" type="text" name="f_id" id="f_id" placeholder="id">
                        <button class="button is-light f_check">아이디확인</button>
                        <input class="input id_ch" type="hidden"  id="id_ch" value="">
                      </p>
                </div>
            </div>
        </div>

        <div class="field is-horizontal">
            <div class="field-label is-normal">
                <label class="label">Password</label>
            </div>
            <div class="field-body">
                <div class="field">
                <p class="control">
                    <input class="input" type="password" id="f_password" placeholder="password">
                </p>
                </div>
            </div>
        </div>
        <div class="field is-horizontal">
            <div class="field-label is-normal">
                <label class="label">passwordCk</label>
            </div>
            <div class="field-body">
                <div class="field">
                <p class="control">
                    <input class="input" type="password" id="f_passwordCk" placeholder="password check">
                </p>
                </div>
            </div>
        </div>
        <div class="field is-horizontal">
            <div class="field-body alertBox">
                    <div class="alert alert-success" id="alert-success2">비밀번호가 일치합니다.</div>
                    <div class="alert alert-danger" id="alert-danger2">비밀번호가 일치하지 않습니다.</div>                
            </div>
        </div>



        <div class="field is-horizontal">
            <div class="field-body">
                <div class="field buttonGroup">
                    <p class="control has-icons-left has-icons-right">
                    <button class="button is-light change">변경하기</button>
                
                </div>
            </div>
        </div>
      <!-- Your content -->
    </div>
  </div>

  <button class="modal-close is-large" aria-label="close"></button>
</div>

<script>
$(function(){
        $("#alert-success2").hide();
        $("#alert-danger2").hide();
        $("#f_passwordCk").keyup(function(){
            var pwd1=$("#f_password").val();
            var pwd2=$("#f_passwordCk").val();
            if(pwd1 != "" || pwd2 != ""){
                if(pwd1 == pwd2){
                    $("#alert-success2").show();
                    $("#alert-danger2").hide();
                }else{
                    $("#alert-success2").hide();
                    $("#alert-danger2").show();
                }    
            }
        });
    });


$(".f_check").click(function(){
    if($("#f_id").val()==""){
        alert("아이디를 입력해주세요.");
        return false;
    }
    $.ajax({
        url: 'etc/ajax/register.php',
        type: 'post',
        data: "id="+$("#f_id").val()+"&mode=check",
        success : function(json){
            console.log(json.trim());
            if(json.trim()==""){
                alert("아이디가 확인되었습니다.");
            }else{
                alert("존재하지 않은 아이디입니다.");
                $("#f_id").val("");
                return false;
                $("#id_ch").val("ok");
            }
        }
    });
});



$(".change").click(function(){
    
    var pwd1=$("#f_password").val();
    var pwd2=$("#f_passwordCk").val();
    if($("#f_id").val()==""){
        alert("아이디를 입력해주세요.");
        return false;
    }
    if($("#f_password").val()==""){
        alert("비밀번호를 입력해주세요.");
        return false;
    }
    if($("#id_ch").val()==""){
        alert("아이디 중복 체크 해주세요.");
        return false;
    }
    if(pwd1 != "" || pwd2 != ""){
        if(pwd1 != pwd2){
            alert("비밀번호를 다시 입력해주세요.");
            return false;
        }
    }


    $.ajax({
        url: 'etc/ajax/register.php',
        type: 'post',
        data: "id="+$("#f_id").val()+"&password="+$("#f_password").val()+"&mode=repass",
        success : function(json){
            console.log(json);
            alert("비밀번호를 변경하였습니다.");
            location.reload();
        }
    });

});
</script>