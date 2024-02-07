<?php

require_once("config.php");

    header("Location: index.php");

    $id = $_GET["id"];


	$host = "localhost";
	$dbname = "controle_de_estoque";
	$username = "root";
    $password = "phporientado123";
    $port = 3306;
			
	$excluir = new mysqli($host, $username, $password, $dbname, $port);
	$sql = "DELETE FROM user WHERE id = $id";
	$resultado = $excluir->query($sql);

    $resultado = $excluir->close();


?>
								
					

	