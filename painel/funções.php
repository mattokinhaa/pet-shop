<?php
function conectarBanco() {
    $conexao = mysqli_connect('localhost', 'root', '', 'petshop');
    if (!$conexao) {
        die("Erro na conexão: " . mysqli_connect_error());
    }
    return $conexao;
}

function validarLogin($usuario, $senha) {
    $conexao = conectarBanco();
    $query = "SELECT * FROM funcionarios WHERE usuario = '$usuario' AND senha = '$senha'";
    $resultado = mysqli_query($conexao, $query);
    return mysqli_num_rows($resultado) > 0;
}

function obterProdutosEServicos() {
    $conexao = conectarBanco();
    $query = "SELECT * FROM produto";
    $resultado = mysqli_query($conexao, $query);
    $itens = [];
    while ($item = mysqli_fetch_assoc($resultado)) {
        $itens[] = $item;
    }
    return $itens;
}

function salvarVenda($cliente, $funcionario_id, $total) {
    $conexao = conectarBanco();
    $query = "INSERT INTO vendas (id_cliente, id_funcionario, total) VALUES ('$cliente', '$funcionario_id', '$total')";
    mysqli_query($conexao, $query);
}
?>
