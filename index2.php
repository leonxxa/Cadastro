<?php
	if(!isset($_SESSION)) session_start();

	if(!isset($_SESSION['nome'])){
		session_destroy();
		header("Location: index.php");exit;
	}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link type="text/css" href="css/bootstrap.min.css" rel="stylesheet">
	<title>Cadastro</title>
</head>
<body>
	<nav class="navbar navbar-expand-lg bg-light">
	  <div class="container-fluid">
	    <a class="navbar-brand" href="#">SisLogin</a>
	    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
	      <span class="navbar-toggler-icon"></span>
	    </button>
	    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
	      <div class="navbar-nav">
	      	<li class="nav-item">
		        <a class="nav-link active" aria-current="page" href="?index2.php">Home</a>
		    </li>
		    <li class="nav-item">
	       		<a class="nav-link" href="?page=listar">Listar Cadastro</a>
	       	</li>
	         <li class="nav-item">
	        	<a class="nav-link" href="?page=cadastrar">Cadastrar Usuário</a>
	        </li>
	        <ul>
	        	<div class="d-flex float-end" style="">
	        		Olá <?php echo $_SESSION['nome'];?>!
	        		<a href="logout.php" class="btn btn-secondary">Sair</a>
	        	</div>
	        </ul>
	      </div>
	    </div>
	  </div>
	</nav>
	<div class="container">
		<div class="row" >
			<div class="col mt-5">
				<?php
					#conexão com banco de dados
					include("config.php");

					#include das páginas
					switch (@$_REQUEST['page']){
						case 'cadastrar':
							include('cadastrar.php');
							break;
						case 'editar':
							include('editar.php');
							break;
						case 'listar':
							include('listar.php');
							break;
						case 'salvar':
							include('salvar.php');
							break;
						default:
							print "<h1>Seja Bem Vindo ao <em>Sistema de Login!<em></h1>";
							break;
					}
				 ?>
			</div>
		</div>
	</div>
	<script type="text/javascript" src="js/bootstrap.bundle.min.js"></script>
</body>
</html>