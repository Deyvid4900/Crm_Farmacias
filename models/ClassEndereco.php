<?php
namespace Models;

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
      (cliente_id, logradouro, numeroCasa, bairro, complemento, cidade, uf, referencia) 
      VALUES 
      (:cliente_id, :logradouro, :numeroCasa, :bairro, :complemento, :cidade, :uf, :referencia)";

    $stmt = Database::prepare($sql);
    $stmt->bindParam(':cliente_id', $idCliente);

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
        $stmt->bindParam(':id', $id, \PDO::PARAM_INT);

        return $stmt->execute();
    }

    public function findAll()
    {
        $sql = "SELECT * FROM $this->table ";
        $stmt = Database::prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(\PDO::FETCH_BOTH);
    }

    public function find($id)
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
}
