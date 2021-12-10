<h1>Cadastro de Insumos</h1>
<form action="?page=insumos-salvar" method="POST">
	<input type="hidden" name="acao" value="cadastrar">
	<div class="mb-3">
		<label>Nome do Insumo</label>
		<input type="text" name="nome_insumo" class="form-control">
	</div>
	<div class="mb-3">
		<label>Peso Líquido</label>
		<input type="text" name="peso_insumo" class="form-control">
	</div>
	<div class="mb-3">
		<label>Validade</label>
		<input type="text" name="validade_insumo" class="form-control">
	</div>
	<div class="mb-3">
		<label>Lote</label>
		<input type="text" name="lote_insumo" class="form-control">
	</div>
	<div class="mb-3">
		<button type="submit" class="btn btn-success">Enviar</button>
	</div>
</form>