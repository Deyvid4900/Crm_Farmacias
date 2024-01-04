<?php
namespace Models;
include_once '../models/ClassConexao.php';

class Filtros extends DataBase{
    public function buscarValoresSemelhantes($input, $selecao,$usuario_id) {
        try {
            $query = "SELECT * FROM clientes WHERE Id_Farmacia_FK = :user_id AND LOWER($selecao) LIKE LOWER(:valorInput)";
            $stmt = DataBase::prepare($query);
            $valorInput = '%' . strtolower($input) . '%'; // Converte para minúsculas para correspondência insensível a maiúsculas e minúsculas
            $stmt->bindParam(':user_id', $usuario_id, \PDO::PARAM_INT);
            $stmt->bindParam(':valorInput', $valorInput);
            $stmt->execute(); 
            $resultados = $stmt->fetchAll(\PDO::FETCH_ASSOC); 
            if ($resultados) {
                return $resultados;
            } else {
                return false; // Nenhum resultado encontrado
            }
        } catch (\PDOException $erro) {
            echo $input;
            echo $selecao;
            echo $erro->getMessage();
            return false;
        }
    }
    public function buscarValoresConsultasSemelhantes($input, $selecao,$usuario_id) {
        try {
            $query = "SELECT * FROM consultas WHERE id_Farmacia_FK = :user_id AND LOWER($selecao) LIKE LOWER(:valorInput)";
            $stmt = DataBase::prepare($query);
            $valorInput = '%' . strtolower($input) . '%'; // Converte para minúsculas para correspondência insensível a maiúsculas e minúsculas
            $stmt->bindParam(':user_id', $usuario_id, \PDO::PARAM_INT);
            $stmt->bindParam(':valorInput', $valorInput);
            $stmt->execute(); 
            $resultados = $stmt->fetchAll(\PDO::FETCH_ASSOC); 
            if ($resultados) {
                return $resultados;
            } else {
                return false; // Nenhum resultado encontrado
            }
        } catch (\PDOException $erro) {
            echo $input;
            echo $selecao;
            echo $erro->getMessage();
            return false;
        }
    }
    public function buscarValoresServicosSemelhantes($input, $selecao,$usuario_id) {
        try {
            $query = "SELECT * FROM servicos WHERE id_Farmacia_FK = :user_id AND LOWER($selecao) LIKE LOWER(:valorInput)";
            $stmt = DataBase::prepare($query);
            $valorInput = '%' . strtolower($input) . '%'; // Converte para minúsculas para correspondência insensível a maiúsculas e minúsculas
            $stmt->bindParam(':user_id', $usuario_id, \PDO::PARAM_INT);
            $stmt->bindParam(':valorInput', $valorInput);
            $stmt->execute(); 
            $resultados = $stmt->fetchAll(\PDO::FETCH_ASSOC); 
            if ($resultados) {
                return $resultados;
            } else {
                return false; // Nenhum resultado encontrado
            }
        } catch (\PDOException $erro) {
            echo $input;
            echo $selecao;
            echo $erro->getMessage();
            return false;
        }
    }
    public function buscarValoresSemelhantesMedico($input, $selecao,$usuario_id) {
        try {
            $query = "SELECT * FROM medicos WHERE Id_Farmacia_FK = :user_id AND LOWER($selecao) LIKE LOWER(:valorInput)";
            $stmt = DataBase::prepare($query);
            $valorInput = '%' . strtolower($input) . '%'; // Converte para minúsculas para correspondência insensível a maiúsculas e minúsculas
            $stmt->bindParam(':user_id', $usuario_id, \PDO::PARAM_INT);
            $stmt->bindParam(':valorInput', $valorInput);
            $stmt->execute(); 
            $resultados = $stmt->fetchAll(\PDO::FETCH_ASSOC); 
            if ($resultados) {
                return $resultados;
            } else {
                return false; // Nenhum resultado encontrado
            }
        } catch (\PDOException $erro) {
            echo $input;
            echo $selecao;
            echo $erro->getMessage();
            return false;
        }
    }
    public function buscarValoresByIdFarmacia($usuario_id){
        try {
            $query = "SELECT * FROM clientes WHERE Id_Farmacia_FK = :user_id";
            $stmt = DataBase::prepare($query);
            $stmt->bindParam(':user_id', $usuario_id, \PDO::PARAM_INT);
            $stmt->execute(); 
            $resultados = $stmt->fetchAll(\PDO::FETCH_ASSOC); 
    
            if ($resultados) {
                return $resultados;
            } else {
                return []; // Retorna um array vazio quando nenhum resultado é encontrado
            }
        } catch (\PDOException $erro){
            // Log do erro em um arquivo de log ou outra ação apropriada
            error_log("Erro na consulta SQL: " . $erro->getMessage(), 0);
            // Lança a exceção novamente para tratamento em níveis superiores, se necessário
            throw $erro;
        }
    }
    
}
?>
