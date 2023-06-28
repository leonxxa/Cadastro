<?php 
	if(!isset($_SESSION)) session_start();
	if(!empty($_POST) AND (empty($_POST['email']) OR empty($_POST['senha']))){
		header('location: index.php');
		exit();
	}

	include('config.php');

	$sql = "SELECT * FROM usuarios WHERE email='".$_REQUEST['email']."' AND senha = '".md5($_POST['senha'])."'";
	
	$res = $conn->query($sql);

	$row = $res ->fetch_object();

	if ($res->num_rows > 0) {
		$_SESSION['nome'] = $row->nome;
		print "<script>location.href='index2.php';</script>";
	}else{
		print "<script>alert('Usuário e/ou senha incorretos);</script>";
		print "<script>location.href='index.php';<script>";
	}