<?php

require_once("config.php");

class Usuario {

private int $Id;
private string $Nome;
private string $Sobrnome;
private string $Email;
private string $Senha;
private string $Endereco;
private string $Bairro;
private string $Cidade;
private string $Estado;
private string $Cep;

//getter do id
public function getId(){
    return $this -> Id; 
}
//setter do id
public function setId($novo_id){
    $this->Id = $novo_id;
}

//getter do Nome
public function getNome()
{
    return $this->Nome;
}
//setter do Nome
public function setNome( $novo_nome)
{
    $this->Nome = $novo_nome;
}
//getter do Sobrenome
public function getSobrenome()
{
    return $this->Sobrnome;
}
//Setter do Sobrenome
public function setSobrenome ($novo_sobrenome)
{
    $this->Sobrnome = $novo_sobrenome;
}
//getter do Email
public function getEmail(){
    return $this->Email;
}
//setter do Email
public function setEmail($novo_email)
{
    $this->Email = $novo_email;
}
//getter da Senha
public function getSenha ()
{
    return $this->Senha;
}
//setter da senha
public function setSenha($nova_senha)
{
    $this->Senha = $nova_senha;
}
//getter do endereço
public function getEndereco (){
    return $this-> Endereco;
}
//setter do endereço
public function setEndereco($novo_endereco)
{
    $this->Endereco = $novo_endereco;
}
//getter do Bairro
public function getBairro(){
    return $this->Bairro;
}
//setter do Bairro
public function setBairro($novo_bairro){
    $this->Bairro = $novo_bairro;
}
//getter da cidade
public function getCidade(){
    return $this-> Cidade;
}
//setter da cidade
public function setCidade($nova_cidade)
{
    $this->Cidade = $nova_cidade;
}
//getter do estado
public function getEstado()
{
    return $this-> Estado;
}
//setter do estado
public function setEstado($novo_estado)
{
    $this->Estado = $novo_estado;
}
//getter do CEP
public function getCep()
{
    return $this->Cep;
}
//setter do CEP
public function setCep($novo_cep)
{
    $this->Cep = $novo_cep;
}
}


?>

