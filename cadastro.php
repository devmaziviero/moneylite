<?php
include('conexao.php');

// 2. Receber os dados do formulário
$login = $_POST['login'];
$senha = $_POST['senha'];

// 3. Inserir no banco
$sql = "INSERT INTO usuarios (nome_user, senha) VALUES (?, ?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param("ss", $login, $senha);

if ($stmt->execute()) {
    // Sucesso no cadastro
    echo "<script>alert('Conta criada com sucesso!'); window.location.href='index.php';</script>";
} else {
    // Erro ao cadastrar
    echo "<script>alert('Erro ao criar conta: " . $conn->error . "'); window.location.href='cadastro.php';</script>";
}

$stmt->close();
$conn->close();
?>
