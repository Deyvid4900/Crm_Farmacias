<?php
namespace Models;
include_once '../models/ClassConexao.php';

class Lembrete extends DataBase{
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
}
?>
