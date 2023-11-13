<?php

require_once '../config/config_Bd.php';
require_once '../includes/Especializacao/pessoasModule.php';
require_once '../includes/Especializacao/funcionarioModule.php';

/*************************************************************
Objetivo: Classe responsável por representar todas as operações com o eventos.


Atributos:
$nomeEvento- nome do evento

Métodos:
insert - insere um evento na tabela evento
update - atualiza um evento na tabela evento

*************************************************************/

class Cliente extends CRUD{
	

	protected $table ='eventos';
	
	//Pessoais
	private $nomeEvento;
	private $dataEvento;
    private $descricaoEvento;
    
	
    public function getNomeEvento() {
        return $this->nomeEvento;
    }

    public function setNomeEvento($nomeEvento) {
        $this->nomeEvento = $nomeEvento;
    }

    public function getDataEvento() {
        return $this->dataEvento;
    }

    public function setDataEvento($dataEvento) {
        $this->dataEvento = $dataEvento;
    }

    public function getDescricaoEvento() {
        return $this->descricaoEvento;
    }

    public function setDescricaoEvento($descricaoEvento) {
        $this->descricaoEvento = $descricaoEvento;
    }

	/***************
	Objetivo: Método que insere um evento
	Parâmetro de saída: Retorna true em caso de sucesso ou false em caso de falha.
	***************/
	public function insert(){
		$sql="INSERT INTO $this->table (nomeEvento,dataEvento,descricaoEvento) VALUES (:nome,:dataEvento,:descricaoEvento)";
		$stmt = Database::prepare($sql);
		$stmt->bindParam(':nome', $this->nomeEvento);
		$stmt->bindParam(':dataEvento', $this->dataEvento);
		$stmt->bindParam(':descricaoEvento', $this->descricaoEvento,);
		
		
		return $stmt->execute();
		
	}
	
	/***************
	Objetivo: Atuliza um cliente pelo id
	Parâmetro de entrada: $id - id do cliente
	Parâmetro de saída: Retorna true em caso de sucesso ou false em caso de falha.
	***************/
	public function update($id){
		$sql="UPDATE $this->table SET nomeEvento = :nomeEvento, dataEvento = :dataEvento, descricaoEvento = :descricaoEvento WHERE id = :id ";
		$stmt = Database::prepare($sql);
		$stmt->bindParam(':nomeEvento', $this->nomeEvento);
		
		$stmt->bindParam(':dataEvento', $this->dataEvento);
		$stmt->bindParam(':descricaoEvento', $this->descricaoEvento);
		$stmt->bindParam(':id', $id, PDO::PARAM_INT);
		// $stmt->bindParam(':tipocliente', 1, PDO::PARAM_INT);
		return $stmt->execute();
	}
	public function  findAll(){
		$sql = "SELECT * FROM $this->table ";
		$stmt = Database::prepare($sql);			
		$stmt->execute();
		//retorna um array com os registros da tabela indexado pelo nome da coluna da tabela e por um número
		return $stmt->fetchAll(PDO::FETCH_BOTH );
		
	}
	
	public function  find($id){
		$sql = "SELECT * FROM $this->table WHERE id = :id";
		$stmt = Database::prepare($sql);
		$stmt->bindParam(':id', $id, PDO::PARAM_INT);
		$stmt->execute();
		return $stmt->fetch(PDO::FETCH_BOTH);
		
	}
	public function delete($id){
		$sql="DELETE FROM $this->table WHERE id = :id";
		$stmt = Database::prepare($sql);	
		$stmt->bindParam(':id', $id, PDO::PARAM_INT);
		return $stmt->execute();
		
	}
	
	
	
	
		
	
}

?>