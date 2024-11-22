<?php
session_start();
require 'painel/funcoes.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $usuario = $_POST['usuario'];
    $senha = $_POST['senha'];

    if (validarLogin($usuario, $senha)) {
        $_SESSION['logado'] = true;
        $_SESSION['funcionario_id'] = 1; 
        header("Location: index.php");
    } else {
        $erro = "Login ou senha inválidos!";
    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Login Petshop</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #D0DECD;
        }
        h4 {
            font-family: 'Futura Md Bt', sans-serif;
            font-weight: bold;
            color: #2A4359;
        }
        label {
            font-family: 'Arial Rounded MT', sans-serif;
            font-weight: bold;
            color: #2A4359;
        }
        .btn-custom {
            background-color: #2A4359;
            color: white;
            font-family: 'Arial Rounded MT', sans-serif;
            font-weight: bold;
        }
        .btn-custom:hover {
            background-color: #85D4DB;
        }
    </style>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card mt-5">
                    <div class="card-header text-center">
                        <img src="imagens/logotipo_petshop.jpg" alt="Logotipo do Petshop" class="img-fluid mb-3">
                        <h4>LOGIN</h4>
                    </div>
                    <div class="card-body">
                        <?php if (isset($erro)): ?>
                            <div class="alert alert-danger" role="alert">
                                <?= $erro; ?>
                            </div>
                        <?php endif; ?>
                        <form method="POST" action="login.php">
                            <div class="form-group">
                                <label for="usuario">Usuário:</label>
                                <input type="text" id="usuario" name="usuario" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="senha">Senha:</label>
                                <input type="password" id="senha" name="senha" class="form-control" required>
                            </div>
                            <button type="submit" class="btn btn-custom btn-block">ENTRAR</button>
                        </form>
                    </div> 
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
