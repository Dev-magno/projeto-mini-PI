<?php
class Conexao {
    // Propriedades privadas para armazenar as informações de conexão ao banco de dados
    private $host = 'localhost'; 
    private $db = 'ludo_db';     
    private $user = 'root';      
    private $pass = '';     

    // Método estático para estabelecer uma conexão com o banco de dados
    public static function conectar() {
        try {
            // Cria uma nova instância de PDO para conexão com o banco de dados
            $conn = new PDO("mysql:host=localhost;dbname=ludo_db;charset=utf8", "root", "");
            
            // Define o modo de erro do PDO para exceção, o que permite lidar com erros mais facilmente
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            
            // Retorna a conexão estabelecida
            return $conn;
        } catch (PDOException $e) {
            die("Erro na conexão: " . $e->getMessage());
        }
    }
}


