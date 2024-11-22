<?php

	$nome = $_POST["nome"];
	$cpf = $_POST["cpf"];
	$acao = $_POST["acao"];
	$con = new mysqli("127.0.0.1:3306", "root", "", "Petshop");
	if ($acao=="cadastro") $sql="insert into clientes (nome, cpf) values ('$nome','$cpf')";

	session_start(); //inicia a sessao
	$resposta = array();


	if ($acao=="cadastro"){
		$execucao = $con->query($sql);// execução da sql
		if ($execucao){
			$resposta[] = array("resultado"=>"inserido");
		}
		else
			$resposta[] = array("resultado"=>"erro de inserção");
	}

	echo json_encode($resposta);
	$con->close(); 

?>