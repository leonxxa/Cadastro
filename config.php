<?php
	define('HOST', 'localhost');
	define('USER', 'root'); # senha usuario padrão é root
	define('PASS', '');
	define('BASE', 'cadastro');

	# Criar a conexão com o banco
	$conn =  new MySQli(HOST,USER,PASS,BASE);

	# função para perguntar se tem erro
	if(mysqli_connect_errno()){ 
		printf("Erro ao conectar: ", mysqli_connect_error()); # pra mostrar o erro
		exit();
	}
