<?php

//poderia ter usado interface, no entanto não é possível criar atributo, apenas MÉTODOS
// Adiciona atributos ou metodos para a instancia
trait Pessoa {
	
	private $cpf;
		
		
	/********Início dos métodos sets e gets*********/
	public function setcpf($cpf){
		$this->cpf = $cpf;
	}
	public function getcpf(){
		return $this->cpf;
	}

	/********Fim dos métodos sets e gets*********/
	
}

?>