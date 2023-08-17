$("#checkall").click(function () {
    if ($("#checkall").is(":checked")) {
        $("input[name='chk[]']").prop("checked", true);
    } else {
        $("input[name='chk[]']").prop("checked", false);
    }
});

function resultPrint(){
	$("#resultBox").html(checkVal());
}

function checkVal(){
	var chkSeq="";
	$("input[name='chk[]']:checked").each(function() {
        var val=$(this).val();
        chkSeq +=val+",";
    });
	if(chkSeq!=""){
		return chkSeq.slice(0,-1);
	}
}


function addRow() {
	// table element 찾기
	const table = document.getElementById('table');
	var checkbox_index = $("#table tr").length;
	console.log(checkbox_index-1);
	$("#resultBox").append(checkbox_index+"<br>");
	
	// 새 행(Row) 추가
	const newRow = table.insertRow();
	
	// 새 행(Row)에 Cell 추가
	const newCell1 = newRow.insertCell(0);
	const newCell2 = newRow.insertCell(1);
	const newCell3 = newRow.insertCell(2);
	const newCell4 = newRow.insertCell(3);
	
	
	newCell1.innerHTML = "<input type=\"checkbox\" name=\"chk[]\"  value="+checkbox_index+">";
	newCell4.innerHTML = "<input type=\"button\" class=\"btn-del\" value=\"행 삭제\" onclick=\"delRow(this)\">";
	
  }

function delRow(row){
	row.closest("tr").remove();
}


function smallPopup(){
	var width=500;
	var height=270;
	var posx = 0
	var posy = 0
	posx = (screen.width - width)/2-1;
	posy = (screen.height - height)/2-1;
	url = "test.php?mode=smallPopup";
	newwin = window.open(url,"","width="+width+",height="+height+",toolbar=0,scrollbars=1,resizable=0,status=0");
	newwin.moveTo(posx,posy);
	newwin.focus();
}


function mediumPopup(){
	var width=800;
	var height=450;
	var posx = 0
	var posy = 0
	posx = (screen.width - width)/2-1;
	posy = (screen.height - height)/2-1;
	url = "test.php?mode=midiumpopup";
	newwin = window.open(url,"","width="+width+",height="+height+",toolbar=0,scrollbars=1,resizable=0,status=0");
	newwin.moveTo(posx,posy);
	newwin.focus();
}

function largePopup(){
	var width=1000;
	var height=750;
	var posx = 0
	var posy = 0
	posx = (screen.width - width)/2-1;
	posy = (screen.height - height)/2-1;
	url = "test.php?mode=largePopup";
	newwin = window.open(url,"","width="+width+",height="+height+",toolbar=0,scrollbars=1,resizable=0,status=0");
	newwin.moveTo(posx,posy);
	newwin.focus();
}