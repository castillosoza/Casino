<?php
    function query_SQL($sql){
if(!$link=mysql_connect('localhost','root','ddr71216'))
die('problema de conexion:'.mysql_error());
if(!mysql_select_db('casino',$link))
die('problema en la base de datos:'.mysql_errno());
if(!$res=mysql_query($sql,$link))
die('error en query:');
return $res;}
function query_SQL2($sql){
if(!$link=mysql_connect('localhost','root','ddr71216'))
die('problema de conexion:'.mysql_error());
if(!mysql_select_db('casino',$link))
die('problema en la base de datos:'.mysql_errno());
if(!mysql_query($sql,$link))
die('error en query:');
}
?>

