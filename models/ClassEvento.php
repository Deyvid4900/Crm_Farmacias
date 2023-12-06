<?php
namespace Models;

include_once '../models/ClassConexao.php';

class Eventos extends DataBase {
    protected $table = 'eventos';

    private $nomeEvento;
    private $dataEvento;
    private $descricaoEvento;
    private $horaEvento; // Novo atributo
    private $tipoEvento; // Novo atributo

    public function getNomeEvento() {
        return $this->nomeEvento;
    }

    public function setNomeEvento($nomeEvento) {
        $this->nomeEvento = $nomeEvento;
    }

    public function getDataEvento() {
        return $this->dataEvento;
    }

    public function setDataEvento($dataEvento) {
        $this->dataEvento = $dataEvento;
    }

    public function getDescricaoEvento() {
        return $this->descricaoEvento;
    }

    public function setDescricaoEvento($descricaoEvento) {
        $this->descricaoEvento = $descricaoEvento;
    }

    public function getHoraEvento() {
        return $this->horaEvento;
    }

    public function setHoraEvento($horaEvento) {
        $this->horaEvento = $horaEvento;
    }

    public function getTipoEvento() {
        return $this->tipoEvento;
    }

    public function setTipoEvento($tipoEvento) {
        $this->tipoEvento = $tipoEvento;
    }

    /***************
     * Objetivo: Método que insere um evento
     * Parâmetro de saída: Retorna true em caso de sucesso ou false em caso de falha.
     ***************/
    public function insert($usuario_id) {
		$sql = "INSERT INTO $this->table (nomeEvento, dataEvento, descricao, horaEvento, tipoEvento, Id_Farmacia_PK) VALUES (:nome, :dataEvento, :descricao, :horaEvento, :tipoEvento, :Id_Farmacia_PK)";
		$stmt = Database::prepare($sql);
		$stmt->bindParam(':nome', $this->nomeEvento);
		$stmt->bindParam(':dataEvento', $this->dataEvento);
		$stmt->bindParam(':descricao', $this->descricaoEvento);
		$stmt->bindParam(':horaEvento', $this->horaEvento);
		$stmt->bindParam(':tipoEvento', $this->tipoEvento);
		$stmt->bindParam(':Id_Farmacia_PK', $usuario_id, \PDO::PARAM_INT);
	
		return $stmt->execute();
	}
	
	/***************
	Objetivo: Atuliza um cliente pelo id
	Parâmetro de entrada: $id - id do cliente
	Parâmetro de saída: Retorna true em caso de sucesso ou false em caso de falha.
	***************/
	public function update($id, $usuario_id) {
		$sql = "UPDATE $this->table SET nomeEvento = :nomeEvento, dataEvento = :dataEvento, descricao = :descricao, horaEvento = :horaEvento, tipoEvento = :tipoEvento WHERE id = :id AND Id_Farmacia_PK = :Id_Farmacia_PK";
		$stmt = Database::prepare($sql);
		$stmt->bindParam(':nomeEvento', $this->nomeEvento);
		$stmt->bindParam(':dataEvento', $this->dataEvento);
		$stmt->bindParam(':descricao', $this->descricaoEvento);
		$stmt->bindParam(':horaEvento', $this->horaEvento);
		$stmt->bindParam(':tipoEvento', $this->tipoEvento);
		$stmt->bindParam(':id', $id, \PDO::PARAM_INT);
		$stmt->bindParam(':Id_Farmacia_PK', $usuario_id, \PDO::PARAM_INT);
	
		return $stmt->execute();
	}
	
	
	public function findAll($usuario_id) {
		$sql = "SELECT * FROM $this->table WHERE Id_Farmacia_PK = :Id_Farmacia_PK";
		$stmt = Database::prepare($sql);
		$stmt->bindParam(':Id_Farmacia_PK', $usuario_id, \PDO::PARAM_INT);
		$stmt->execute();
	
		return $stmt->fetchAll(\PDO::FETCH_BOTH);
	}
	
	
	public function find($id, $usuario_id) {
		$sql = "SELECT * FROM $this->table WHERE id = :id AND Id_Farmacia_PK = :Id_Farmacia_PK";
		$stmt = Database::prepare($sql);
		$stmt->bindParam(':id', $id, \PDO::PARAM_INT);
		$stmt->bindParam(':Id_Farmacia_PK', $usuario_id, \PDO::PARAM_INT);
		$stmt->execute();
	
		return $stmt->fetch(\PDO::FETCH_BOTH);
	}
	
	
	public function delete($id, $usuario_id) {
		$sql = "DELETE FROM $this->table WHERE id = :id AND Id_Farmacia_PK = :Id_Farmacia_PK";
		$stmt = Database::prepare($sql);
		$stmt->bindParam(':id', $id, \PDO::PARAM_INT);
		$stmt->bindParam(':Id_Farmacia_PK', $usuario_id, \PDO::PARAM_INT);
	
		return $stmt->execute();
	}

	public function getProximosEventos($usuario_id) {
		$dataAtual = date('Y-m-d H:i:s'); // Obtém a data e hora atual no formato MySQL
	
		$sql = "SELECT * FROM $this->table WHERE Id_Farmacia_PK = :Id_Farmacia_PK AND dataEvento >= :dataAtual ORDER BY dataEvento ASC LIMIT 5";
		$stmt = Database::prepare($sql);
		$stmt->bindParam(':Id_Farmacia_PK', $usuario_id, \PDO::PARAM_INT);
		$stmt->bindParam(':dataAtual', $dataAtual);
	
		$stmt->execute();
	
		return $stmt->fetchAll(\PDO::FETCH_BOTH);
	}
	public function getProximosEventosComTempoRestante($usuario_id) {
		$retorno = [];
	
		$sql = "SELECT *, TIMESTAMPDIFF(SECOND, NOW(), CONCAT(dataEvento, ' ', horaEvento)) AS tempoRestante 
				FROM $this->table 
				WHERE Id_Farmacia_PK = :Id_Farmacia_PK AND CONCAT(dataEvento, ' ', horaEvento) >= NOW()
				ORDER BY dataEvento ASC 
				";
	
		$stmt = Database::prepare($sql);
		$stmt->bindParam(':Id_Farmacia_PK', $usuario_id, \PDO::PARAM_INT);
	
		$stmt->execute();
	
		// Verifica o número de linhas retornadas
		$rowCount = $stmt->rowCount();
	
		if ($rowCount > 0) {
			$resultado = $stmt->fetchAll(\PDO::FETCH_ASSOC);
	
			// Filtra os resultados com tempoRestante menor que 1.209.600 segundos (2 semanas)
			$resultadoFiltrado = array_filter($resultado, function ($value) {
				return $value["tempoRestante"] < 1209600;
			});
	
			return $resultadoFiltrado;
		} else {
			return $retorno;
		}
	}
	
	public function converterTempoRestante($tempoRestanteEmMinutos) {
		$dias = floor($tempoRestanteEmMinutos / (60 * 24));
		$semanas = floor($dias / 7);
		$horas = number_format(($tempoRestanteEmMinutos % (60 * 24) / 60), 0);

		$resultado = '';
	
		if ($semanas > 0) {
			$resultado .= $semanas . ' semana(s) ';
		}
	
		if ($dias % 7 > 0) {
			$resultado .= ($dias % 7) . ' dia(s) ';
		}
	
		$resultado .= ($horas > 0) ? $horas . ' hora(s)' : '';
	
		return $resultado;
	}
	
	
	
	
	
	
	
		
	
}



?>