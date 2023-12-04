<?php
namespace Models;
include '../models/ClassConexao.php';
include "../models/ClassTrait.php";

class Farmacia extends DataBase
{   
    
    use Pessoa, Funcionario;

    protected $table = 'farmacia';
    private $nomeFarmacia;
    private $senhaFarmacia;
    private $codigo;

    public function setNomeFarmacia($nomeFarmacia)
    {
        $this->nomeFarmacia = $nomeFarmacia;
    }

    public function getNomeFarmacia()
    {
        return $this->nomeFarmacia;
    }

    public function setSenhaFarmacia($senhaFarmacia)
    {
        $this->senhaFarmacia = $senhaFarmacia;
    }

    public function getSenhaFarmacia()
    {
        return $this->senhaFarmacia;
    }

    public function setCodigo($codigo)
    {
        $this->codigo = $codigo;
    }

    public function getCodigo()
    {
        return $this->codigo;
    }

    public function insert()
    {
        $sql = "INSERT INTO $this->table (nomeFarmacia, senhaFarmacia, codigo) 
                VALUES (:nomeFarmacia, :senhaFarmacia, :codigo)";

        $stmt = DataBase::prepare($sql);

        $stmt->bindParam(':nomeFarmacia', $this->nomeFarmacia);
        $stmt->bindParam(':senhaFarmacia', $this->senhaFarmacia);
        $stmt->bindParam(':codigo', $this->codigo);

        return $stmt->execute();
    }

    public function update($id)
    {
        $sql = "UPDATE $this->table SET 
                nomeFarmacia = :nomeFarmacia, 
                senhaFarmacia = :senhaFarmacia, 
                codigo = :codigo 
                WHERE id = :id";

        $stmt = DataBase::prepare($sql);

        $stmt->bindParam(':nomeFarmacia', $this->nomeFarmacia);
        $stmt->bindParam(':senhaFarmacia', $this->senhaFarmacia);
        $stmt->bindParam(':codigo', $this->codigo);
        $stmt->bindParam(':id', $id, \PDO::PARAM_INT);

        return $stmt->execute();
    }
    public function findAll()
    {
        $sql = "SELECT * FROM $this->table";
        $stmt = DataBase::prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(\PDO::FETCH_BOTH);
    }

    public function findName($nomeFarmacia)
    {
        $sql = "SELECT * FROM $this->table WHERE nomeFarmacia = :nomeFarmacia";
        $stmt = DataBase::prepare($sql);
        $stmt->bindParam(':nomeFarmacia', $nomeFarmacia, \PDO::PARAM_STR);
        $stmt->execute();
        return $stmt->fetch(\PDO::FETCH_BOTH);
    }
    public function findPass($senhaFarmacia)
    {
        $sql = "SELECT * FROM $this->table WHERE senhaFarmacia = :senhaFarmacia";
        $stmt = DataBase::prepare($sql);
        $stmt->bindParam(':senhaFarmacia', $senhaFarmacia);
        $stmt->execute();
        return $stmt->fetch(\PDO::FETCH_BOTH);
    }
    public function findAcessPass($Acess)
    {
        $sql = "SELECT * FROM $this->table WHERE acessoCodigo = :acessoCodigo";
        $stmt = DataBase::prepare($sql);
        $stmt->bindParam(':acessoCodigo', $Acess);
        $stmt->execute();
        return $stmt->fetch(\PDO::FETCH_BOTH);
    }

    public function getIdFromNome($nome) {
        $sql = "SELECT id_PK FROM $this->table WHERE nomeFarmacia = :nomeFarmacia";
        $stmt = Database::prepare($sql);
        $stmt->bindParam(':nomeFarmacia', $nome);
        $stmt->execute();
        return $stmt->fetchColumn();
    }
    public function getRegistroFromNome($nome) {
        $sql = "SELECT * FROM $this->table WHERE nomeFarmacia = :nomeFarmacia";
        $stmt = Database::prepare($sql);
        $stmt->bindParam(':nomeFarmacia', $nome);
        $stmt->execute();
        return $stmt->fetch(\PDO::FETCH_ASSOC);
    }

    public function delete($id)
    {
        $sql = "DELETE FROM $this->table WHERE id = :id";
        $stmt = DataBase::prepare($sql);
        $stmt->bindParam(':id', $id, \PDO::PARAM_INT);
        return $stmt->execute();
    }
}
trait Funcionario {
	
	private $matricula;
		
		
	/********Início dos métodos sets e gets*********/
	public function setmatricula($matricula){
		$this->matricula = $matricula;
	}
	public function getmatricula(){
		return $this->matricula;
	}

	/********Fim dos métodos sets e gets*********/
	
}
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