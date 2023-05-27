<script src="../js/jquery-2.0.0.min.js"></script>
<?
echo $_SERVER[ "QUERY_STRING" ];
?>
<form action="result.php">
    <input type="text" name="1" id="1" value="<?=$_REQUEST['1']?>"/><br>
    <input type="text" name="2" id="2" value="<?=$_REQUEST['2']?>"/><br>
    <input type="text" name="3" id="3" value="<?=$_REQUEST['3']?>"/><br>
    <input type="text" name="4" id="4" value="<?=$_REQUEST['4']?>"/><br>
    <input type="text" name="5" id="5" value="<?=$_REQUEST['5']?>"/><br>
    <input type="text" name="6" id="6" value="<?=$_REQUEST['6']?>"/><br>
    <input type="text" name="7" id="7" value="<?=$_REQUEST['7']?>"/><br>
    <input type="submit" id="submit" value="확인"/>
</form>
<script>
</script>