<h1>Editar</h1>
<?php
	$sql ="SELECT * FROM usuarios WHERE id =".$_REQUEST['id'];
	$res = $conn -> query($sql);
	$row = $res-> fetch_object();
?>
<form action="?page=salvar" method="POST">
	<input type="hidden" name="acao" value="editar">
	<input type="hidden" name="id" value="<?php print $row->id; ?>">
	<div class="mb-3">
		<label>Nome</label>
		<input type="text" name="nome" class="form-control" value="<?php print $row->nome; ?>">
	</div>
	<div class="mb-3">
		<label>E-mail</label>
		<input type="email" name="email" class="form-control" value="<?php print $row->email; ?>">
	</div>
	<div class="mb-3">
		<label>Tipo</label>
		<select name="tipo" class="form-control">
			<option>--Escolha--</option>
			<option value="1" <?php print($row->tipo==1?"selected":"");?> >Adminstrador</option>
			<option value="2" <?php print($row->tipo==2?"selected":"");?> >Usuário Comum</option>
		</select>
	</div>
	<div class="mb-3">
		<label>Status</label>
		<select name="status" class="form-control">
			<option>--Escolha--</option>
			<option value="1" <?php print($row->status==1?"selected":"");?>>Ativo</option>
			<option value="2" <?php print($row->status==2?"selected":"");?>>Inativo</option>
		</select>
	</div>
	<div class="mb-3">
		<button type="submit" class="btn btn-success">Enviar</button>
	</div>
</form>