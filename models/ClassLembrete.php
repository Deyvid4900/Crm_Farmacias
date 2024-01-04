<?php

namespace Models;

include_once '../models/ClassConexao.php';

class Lembrete extends DataBase
{

    public function insertArray(array $data, $idCliente)
    {
        $sql = "INSERT INTO lembrete
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



    public function insert($id, $nome, $desc, $data, $hora)
    {
        $sql = "INSERT INTO lembretes
               (id_Farmacia_FK ,nomeLembrete, descLembrete,dataLembrete,horaLembrete) 
               VALUES 
               (:id_Farmacia_FK,:nomeLembrete, :descLembrete, :dataLembrete, :horaLembrete)";

        $stmt = Database::prepare($sql);
        $stmt->bindParam(':id_Farmacia_FK', $id);
        $stmt->bindParam(':nomeLembrete', $nome);
        $stmt->bindParam(':descLembrete', $desc);
        $stmt->bindParam(':dataLembrete', $data);
        $stmt->bindParam(':horaLembrete', $hora);



        return $stmt->execute();
    }

    public function update($id)
    {
        $sql = "UPDATE lembretes SET 
               logradouro = :logradouro, 
               numeroCasa = :numeroCasa, 
               bairro = :bairro, 
               complemento = :complemento, 
               cidade = :cidade, 
               uf = :uf, 
               referencia = :referencia 
               WHERE cliente_id = :id";

        $stmt = Database::prepare($sql);

        // $stmt->bindParam(':logradouro', $this->logradouro);
        // $stmt->bindParam(':numeroCasa', $this->numeroCasa);
        // $stmt->bindParam(':bairro', $this->bairro);
        // $stmt->bindParam(':complemento', $this->complemento);
        // $stmt->bindParam(':cidade', $this->cidade);
        // $stmt->bindParam(':uf', $this->uf);
        // $stmt->bindParam(':referencia', $this->referencia);
        // $stmt->bindParam(':id', $id, \PDO::PARAM_INT);

        return $stmt->execute();
    }

    public function findAll($id)
    {
        $sql = "SELECT * FROM lembretes WHERE id_Farmacia_Fk = :id_Farmacia_FK ";
        $stmt = Database::prepare($sql);
        $stmt->bindParam(':id_Farmacia_FK', $id);
        $stmt->execute();
        return $stmt->fetchAll(\PDO::FETCH_BOTH);
    }

    public function findNextWeekReminders($id)
    {
        // Obtém a data atual
        $currentDate = date('Y-m-d');

        // Calcula a data para uma semana a partir de hoje
        $nextWeekDate = date('Y-m-d', strtotime('+1 week'));

        // Consulta SQL para obter os lembretes da próxima semana
        $sql = "SELECT * FROM lembretes WHERE id_Farmacia_FK = :id_Farmacia_FK AND dataLembrete BETWEEN :currentDate AND :nextWeekDate";
        $stmt = Database::prepare($sql);
        $stmt->bindParam(':id_Farmacia_FK', $id);
        $stmt->bindParam(':currentDate', $currentDate);
        $stmt->bindParam(':nextWeekDate', $nextWeekDate);

        $stmt->execute();

        return $stmt->fetchAll(\PDO::FETCH_BOTH);
    }


    public function find($id)
    {
        $sql = "SELECT * FROM lembretes WHERE id = :id";
        $stmt = Database::prepare($sql);
        $stmt->bindParam(':id', $id, \PDO::PARAM_INT);
        $stmt->execute();
        return $stmt->fetch(\PDO::FETCH_BOTH);
    }

    public function delete($id)
    {
        $sql = "DELETE FROM lembretes WHERE cliente_id = :id";
        $stmt = Database::prepare($sql);
        $stmt->bindParam(':id', $id, \PDO::PARAM_INT);
        return $stmt->execute();
    }
}
