<?php
namespace Models;
include '../models/ClassConexao.php';

class Filtro extends DataBase {
    
    public function buscarValoresSemelhantes($input, $selecao) {
        try {
            $query = "SELECT * FROM clientes WHERE LOWER($selecao) LIKE LOWER(:valorInput)";
    
            $stmt = self::prepare($query);
            $valorInput = '%' . strtolower($input) . '%'; // Converte para minúsculas para correspondência insensível a maiúsculas e minúsculas
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
