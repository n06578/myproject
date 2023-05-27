<div id="modal-register" class="modal">
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
                        <input class="input r_id" type="text" name="r_id" id="r_id" placeholder="id">
                        <button class="button is-light check">중복확인</button>
                        <input class="input id_ch" type="hidden"  id="id_ch" value="">
                      </p>
                </div>
            </div>
        </div>


        <div class="field is-horizontal">
            <div class="field-label is-normal">
                <label class="label">Name</label>
            </div>
            <div class="field-body">
                <div class="field">
                    <p class="control">
                        <input class="input" id="r_name" type="text" placeholder="name">
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
                    <input class="input" type="password" id="r_password" placeholder="password">
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
                    <input class="input" type="password" id="r_passwordCk" placeholder="password check">
                </p>
                </div>
            </div>
        </div>
        <div class="field is-horizontal">
            <div class="field-body alertBox">
                    <div class="alert alert-success" id="alert-success">비밀번호가 일치합니다.</div>
                    <div class="alert alert-danger" id="alert-danger">비밀번호가 일치하지 않습니다.</div>                
            </div>
        </div>



        <div class="field is-horizontal">
            <div class="field-body">
                <div class="field buttonGroup">
                    <p class="control has-icons-left has-icons-right">
                    <button class="button is-light register">회원가입</button>
                
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
        $("#alert-success").hide();
        $("#alert-danger").hide();
        $("#r_passwordCk").keyup(function(){
            var pwd1=$("#r_password").val();
            var pwd2=$("#r_passwordCk").val();
            if(pwd1 != "" || pwd2 != ""){
                if(pwd1 == pwd2){
                    $("#alert-success").show();
                    $("#alert-danger").hide();
                }else{
                    $("#alert-success").hide();
                    $("#alert-danger").show();
                }    
            }
        });
    });


$(".check").click(function(){
    if($("#r_id").val()==""){
        alert("??");
        alert("아이디를 입력해주세요.");
        return false;
    }
    
    $.ajax({
        url: 'etc/ajax/register.php',
        type: 'post',
        data: "id="+$("#r_id").val()+"&mode=check",
        success : function(json){
            if(json.trim()!=""){
                alert("사용가능한 아이디입니다.");
                $("#id_ch").val("ok");
            }else{
                alert("존재하는 아이디입니다.");
                $("#r_id").val("");
                return false;
            }
        }
    });
});



$(".register").click(function(){
    
    var pwd1=$("#r_password").val();
    var pwd2=$("#r_passwordCk").val();
    if($("#r_id").val()==""){
        alert("아이디를 입력해주세요.");
        return false;
    }
    if($("#r_name").val()==""){
        alert("이름을 입력해주세요.");
        return false;
    }
    if($("#r_password").val()==""){
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
        data: "id="+$("#r_id").val()+"&name="+$("#r_name").val()+"&password="+$("#r_password").val()+"&mode=register",
        success : function(json){
            console.log(json);
            alert("회원가입이 완료되었습니다.");
            location.reload();
        }
    });

});
</script>