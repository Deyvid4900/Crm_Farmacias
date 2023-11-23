<?php

require_once '../config/config_Bd.php';
require_once '../includes/Especializacao/pessoasModule.php';
require_once '../includes/Especializacao/funcionarioModule.php';
require_once '../Controller/controllerCrud.php';
require_once '../modules/clienteModule.php';

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
class Endereco extends CRUD
{
    protected $table = 'enderecos';

    private $logradouro;
    private $numeroCasa;
    private $bairro;
    private $complemento;
    private $cidade;
    private $uf;
    private $referencia;

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

    // Métodos de CRUD
    public function insertArray(array $data, $idCliente)
    {
        $sql = "INSERT INTO $this->table 
      (cliente_id,logradouro,numeroCasa,bairro,complemento,cidade,uf,referencia) 
      VALUES 
      (:cliente_id,:logradouro,:numeroCasa,:bairro,:complemento,:cidade,:uf,:referencia)";
        $stmt = Database::prepare($sql);
        $stmt->bindParam(':cliente_id', $idCliente);
        foreach ($data as $key => $value) {
            $stmt->bindValue(':' . $key, $value);
        }

        return $stmt->execute();
    }


    public function insert()
    {
        $sql = "INSERT INTO $this->table 
               (logradouro, numeroCasa, bairro, complemento, cidade, uf, referencia) 
               VALUES 
               (:logradouro, :numeroCasa, :bairro, :complemento, :cidade, :uf, :referencia)";

        $stmt = Database::prepare($sql);

        $stmt->bindParam(':logradouro', $this->logradouro);
        $stmt->bindParam(':numeroCasa', $this->numeroCasa);
        $stmt->bindParam(':bairro', $this->bairro);
        $stmt->bindParam(':complemento', $this->complemento);
        $stmt->bindParam(':cidade', $this->cidade);
        $stmt->bindParam(':uf', $this->uf);
        $stmt->bindParam(':referencia', $this->referencia);

        return $stmt->execute();
    }

    public function update($id)
    {
        $sql = "UPDATE $this->table SET 
               logradouro = :logradouro, 
               numeroCasa = :numeroCasa, 
               bairro = :bairro, 
               complemento = :complemento, 
               cidade = :cidade, 
               uf = :uf, 
               referencia = :referencia 
               WHERE id = :id";

        $stmt = Database::prepare($sql);

        $stmt->bindParam(':logradouro', $this->logradouro);
        $stmt->bindParam(':numeroCasa', $this->numeroCasa);
        $stmt->bindParam(':bairro', $this->bairro);
        $stmt->bindParam(':complemento', $this->complemento);
        $stmt->bindParam(':cidade', $this->cidade);
        $stmt->bindParam(':uf', $this->uf);
        $stmt->bindParam(':referencia', $this->referencia);
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);

        return $stmt->execute();
    }

    public function findAll()
    {
        $sql = "SELECT * FROM $this->table ";
        $stmt = Database::prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_BOTH);
    }

    public function find($id)
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
