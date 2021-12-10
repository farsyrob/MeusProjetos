<h1>Lista de Insumos</h1>
<?php
	$sql = "SELECT * FROM biblioteca";

	$res = $conn->query($sql) or die($conn->error);

	$qtd = $res->num_rows;

	print "<p>Encontrou <b>$qtd</b> resultado(s)</p>";

	if($qtd > 0){
		print "<table class='table table-striped table-hover table-bordered'>";
		print "<tr>";
		print "<th>#</th>";
		print "<th>Nome do Insumo</th>";
		print "<th>Peso (g)</th>";
		print "<th>Validade</th>";	
		print "<th>Lote</th>";		
		print "<th>Ações</th>";	
		print "</tr>";
		while($row = $res->fetch_object()){
			print "<tr>";
			print "<td>".$row->id_insumo."</td>";
			print "<td>".$row->nome_insumo."</td>";
			print "<td>".$row->peso_insumo." gramas </td>";	
			print "<td>".$row->validade_insumo."</td>";	
			print "<td>".$row->lote_insumo."</td>";	
			print "<td>
						<button class='btn btn-primary' onclick=\"location.href='?page=insumos-editar&id_insumo=".$row->id_insumo."';\">Editar</button>

						<button class='btn btn-danger' onclick=\"if(confirm('Tem certeza que deseja excluir?')){location.href='?page=insumos-salvar&acao=excluir&id_insumo=".$row->id_insumo."';}else{false;}\">Excluir</button>
				   </td>";	
			print "</tr>";
		}
		print "</table>";	
	}else{
		print "<div class='alert alert-danger'>Não encontrou resultados.</div>";
	}

	
?>