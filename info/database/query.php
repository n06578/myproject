<?php

function getNewsConn() {

    $link = mysqli_connect(DBHOST, DBUSER, DBPASS, DBNAME);

    mysqli_set_charset($link, "utf8");

    

    return $link;

}



		
function getList($link, $num = 0) {
    if($num == 0) {
        $limit = null;
    }

    else {
        $limit = "LIMIT 0, $num";
    }
    
    $sql = "SELECT * FROM `userInfo` $limit";
    
    //echo $sql;
    
    $rs = mysqli_query($link, $sql);
    
    if(mysqli_num_rows($rs) == 0) {
        return null;
        } else {
        while ($rows[] = mysqli_fetch_assoc($rs));
        return $rows;
    }
}
    


?>