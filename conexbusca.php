<?php

$cpf = $_POST["cpf"];
$acao = $_POST["acao"];
$con = new mysqli("127.0.0.1:3306", "root", "", "Petshop");

session_start(); // inicia a sessão

if ($acao == "r") {
    $sql = "SELECT * FROM clientes WHERE cpf='$cpf'";
    $res = $con->query($sql);
    if (mysqli_num_rows($res) > 0) {
        echo("<table>");
        echo("<tr><th>id</th><th>nome</th><th>cpf</th></tr>");
        while ($campo = $res->fetch_assoc()) {
            echo("<tr>");
            echo("<td>".$campo["id"]."</td>");
            echo("<td>".$campo["nome"]."</td>");
            echo("<td>".$campo["cpf"]."</td>");
            echo("</tr>");
        }
        echo("</table>");
    } else {
        echo "Nenhum resultado encontrado buscando por: $cpf";
    }
    
    echo("<br><br><a href='index.php'>Voltar à página inicial</a>");
}

$con->close();
