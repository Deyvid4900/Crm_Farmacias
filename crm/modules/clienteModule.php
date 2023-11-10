<?php

require_once '../config/config_Bd.php';
require_once '../includes/Especializacao/pessoasModule.php';
require_once '../includes/Especializacao/funcionarioModule.php';

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

class Cliente extends CRUD{
	use Pessoa , Funcionario; 
	
	
	protected $table ='clientes';
	
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
	
		public function setNome($nome){
			$this->nome = $nome;
		}
		public function getNome(){
			return $this->nome;
		}
		
		public function setEmail($email){
			$this->email = $email;
		}
		
		public function getEmail(){
			return $this->email;
		}
		public function setIdade($idade){
			$this->idade = $idade;
		}
		
		public function getIdade(){
			return $this->idade;
		}
		
		// Sexo
		public function getSexo() {
			return $this->sexo;
		}

		public function setSexo($sexo) {
			$this->sexo = $sexo;
		}

		// Estado Civil
		public function getEstadoCivil() {
			return $this->estadoCivil;
		}

		public function setEstadoCivil($estadoCivil) {
			$this->estadoCivil = $estadoCivil;
		}

		// Data de Nascimento
		public function getDataNasc() {
			return $this->dataNasc;
		}

		public function setDataNasc($dataNasc) {
			$this->dataNasc = $dataNasc;
		}

		// Profissão
		public function getProfissao() {
			return $this->profissao;
		}

		public function setProfissao($profissao) {
			$this->profissao = $profissao;
		}

		// Faixa Salarial
		public function getFaixaSalarial() {
			return $this->faixaSalarial;
		}

		public function setFaixaSalarial($faixaSalarial) {
			$this->faixaSalarial = $faixaSalarial;
		}

		// CPF
		public function getCpf() {
			return $this->cpf;
		}

		public function setCpf($cpf) {
			$this->cpf = $cpf;
		}

		// Escolaridade
		public function getEscolaridade() {
			return $this->escolaridade;
		}

		public function setEscolaridade($escolaridade) {
			$this->escolaridade = $escolaridade;
		}

		// Religião
		public function getReligiao() {
			return $this->religiao;
		}

		public function setReligiao($religiao) {
			$this->religiao = $religiao;
		}

		// Time de Futebol
		public function getTimeFut() {
			return $this->timeFut;
		}

		public function setTimeFut($timeFut) {
			$this->timeFut = $timeFut;
		}

		// Raça
		public function getRaca() {
			return $this->raca;
		}

		public function setRaca($raca) {
			$this->raca = $raca;
		}

	
		

		// Informações Adicionais
		public function getInfoAdic() {
			return $this->infoAdic;
		}

		public function setInfoAdic($infoAdic) {
			$this->infoAdic = $infoAdic;
		}

		// Getters e Setters para Endereço

		// Logradouro
		public function getLogradouro() {
			return $this->logradouro;
		}

		public function setLogradouro($logradouro) {
			$this->logradouro = $logradouro;
		}

		// Número da Casa
		public function getNumeroCasa() {
			return $this->numeroCasa;
		}

		public function setNumeroCasa($numeroCasa) {
			$this->numeroCasa = $numeroCasa;
		}

		// Bairro
		public function getBairro() {
			return $this->bairro;
		}

		public function setBairro($bairro) {
			$this->bairro = $bairro;
		}

		// Complemento
		public function getComplemento() {
			return $this->complemento;
		}

		public function setComplemento($complemento) {
			$this->complemento = $complemento;
		}

		// Cidade
		public function getCidade() {
			return $this->cidade;
		}

		public function setCidade($cidade) {
			$this->cidade = $cidade;
		}

		// UF
		public function getUf() {
			return $this->uf;
		}

		public function setUf($uf) {
			$this->uf = $uf;
		}

		// Referência
		public function getReferencia() {
			return $this->referencia;
		}

		public function setReferencia($referencia) {
			$this->referencia = $referencia;
		}

		// Getters e Setters para Contato

		// Celular 1
		public function getCelular1() {
			return $this->celular1;
		}

		public function setCelular1($celular1) {
			$this->celular1 = $celular1;
		}

		// Celular 2
		public function getCelular2() {
			return $this->celular2;
		}

		public function setCelular2($celular2) {
			$this->celular2 = $celular2;
		}

		// Telefone Fixo
		public function getTelFixo() {
			return $this->telFixo;
		}

		public function setTelFixo($telFixo) {
			$this->telFixo = $telFixo;
		}
		
		
		
		public function setTipoCliente($tipocliente){
			$this->tipocliente = $tipocliente;
		}
		
		public function getTipoCliente(){
			return $this->tipocliente;
		}
	/********Fim dos métodos sets e gets*********/
	
	
	/***************
	Objetivo: Método que insere um cliente
	Parâmetro de saída: Retorna true em caso de sucesso ou false em caso de falha.
	***************/
	public function insert(){
		$sql="INSERT INTO $this->table (nome,sobrenome,email,idade,tipocliente) VALUES (:nome,:sobrenome,:email,:idade,:tipocliente)";
		$stmt = Database::prepare($sql);
		$stmt->bindParam(':nome', $this->nome);
		
		$stmt->bindParam(':email', $this->email);
		$stmt->bindParam(':idade', $this->idade, PDO::PARAM_INT);
		$stmt->bindParam(':tipocliente', $this->tipocliente, PDO::PARAM_INT);
		
		return $stmt->execute();
		
	}
	
	/***************
	Objetivo: Atuliza um cliente pelo id
	Parâmetro de entrada: $id - id do cliente
	Parâmetro de saída: Retorna true em caso de sucesso ou false em caso de falha.
	***************/
	public function update($id){
		$sql="UPDATE $this->table SET nome = :nome, sobrenome = :sobrenome, email = :email , idade = :idade  WHERE id = :id ";
		$stmt = Database::prepare($sql);
		$stmt->bindParam(':nome', $this->nome);
		
		$stmt->bindParam(':email', $this->email);
		$stmt->bindParam(':idade', $this->idade, PDO::PARAM_INT);
		$stmt->bindParam(':id', $id, PDO::PARAM_INT);
		// $stmt->bindParam(':tipocliente', 1, PDO::PARAM_INT);
		return $stmt->execute();
	}
	
	
	
	
		
	
}

?>