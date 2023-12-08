<?php
namespace Models;

include_once '../models/ClassConexao.php';
include_once '../models/ClassCrud.php';

class Consultorio extends CRUD
{
    protected $table = 'consultas';

    private $nameFarm;
    private $date;
    private $horaConsulta; // Novo atributo adicionado
    private $namePaciente;
    private $prescrito;
    private $posologiaConsultorio;

    public function setNameFarm($nameFarm)
    {
        $this->nameFarm = $nameFarm;
    }

    public function getNameFarm()
    {
        return $this->nameFarm;
    }

    public function setDate($date)
    {
        $this->date = $date;
    }

    public function getDate()
    {
        return $this->date;
    }

    public function setHoraConsulta($horaConsulta)
    {
        $this->horaConsulta = $horaConsulta;
    }

    public function getHoraConsulta()
    {
        return $this->horaConsulta;
    }

    public function setNamePaciente($namePaciente)
    {
        $this->namePaciente = $namePaciente;
    }

    public function getNamePaciente()
    {
        return $this->namePaciente;
    }

    public function setPrescrito($prescrito)
    {
        $this->prescrito = $prescrito;
    }

    public function getPrescrito()
    {
        return $this->prescrito;
    }

    public function setPosologiaConsultorio($posologiaConsultorio)
    {
        $this->posologiaConsultorio = $posologiaConsultorio;
    }

    public function getPosologiaConsultorio()
    {
        return $this->posologiaConsultorio;
    }
    
    public function insertConsultorio($id)
    {
        $sql = "INSERT INTO $this->table 
                (id_Farmacia_FK,nomefarmaceutico, nomePaciente, remediosPrescritos, Posologia, dataConsulta, horaConsulta) 
                VALUES 
                (:id_Farmacia_FK, :nomefarmaceutico, :nomePaciente, :remediosPrescritos, :Posologia, :dataConsulta, :horaConsulta)";

        $stmt = Database::prepare($sql);

        $stmt->bindParam(':id_Farmacia_FK', $id, \PDO::PARAM_INT);
        $stmt->bindParam(':nomefarmaceutico', $this->nameFarm);
        $stmt->bindParam(':nomePaciente', $this->namePaciente);
        $stmt->bindParam(':remediosPrescritos', $this->prescrito);
        $stmt->bindParam(':Posologia', $this->posologiaConsultorio);
        $stmt->bindParam(':dataConsulta', $this->date);
        $stmt->bindParam(':horaConsulta', $this->horaConsulta);

        // Retorna true se a execução foi bem-sucedida, false caso contrário
        return $stmt->execute();
    }

    public function update($id)
    {
        $sql = "UPDATE $this->table SET 
                nameFarm = :nameFarm, 
                date = :date, 
                namePaciente = :namePaciente, 
                prescrito = :prescrito, 
                posologiaConsultorio = :posologiaConsultorio
                WHERE id = :id";

        $stmt = Database::prepare($sql);

        $stmt->bindParam(':nameFarm', $this->nameFarm);
        $stmt->bindParam(':date', $this->date);
        $stmt->bindParam(':namePaciente', $this->namePaciente);
        $stmt->bindParam(':prescrito', $this->prescrito);
        $stmt->bindParam(':posologiaConsultorio', $this->posologiaConsultorio);
        $stmt->bindParam(':id', $id, \PDO::PARAM_INT);

        return $stmt->execute();
    }

    public function findAll()
    {
        $sql = "SELECT * FROM $this->table ";
        $stmt = Database::prepare($sql);
        $stmt->execute();

        // Retorna um array com os registros da tabela indexado pelo nome da coluna da tabela e por um número
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
    public function insert()
    {
        $sql = "INSERT INTO $this->table 
                (nameFarm, date, namePaciente, prescrito, posologiaConsultorio) 
                VALUES 
                (:nameFarm, :date, :namePaciente, :prescrito, :posologiaConsultorio)";

        $stmt = Database::prepare($sql);

        $stmt->bindParam(':nameFarm', $this->nameFarm);
        $stmt->bindParam(':date', $this->date);
        $stmt->bindParam(':namePaciente', $this->namePaciente);
        $stmt->bindParam(':prescrito', $this->prescrito);
        $stmt->bindParam(':posologiaConsultorio', $this->posologiaConsultorio);

        return $stmt->execute();
    }
}

