<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MoneyLite - Tela de Login</title>
    <link rel="stylesheet" href="geral.css">
    <link rel="stylesheet" href="login.css">
</head>
<body>
    <main>
        <div id="logo"><h1>MoneyLite</h1></div>
        <div id="form-login">
            <form action="login.php" method="post">
                <input type="text" name="login" id="login" placeholder="Usuario"><br><br>
                
                 <input type="password" name="senha" id="senha" placeholder="Senha"><br><br>
        
                <input type="submit" id="btn-login" value="Entrar">
            </form>
        </div>
        <a href="cadastro-contas.php">Criar Nova Conta</a>
    </main>
</body>
</html>