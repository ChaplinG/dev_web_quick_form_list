<?php
	include("N2conexa.php");
	$entregavirtual = buscarIDCliente($_POST["id"]);
?>

<html>
	<head>
		<title>Alteração Cadastral</title>
		<link rel="stylesheet" href="N2formatacao.css">
	</head>
	
	<body>
		<div id="form">
		<p class="titulos">Alterar Cadastro</p>
		
		<form name="dadosCliente" action="N2conexa.php" method="POST">
		<table>
			<thead>
				<tr>
					<th class="tit01" colspan="2">Dados Cadastrais</th>
					<th class="tit01" colspan="2">Endereço de Entrega</th>
				</tr>
			</thead>
			
			<tbody>
				<tr>
					<td></td>
					<td><input type="radio" name="tipoPessoa" value="Física"/>
					<label for="Pessoa Física">Pessoa Física</label>
					<input type="radio" name="tipoPessoa" value="Jurídica"/>
					<label for="Pessoa jurídica">Pessoa Jurídica</label></td>
					<td>CEP</td>
					<td><input type="text" name="cep" value="<?=$entregavirtual["cep"]?>"/></td>
				</tr>
				<tr>
					<td>Nome</td>
					<td><input type="text" name="nome" value="<?=$entregavirtual["nome"]?>"/></td>
					<td>Rua</td>
					<td><input type="text" name="rua" value="<?=$entregavirtual["rua"]?>"/></td>					
				</tr>
				<tr>
					<td>Sobrenome</td>
					<td><input type="text" name="sobrenome" value="<?=$entregavirtual["sobrenome"]?>"/></td>					
					<td>Número</td>
					<td><input type="text" name="numero" value="<?=$entregavirtual["numero"]?>"/></td>
				</tr>
				<tr>
					<td>Gênero</td>
					<td><input class="listaGen" name="sexo" list="sexo">
						<datalist id="sexo">
							<option value="Feminino"/>
							<option value="Masculino"/>
							<option value="Não Binário"/>
							<option value="Prefiro não declarar"/>					
						</datalist>
					<td>Complemento</td>
					<td><input type="text" name="complemento" value="<?=$entregavirtual["complemento"]?>"/></td>
				</tr>
				<tr>
					<td>CPF/CNPJ</td>
					<td><input type="text" name="cpfCnpj" value="<?=$entregavirtual["cpfCnpj"]?>"/></td>					
					<td>Referência</td>
					<td><input type="text" name="referencia" value="<?=$entregavirtual["referencia"]?>"/></td>
				</tr>
				<tr>
					<td>Telefone</td>
					<td><input type="text" name="telefone" value="<?=$entregavirtual["telefone"]?>"/></td>					
					<td>Bairro</td>
					<td><input type="text" name="bairro" value="<?=$entregavirtual["bairro"]?>"/></td>
				</tr>
				<tr>
					<td>Celular</td>
					<td><input type="text" name="celular" value="<?=$entregavirtual["celular"]?>"/></td>					
					<td>Cidade</td>
					<td><input type="text" name="cidade" value="<?=$entregavirtual["cidade"]?>"/></td>
				</tr>
				<tr>
					<td>Nascimento</td>
					<td><input class="listaGen" type="date" name="nascimento" value="<?=$entregavirtual["nascimento"]?>"/></td>					
					<td>Estado</td>
					<td><input type="text" name="estado" value="<?=$entregavirtual["estado"]?>"/></td>
				</tr>
				<tr>
					<td></td>
					<td></td>
					<td><input type="hidden" name="acao" value="alterar"/>
						<input type="hidden" name="id" value="<?=$entregavirtual["id"]?>"/></td>
					<td><input type="submit" name="enviar" value="Enviar"/></td>
				</tr>
			</tbody>			
		</table>		
		</form>
		</div>
	</body>
</html>
