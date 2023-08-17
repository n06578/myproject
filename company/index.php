<?
$root ="../";
?>

<!DOCTYPE html>
<html> 
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
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
    </body>
</html>

<script type="text/javascript" src="youn.js" charset="utf-8"></script>