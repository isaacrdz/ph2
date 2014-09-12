<?
	mysql_connect("localhost","zackpanda","123456") or die ("Sin Conexion");
	mysql_select_db("pandablog");


 function quitar($str)
{
	$no_permitidos = array("'","\"","\\", "OR", "SELECT", "*","FROM","=", " ");
	return str_replace($no_permitidos,"", $str)	;
}
?>