<?php

namespace Models;

include '../models/ClassConexao.php';
include '../models/ClassCrud.php';


class Medico extends CRUD
{
    use Pessoa, Funcionario;

    protected $table = 'medicos';

    private $id_farmacia_FK;
    private $nome;
    private $cpf;
    private $sexo;
    private $especialidade;
    private $atuacao;
    private $hospital_atual;
    private $data_nascimento;
    private $celular1;
    private $celular2;
    private $tel_fixo1;
    private $tel_fixo2;
    private $email;
    private $informacoes_adicionais;


    // metodos get e set
        public function getIdFarmaciaFK()
        {
            return $this->id_farmacia_FK;
        }

        public function setIdFarmaciaFK($id_farmacia_FK)
        {
            $this->id_farmacia_FK = $id_farmacia_FK;
        }

        public function getNome()
        {
            return $this->nome;
        }

        public function setNome($nome)
        {
            $this->nome = $nome;
        }

        public function getCpf()
        {
            return $this->cpf;
        }

        public function setCpf($cpf)
        {
            $this->cpf = $cpf;
        }

        public function getSexo()
        {
            return $this->sexo;
        }

        public function setSexo($sexo)
        {
            $this->sexo = $sexo;
        }

        public function getEspecialidade()
        {
            return $this->especialidade;
        }

        public function setEspecialidade($especialidade)
        {
            $this->especialidade = $especialidade;
        }

        public function getAtuacao()
        {
            return $this->atuacao;
        }

        public function setAtuacao($atuacao)
        {
            $this->atuacao = $atuacao;
        }

        public function getHospitalAtual()
        {
            return $this->hospital_atual;
        }

        public function setHospitalAtual($hospital_atual)
        {
            $this->hospital_atual = $hospital_atual;
        }

        public function getDataNascimento()
        {
            return $this->data_nascimento;
        }

        public function setDataNascimento($data_nascimento)
        {
            $this->data_nascimento = $data_nascimento;
        }

        public function getCelular1()
        {
            return $this->celular1;
        }

        public function setCelular1($celular1)
        {
            $this->celular1 = $celular1;
        }

        public function getCelular2()
        {
            return $this->celular2;
        }

        public function setCelular2($celular2)
        {
            $this->celular2 = $celular2;
        }

        public function getTelFixo1()
        {
            return $this->tel_fixo1;
        }

        public function setTelFixo1($tel_fixo1)
        {
            $this->tel_fixo1 = $tel_fixo1;
        }

        public function getTelFixo2()
        {
            return $this->tel_fixo2;
        }

        public function setTelFixo2($tel_fixo2)
        {
            $this->tel_fixo2 = $tel_fixo2;
        }

        public function getEmail()
        {
            return $this->email;
        }

        public function setEmail($email)
        {
            $this->email = $email;
        }

        public function getInformacoesAdicionais()
        {
            return $this->informacoes_adicionais;
        }

        public function setInformacoesAdicionais($informacoes_adicionais)
        {
            $this->informacoes_adicionais = $informacoes_adicionais;
        }


   
    // Métodos CRUD
    public function insertArray(array $data, $userID)
{
    $fields = array_keys($data);
    $fieldNames = implode(', ', $fields);
    $placeholders = ':' . implode(', :', $fields);

    $sql = "INSERT INTO $this->table (Id_Farmacia_FK, $fieldNames) VALUES (:Id_Farmacia_FK, $placeholders)";

    $stmt = Database::prepare($sql);
    $stmt->bindValue(':Id_Farmacia_FK', $userID);

    foreach ($data as $key => $value) {
        $stmt->bindValue(':' . $key, $value);
    }

    return $stmt->execute();
}


    public function insert()
    {
        $sql = "INSERT INTO $this->table 
                (id_farmacia_FK, nome, cpf, sexo, especialidade, atuacao, hospital_atual, data_nascimento,
                celular1, celular2, tel_fixo1, tel_fixo2, email, informacoes_adicionais) 
                VALUES 
                (:id_farmacia_FK, :nome, :cpf, :sexo, :especialidade, :atuacao, :hospital_atual, :data_nascimento,
                :celular1, :celular2, :tel_fixo1, :tel_fixo2, :email, :informacoes_adicionais)";

        $stmt = Database::prepare($sql);

        $stmt->bindParam(':id_farmacia_FK', $this->id_farmacia_FK);
        $stmt->bindParam(':nome', $this->nome);
        $stmt->bindParam(':cpf', $this->cpf);
        $stmt->bindParam(':sexo', $this->sexo);
        $stmt->bindParam(':especialidade', $this->especialidade);
        $stmt->bindParam(':atuacao', $this->atuacao);
        $stmt->bindParam(':hospital_atual', $this->hospital_atual);
        $stmt->bindParam(':data_nascimento', $this->data_nascimento);
        $stmt->bindParam(':celular1', $this->celular1);
        $stmt->bindParam(':celular2', $this->celular2);
        $stmt->bindParam(':tel_fixo1', $this->tel_fixo1);
        $stmt->bindParam(':tel_fixo2', $this->tel_fixo2);
        $stmt->bindParam(':email', $this->email);
        $stmt->bindParam(':informacoes_adicionais', $this->informacoes_adicionais);

        return $stmt->execute();
    }
    public function getIdByName($name){
		$sql = 'SELECT id FROM medicos WHERE nome = :nome';
		$stmt = Database::prepare($sql);
		$stmt->execute(['nome'=>$name]);
		$result = $stmt->fetch();
		return $result ? $result->id : null;
	 }

    public function update($id)
    {
        $sql = "UPDATE $this->table SET 
                id_farmacia_FK = :id_farmacia_FK,
                nome = :nome,
                cpf = :cpf,
                sexo = :sexo,
                especialidade = :especialidade,
                atuacao = :atuacao,
                hospital_atual = :hospital_atual,
                data_nascimento = :data_nascimento,
                celular1 = :celular1,
                celular2 = :celular2,
                tel_fixo1 = :tel_fixo1,
                tel_fixo2 = :tel_fixo2,
                email = :email,
                informacoes_adicionais = :informacoes_adicionais
                WHERE id = :id";

        $stmt = Database::prepare($sql);

        $stmt->bindParam(':id_farmacia_FK', $this->id_farmacia_FK);
        $stmt->bindParam(':nome', $this->nome);
        $stmt->bindParam(':cpf', $this->cpf);
        $stmt->bindParam(':sexo', $this->sexo);
        $stmt->bindParam(':especialidade', $this->especialidade);
        $stmt->bindParam(':atuacao', $this->atuacao);
        $stmt->bindParam(':hospital_atual', $this->hospital_atual);
        $stmt->bindParam(':data_nascimento', $this->data_nascimento);
        $stmt->bindParam(':celular1', $this->celular1);
        $stmt->bindParam(':celular2', $this->celular2);
        $stmt->bindParam(':tel_fixo1', $this->tel_fixo1);
        $stmt->bindParam(':tel_fixo2', $this->tel_fixo2);
        $stmt->bindParam(':email', $this->email);
        $stmt->bindParam(':informacoes_adicionais', $this->informacoes_adicionais);
        $stmt->bindParam(':id', $id, \PDO::PARAM_INT);

        return $stmt->execute();
    }

    public function findAll()
    {
        $sql = "SELECT * FROM $this->table";
        $stmt = Database::prepare($sql);
        $stmt->execute();

        return $stmt->fetchAll(\PDO::FETCH_ASSOC);
    }

    public function find($id)
    {
        $sql = "SELECT * FROM $this->table WHERE id = :id";
        $stmt = Database::prepare($sql);
        $stmt->bindParam(':id', $id, \PDO::PARAM_INT);
        $stmt->execute();

        return $stmt->fetch(\PDO::FETCH_ASSOC);
    }

    public function delete($id)
    {
        $sql = "DELETE FROM $this->table WHERE id = :id";
        $stmt = Database::prepare($sql);
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

