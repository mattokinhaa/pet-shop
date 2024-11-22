<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cadastro</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="crud.css">
    <style>
        body {
            color: #2A4359;
            font-family: 'Arial Rounded MT', sans-serif;
        }

        h1 {
            font-weight: bold;
            color: #2A4359;
            text-align: center;
            margin: 20px 0;
        }

        .form-container {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            border: 1px solid #2A4359;
            border-radius: 10px;
            background-color: #f8f9fa;
        }

        input[type="text"] {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #2A4359;
            border-radius: 5px;
        }

        .button {
            text-align: center;
            margin-top: 20px;
        }

        .btn-cadastro {
            background-color: #2A4359;
            color: white;
            font-weight: bold;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
        }

        .btn-cadastro:hover {
            background-color: #85D4DB;
        }

        .link-voltar {
            display: block;
            text-align: center;
            margin-top: 20px;
            color: #2A4359;
            font-weight: bold;
            text-decoration: none;
        }

        .link-voltar:hover {
            color: #85D4DB;
        }
    </style>
</head>
<body>

<h1>Para efetuar o cadastro, coloque ponto e traço. (111.111.111-11)</h1>

<form name="f">
    <div class="form-container">
        <input placeholder="Digite seu nome" type="text" name="nome" required> 
        <input placeholder="Digite seu CPF" type="text" name="cpf" required> 
        <div class="button">
            <input type="hidden" name="acao" value="">
            <input type="button" value="Cadastro" onClick="document.f.acao.value='cadastro'; chamarWebService();" class="btn-cadastro"> 
        </div>
    </div>
</form>

<a href="index.php" class="link-voltar">Voltar ao Menu</a>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>
    function chamarWebService() {  
        var dados = {
            nome: document.f.nome.value,
            cpf: document.f.cpf.value,
            acao: document.f.acao.value
        };
        alert('Webservice vai ser executado');    
        $.ajax({
            url: 'conexpetshop.php',
            type: 'POST',
            dataType: 'json',
            data: dados
        })
        .done(function(data) {   
            alert('Webservice retorna dados JSON');     
            for(var i in data) {
                alert(data[i].resultado);
            }
            alert('Webservice finalizado');    
        });   
    }
</script>
</body>
</html>