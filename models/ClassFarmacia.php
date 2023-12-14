<?php
namespace Models;
include_once '../models/ClassConexao.php';
// include "../models/ClassTrait.php";

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

    public function insert($nomeFarmacia,$senhaFarmacia,$emailFarmacia,$numeroFarmacia)
{
    $sql = "INSERT INTO $this->table (nomeFarmacia, senhaFarmacia, emailFarmacia, numeroFarmacia) 
            VALUES (:nomeFarmacia, :senhaFarmacia, :emailFarmacia, :numero)";

    $stmt = DataBase::prepare($sql);

    $stmt->bindParam(':nomeFarmacia', $nomeFarmacia);
    // Usando password_hash para criptografar a senha
    $hashedSenhaFarmacia = password_hash($senhaFarmacia, PASSWORD_DEFAULT);
    $stmt->bindParam(':senhaFarmacia', $hashedSenhaFarmacia);
    $stmt->bindParam(':emailFarmacia', $emailFarmacia);
    $stmt->bindParam(':numero', $numeroFarmacia);

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
    public function validatePass($senhaInput,$hash){
        return password_verify($senhaInput,$hash);
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
    public function getHashPassFromNome($nome) {
        $sql = "SELECT senhaFarmacia FROM $this->table WHERE nomeFarmacia = :nomeFarmacia";
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