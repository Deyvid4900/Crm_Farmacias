<?php

namespace Models;

include_once '../models/ClassConexao.php';
include_once '../models/ClassCrud.php';




class Cliente extends CRUD
{
	use Pessoa, Funcionario;


	protected $table = 'clientes';

	//Pessoais
	private $nome;
	private $sexo;
	private $estadoCivil;
	private $dataNasc;
	private $profissao;
	private $faixaSalarial;
	private $cpf;
	private $escolaridade;
	private $religiao;
	private $timeFut;
	private $raca;
	private $tipocliente;
	private $infoAdic;
	//Contato
	private $celular1;
	private $celular2;
	private $telFixo;
	private $email;




	/********Início dos métodos sets e gets*********/

	public function setNome($nome)
	{
		$this->nome = $nome;
	}
	public function getNome()
	{
		return $this->nome;
	}

	public function setEmail($email)
	{
		$this->email = $email;
	}

	public function getEmail()
	{
		return $this->email;
	}

	// Sexo
	public function getSexo()
	{
		return $this->sexo;
	}

	public function setSexo($sexo)
	{
		$this->sexo = $sexo;
	}

	// Estado Civil
	public function getEstadoCivil()
	{
		return $this->estadoCivil;
	}

	public function setEstadoCivil($estadoCivil)
	{
		$this->estadoCivil = $estadoCivil;
	}

	// Data de Nascimento
	public function getDataNasc()
	{
		return $this->dataNasc;
	}

	public function setDataNasc($dataNasc)
	{
		$this->dataNasc = $dataNasc;
	}

	// Profissão
	public function getProfissao()
	{
		return $this->profissao;
	}

	public function setProfissao($profissao)
	{
		$this->profissao = $profissao;
	}

	// Faixa Salarial
	public function getFaixaSalarial()
	{
		return $this->faixaSalarial;
	}

	public function setFaixaSalarial($faixaSalarial)
	{
		$this->faixaSalarial = $faixaSalarial;
	}

	// CPF
	public function getCpf()
	{
		return $this->cpf;
	}

	public function setCpf($cpf)
	{
		$this->cpf = $cpf;
	}

	// Escolaridade
	public function getEscolaridade()
	{
		return $this->escolaridade;
	}

	public function setEscolaridade($escolaridade)
	{
		$this->escolaridade = $escolaridade;
	}

	// Religião
	public function getReligiao()
	{
		return $this->religiao;
	}

	public function setReligiao($religiao)
	{
		$this->religiao = $religiao;
	}

	// Time de Futebol
	public function getTimeFut()
	{
		return $this->timeFut;
	}

	public function setTimeFut($timeFut)
	{
		$this->timeFut = $timeFut;
	}

	// Raça
	public function getRaca()
	{
		return $this->raca;
	}

	public function setRaca($raca)
	{
		$this->raca = $raca;
	}




	// Informações Adicionais
	public function getInfoAdic()
	{
		return $this->infoAdic;
	}

	public function setInfoAdic($infoAdic)
	{
		$this->infoAdic = $infoAdic;
	}

	// Getters e Setters para Endereço



	// Getters e Setters para Contato

	// Celular 1
	public function getCelular1()
	{
		return $this->celular1;
	}

	public function setCelular1($celular1)
	{
		$this->celular1 = $celular1;
	}

	// Celular 2
	public function getCelular2()
	{
		return $this->celular2;
	}

	public function setCelular2($celular2)
	{
		$this->celular2 = $celular2;
	}

	// Telefone Fixo
	public function getTelFixo()
	{
		return $this->telFixo;
	}

	public function setTelFixo($telFixo)
	{
		$this->telFixo = $telFixo;
	}



	public function setTipoCliente($tipocliente)
	{
		$this->tipocliente = $tipocliente;
	}

	public function getTipoCliente()
	{
		return $this->tipocliente;
	}
	/********Fim dos métodos sets e gets*********/


	/***************
	Objetivo: Método que insere um cliente
	Parâmetro de saída: Retorna true em caso de sucesso ou false em caso de falha.
	 ***************/
	public function insertArray(array $data, $userID)
	{
		$sql = "INSERT INTO $this->table 
      (Id_Farmacia_FK, nome, sexo, estadoCivil, dataNasc, profissao, faixaSalarial, cpf, escolaridade, religiao, timeFut, raca, infoAdic,
      celular1, celular2, telFixo, email, nomeRemedioControl) 
      VALUES 
      (:Id_Farmacia_FK, :nome, :sexo, :estadoCivil, :dataNasc, :profissao, :faixaSalarial, :cpf, :escolaridade, :religiao, :timeFut, :raca, :infoAdic,
      :celular1, :celular2, :telFixo, :email, :nomeRemedioControl)";

		$stmt = Database::prepare($sql);
		$stmt->bindValue(':Id_Farmacia_FK', $userID);

		foreach ($data as $key => $value) {
			$stmt->bindValue(':' . $key, $value);
		}

		try {
			$stmt->execute();
			return true; // Successful insertion
		} catch (\Exception $e) {
			// Handle the exception if needed, e.g., log or return a more specific error message
			// For simplicity, I'll just return false here
			return false; // Failed insertion
		}
	}



	public function insert()
	{
		$sql = "INSERT INTO $this->table 
				(nome,  sexo, estadoCivil, dataNasc, profissao, faixaSalarial, cpf, escolaridade, religiao, timeFut, raca, infoAdic,
				logradouro, numeroCasa, bairro, complemento, cidade, uf, referencia,
				celular1, celular2, telFixo, email) 
				VALUES 
				(:nome,  :sexo, :estadoCivil, :dataNasc, :profissao, :faixaSalarial, :cpf, :escolaridade, :religiao, :timeFut, :raca, :infoAdic,
				:logradouro, :numeroCasa, :bairro, :complemento, :cidade, :uf, :referencia,
				:celular1, :celular2, :telFixo, :email)";

		$stmt = Database::prepare($sql);

		$stmt->bindParam(':nome', $this->nome);
		$stmt->bindParam(':sexo', $this->sexo);
		$stmt->bindParam(':estadoCivil', $this->estadoCivil);
		$stmt->bindParam(':dataNasc', $this->dataNasc);
		$stmt->bindParam(':profissao', $this->profissao);
		$stmt->bindParam(':faixaSalarial', $this->faixaSalarial);
		$stmt->bindParam(':cpf', $this->cpf);
		$stmt->bindParam(':escolaridade', $this->escolaridade);
		$stmt->bindParam(':religiao', $this->religiao);
		$stmt->bindParam(':timeFut', $this->timeFut);
		$stmt->bindParam(':raca', $this->raca);
		$stmt->bindParam(':tipocliente', $this->tipocliente);
		$stmt->bindParam(':infoAdic', $this->infoAdic);
		$stmt->bindParam(':celular1', $this->celular1);
		$stmt->bindParam(':celular2', $this->celular2);
		$stmt->bindParam(':telFixo', $this->telFixo);
		$stmt->bindParam(':email', $this->email);
		$stmt->execute();
		return;
	}


	/***************
	Objetivo: Atuliza um cliente pelo id
	Parâmetro de entrada: $id - id do cliente
	Parâmetro de saída: Retorna true em caso de sucesso ou false em caso de falha.
	 ***************/
	public function update($id)
	{
		$sql = "UPDATE $this->table SET 
				nome = :nome, 
				sexo = :sexo, 
				estadoCivil = :estadoCivil, 
				dataNasc = :dataNasc, 
				profissao = :profissao, 
				faixaSalarial = :faixaSalarial, 
				cpf = :cpf, 
				escolaridade = :escolaridade, 
				religiao = :religiao, 
				timeFut = :timeFut, 
				raca = :raca, 
				infoAdic = :infoAdic,
				celular1 = :celular1, 
				celular2 = :celular2, 
				telFixo = :telFixo, 
				email = :email 
				WHERE id = :id";

		$stmt = Database::prepare($sql);

		$stmt->bindParam(':nome', $this->nome);
		$stmt->bindParam(':sexo', $this->sexo);
		$stmt->bindParam(':estadoCivil', $this->estadoCivil);
		$stmt->bindParam(':dataNasc', $this->dataNasc);
		$stmt->bindParam(':profissao', $this->profissao);
		$stmt->bindParam(':faixaSalarial', $this->faixaSalarial);
		$stmt->bindParam(':cpf', $this->cpf);
		$stmt->bindParam(':escolaridade', $this->escolaridade);
		$stmt->bindParam(':religiao', $this->religiao);
		$stmt->bindParam(':timeFut', $this->timeFut);
		$stmt->bindParam(':raca', $this->raca);
		$stmt->bindParam(':infoAdic', $this->infoAdic);
		$stmt->bindParam(':celular1', $this->celular1);
		$stmt->bindParam(':celular2', $this->celular2);
		$stmt->bindParam(':telFixo', $this->telFixo);
		$stmt->bindParam(':email', $this->email);
		$stmt->bindParam(':id', $id, \PDO::PARAM_INT);

		return $stmt->execute();
	}
	public function getIdByName($name)
	{
		$sql = 'SELECT id FROM clientes WHERE nome = :nome';
		$stmt = Database::prepare($sql);
		$stmt->execute(['nome' => $name]);
		$result = $stmt->fetch();
		return $result ? $result->id : null;
	}


	public function  findAll()
	{
		$sql = "SELECT * FROM $this->table ";
		$stmt = Database::prepare($sql);
		$stmt->execute();
		//retorna um array com os registros da tabela indexado pelo nome da coluna da tabela e por um número
		return $stmt->fetchAll(\PDO::FETCH_BOTH);
	}
	public function findQtn($coluna,$valor,$id_farmacia)
	{
		$sql = "SELECT COUNT(*) as quantidade FROM $this->table WHERE Id_Farmacia_FK = $id_farmacia AND $coluna = '$valor' ";
		$stmt = Database::prepare($sql);
		$stmt->execute();

		return $stmt->fetchColumn();
	}
	public function findQtnFeminino()
	{
		$sql = "SELECT COUNT(*) as quantidade FROM $this->table WHERE sexo = 'feminino' ";
		$stmt = Database::prepare($sql);
		$stmt->execute();

		return $stmt->fetchColumn();
	}


	public function  findAllByFarmaciaId($userid)
	{
		$sql = "SELECT * FROM $this->table WHERE Id_Farmacia_FK = $userid ";

		$stmt = Database::prepare($sql);
		$stmt->execute();
		//retorna um array com os registros da tabela indexado pelo nome da coluna da tabela e por um número
		return $stmt->fetchAll(\PDO::FETCH_BOTH);
	}
	public function findAllAdress($idCliente)
	{
		$sql = "SELECT * FROM enderecos WHERE cliente_id =:cliente_id ";
		$stmt = Database::prepare($sql);
		$stmt->bindParam(':cliente_id', $idCliente, \PDO::PARAM_INT);
		$stmt->execute();
		//retorna um array com os registros da tabela indexado pelo nome da coluna da tabela e por um número
		return $stmt->fetchAll(\PDO::FETCH_BOTH);
	}

	public function findAllAdressWithClientName($userid)
	{
		$sql = "SELECT e.*, c.nome AS nome
        FROM enderecos e
        INNER JOIN clientes c ON e.cliente_id = c.id
        WHERE c.Id_Farmacia_FK = $userid 
          AND (e.logradouro IS NOT NULL OR e.logradouro != '')
          AND (e.bairro IS NOT NULL OR e.bairro != '')
          AND (e.numeroCasa IS NOT NULL OR e.numeroCasa != '')
          AND (e.cidade IS NOT NULL OR e.cidade != '')
          AND (c.nome IS NOT NULL OR c.nome != '')";

		$stmt = Database::prepare($sql);
		$stmt->execute();

		// Retorna um array associativo com os registros da tabela
		return $stmt->fetchAll(\PDO::FETCH_ASSOC);
	}
	public function findAllContatosWithClientName()
	{
		$sql = "SELECT e.*, c.nome AS nome
				FROM enderecos e
				INNER JOIN clientes c ON e.cliente_id = c.id
				WHERE
				 e.logradouro IS NOT NULL or e.logradouro != ''
				AND e.bairro IS NOT NULL or e.bairro != ''
				AND e.numeroCasa IS NOT NULL or e.numeroCasa != ''
				AND e.cidade IS NOT NULL or e.cidade != ''
				AND c.nome IS NOT NULL or c.nome != ''
			   ";

		$stmt = Database::prepare($sql);
		$stmt->execute();

		// Retorna um array associativo com os registros da tabela
		return $stmt->fetchAll(\PDO::FETCH_ASSOC);
	}

	public function  find($id)
	{
		$sql = "SELECT * FROM $this->table WHERE id = :id";
		$stmt = Database::prepare($sql);
		$stmt->bindParam(':id', $id, \PDO::PARAM_INT);
		$stmt->execute();
		return $stmt->fetch(\PDO::FETCH_BOTH);
	}
	public function delete($id)
	{
		$sql = "DELETE FROM $this->table WHERE id = :id";
		$stmt = Database::prepare($sql);
		$stmt->bindParam(':id', $id, \PDO::PARAM_INT);
		return $stmt->execute();
	}
	public function adicionarEnderco($cliente_Id)
	{
	}
}
trait Funcionario
{

	private $matricula;


	/********Início dos métodos sets e gets*********/
	public function setmatricula($matricula)
	{
		$this->matricula = $matricula;
	}
	public function getmatricula()
	{
		return $this->matricula;
	}

	/********Fim dos métodos sets e gets*********/
}


//poderia ter usado interface, no entanto não é possível criar atributo, apenas MÉTODOS
// Adiciona atributos ou metodos para a instancia
trait Pessoa
{

	private $cpf;


	/********Início dos métodos sets e gets*********/
	public function setcpf($cpf)
	{
		$this->cpf = $cpf;
	}
	public function getcpf()
	{
		return $this->cpf;
	}

	/********Fim dos métodos sets e gets*********/
}
