<?php
	include("N2conexa.php");
	$grupo = buscarClientes();
?>

<html>
	<head>
		<title>Formulário de Cadastro</title>
		<meta name="author" content="Gabriela Chaplin">
		<link rel="stylesheet" type="text/css" href="N2formatacao.css">
		<script type="text/javascript">
			function mensagem() {
				window.alert("Cadastrado!");
			}
		</script>
	</head>
	
	<body>
	<div id="form">
		<p class="titulos">Loja Virtual</p>
		
		<form name="dadosCliente" action="N2conexa.php" method="POST">
		<table align="center">
			<thead>
				<tr>
					<th class="tit01" colspan="2">Dados Cadastrais</th>
					<th class="tit01" colspan="2">Endereço de Entrega</th>
				</tr>
			</thead>
			
			<tbody>
				<tr>
					<td></td>
					<td><input class="input01" type="radio" name="tipoPessoa" value="Física"/>
					<label for="Pessoa Física">Pessoa Física</label>
					<input class="input01" type="radio" name="tipoPessoa" value="Jurídica"/>
					<label for="Pessoa jurídica">Pessoa Jurídica</label></td>
					<td>CEP</td>
					<td><input type="text" name="cep" value=""/></td>
				</tr>
				<tr>
					<td>Nome</td>
					<td><input type="text" name="nome" value="" required></td>
					<td>Rua</td>
					<td><input type="text" name="rua" value=""/></td>					
				</tr>
				<tr>
					<td>Sobrenome</td>
					<td><input type="text" name="sobrenome" value="" required></td>					
					<td>Número</td>
					<td><input type="text" name="numero" value=""></td>
				</tr>
				<tr>
					<td>Gênero</td>
					<td><input class="listaGen" name="sexo" list="sexo" required>
						<datalist id="sexo">
							<option value="Feminino">Feminino</option>
							<option value="Masculino">Masculino</option>
							<option value="Não Binário">Não Binário</option>
							<option value="Prefiro não declarar">Prefiro não declarar</option>
						</datalist>
					<td>Complemento</td>
					<td><input type="text" name="complemento" value=""/></td>
				</tr>
				<tr>
					<td>CPF/CNPJ</td>
					<td><input type="text" name="cpfCnpj" value="" required></td>					
					<td>Referência</td>
					<td><input type="text" name="referencia" value=""/></td>
				</tr>
				<tr>
					<td>Telefone</td>
					<td><input type="text" name="telefone" value="" required></td>					
					<td>Bairro</td>
					<td><input type="text" name="bairro" value=""/></td>
				</tr>
				<tr>
					<td>Celular</td>
					<td><input type="text" name="celular" value=""/></td>					
					<td>Cidade</td>
					<td><input type="text" name="cidade" value=""/></td>
				</tr>
				<tr>
					<td>Nascimento</td>
					<td><input type="date" name="nascimento" value="" required></td>					
					<td>Estado</td>
					<td><input type="text" name="estado" value=""/></td>
				</tr>
				<tr>
					<td class="bottom"></td>
					<td class="bottom"></td>
					<td class="bottom"><input type="hidden" name="acao" value="inserir"/></td>
					<td class="bottom"><input type="submit" name="cadastrar" value="Cadastrar" OnClick="mensagem()"/></td>
				</tr>
			</tbody>			
		</table>		
		</form>
		</div>
		
		<div id="lista">		
		<br><hr><p class="titulos">Clientes Cadastrados</p>
		
		<table>
			<thead>
				<th>Tipo</th>
				<th colspan="2">Nome</th>
				<th>Gênero</th>
				<th>CPF/CNPJ</th>
				<th>Telefone</th>
				<th>Celular</th>
				<th>Nascimento</th>
				<th>Rua</th>
				<th>Núm</th>
				<th>Compl.</th>
				<th>Ref.</th>
				<th>Bairro</th>
				<th>Cidade</th>
				<th>Estado</th>
				<th>CEP</th>
			</thead>
			
			<tbody>
				<?php
				foreach($grupo as $entregavirtual){ ?>
					<?php
					$data = $entregavirtual["nascimento"];
					$dataP = explode('-', $data);
					$dataExibe = $dataP[2].'/'.$dataP[1].'/'.$dataP[0];
					?>
					<tr class="listaClientes">
						<td><?=$entregavirtual["tipoPessoa"]?></td>
						<td style="text-align: right"><?=$entregavirtual["nome"]?></td>
						<td style="text-align: left"><?=$entregavirtual["sobrenome"]?></td>
						<td><?=$entregavirtual["sexo"]?></td>
						<td><?=$entregavirtual["cpfCnpj"]?></td>
						<td><?=$entregavirtual["telefone"]?></td>
						<td><?=$entregavirtual["celular"]?></td>
						<td><?=$dataExibe?></td>
						<td><?=$entregavirtual["rua"]?></td>
						<td><?=$entregavirtual["numero"]?></td>
						<td><?=$entregavirtual["complemento"]?></td>
						<td><?=$entregavirtual["referencia"]?></td>
						<td><?=$entregavirtual["bairro"]?></td>
						<td><?=$entregavirtual["cidade"]?></td>
						<td><?=$entregavirtual["estado"]?></td>
						<td><?=$entregavirtual["cep"]?></td>
						<td class="btnEdita" ><form nome="alterar" action="N2alterar.php" method="POST">
								<input type="hidden" name="id" value="<?=$entregavirtual["id"]?>"/>
								<input type="submit" name="editar" value="Editar"/>
						</form></td>
						<td class="btnEdita" ><form nome="excluir" action="N2conexa.php" method="POST">
								<input type="hidden" name="id" value="<?=$entregavirtual["id"]?>"/>
								<input type="hidden" name="acao" value="excluir"/>
								<input type="submit" name="excluir" value="Excluir"/>
						</form></td>
					</tr>
				<?php } ?>
			</tbody>
		</table>
		</div>
		
	</body>
</html>