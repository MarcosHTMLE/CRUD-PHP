<?php

require_once("ClasseUsuario.php");
require_once("ClassesSQL.php");
require_once("config.php");


$nome = $_POST["nome"];
$sobrenome = $_POST["sobrenome"];
$email = $_POST["email"];
$senha = $_POST["senha"];
$endereco = $_POST["endereco"];
$bairro = $_POST["bairro"];
$cidade = $_POST["cidade"];
$estado = $_POST["estado"];
$cep = $_POST["cep"];

$host = "localhost";
$dbname = "controle_de_estoque";
$username = "root";
$password = "phporientado123";
$port = 3306;


$User = new Usuario();
$User->setNome($nome);
$User->setSobrenome($sobrenome);
$User->setEmail($email);
$User->setSenha($senha);
$User->setEndereco($endereco);
$User->setBairro($bairro);
$User->setCidade($cidade);
$User->setEstado($estado);
$User->setCep($cep);



$sql = new ConexaoDB($host, $username, $password, $dbname, $port);
$sql->Cadastrar($User);
$sql->FecharConexao();


header("Location: index.php");

exit();

?>

