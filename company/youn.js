$("#checkall").click(function () {
    if ($("#checkall").is(":checked")) {
        $("input[name='chk[]']").prop("checked", true);
    } else {
        $("input[name='chk[]']").prop("checked", false);
    }
});


function checkVal(){
    var chk_count = 0;
	var chkSeq="";
	$("input[name='chk[]']:checked").each(function() {
        var val=$(this).val();
        chkSeq +=val+",";
    });
	return chkSeq.sclice(0,-1);
}


function smallPopup(){
	var width=500;
	var height=270;
	var posx = 0
	var posy = 0
	posx = (screen.width - width)/2-1;
	posy = (screen.height - height)/2-1;
	url = "cals_popup.php?" + query_string;
	newwin = window.open(url,"setting","width="+width+",height="+height+",toolbar=0,scrollbars=1,resizable=0,status=0");
	newwin.moveTo(posx,posy);
	newwin.focus();
}