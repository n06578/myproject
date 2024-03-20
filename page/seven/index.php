<?php
header ("Content-Type: text/html; charset=UTF-8");		#다국어지원을 위한 설정
include $_SERVER['DOCUMENT_ROOT']  . "/page/setting.php";  //연결 경로 지정
include $_SERVER['DOCUMENT_ROOT']  . "/configure/db_con.php"; // db 연결
include $_SERVER['DOCUMENT_ROOT']  . "/setting/header.php";  //상단 메뉴바
?>

    <script src="https://cdn.tiny.cloud/1/ajhw6o78srgkq6cu3900a48w0flx52dwsxc0el1qxxesa8vj/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
        <div style="margin-top:100px;">
            <textarea name="two">
                
            </textarea>
            <script>
                tinymce.init({
                selector: 'textarea',
                plugins: '',
                toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link image media table mergetags | align lineheight | tinycomments | checklist numlist bullist indent outdent | emoticons charmap | removeformat',
                tinycomments_mode: 'embedded',
                tinycomments_author: 'Author name',
                mergetags_list: [
                    { value: 'First.Name', title: 'First Name' },
                    { value: 'Email', title: 'Email' },
                ],
                ai_request: (request, respondWith) => respondWith.string(() => Promise.reject("See docs to implement AI Assistant"))
                });
            </script>
        </div>
<?include $_SERVER['DOCUMENT_ROOT']  . "/setting/footer.php"; // 내용 출력?>