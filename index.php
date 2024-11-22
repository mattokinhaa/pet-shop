
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vendas Petshop</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <style>
        body {
            color: #2A4359;
        }

        h1,
        h2 {
            font-family: 'Futura Md Bt', sans-serif;
            font-weight: bold;
            color: #2A4359;
        }

        h4 {
            font-family: 'Arial Rounded MT', sans-serif;
            font-weight: bold;
            color: #2A4359;
        }

        .card-body {
            font-family: 'Arial Rounded MT', sans-serif;
            font-weight: bold;
            color: #2A4359;
        }

        .btn-finalizar {
            background-color: #2A4359;
            color: white;
            font-family: 'Arial Rounded MT', sans-serif;
            font-weight: bold;
        }

        .btn-finalizar:hover {
            background-color: #85D4DB;
            color: white;
        }
        
        .links-container {
    display: flex;
    justify-content: center; /* Centraliza os links */
    align-items: center; /* Alinha verticalmente */
    margin: 10px 0; /* Espaçamento acima e abaixo dos links */
}


.link-estilizado {
    text-decoration: none; /* Remove o sublinhado */
    color: #2A4359; /* Cor do texto */
    font-family: 'Arial Rounded MT', sans-serif; /* Fonte */
    font-weight: bold; /* Negrito */
    font-size: 1.2em; /* Aumenta o tamanho da fonte */
    transition: color 0.3s, transform 0.3s; /* Transição suave para cor e transformação */
    padding: 10px; /* Espaçamento interno para aumentar a área clicável */
    border-radius: 5px; /* Bordas arredondadas */
}

.link-estilizado:hover {
    color: #85D4DB; /* Cor ao passar o mouse */
    transform: scale(1.05); /* Leve aumento ao passar o mouse */
    background-color: rgba(133, 211, 219, 0.2); /* Fundo leve ao passar o mouse */
}

    </style>
</head>

<body>

    <div class="container">
        <h1>VENDA DE PRODUTOS E SERVIÇOS</h1><br>

        <form method="GET" action="venda.php" class="form-venda">
        <div class="form-group text-center">
    <div class="links-container">
        <a href="cadpetshop.php" class="link-estilizado">Cadastro</a>
        <br>
        <a href="buscapetshop.php" class="link-estilizado">Buscar Cadastro</a>
    </div>
    <h4 for="cliente">COLOQUE SEU NOME:</h4>
    <input type="text" id="cliente" name="cliente" class="form-control mx-auto" style="width: 50%;" required>
</div>

            <h2>PRODUTOS</h2>
            <div class="row">
                <div class="col-md-4 mb-4">
                    <div class="card h-100">
                        <img src="imagens/racao_caes.jpg" alt="Ração para Cães" class="card-img-top">
                        <div class="card-body">
                            <h5 class="card-title">Ração para Cães</h5>
                            <p class="card-text">Ração premium, indicada para cães adultos. R$ 50,00</p>
                            <label>Quantidade:</label>
                            <select name="RacaoCa" class="form-control" data-preco="50">
                                <?php for ($i = 0; $i <= 10; $i++): ?>
                                    <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
                                <?php endfor; ?>
                            </select>
                        </div>
                    </div> 
                </div>

                <div class="col-md-4 mb-4">
                    <div class="card h-100">
                        <img src="imagens/racao_gatos.jpg" alt="Ração para Gatos" class="card-img-top">
                        <div class="card-body">
                            <h5 class="card-title">Ração para Gatos</h5>
                            <p class="card-text">Alimento completo para gatos de todas as idades. R$ 45,00</p>
                            <label>Quantidade:</label>
                            <select name="RacaoGa" class="form-control" data-preco="45">
                                <?php for ($i = 0; $i <= 10; $i++): ?>
                                    <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
                                <?php endfor; ?>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 mb-4">
                    <div class="card h-100">
                        <img src="imagens/coleira_caes.jpg" alt="Coleira para Cães" class="card-img-top">
                        <div class="card-body">
                            <h5 class="card-title">Coleira para Cães</h5>
                            <p class="card-text">Coleira de couro ajustável e resistente. R$ 20,00</p>
                            <label>Quantidade:</label>
                            <select name="ColeiraCa" class="form-control" data-preco="20">
                                <?php for ($i = 0; $i <= 10; $i++): ?>
                                    <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
                                <?php endfor; ?>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 mb-4">
                    <div class="card h-100">
                        <img src="imagens/coleira_gatos.jpg" alt="Coleira para Gatos" class="card-img-top">
                        <div class="card-body">
                            <h5 class="card-title">Coleira para Gatos</h5>
                            <p class="card-text">Coleira de couro leve e ajustável para gatos. R$ 18,00</p>
                            <label>Quantidade:</label>
                            <select name="ColeiraGa" class="form-control" data-preco="18">
                                <?php for ($i = 0; $i <= 10; $i++): ?>
                                    <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
                                <?php endfor; ?>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 mb-4">
                    <div class="card h-100">
                        <img src="imagens/brinquedo_caes.jpg" alt="Brinquedo para Cães" class="card-img-top">
                        <div class="card-body">
                            <h5 class="card-title">Brinquedo para Cães</h5>
                            <p class="card-text">Brinquedo resistente, ideal para cães de todos os portes. R$ 30,00</p>
                            <label>Quantidade:</label>
                            <select name="BrinquedoCa" class="form-control" data-preco="30">
                                <?php for ($i = 0; $i <= 10; $i++): ?>
                                    <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
                                <?php endfor; ?>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 mb-4">
                    <div class="card h-100">
                        <img src="imagens/brinquedo_gatos.jpg" alt="Brinquedo para Gatos" class="card-img-top">
                        <div class="card-body">
                            <h5 class="card-title">Brinquedo para Gatos</h5>
                            <p class="card-text">Brinquedo divertido e seguro para gatos. R$ 25,00</p>
                            <label>Quantidade:</label>
                            <select name="BrinquedoGa" class="form-control" data-preco="25">
                                <?php for ($i = 0; $i <= 10; $i++): ?>
                                    <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
                                <?php endfor; ?>
                            </select>
                        </div>
                    </div>
                </div>
            </div>

            <h2>SERVIÇOS</h2>
            <div class="row">
                <div class="col-md-4 mb-4">
                    <div class="card h-100">
                        <img src="imagens/banho_cao.jpg" alt="Banho para Cães" class="card-img-top">
                        <div class="card-body">
                            <h5 class="card-title">Banho para Cães</h5>
                            <p class="card-text">Banho completo seu cãozinho. PROMOÇÃO!!! R$ 40,00</p>
                            <label>Quantidade:</label>
                            <select name="BanhoCa" class="form-control" data-preco="40">
                                <?php for ($i = 0; $i <= 10; $i++): ?>
                                    <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
                                <?php endfor; ?>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 mb-4">
                    <div class="card h-100">
                        <img src="imagens/tosa_cao.jpg" alt="Tosa para Cães" class="card-img-top">
                        <div class="card-body">
                            <h5 class="card-title">Tosa para Cães</h5>
                            <p class="card-text">Tosa completa para seu cãozinho. PROMOÇÃO!!! R$ 50,00</p>
                            <label>Quantidade:</label>
                            <select name="TosaCa" class="form-control" data-preco="50">
                                <?php for ($i = 0; $i <= 10; $i++): ?>
                                    <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
                                <?php endfor; ?>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 mb-4">
                    <div class="card h-100">
                        <img src="imagens/vacinacao.jpg" alt="Consulta Veterinária" class="card-img-top">
                        <div class="card-body">
                            <h5 class="card-title">Consulta Veterinária</h5>
                            <p class="card-text">Consulta com veterinário especializado. R$ 280,00</p>
                            <label>Quantidade:</label>
                            <select name="Consulta" class="form-control" data-preco="80">
                                <?php for ($i = 0; $i <= 10; $i++): ?>
                                    <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
                                <?php endfor; ?>
                            </select>
                        </div>
                    </div>
                </div>
            </div><br>
            

            <div class="form-group text-center">
                <button type="submit" class="btn btn-finalizar">FINALIZAR VENDA</button>
            </div>
       
            </form>
        </div>
</body>
</html>