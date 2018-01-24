<?php
    function conectar($server, $user, $pass){
    	global $conn;
    	$conn = mysql_connect($server, $user, $pass) or die("Não foi possível conectar");;
    }
?>