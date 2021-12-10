<h1>Editar Insumos</h1>
<?php
	$sql = "SELECT * FROM biblioteca WHERE id_insumo=".$_REQUEST["id_insumo"];

	$res = $conn->query($sql) or die($conn->error);

	$row = $res->fetch_object();

?>
<form action="?page=insumos-salvar" method="POST">
	<input type="hidden" name="acao" value="editar">
	<input type="hidden" name="id_insumo" value="<?php print $row->id_insumo; ?>">
	<div class="mb-3">
		<label>Nome do Insumo</label>
		<input type="text" name="nome_insumo" value="<?php print $row->nome_insumo; ?>" class="form-control">
	</div>
	<div class="mb-3">
		<label>Peso Líquido</label>
		<input type="text" name="peso_insumo" value="<?php print $row->peso_insumo; ?>"  class="form-control">
	</div>
	<div class="mb-3">
		<label>Validade</label>
		<input type="text" name="validade_insumo" value="<?php print $row->validade_insumo; ?>"  class="form-control">
	</div>
	<div class="mb-3">
		<label>Lote</label>
		<input type="text" name="lote_insumo" value="<?php print $row->lote_insumo; ?>"  class="form-control">
	</div>
	<div class="mb-3">
		<button type="submit" class="btn btn-success">Enviar</button>
	</div>
</form>