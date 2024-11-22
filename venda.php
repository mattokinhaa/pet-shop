<?php
session_start();

if (!isset($_SESSION['logado'])) {
    header("Location: login.php");
    exit;
}

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    $cliente = isset($_GET['cliente']) ? $_GET['cliente'] : 'Cliente não informado';

    $pedidoRacaoCa      = $_GET["RacaoCa"];
    $pedidoRacaoGa      = $_GET ["RacaoGa"]; 
    $pedidoColeiraCa    = $_GET ["ColeiraCa"];
    $pedidoColeiraGa    = $_GET ["ColeiraGa"];
    $pedidoBrinquedoCa  = $_GET ["BrinquedoCa"];
    $pedidoBrinquedoGa  = $_GET ["BrinquedoGa"];
    $pedidoBanhoCa      = $_GET ["BanhoCa"];
    $pedidoTosaCa       = $_GET ["TosaCa"];
    $pedidoConsulta     = $_GET ["Consulta"];

    $RacaoCa        = 50.00;
    $RacaoGa        = 45.00;   
    $ColeiraCa      = 20.00;
    $ColeiraGa      = 18.00;
    $BrinquedoCa    = 30.00;
    $BrinquedoGa    = 25.00;
    $BanhoCa        = 40.00;
    $TosaCa         = 50.00; 
    $Consulta       = 280.00;

    $RacaoCaPago        = $RacaoCa * $pedidoRacaoCa;
    $RacaoGaPago        = $RacaoGa * $pedidoRacaoGa; 
    $ColeiraCaPago      =  $ColeiraCa * $pedidoColeiraCa;
    $ColeiraGaPago      = $ColeiraGa * $pedidoColeiraGa;
    $BrinquedoCaPago    = $BrinquedoCa * $pedidoBrinquedoCa;
    $BrinquedoGaPago    = $BrinquedoGa * $pedidoBrinquedoGa;
    $BanhoCaPago        = $BanhoCa * $pedidoBanhoCa;
    $TosaCaPago         = $TosaCa * $pedidoTosaCa;
    $ConsultaPago       = $Consulta * $pedidoConsulta;

    $totalProdutos = $RacaoCaPago + $RacaoGaPago  + $ColeiraCaPago + $ColeiraGaPago + $BrinquedoCaPago + $BrinquedoGaPago;
    $totalServicos = $BanhoCaPago + $TosaCaPago + $ConsultaPago;

    $totalGeral = $totalProdutos + $totalServicos;

    $clienteEscapado = htmlspecialchars($cliente, ENT_QUOTES, 'UTF-8');
} else {
    header("Location: index.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resumo da Venda</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        h1 {
            font-family: 'Futura Md Bt', sans-serif;
            font-weight: bold;
            color: #2A4359;
        }
        .summary {
            background-color: #85D4DB;
            padding: 20px;
            border-radius: 10px;
            max-width: 600px; 
            margin: 20px auto; 
        }
        .summary p {
            font-family: 'Arial Rounded MT', sans-serif;
            font-weight: bold;
            color: #2A4359;
        }
        .btn-voltar {
            background-color: #2A4359;
            color: white;
            font-family: 'Arial Rounded MT', sans-serif;
            font-weight: bold;
            transition: background-color 0.3s;
        }
        .btn-voltar:hover {
            background-color: #85D4DB;
        }
    </style>
</head>

<body>

    <div class="container text-center">
        <h1>RESUMO DA VENDA</h1>
        <div class="summary"> 
            <p>Cliente: <?= htmlspecialchars($cliente); ?></p>
            <p>Valor total dos produtos: R$ <?= number_format($totalProdutos, 2, ',', '.'); ?></p>
            <p>Valor total dos serviços: R$ <?= number_format($totalServicos, 2, ',', '.'); ?></p>
            <p><strong>Valor total da venda: R$ <?= number_format($totalGeral, 2, ',', '.'); ?></strong></p>
        </div> 
        <a href="index.php" class="btn btn-voltar my-4">VOLTAR AO INICIO</a>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>     