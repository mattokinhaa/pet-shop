CREATE DATABASE IF NOT EXISTS Petshop;
USE Petshop;

CREATE TABLE funcionarios (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100),
    usuario VARCHAR(50),
    senha VARCHAR(50)
);

CREATE TABLE produto (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome_produto VARCHAR(100),
    preco DECIMAL(10, 2),
    estoque INT,
    imagem VARCHAR(255),
    tipo ENUM('produto', 'servico') DEFAULT 'produto'
);

CREATE TABLE vendas (
    id INT AUTO_INCREMENT PRIMARY KEY,
    id_cliente INT,
    id_funcionario INT,
    total DECIMAL(10, 2),
    data_venda TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE clientes (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100),
    cpf varchar(14) not null
);

INSERT INTO produto (nome_produto, preco, estoque, imagem) VALUES
('Ração Cães', 50.00, 100, 'imagens/racao_caes.jpg'),
('Ração Gatos', 45.00, 80, 'imagens/racao_gatos.jpg'),
('Coleira Cães', 20.00, 50, 'imagens/coleira_caes.jpg'),
('Coleira Gatos', 18.00, 60, 'imagens/coleira_gatos.jpg'),
('Shampoo Cães', 30.00, 40, 'imagens/shampoo_caes.jpg'),
('Shampoo Gatos', 25.00, 35, 'imagens/shampoo_gatos.jpg'),
('Brinquedo Cães', 15.00, 70, 'imagens/brinquedo_caes.jpg'),
('Brinquedo Gatos', 12.00, 75, 'imagens/brinquedo_gatos.jpg'),
('Cama Cães', 120.00, 20, 'imagens/cama_caes.jpg'),
('Cama Gatos', 110.00, 25, 'imagens/cama_gatos.jpg');

INSERT INTO produto (nome_produto, preco, estoque, imagem, tipo) VALUES
('Agendar Banho para Cachorro', 40.00, NULL, 'imagens/banho_cachorro.jpg', 'servico'),
('Agendar Tosa para Cachorro', 50.00, NULL, 'imagens/tosa_cachorro.jpg', 'servico'),
('Agendar Banho para Gato', 35.00, NULL, 'imagens/banho_gato.jpg', 'servico'),
('Agendar Tosa para Gato', 45.00, NULL, 'imagens/tosa_gato.jpg', 'servico'),
('Agendar Limpeza dos Ouvidos', 20.00, NULL, 'imagens/limpeza_ouvidos.jpg', 'servico'),
('Agendar Corte de Unhas', 25.00, NULL, 'imagens/corte_unhas.jpg', 'servico'),
('Agendar Banho de Espuma', 55.00, NULL, 'imagens/banho_espuma.jpg', 'servico'),
('Agendar Tratamento Anti-Pulgas', 60.00, NULL, 'imagens/tratamento_pulgas.jpg', 'servico');

INSERT INTO funcionarios (nome, usuario, senha) VALUES 
('Dias', 'dias', '1234'),
('Junior', 'junior', '1234'),
('Maria', 'maria', '1234'),
('Leonardo', 'leonardo', '1234'),
('Admin', 'admin', '1234'),
('Teste', 'teste', '1234');


INSERT INTO clientes (nome, cpf) VALUES 
('Leonardo', '123.456.789-00'),
('Ricardo', '124.456.789-00'),
('Junior', '125.456.789-00'), 
('Maria', '126.456.789-00');

select * from clientes;
