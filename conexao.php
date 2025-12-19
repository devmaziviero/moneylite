<?php
// Dados da hospedagem InfinityFree
$host = "sql306.infinityfree.com";          // Host do banco
$user = "if0_38842064";                      // Usuário do banco
$pass = "Defrederico1";                      // Senha do banco
$dbname = "if0_38842064_moneylite";       // Nome do banco (trocar pelo nome correto depois)
// $host = "localhost";          // Host do banco
// $user = "root";                      // Usuário do banco
// $pass = "";                      // Senha do banco
// $dbname = "ua10"; 

// Criar a conexão
$conn = new mysqli($host, $user, $pass, $dbname);

// Verificar a conexão
if ($conn->connect_error) {
    die("Falha na conexão: " . $conn->connect_error);
}
?><?php
// Dados da hospedagem InfinityFree
$host = "sql306.infinityfree.com";          // Host do banco
$user = "if0_38842064";                      // Usuário do banco
$pass = "Defrederico1";                      // Senha do banco
$dbname = "if0_38842064_moneylite";       // Nome do banco (trocar pelo nome correto depois)
// $host = "localhost";          // Host do banco
// $user = "root";                      // Usuário do banco
// $pass = "";                      // Senha do banco
// $dbname = "ua10"; 

// Criar a conexão
$conn = new mysqli($host, $user, $pass, $dbname);

// Verificar a conexão
if ($conn->connect_error) {
    die("Falha na conexão: " . $conn->connect_error);
}
?>