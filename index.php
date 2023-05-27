<?
session_start();
$checked="";
if($_SESSION['USER_ID']!="" && $_SESSION['SAVE_LOGIN']){
    echo "<script>location.href='page/index.php';</script>";
}
$userid="";
if($_SESSION['SAVE_ID']!=""){
    $userid=$_SESSION['USER_ID'];
    $checked="checked";
}

?>

<!DOCTYPE html>
<html>
    <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="css/all/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/bulma@0.9.0/css/bulma.min.css" />
    <link rel="stylesheet" type="text/css" href="css/neumorphic-login.css">
    <link rel="stylesheet" type="text/css" href="css/index.css?v=<?=time()?>">
    <script src="js/jquery-2.0.0.min.js"></script>
    <script src="css/all/bootstrap.bundle.min.js"></script>
    <title>What's login</title>
  </head>
  <body>
    <section class="hero is-fullheight">
      <div class="hero-body has-text-centered">

        <div class="login">
            <image src="style/logo2.png" class="ccustom" />
            <form action="login_ok.php">
                <div class="field">
                    <div class="control">
                        
                        <input class="input is-medium is-rounded" type="text" placeholder="ID" id="id" value="<?=$userid?>" name="id" />
                    </div>
                </div>
                <div class="field">
                    <div class="control">
                        <input class="input is-medium is-rounded" type="password" placeholder="password" id="password" name="password" />
                    </div>
                </div>
                <br>
                <button class="button is-block is-fullwidth is-primary is-medium is-rounded" type="submit" id="submit" class="submit" >
                    Login
                </button>
            

        <br>

                <nav class="level">
                    <div class="level-item has-text-centered">
                        <label class="checkbox"><input type="checkbox" name="remId" <?=$checked?>> remember Id</label>
                    </div>
                    <div class="level-item has-text-centered">
                        <label class="checkbox"><input type="checkbox" name="remLogin"> stay login status</label>
                    </div>
                </nav>

                <nav class="level">
                    <div class="level-item has-text-centered">
                        <div>
                            <a href="#" class="js-modal-trigger" data-target="modal-repass">Forgot Password?</a>
                        </div>
                    </div>
                    <div class="level-item has-text-centered">
                        <div> 
                            <a href="#" class="js-modal-trigger" data-target="modal-register">Create an Account</a>
                        </div>
                    </div>
                </nav>
                <nav class="level">
                    <div class="level-item has-text-centered">
                        <div>
                            <a href="page/" class="js-modal-trgger">no login and go main page</a>
                        </div>
                    </div>
                </nav>
            </form>
        </div>
    </section>
</body>

<?
include "etc/create.php";
include "etc/repass.php";
?>
</html>
<script>
//로그인 구현
$(".submit").click(function(e){
    if ($("#id").val()=="") {
        alert("아이디를 입력하세요.");
        $("#id").focus();
        return false;
    }

    if ($("#password").val()=="") {
        alert("비밀번호를 입력하세요.");
        $("#password").focus();
        return false;
    }
    form.submit();
});

function clear(){
    $("#r_id").val("");
    $("#r_name").val("");
    $("#r_password").val("");
    $("#r_passwordCk").val("");
    $("#f_id").val("");
    $("#f_password").val("");
    $("#f_passwordCk").val("");
    $("#alert-success2").hide();
    $("#alert-danger2").hide();
    $("#alert-success").hide();
    $("#alert-danger").hide();
}

    document.addEventListener('DOMContentLoaded', () => {
  // Functions to open and close a modal
  function openModal($el) {
    $el.classList.add('is-active');
  }

  function closeModal($el) {
    $el.classList.remove('is-active');
  }

  function closeAllModals() {
    (document.querySelectorAll('.modal') || []).forEach(($modal) => {
      closeModal($modal);
      clear();
    });
  }

  // Add a click event on buttons to open a specific modal
  (document.querySelectorAll('.js-modal-trigger') || []).forEach(($trigger) => {
    const modal = $trigger.dataset.target;
    const $target = document.getElementById(modal);

    $trigger.addEventListener('click', () => {
      openModal($target);
    });
  });

  // Add a click event on various child elements to close the parent modal
  (document.querySelectorAll('.modal-background, .modal-close, .modal-card-head .delete, .modal-card-foot .button') || []).forEach(($close) => {
    const $target = $close.closest('.modal');

    $close.addEventListener('click', () => {
      closeModal($target);
      clear();
      
    });
  });

  // Add a keyboard event to close all modals
  document.addEventListener('keydown', (event) => {
    const e = event || window.event;

    if (e.keyCode === 27) { // Escape key
      closeAllModals();
    }
  });
});
</script>