<?php
// Atualiza os clientes 


//Iniciar  Sessão se a sessão não estiver ativa
if (session_status() === PHP_SESSION_NONE) {
	session_start();
}
//Classe de cliente
include_once '../modules/clienteModule.php';


//verifica se o botão editar foi acionado


	//sanitiza os campos do formulário
	$nome=filter_var($_POST['nome'], FILTER_SANITIZE_STRING,0);
	
	$email=filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
	$idade=filter_var($_POST['idade'], FILTER_SANITIZE_NUMBER_INT);
	$id =filter_var($_POST['id'], FILTER_SANITIZE_NUMBER_INT); 
	
	
	//instancia o objeto cliente
	$cliente = new Cliente();	
	$cliente->setNome($nome);
	
	$cliente->setEmail($email);
	
	
	//atualiza o cliente
	if($cliente->update($id)):
		$_SESSION['mensagem'] = "Atualizado com sucesso!";
		header('Location: ');//envia quando da certo a atualização
	else:
		$_SESSION['mensagem'] = "Erro ao atualizar!";
		header('Location: ');//envia quando da errado a atualização
	endif;




?>