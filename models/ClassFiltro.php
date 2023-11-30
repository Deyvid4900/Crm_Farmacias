<?php
namespace Models;
include '../models/ClassConexao.php';

class Filtro extends DataBase {
    
    public function buscarValoresSemelhantes($input, $selecao) {
        try {
            $query = "SELECT * FROM clientes WHERE ";
    
            switch ($selecao) {
                case 'nome':
                    $query .= "nome = :valorInput";
                    break;
                case 'sexo':
                    $query .= "sexo = :valorInput";
                    break;
                case 'estadoCivil':
                    $query .= "estadoCivil = :valorInput";
                    break;
                case 'dataNasc':
                    $query .= "dataNasc = :valorInput";
                    break;
                case 'profissao':
                    $query .= "profissao = :valorInput";
                    break;
                case 'faixaSalarial':
                    $query .= "faixaSalarial = :valorInput";
                    break;
                case 'cpf':
                    $query .= "cpf = :valorInput";
                    break;
                case 'escolaridade':
                    $query .= "escolaridade = :valorInput";
                    break;
                case 'religiao':
                    $query .= "religiao = :valorInput";
                    break;
                case 'timeFut':
                    $query .= "timeFut = :valorInput";
                    break;
                case 'raca':
                    $query .= "raca = :valorInput";
                    break;
                case 'tipocliente':
                    $query .= "tipocliente = :valorInput";
                    break;
                case 'celular1':
                    $query .= "celular1 = :valorInput";
                    break;
                case 'celular2':
                    $query .= "celular2 = :valorInput";
                    break;
                case 'telFixo':
                    $query .= "telFixo = :valorInput";
                    break;
                case 'email':
                    $query .= "email = :valorInput";
                    break;
                default:
                    // Trate o caso padrão ou retorne um erro, dependendo dos requisitos
                    break;
            }
    
            $stmt = self::prepare($query);
            $valorInput = '%' . $input . '%'; // Adiciona % para permitir correspondências parciais
            $stmt->bindParam(':valorInput', $input);
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
    public function buscarAll($filtro){
        try {
            
            $query = "SELECT * FROM $filtro WHERE ";

            $stmt = self::prepare($query);
            $stmt->bindParam(':filtro', $filtro);
            $stmt->execute();

            $resultado = $stmt->fetch(\PDO::FETCH_ASSOC);

            if ($resultado) {
                return $resultado;
            } else {
                return false; // Valor não encontrado
            }


        } catch (\PDOException $erro) {
            echo $filtro;
            echo $erro->getMessage();
            return false;
        }
    }
}
?>
