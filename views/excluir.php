<?php
// Inicia a sessão
session_start(); 

//Conexão com  banco
require_once "../Classe/conexao.php"; 

//Chama a classe User
require_once "../Classe/user.php"; 

$id = $_GET['id'];

//Instancia um novo usuario e chamando o construtor
$user = new User($id); 

//Acessa o método deletar
$user->deletar($id);

header('location: listar.php');
exit();
?>