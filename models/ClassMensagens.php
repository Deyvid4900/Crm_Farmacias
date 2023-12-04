<?php

namespace Models;

include '../models/ClassConexao.php';

class Mensagem extends DataBase
{
    public function pegarContatos(array $ids)
    {
        $resultados = array();

        foreach ($ids as $id) {
            try {
                $sql = "SELECT nome, celular1, celular2, email FROM clientes WHERE id = :id";
                $stmt = Database::prepare($sql);
                $stmt->bindParam(':id', $id, \PDO::PARAM_INT);
                $stmt->execute();
                
                // Adiciona o resultado ao array de resultados
                $resultados[] = $stmt->fetch(\PDO::FETCH_ASSOC);
            } catch (\PDOException $erro) {
                echo $erro->getMessage();
            }
        }

        // Retorna o array de resultados após o loop
        return $resultados;
    }
    public function enviarMensagemEmail($emailCLiente,$assunto,$conteudo,$emailFarmacia){

    }
    public function enviarMensagemWhatsApp($numeroCLiente,$conteudo,$numeroFarmacia){

    }
    public function enviarMensagemSms($numeroCLiente,$conteudo,$numeroFarmacia){

    }
}
