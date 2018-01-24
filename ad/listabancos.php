<?php
	require_once("conexao.php");
	if (isset($_POST["server"]) && isset($_POST["user"])  && isset($_POST["wordpass"]) ) {
		$server = addslashes($_POST["server"]);
		$user = addslashes($_POST["user"]);
		$wordpass = addslashes($_POST["wordpass"]);
	}else{
		$server = "";
		$user = "";
		$wordpass = "";
	}

	$conn = "";
	conectar($server,$user,$wordpass);
	$db_list = mysql_list_dbs($conn);
	echo "<h1>Bancos de Dados </h1> <br/>";
	echo "<ul>";
	while ($linha = mysql_fetch_object($db_list)) {
    	 echo "<li><a href='mostratabelas.php?db=". $linha->Database . "'>" . $linha->Database . "</a></li>";
	}	
	echo "</ul>";

?>