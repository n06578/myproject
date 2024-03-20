<?
$root ="../";
?>

<!DOCTYPE html>
<html> 
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <link rel="stylesheet" type="text/css" href="test.css" />
        <script type="text/javascript" src="<?=$root?>js/jquery-2.0.0.min.js"></script>
        <script type="text/javascript" src="<?=$root?>css/all/bootstrap.bundle.min.js"></script>
        <script type="text/javascript" src="<?=$root?>setting/js/polyfill.js"></script>
        <script type="text/javascript" src="<?=$root?>setting/js/runtime.js"></script>
        <script type="text/javascript" src="<?=$root?>setting/js/script.js"></script>
        
    </head>
    <body>
        <div>
            <input type="button" value="smallPopup" onclick="smallPopup()"/>
            <br>
            <input type="button" value="mediumPopup" onclick="mediumPopup()"/>
            <br>
            <input type="button" value="largePopup" onclick="largePopup()"/>
        </div>
        <br>
        <div style="width:100%;display:flex">
            <div style="width:40%;background-color: #1f1f1f0d;">
                <table border=1 width="100%" id="table">
                    <colspan>
                        <col width="10%">
                        <col width="30%">
                        <col width="30%">
                        <col width="30%">
                    </colspan>
                    <tr>
                        <th><input type="checkbox" id="checkall"></th>
                        <th>1</th>
                        <th>2</th>
                        <th>3</th>
                    </tr>
                    <?for($i=0;$i<10;$i++){?>
                    <tr>
                        <td align=center>
                            <input type="checkbox" name="chk[]" value="<?=$i?>">
                        </td>
                        <td></td>
                        <td></td>
                        <td>
                            <input type="button" class="btn-del" value="행 삭제" onclick="delRow(this)">
                        </td>
                    <?
                    }
                    ?>
                    </tr>
                </table>
            </div>
            <div style="width:40%;background-color: #1f1f1f30;">
                <input type="button" value="결과보기" onclick="resultPrint();">
                <input type="button" value="테이블 tr 추가" onclick="addRow();">
                <br>
                <div id="resultBox">

                </div>
            </div>
        </div>

















        <div>
             <ul class="mt-20 tab">
                <li class="active spot-no">
                    <a href="javascript:void(0);" class="tab-link" data-target="#tab_content00">시료반입</a>
                </li>
                <li>
                    <a href="javascript:void(0);" class="tab-link" data-target="#tab_content01">시험전</a>
                </li>
                <li class="item-no">
                    <a href="javascript:void(0);" class="tab-link" data-target="#tab_content03">시험중</a>
                </li>
                <li>
                    <a href="javascript:void(0);" class="tab-link" data-target="#tab_content02">시험후</a>
                </li>
            </ul>
            <div class="tab-content-wrap">
                        <!-- 시료반입 부분 -->
                        <div id="tab_content00" class="tab-content active">
                            <div class="camera-button-wrap v-2">
                                <div class="camera-button">
                                    <span onclick="takePic('pic0','0');" type="button"><i class="fa fa-camera mr-10"></i>카메라 촬영</span>
                                </div>
                                <div class="camera-button">
                                    <span onclick="getPic('pic0','0');" type="button"><i class="fa fa-image mr-10"></i>갤러리</span>
                                </div>
                            </div>
                            <div class="img-preview">
                                <div id="pic0">
                                    
                                </div>
                                <div id="pic4"></div>
                            </div>
                        </div>
                        <!-- 시험전 부분 -->
                        <div id="tab_content01" class="tab-content">
                            <div class="camera-button-wrap v-2">
                                <div class="camera-button">
                                    <span onclick="takePic('pic1','1');" type="button"><i class="fa fa-camera mr-10"></i>카메라 촬영</span>
                                </div>
                                <div class="camera-button">
                                    <span onclick="getPic('pic1','1');" type="button"><i class="fa fa-image mr-10"></i>갤러리</span>
                                </div>
                            </div>
                            <div class="img-preview">
                                <div id="pic1">
                                </div>
                                <div id="pic5"></div>
                            </div>
                        </div>
                        <!-- 시험중 부분 -->
                        <div id="tab_content03" class="tab-content">
                            <div class="camera-button-wrap v-2">
                                <div class="camera-button">
                                    <span onclick="takePic('pic3','3');" type="button"><i class="fa fa-camera mr-10"></i>카메라 촬영</span>
                                </div>
                                <div class="camera-button">
                                    <span onclick="getPic('pic3','3');" type="button"><i class="fa fa-image mr-10"></i>갤러리</span>
                                </div>
                            </div>
                            <div class="img-preview">
                                <div id="pic3">
                                </div>
                                <div id="pic7"></div>
                            </div>
                        </div>
                        <!-- 시험후 부분 -->
                        <div id="tab_content02" class="tab-content">
                            <div class="camera-button-wrap v-2">
                                <div class="camera-button">
                                    <span onclick="takePic('pic2','2');" type="button"><i class="fa fa-camera mr-10"></i>카메라 촬영</span>
                                </div>
                                <div class="camera-button">
                                    <span onclick="getPic('pic2','2');" type="button"><i class="fa fa-image mr-10"></i>갤러리</span>
                                </div>
                            </div>
                            <div class="img-preview">
                                <div id="pic2">
                            </div>
                            <div id="pic6"></div>
                            </div>
                        </div>
                        <!-- 추가 시에 li에 항목 추가 후  해당하는 div(tab_content03) 부분 추가 후 script 함수 변경만 해주면 된다.
                            서버에서는 위치에 맞게 db가 업로드 되는지 확인 (for문 $i 숫자를 추가한 만큼 더 늘려준다.)
                        -->
                        <div class="camera-button-wrap v-2">
                            <input type="hidden" value="#tab_content00" id="fileget">
                            <div class="pic-submit">
                                <button type="button" class="camera-button-action mt-15 button button-block button-sky submit" id="submit">등록하기</button>
                                <button type="button" class= "camera-button-action mt-15 button button-block button-red cancle" id="cancle">삭제하기</button>
                            </div>
                            <div class="camera-button pic-preview ">
                                <span>CTMS 등록사진 미리보기 중     </span>
                                <a onclick="btn_Hide_Or_Show('show')"><font color=red>[ 숨기기 ]</font></a>
                                <a onclick="delImg('show')" style="margin-right:2%;"><font color=red>[ 삭제하기 ]</font></a>
                            </div>
                        </div>
                    </div>













    </body>
</html>

<script type="text/javascript" src="youn.js" charset="utf-8"></script>
<script>
    $(document).ready(function(){
        $(".tab .active").css("display","none");
        $(".tab .active").removeClass("active");
        $(".tab li:nth-child(2)").addClass("active");
        $(".tab li:nth-child(2)").css("display","");
        // $(".tab li:first-child").addClass("active");
        $(".tab-content-wrap .tab-content:first-child").removeClass("active");
        $(".tab-content-wrap .tab-content:first-child").css("display","none");
        $(".tab-content-wrap .tab-content:nth-child(2)").addClass("active");
        $(".tab-content-wrap .tab-content:nth-child(2)").css("display","");
    });
</script>