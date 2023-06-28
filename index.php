<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link type="text/css" href="css/bootstrap.min.css" rel="stylesheet">
	<title>Cadastro</title>
</head>
<body>
	<div class="container">
		<div class="row">
			<div class=""></div>
			<div class="col-lg-4 offset-lg-4 mt-5">
				<div class="card bg-ligth">
					<div class="card-body">
						<h5 class="card-title">Acesso Restrito</h5>
						<form action="verificar.php" method="POST">
							<div class="mb-3">
								<input type="email" name="email" class="form-control" placeholder="E-mail">
							</div>
							<div class="mb-3">
								<input type="password" name="senha" class="form-control" placeholder="Senha">
							</div>
							<div class="mb-3">
								<button  type="submit" class="btn btn-danger">Acesso</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>