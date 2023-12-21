<?php
namespace Models;
include_once '../models/ClassConexao.php';
// include "../models/ClassTrait.php";

class Farmacia extends DataBase
{   
    
    use Pessoa, Funcionario;

    protected $table = 'farmacia';

    private $nomeFarmacia;
    private $razaoSocial;
    private $emailFarmacia;
    private $numeroFarmacia;
    private $dataCriacaoFarmacia;
    private $cnpjFarmacia;
    private $telefoneFarmacia;
    private $senhaEmail;
    private $senhaFarmacia;
    private $codigo;

    // Getter e Setter para $nomeFarmacia

    public function getNomeFarmacia()
    {
        return $this->nomeFarmacia;
    }

    public function setNomeFarmacia($nomeFarmacia)
    {
        $this->nomeFarmacia = $nomeFarmacia;
    }

    // Getter e Setter para $razaoSocial
    public function getRazaoSocial()
    {
        return $this->razaoSocial;
    }

    public function setRazaoSocial($razaoSocial)
    {
        $this->razaoSocial = $razaoSocial;
    }

    // Getter e Setter para $emailFarmacia
    public function getEmailFarmacia()
    {
        return $this->emailFarmacia;
    }

    public function setEmailFarmacia($emailFarmacia)
    {
        $this->emailFarmacia = $emailFarmacia;
    }

    // Getter e Setter para $numeroFarmacia
    public function getNumeroFarmacia()
    {
        return $this->numeroFarmacia;
    }

    public function setNumeroFarmacia($numeroFarmacia)
    {
        $this->numeroFarmacia = $numeroFarmacia;
    }

    // Getter e Setter para $dataCriacaoFarmacia
    public function getDataCriacaoFarmacia()
    {
        return $this->dataCriacaoFarmacia;
    }

    public function setDataCriacaoFarmacia($dataCriacaoFarmacia)
    {
        $this->dataCriacaoFarmacia = $dataCriacaoFarmacia;
    }

    // Getter e Setter para $cnpjFarmacia
    public function getCnpjFarmacia()
    {
        return $this->cnpjFarmacia;
    }

    public function setCnpjFarmacia($cnpjFarmacia)
    {
        $this->cnpjFarmacia = $cnpjFarmacia;
    }

    // Getter e Setter para $telefoneFarmacia
    public function getTelefoneFarmacia()
    {
        return $this->telefoneFarmacia;
    }

    public function setTelefoneFarmacia($telefoneFarmacia)
    {
        $this->telefoneFarmacia = $telefoneFarmacia;
    }

    // Getter e Setter para $senhaEmail
    public function getSenhaEmail()
    {
        return $this->senhaEmail;
    }

    public function setSenhaEmail($senhaEmail)
    {
        $this->senhaEmail = $senhaEmail;
    }

    // Getter e Setter para $senhaFarmacia
    public function getSenhaFarmacia()
    {
        return $this->senhaFarmacia;
    }

    public function setSenhaFarmacia($senhaFarmacia)
    {
        $this->senhaFarmacia = $senhaFarmacia;
    }

    // Getter e Setter para $codigo
    public function getCodigo()
    {
        return $this->codigo;
    }

    public function setCodigo($codigo)
    {
        $this->codigo = $codigo;
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


public function update($id, $colunas = [])
{
    // Lista de colunas permitidas
    $colunasPermitidas = [
        'nomeFarmacia',
        'razaoSocial',
        'emailFarmacia',
        'numeroFarmacia',
        'dataCriacaoFarmacia',
        'cnpjFarmacia',
        'telefoneFarmacia',
        'senhaEmail'
    ];

    // Filtra as colunas fornecidas para garantir que apenas as permitidas sejam usadas
    $colunas = array_intersect($colunas, $colunasPermitidas);

    // Verifica se há pelo menos uma coluna para atualizar
    if (empty($colunas)) {
        return false; // Nada para atualizar
    }

    // Constrói a parte SET da consulta SQL
    $setPart = implode(', ', array_map(function ($coluna) {
        return "$coluna = :$coluna";
    }, $colunas));

    $sql = "UPDATE $this->table SET $setPart WHERE id_PK = :id";

    $stmt = DataBase::prepare($sql);

    // Associa os parâmetros
    foreach ($colunas as $coluna) {
        $stmt->bindParam(":$coluna", $this->$coluna);
    }

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