<?php
	switch ($_REQUEST["acao"]) {
		case 'cadastrar':
			$nome = $_POST["nome_insumo"];
			$peso = $_POST["peso_insumo"];
			$validade = $_POST["validade_insumo"];
			$lote = $_POST["lote_insumo"];


			$sql = "INSERT INTO biblioteca (nome_insumo, peso_insumo, validade_insumo, lote_insumo)
					VALUES ('{$nome}','{$peso}','{$validade}','{$lote}')";

			$res = $conn->query($sql) or die($conn->error);

			if($res==true){
				print "<script>alert('Cadastrado com sucesso!');</script>";
				print "<script>location.href='?page=insumos-listar';</script>";
			}else{
				print "<script>alert('Não foi possível cadastrar!');</script>";
				print "<script>location.href='?page=insumos-listar';</script>";
			}

			break;
		
		case 'editar':
			$nome = $_POST["nome_insumo"];
			$peso = $_POST["peso_insumo"];
			$validade = $_POST["validade_insumo"];
			$lote = $_POST["lote_insumo"];

			$sql = "UPDATE biblioteca SET
						nome_insumo='{$nome}',
						peso_insumo='{$peso}',
						validade_insumo='{$validade}',
						lote_insumo='{$lote}',
					WHERE
						id_insumo=".$_POST["id_insumo"];

			$res = $conn->query($sql) or die($conn->error);

			if($res==true){
				print "<script>alert('Editado com sucesso!');</script>";
				print "<script>location.href='?page=insumos-listar';</script>";
			}else{
				print "<script>alert('Não foi possível editar!');</script>";
				print "<script>location.href='?page=insumos-listar';</script>";
			}

			break;

		case 'excluir':
			$sql = "DELETE FROM biblioteca 
					WHERE id_insumo=".$_REQUEST["id_insumo"];

			$res = $conn->query($sql) or die($conn->error);

			if($res==true){
				print "<script>alert('Excluído com sucesso!');</script>";
				print "<script>location.href='?page=insumos-listar';</script>";
			}else{
				print "<script>alert('Não foi possível excluir!');</script>";
				print "<script>location.href='?page=insumos-listar';</script>";
			}
			break;
	}