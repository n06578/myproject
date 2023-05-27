<?
function mysql_connect($host,$user,$dbpass) {
    return mysqli_connect($host,$user,$dbpass);
}

function mysql_select_db($dbname,$sock) {
    return mysqli_select_db($sock,$dbname);
}

function mysql_query($query) {
	global $sock;
	return mysqli_query($sock,$query);
}

function mysql_num_rows($res) {
	return mysqli_num_rows($res);
}

function mysql_fetch_array($res) {
	return mysqli_fetch_array($res);
}

function mysql_fetch_assoc($res) {
	return mysqli_fetch_assoc($res);
}

function mysql_insert_id() {
	global $sock;
	return mysqli_insert_id($sock);
}