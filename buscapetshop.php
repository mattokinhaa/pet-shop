
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Consulta de Clientes</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            color: #2A4359;
            font-family: 'Arial Rounded MT', sans-serif;
        }
        .form-container {
            max-width: 600px;
            margin: 20px auto;
            padding: 20px;
            border: 1px solid #2A4359;
            border-radius: 10px;
            background-color: #f8f9fa;
        }
        .Espaço {
            position: relative;
            margin-bottom: 20px;
        }
        input[type="text"] {
            width: 100%;
            padding: 10px;
            border: 1px solid #2A4359;
            border-radius: 5px;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
        }
        input[type="button"] {
            background-color: #2A4359;
            color: white;
            font-weight: bold;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
            width: 100%;
        }
        input[type="button"]:hover {
            background-color: #85D4DB;
        }
        table {
            width: 80%;
            border: 1px solid #2A4359;
            text-align: center;
            color: #2A4359;
            margin: 20px auto;
            border-collapse: collapse;
        }
        th, td {
            border: 1px solid #2A4359;
            padding: 10px;
        }
        th {
            background-color: #2A4359;
            color: white;
        }
        .aviso {
            text-align: center;
            margin: 20px;
            color: #2A4359;
            font-weight: bold;
        }
        hr {
            margin: 20px auto;
            width: 80%;
        }
    </style>
    <script>
        function submeterForm(acao) {
            document.getElementById('acao').value = acao;
            document.getElementById('f').submit();
        }
    </script>
</head>

<body>
    <h1 class="text-center">Consulta de Clientes</h1>

    <form name="f" id="f" method="post" action="conexbusca.php">
        <div class="form-container">    
            <div class="Espaço">
                <input type="text" name="cpf" value="" placeholder="Digite o CPF" required="">
            </div>
            <input type="hidden" name="acao" id="acao">
            <input type="button" value="Consultar" onclick="submeterForm('r');">
        </div>
    </form>

    <br>

    <?php
        // Conexão com o banco de dados
        $con = new mysqli("127.0.0.1:3306", "root", "", "Petshop");
        
        // Verifica se a conexão foi bem-sucedida
        if ($con->connect_error) {
            die("Conexão falhou: " . $con->connect_error);
        }

        if (isset($_SESSION["aviso"])) {
            echo "<div class='aviso'>".$_SESSION["aviso"]."</div>";
            unset($_SESSION["aviso"]);
        }
    ?>
    
    <hr />

    <?php
        $sql = "SELECT * FROM clientes";
        $res = $con->query($sql);
        
        if (mysqli_num_rows($res) > 0) {
            echo("<table>");
            echo("<tr><th>ID</th><th>Nome</th><th>CPF</th></tr>");
            while ($campo = $res->fetch_assoc()) {
                echo("<tr>");
                echo("<td>".$campo["id"]."</td>");
                echo("<td>".$campo["nome"]."</td>");
                echo("<td>".$campo["cpf"]."</td>");
                echo("</tr>");
            }
            echo("</table>");
        } else {
            echo "<div class='aviso'>Nenhum dado inserido por enquanto</div>";
        }
        
        $con->close(); // Fecha a conexão com o banco de dados
    ?>
</body>
</html>