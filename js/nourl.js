function frameset(page){
    framecode="<frameset rows='1*"
    +"<frame name=main src='"+page+"'>"
    +"</frameset>";

    page= window.open("");
    page.document.open();
    page.document.write(framecode);
    page.document.close();
}