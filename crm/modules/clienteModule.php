<?php

require_once '../config/config_Bd.php';
require_once '../includes/Especializacao/pessoasModule.php';
require_once '../includes/Especializacao/funcionarioModule.php';
require_once '../Controller/controllerCrud.php';

/*************************************************************
Objetivo: Classe responsável por representar todas as operações com o cliente do negócio.


Atributos:
$nome- nome do cliente
$sobrenome - sobrenome do cliente
$email - email do cliente
$idade - idade do cliente

Métodos:
insert - insere um cliente na tabela cliente
update - atualiza um cliente na tabela cliente

setNome - Atribui um nome ao cliente
getNome - Retorna o nome do cliente

setSobrenome - Atribui um sobrenome ao cliente
getSobrenome - Retorna o sobrenome ao cliente

setEmail - Atribui um email ao cliente
getEmail - Retorna o email do cliente

setIdade - Atribui uma idade ao cliente
getIdade - Retorn a idade do cliente
 *************************************************************/

class Cliente extends CRUD
{
	use Pessoa, Funcionario;


	protected $table = 'clientes';

	//Pessoais
	private $nome;
	private $idade;
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

	//Endereço
	private $logradouro;
	private $numeroCasa;
	private $bairro;
	private $complemento;
	private $cidade;
	private $uf;
	private $referencia;

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
	public function setIdade($idade)
	{
		$this->idade = $idade;
	}

	public function getIdade()
	{
		return $this->idade;
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

	// Logradouro
	public function getLogradouro()
	{
		return $this->logradouro;
	}

	public function setLogradouro($logradouro)
	{
		$this->logradouro = $logradouro;
	}

	// Número da Casa
	public function getNumeroCasa()
	{
		return $this->numeroCasa;
	}

	public function setNumeroCasa($numeroCasa)
	{
		$this->numeroCasa = $numeroCasa;
	}

	// Bairro
	public function getBairro()
	{
		return $this->bairro;
	}

	public function setBairro($bairro)
	{
		$this->bairro = $bairro;
	}

	// Complemento
	public function getComplemento()
	{
		return $this->complemento;
	}

	public function setComplemento($complemento)
	{
		$this->complemento = $complemento;
	}

	// Cidade
	public function getCidade()
	{
		return $this->cidade;
	}

	public function setCidade($cidade)
	{
		$this->cidade = $cidade;
	}

	// UF
	public function getUf()
	{
		return $this->uf;
	}

	public function setUf($uf)
	{
		$this->uf = $uf;
	}

	// Referência
	public function getReferencia()
	{
		return $this->referencia;
	}

	public function setReferencia($referencia)
	{
		$this->referencia = $referencia;
	}

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
	public function insert()
	{
		$sql = "INSERT INTO $this->table 
				(nome, idade, sexo, estadoCivil, dataNasc, profissao, faixaSalarial, cpf, escolaridade, religiao, timeFut, raca, tipocliente, infoAdic,
				logradouro, numeroCasa, bairro, complemento, cidade, uf, referencia,
				celular1, celular2, telFixo, email) 
				VALUES 
				(:nome, :idade, :sexo, :estadoCivil, :dataNasc, :profissao, :faixaSalarial, :cpf, :escolaridade, :religiao, :timeFut, :raca, :tipocliente, :infoAdic,
				:logradouro, :numeroCasa, :bairro, :complemento, :cidade, :uf, :referencia,
				:celular1, :celular2, :telFixo, :email)";

		$stmt = Database::prepare($sql);

		$stmt->bindParam(':nome', $this->nome);
		$stmt->bindParam(':idade', $this->idade, PDO::PARAM_INT);
		$stmt->bindParam(':sexo', $this->sexo);
		$stmt->bindParam(':estadoCivil', $this->estadoCivil);
		$stmt->bindParam(':dataNasc', $this->dataNasc);
		$stmt->bindParam(':profissao', $this->profissao);
		$stmt->bindParam(':faixaSalarial', $this->faixaSalarial,PDO::PARAM_BOOL);
		$stmt->bindParam(':cpf', $this->cpf,PDO::PARAM_INT);
		$stmt->bindParam(':escolaridade', $this->escolaridade);
		$stmt->bindParam(':religiao', $this->religiao);
		$stmt->bindParam(':timeFut', $this->timeFut);
		$stmt->bindParam(':raca', $this->raca);
		$stmt->bindParam(':tipocliente', $this->tipocliente);
		$stmt->bindParam(':infoAdic', $this->infoAdic);

		$stmt->bindParam(':logradouro', $this->logradouro);
		$stmt->bindParam(':numeroCasa', $this->numeroCasa);
		$stmt->bindParam(':bairro', $this->bairro);
		$stmt->bindParam(':complemento', $this->complemento);
		$stmt->bindParam(':cidade', $this->cidade);
		$stmt->bindParam(':uf', $this->uf);
		$stmt->bindParam(':referencia', $this->referencia);

		$stmt->bindParam(':celular1', $this->celular1);
		$stmt->bindParam(':celular2', $this->celular2);
		$stmt->bindParam(':telFixo', $this->telFixo);
		$stmt->bindParam(':email', $this->email);

		return $stmt->execute();
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
				idade = :idade, 
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
				tipocliente = :tipocliente, 
				infoAdic = :infoAdic,
				logradouro = :logradouro, 
				numeroCasa = :numeroCasa, 
				bairro = :bairro, 
				complemento = :complemento, 
				cidade = :cidade, 
				uf = :uf, 
				referencia = :referencia,
				celular1 = :celular1, 
				celular2 = :celular2, 
				telFixo = :telFixo, 
				email = :email 
				WHERE id = :id";

		$stmt = Database::prepare($sql);

		$stmt->bindParam(':nome', $this->nome);
		$stmt->bindParam(':idade', $this->idade, PDO::PARAM_INT);
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
		$stmt->bindParam(':tipocliente', $this->tipocliente, PDO::PARAM_INT);
		$stmt->bindParam(':infoAdic', $this->infoAdic);

		$stmt->bindParam(':logradouro', $this->logradouro);
		$stmt->bindParam(':numeroCasa', $this->numeroCasa);
		$stmt->bindParam(':bairro', $this->bairro);
		$stmt->bindParam(':complemento', $this->complemento);
		$stmt->bindParam(':cidade', $this->cidade);
		$stmt->bindParam(':uf', $this->uf);
		$stmt->bindParam(':referencia', $this->referencia);

		$stmt->bindParam(':celular1', $this->celular1);
		$stmt->bindParam(':celular2', $this->celular2);
		$stmt->bindParam(':telFixo', $this->telFixo);
		$stmt->bindParam(':email', $this->email);
		$stmt->bindParam(':id', $id, PDO::PARAM_INT);

		return $stmt->execute();
	}

	public function  findAll()
	{
		$sql = "SELECT * FROM $this->table ";
		$stmt = Database::prepare($sql);
		$stmt->execute();
		//retorna um array com os registros da tabela indexado pelo nome da coluna da tabela e por um número
		return $stmt->fetchAll(PDO::FETCH_BOTH);
	}

	public function  find($id)
	{
		$sql = "SELECT * FROM $this->table WHERE id = :id";
		$stmt = Database::prepare($sql);
		$stmt->bindParam(':id', $id, PDO::PARAM_INT);
		$stmt->execute();
		return $stmt->fetch(PDO::FETCH_BOTH);
	}
	public function delete($id)
	{
		$sql = "DELETE FROM $this->table WHERE id = :id";
		$stmt = Database::prepare($sql);
		$stmt->bindParam(':id', $id, PDO::PARAM_INT);
		return $stmt->execute();
	}
}
