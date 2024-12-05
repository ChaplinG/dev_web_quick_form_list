<?php
	if(isset($_POST["acao"])){
		if($_POST["acao"]=="inserir"){
			cadastrarCliente();
		}
		
		if($_POST["acao"]=="alterar"){
			atualizarCliente();
		}
		
		if ($_POST["acao"]=="excluir"){
			excluirCliente();
		}
	}
	
	
	function voltarIndex(){
		header("Location:N2index.php");
	}
	
	
	//INSERIR
	function cadastrarCliente(){
		$banco = new mysqli("localhost","root","","loja");
		$sql = "INSERT INTO entregavirtual(tipoPessoa, nome, sobrenome, sexo, cpfCnpj, telefone, celular, nascimento, cep, rua, numero, complemento, referencia, bairro, cidade, estado) VALUES ('{$_POST["tipoPessoa"]}','{$_POST["nome"]}','{$_POST["sobrenome"]}','{$_POST["sexo"]}','{$_POST["cpfCnpj"]}','{$_POST["telefone"]}','{$_POST["celular"]}','{$_POST["nascimento"]}','{$_POST["cep"]}','{$_POST["rua"]}','{$_POST["numero"]}','{$_POST["complemento"]}','{$_POST["referencia"]}','{$_POST["bairro"]}','{$_POST["cidade"]}','{$_POST["estado"]}')";
		$banco->query($sql);
		$banco->close();
		voltarIndex();
	}
	
	
	//LISTAR
	function buscarClientes(){
		$banco = new mysqli("localhost", "root", "", "loja");
		$sql = "SELECT * FROM entregavirtual ORDER by id";
		$resultado = $banco->query($sql);
		while($row = mysqli_fetch_array($resultado)){
			$grupo[] = $row;
		}
		return $grupo; 
	}
	
	
	//ALTERAR
	function buscarIDCliente(){
		$banco = new mysqli("localhost","root","","loja");
		$sql = "SELECT * FROM entregavirtual Where id='{$_POST["id"]}'";
		$resultado = $banco->query($sql);
		$entregavirtual = mysqli_fetch_assoc($resultado);
		return $entregavirtual;
	}
	
	function atualizarCliente(){
		$banco = new mysqli("localhost","root","","loja");
		$sql = "UPDATE entregavirtual SET tipoPessoa='{$_POST["tipoPessoa"]}', nome='{$_POST["nome"]}', sobrenome='{$_POST["sobrenome"]}', sexo='{$_POST["sexo"]}', cpfCnpj='{$_POST["cpfCnpj"]}', telefone='{$_POST["telefone"]}', celular='{$_POST["celular"]}', nascimento='{$_POST["nascimento"]}', cep='{$_POST["cep"]}', rua='{$_POST["rua"]}', numero='{$_POST["numero"]}', complemento='{$_POST["complemento"]}', referencia='{$_POST["referencia"]}', bairro='{$_POST["bairro"]}', cidade='{$_POST["cidade"]}', estado='{$_POST["estado"]}' Where id='{$_POST["id"]}'";
		$banco->query($sql);
		$banco->close();
		voltarIndex();
	}
	
	
	//EXCLUIR
	function excluirCliente(){
		$banco = new mysqli("localhost","root", "","loja");
		$sql = "DELETE FROM `entregavirtual` WHERE id='{$_POST["id"]}'";
		$banco->query($sql);
		$banco->close();
		voltarIndex();
	}
	
?>