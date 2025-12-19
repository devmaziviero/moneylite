<?php

include('conexao.php');

// 2. Receber os dados digitados no formulário
$login = $_POST['login'];
$senha = $_POST['senha'];

// 3. Consultar no banco
$sql = "SELECT * FROM usuarios WHERE nome_user = ? AND senha = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("ss", $login, $senha);
$stmt->execute();
$result = $stmt->get_result();

// 4. Verificar se encontrou usuário
if ($result->num_rows > 0) {
    // Usuário autenticado
    session_start();
    $_SESSION['usuario'] = $login;
    header("Location: dashboard/dashboard.php"); // Redireciona para a página principal
    exit();
} else {
    // Usuário ou senha inválidos
    echo "<script>alert('Usuário ou senha incorretos!'); window.location.href='index.php';</script>";
}

$stmt->close();
$conn->close();
?>
