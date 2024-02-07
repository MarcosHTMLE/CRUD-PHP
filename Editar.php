<?php


require_once("ClassesSQL.php");
require_once("config.php");


$id = $_POST["id"];
$nome = $_POST["nome"];
$sobrenome = $_POST["sobrenome"];
$email = $_POST["email"];
$senha = $_POST["senha"];
$endereco = $_POST["endereco"];
$bairro = $_POST["bairro"];
$cidade = $_POST["cidade"];
$estado = $_POST["estado"];
$cep = $_POST["cep"];

                if($nome == "" || $sobrenome == "" || $email == "" || $senha == "" || $endereco == "" || $bairro == "" || $cidade == "" || $estado == "" || $cep == ""){
                    $mensagens['status'] = 'erro';
                    $mensagens['msg'] = 'Verifique os campos e tente novamente!';
                    $_SESSION['msg_inserir'] = $mensagens;
              
                }else{


                        
   
                  
                        $host = "localhost";
                        $dbname = "controle_de_estoque";
                        $username = "root";
                        $password = "phporientado123";
                        $port = 3306;
        
                        $editar = new mysqli($host, $username, $password, $dbname, $port);
        
                        $sql = "UPDATE user SET nome = '$nome', sobrenome = '$sobrenome', email= '$email', senha= '$senha', endereco= '$endereco', bairro= '$bairro', cidade= '$cidade', estado = '$estado', cep='$cep' WHERE id = $id";
                        echo $sql;
        
                        $resultado = $editar->query($sql);
                        
        
                        }

                        header("Location: index.php");
    

                  
                
          

              

                

            ?>
