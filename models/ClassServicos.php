<?php

namespace Models;

include_once '../models/ClassConexao.php';

class Servicos
{
    private $nome;
    private $genero;
    private $idade;
    private $telefone;
    private $endereco;
    private $cidade;
    private $uf;
    private $email;
    private $id;

    private $idFarmacia;
    private $idCliente;
    private $nomeResponsavel;
    private $glicemiaCapilar;
    private $pressaoArterial;
    private $temperaturaCorporal;
    private $aplicacaoInjetaveis;
    private $medicamentoInjetavel;
    private $loteInjetavel;
    private $validadeInjetavel;
    private $posologiaInjetavel;
    private $viaAdministracaoInjetavel;
    private $nomePrescritorInjetavel;
    private $inaloterapia;
    private $medicamentoInaloterapia;
    private $loteInaloterapia;
    private $validadeInaloterapia;
    private $posologiaInaloterapia;
    private $nomePrescritorInaloterapia;
    private $crmCroInaloterapia;
    private $aplicacaoBrinco;
    private $pistolaBrinco;
    private $loteBrinco;
    private $cnpjBrinco;
    private $ladoDireito;
    private $ladoEsquerdo;
    private $assistenciaDomiciliar;
    private $acompanhamentoFarmacoterapeutico;
    private $numeroFicha;
    private $indicacaoFarmaceutica;
    private $sinaisSintomas;
    private $planoAcompanhamento;
    private $data;
    // Métodos getters e setters...

    public function setNome($nome)
    {
        $this->nome = $nome;
    }

    public function setGenero($genero)
    {
        $this->genero = $genero;
    }

    public function setIdade($idade)
    {
        $this->idade = $idade;
    }

    public function setTelefone($telefone)
    {
        $this->telefone = $telefone;
    }

    public function setEndereco($endereco)
    {
        $this->endereco = $endereco;
    }

    public function setCidade($cidade)
    {
        $this->cidade = $cidade;
    }

    public function setUf($uf)
    {
        $this->uf = $uf;
    }

    public function setEmail($email)
    {
        $this->email = $email;
    }
    public function getNome()
    {
        return $this->nome;
    }

    public function getGenero()
    {
        return $this->genero;
    }

    public function getIdade()
    {
        return $this->idade;
    }

    public function getTelefone()
    {
        return $this->telefone;
    }

    public function getEndereco()
    {
        return $this->endereco;
    }

    public function getCidade()
    {
        return $this->cidade;
    }

    public function getUf()
    {
        return $this->uf;
    }

    public function getEmail()
    {
        return $this->email;
    }
    public function getId()
    {
        return $this->id;
    }

    public function getIdFarmacia()
    {
        return $this->idFarmacia;
    }

    public function getIdCliente()
    {
        return $this->idCliente;
    }

    public function getNomeResponsavel()
    {
        return $this->nomeResponsavel;
    }

    public function getGlicemiaCapilar()
    {
        return $this->glicemiaCapilar;
    }

    public function getPressaoArterial()
    {
        return $this->pressaoArterial;
    }

    public function getTemperaturaCorporal()
    {
        return $this->temperaturaCorporal;
    }

    public function getAplicacaoInjetaveis()
    {
        return $this->aplicacaoInjetaveis;
    }

    public function getMedicamentoInjetavel()
    {
        return $this->medicamentoInjetavel;
    }

    public function getLoteInjetavel()
    {
        return $this->loteInjetavel;
    }

    public function getValidadeInjetavel()
    {
        return $this->validadeInjetavel;
    }

    public function getPosologiaInjetavel()
    {
        return $this->posologiaInjetavel;
    }

    public function getViaAdministracaoInjetavel()
    {
        return $this->viaAdministracaoInjetavel;
    }

    public function getNomePrescritorInjetavel()
    {
        return $this->nomePrescritorInjetavel;
    }

    public function getInaloterapia()
    {
        return $this->inaloterapia;
    }

    public function getMedicamentoInaloterapia()
    {
        return $this->medicamentoInaloterapia;
    }

    public function getLoteInaloterapia()
    {
        return $this->loteInaloterapia;
    }

    public function getValidadeInaloterapia()
    {
        return $this->validadeInaloterapia;
    }

    public function getPosologiaInaloterapia()
    {
        return $this->posologiaInaloterapia;
    }

    public function getNomePrescritorInaloterapia()
    {
        return $this->nomePrescritorInaloterapia;
    }

    public function getCrmCroInaloterapia()
    {
        return $this->crmCroInaloterapia;
    }

    public function getAplicacaoBrinco()
    {
        return $this->aplicacaoBrinco;
    }

    public function getPistolaBrinco()
    {
        return $this->pistolaBrinco;
    }

    public function getLoteBrinco()
    {
        return $this->loteBrinco;
    }

    public function getCnpjBrinco()
    {
        return $this->cnpjBrinco;
    }

    public function getLadoDireito()
    {
        return $this->ladoDireito;
    }

    public function getLadoEsquerdo()
    {
        return $this->ladoEsquerdo;
    }

    public function getAssistenciaDomiciliar()
    {
        return $this->assistenciaDomiciliar;
    }

    public function getAcompanhamentoFarmacoterapeutico()
    {
        return $this->acompanhamentoFarmacoterapeutico;
    }

    public function getNumeroFicha()
    {
        return $this->numeroFicha;
    }

    public function getIndicacaoFarmaceutica()
    {
        return $this->indicacaoFarmaceutica;
    }

    public function getSinaisSintomas()
    {
        return $this->sinaisSintomas;
    }

    public function getPlanoAcompanhamento()
    {
        return $this->planoAcompanhamento;
    }

    public function getData()
    {
        return $this->data;
    }

    // Setters
    public function setId($id)
    {
        $this->id = $id;
    }

    public function setIdFarmacia($idFarmacia)
    {
        $this->idFarmacia = $idFarmacia;
    }

    public function setIdCliente($idCliente)
    {
        $this->idCliente = $idCliente;
    }

    public function setNomeResponsavel($nomeResponsavel)
    {
        $this->nomeResponsavel = $nomeResponsavel;
    }

    public function setGlicemiaCapilar($glicemiaCapilar)
    {
        $this->glicemiaCapilar = $glicemiaCapilar;
    }

    public function setPressaoArterial($pressaoArterial)
    {
        $this->pressaoArterial = $pressaoArterial;
    }

    public function setTemperaturaCorporal($temperaturaCorporal)
    {
        $this->temperaturaCorporal = $temperaturaCorporal;
    }

    public function setAplicacaoInjetaveis($aplicacaoInjetaveis)
    {
        $this->aplicacaoInjetaveis = $aplicacaoInjetaveis;
    }

    public function setMedicamentoInjetavel($medicamentoInjetavel)
    {
        $this->medicamentoInjetavel = $medicamentoInjetavel;
    }

    public function setLoteInjetavel($loteInjetavel)
    {
        $this->loteInjetavel = $loteInjetavel;
    }

    public function setValidadeInjetavel($validadeInjetavel)
    {
        $this->validadeInjetavel = $validadeInjetavel;
    }

    public function setPosologiaInjetavel($posologiaInjetavel)
    {
        $this->posologiaInjetavel = $posologiaInjetavel;
    }

    public function setViaAdministracaoInjetavel($viaAdministracaoInjetavel)
    {
        $this->viaAdministracaoInjetavel = $viaAdministracaoInjetavel;
    }

    public function setNomePrescritorInjetavel($nomePrescritorInjetavel)
    {
        $this->nomePrescritorInjetavel = $nomePrescritorInjetavel;
    }

    public function setInaloterapia($inaloterapia)
    {
        $this->inaloterapia = $inaloterapia;
    }

    public function setMedicamentoInaloterapia($medicamentoInaloterapia)
    {
        $this->medicamentoInaloterapia = $medicamentoInaloterapia;
    }

    public function setLoteInaloterapia($loteInaloterapia)
    {
        $this->loteInaloterapia = $loteInaloterapia;
    }

    public function setValidadeInaloterapia($validadeInaloterapia)
    {
        $this->validadeInaloterapia = $validadeInaloterapia;
    }

    public function setPosologiaInaloterapia($posologiaInaloterapia)
    {
        $this->posologiaInaloterapia = $posologiaInaloterapia;
    }

    public function setNomePrescritorInaloterapia($nomePrescritorInaloterapia)
    {
        $this->nomePrescritorInaloterapia = $nomePrescritorInaloterapia;
    }

    public function setCrmCroInaloterapia($crmCroInaloterapia)
    {
        $this->crmCroInaloterapia = $crmCroInaloterapia;
    }

    public function setAplicacaoBrinco($aplicacaoBrinco)
    {
        $this->aplicacaoBrinco = $aplicacaoBrinco;
    }

    public function setPistolaBrinco($pistolaBrinco)
    {
        $this->pistolaBrinco = $pistolaBrinco;
    }

    public function setLoteBrinco($loteBrinco)
    {
        $this->loteBrinco = $loteBrinco;
    }

    public function setCnpjBrinco($cnpjBrinco)
    {
        $this->cnpjBrinco = $cnpjBrinco;
    }

    public function setLadoDireito($ladoDireito)
    {
        $this->ladoDireito = $ladoDireito;
    }

    public function setLadoEsquerdo($ladoEsquerdo)
    {
        $this->ladoEsquerdo = $ladoEsquerdo;
    }

    public function setAssistenciaDomiciliar($assistenciaDomiciliar)
    {
        $this->assistenciaDomiciliar = $assistenciaDomiciliar;
    }

    public function setAcompanhamentoFarmacoterapeutico($acompanhamentoFarmacoterapeutico)
    {
        $this->acompanhamentoFarmacoterapeutico = $acompanhamentoFarmacoterapeutico;
    }

    public function setNumeroFicha($numeroFicha)
    {
        $this->numeroFicha = $numeroFicha;
    }

    public function setIndicacaoFarmaceutica($indicacaoFarmaceutica)
    {
        $this->indicacaoFarmaceutica = $indicacaoFarmaceutica;
    }

    public function setSinaisSintomas($sinaisSintomas)
    {
        $this->sinaisSintomas = $sinaisSintomas;
    }

    public function setPlanoAcompanhamento($planoAcompanhamento)
    {
        $this->planoAcompanhamento = $planoAcompanhamento;
    }

    public function setData($data)
    {
        $this->data = $data;
    }

    public function insertServico()
    {
        $sql = "INSERT INTO servicos (
            id_Farmacia_FK,
            id_cliente_FK,
            nomePaciente,
            telefone,
            email,
            dataNasc,
            nome_responsavel,
            glicemia_capilar,
            pressao_arterial,
            temperatura_corporal,
            aplicacao_injetaveis,
            medicamento_injetavel,
            lote_injetavel,
            validade_injetavel,
            posologia_injetavel,
            via_administracao_injetavel,
            nome_prescritor_injetavel,
            inaloterapia,
            medicamento_inaloterapia,
            lote_inaloterapia,
            validade_inaloterapia,
            posologia_inaloterapia,
            nome_prescritor_inaloterapia,
            crm_cro_inaloterapia,
            aplicacao_brinco,
            pistola_brinco,
            lote_brinco,
            cnpj_brinco,
            lado_direito,
            lado_esquerdo,
            assistencia_domiciliar,
            acompanhamento_farmacoterapeutico,
            numero_ficha,
            indicacao_farmaceutica,
            sinais_sintomas,
            plano_acompanhamento,
            dataServicos
        ) VALUES (
            :id_Farmacia_FK,
            :id_cliente_FK,
            :nomePaciente,
            :telefone,
            :email,
            :dataNasc,
            :nome_responsavel,
            :glicemia_capilar,
            :pressao_arterial,
            :temperatura_corporal,
            :aplicacao_injetaveis,
            :medicamento_injetavel,
            :lote_injetavel,
            :validade_injetavel,
            :posologia_injetavel,
            :via_administracao_injetavel,
            :nome_prescritor_injetavel,
            :inaloterapia,
            :medicamento_inaloterapia,
            :lote_inaloterapia,
            :validade_inaloterapia,
            :posologia_inaloterapia,
            :nome_prescritor_inaloterapia,
            :crm_cro_inaloterapia,
            :aplicacao_brinco,
            :pistola_brinco,
            :lote_brinco,
            :cnpj_brinco,
            :lado_direito,
            :lado_esquerdo,
            :assistencia_domiciliar,
            :acompanhamento_farmacoterapeutico,
            :numero_ficha,
            :indicacao_farmaceutica,
            :sinais_sintomas,
            :plano_acompanhamento,
            :dataServicos
        )";

        $stmt = Database::prepare($sql);
        // Bind parameters
        $stmt->bindValue(':id_cliente_FK', $this->idCliente);
        $stmt->bindValue(':id_Farmacia_FK', $this->idFarmacia);
        $stmt->bindValue(':nomePaciente', $this->nome);
        $stmt->bindValue(':telefone', $this->telefone);
        $stmt->bindValue(':email', $this->email);
        $stmt->bindValue(':dataNasc', $this->idade);
        $stmt->bindValue(':nome_responsavel', $this->nomeResponsavel);
        $stmt->bindValue(':glicemia_capilar', $this->glicemiaCapilar);
        $stmt->bindValue(':pressao_arterial', $this->pressaoArterial);
        $stmt->bindValue(':temperatura_corporal', $this->temperaturaCorporal);
        $stmt->bindValue(':aplicacao_injetaveis', $this->aplicacaoInjetaveis);
        $stmt->bindValue(':medicamento_injetavel', $this->medicamentoInjetavel);
        $stmt->bindValue(':lote_injetavel', $this->loteInjetavel);
        $stmt->bindValue(':validade_injetavel', $this->validadeInjetavel);
        $stmt->bindValue(':posologia_injetavel', $this->posologiaInjetavel);
        $stmt->bindValue(':via_administracao_injetavel', $this->viaAdministracaoInjetavel);
        $stmt->bindValue(':nome_prescritor_injetavel', $this->nomePrescritorInjetavel);
        $stmt->bindValue(':inaloterapia', $this->inaloterapia);
        $stmt->bindValue(':medicamento_inaloterapia', $this->medicamentoInaloterapia);
        $stmt->bindValue(':lote_inaloterapia', $this->loteInaloterapia);
        $stmt->bindValue(':validade_inaloterapia', $this->validadeInaloterapia);
        $stmt->bindValue(':posologia_inaloterapia', $this->posologiaInaloterapia);
        $stmt->bindValue(':nome_prescritor_inaloterapia', $this->nomePrescritorInaloterapia);
        $stmt->bindValue(':crm_cro_inaloterapia', $this->crmCroInaloterapia);
        $stmt->bindValue(':aplicacao_brinco', $this->aplicacaoBrinco);
        $stmt->bindValue(':pistola_brinco', $this->pistolaBrinco);
        $stmt->bindValue(':lote_brinco', $this->loteBrinco);
        $stmt->bindValue(':cnpj_brinco', $this->cnpjBrinco);
        $stmt->bindValue(':lado_direito', $this->ladoDireito);
        $stmt->bindValue(':lado_esquerdo', $this->ladoEsquerdo);
        $stmt->bindValue(':assistencia_domiciliar', $this->assistenciaDomiciliar);
        $stmt->bindValue(':acompanhamento_farmacoterapeutico', $this->acompanhamentoFarmacoterapeutico);
        $stmt->bindValue(':numero_ficha', $this->numeroFicha);
        $stmt->bindValue(':indicacao_farmaceutica', $this->indicacaoFarmaceutica);
        $stmt->bindValue(':sinais_sintomas', $this->sinaisSintomas);
        $stmt->bindValue(':plano_acompanhamento', $this->planoAcompanhamento);
        $stmt->bindValue(':dataServicos', $this->data);


        try {
            $stmt->execute();
            return true;
        } catch (\Throwable $th) {
            return false;
        }
    }
    public function updateServico($id)
{
    $sql = "UPDATE servicos SET
        nomePaciente = :nomePaciente,
        telefone = :telefone,
        email = :email,
        dataNasc = :dataNasc,
        nome_responsavel = :nome_responsavel,
        glicemia_capilar = :glicemia_capilar,
        pressao_arterial = :pressao_arterial,
        temperatura_corporal = :temperatura_corporal,
        aplicacao_injetaveis = :aplicacao_injetaveis,
        medicamento_injetavel = :medicamento_injetavel,
        lote_injetavel = :lote_injetavel,
        validade_injetavel = :validade_injetavel,
        posologia_injetavel = :posologia_injetavel,
        via_administracao_injetavel = :via_administracao_injetavel,
        nome_prescritor_injetavel = :nome_prescritor_injetavel,
        inaloterapia = :inaloterapia,
        medicamento_inaloterapia = :medicamento_inaloterapia,
        lote_inaloterapia = :lote_inaloterapia,
        validade_inaloterapia = :validade_inaloterapia,
        posologia_inaloterapia = :posologia_inaloterapia,
        nome_prescritor_inaloterapia = :nome_prescritor_inaloterapia,
        crm_cro_inaloterapia = :crm_cro_inaloterapia,
        aplicacao_brinco = :aplicacao_brinco,
        pistola_brinco = :pistola_brinco,
        lote_brinco = :lote_brinco,
        cnpj_brinco = :cnpj_brinco,
        lado_direito = :lado_direito,
        lado_esquerdo = :lado_esquerdo,
        assistencia_domiciliar = :assistencia_domiciliar,
        acompanhamento_farmacoterapeutico = :acompanhamento_farmacoterapeutico,
        numero_ficha = :numero_ficha,
        indicacao_farmaceutica = :indicacao_farmaceutica,
        sinais_sintomas = :sinais_sintomas,
        plano_acompanhamento = :plano_acompanhamento,
        dataServicos = :dataServicos
    WHERE id_servicos_PK = :id";

    $stmt = Database::prepare($sql);
    // Bind parameters
        $stmt->bindValue(':nomePaciente', $this->nome);
        $stmt->bindValue(':telefone', $this->telefone);
        $stmt->bindValue(':email', $this->email);
        $stmt->bindValue(':dataNasc', $this->idade);
        $stmt->bindValue(':nome_responsavel', $this->nomeResponsavel);
        $stmt->bindValue(':glicemia_capilar', $this->glicemiaCapilar);
        $stmt->bindValue(':pressao_arterial', $this->pressaoArterial);
        $stmt->bindValue(':temperatura_corporal', $this->temperaturaCorporal);
        $stmt->bindValue(':aplicacao_injetaveis', $this->aplicacaoInjetaveis);
        $stmt->bindValue(':medicamento_injetavel', $this->medicamentoInjetavel);
        $stmt->bindValue(':lote_injetavel', $this->loteInjetavel);
        $stmt->bindValue(':validade_injetavel', $this->validadeInjetavel);
        $stmt->bindValue(':posologia_injetavel', $this->posologiaInjetavel);
        $stmt->bindValue(':via_administracao_injetavel', $this->viaAdministracaoInjetavel);
        $stmt->bindValue(':nome_prescritor_injetavel', $this->nomePrescritorInjetavel);
        $stmt->bindValue(':inaloterapia', $this->inaloterapia);
        $stmt->bindValue(':medicamento_inaloterapia', $this->medicamentoInaloterapia);
        $stmt->bindValue(':lote_inaloterapia', $this->loteInaloterapia);
        $stmt->bindValue(':validade_inaloterapia', $this->validadeInaloterapia);
        $stmt->bindValue(':posologia_inaloterapia', $this->posologiaInaloterapia);
        $stmt->bindValue(':nome_prescritor_inaloterapia', $this->nomePrescritorInaloterapia);
        $stmt->bindValue(':crm_cro_inaloterapia', $this->crmCroInaloterapia);
        $stmt->bindValue(':aplicacao_brinco', $this->aplicacaoBrinco);
        $stmt->bindValue(':pistola_brinco', $this->pistolaBrinco);
        $stmt->bindValue(':lote_brinco', $this->loteBrinco);
        $stmt->bindValue(':cnpj_brinco', $this->cnpjBrinco);
        $stmt->bindValue(':lado_direito', $this->ladoDireito);
        $stmt->bindValue(':lado_esquerdo', $this->ladoEsquerdo);
        $stmt->bindValue(':assistencia_domiciliar', $this->assistenciaDomiciliar);
        $stmt->bindValue(':acompanhamento_farmacoterapeutico', $this->acompanhamentoFarmacoterapeutico);
        $stmt->bindValue(':numero_ficha', $this->numeroFicha);
        $stmt->bindValue(':indicacao_farmaceutica', $this->indicacaoFarmaceutica);
        $stmt->bindValue(':sinais_sintomas', $this->sinaisSintomas);
        $stmt->bindValue(':plano_acompanhamento', $this->planoAcompanhamento);
        $stmt->bindValue(':dataServicos', $this->data);
        $stmt->bindValue(':id', $id);

    try {
        $stmt->execute();
        return true;
    } catch (\Throwable $th) {
        return false;
    }
}

    public function deleteServico($id)
    {
        $sql = "DELETE FROM servicos WHERE id_servicos_PK = :id";
        $stmt = Database::prepare($sql);

        // Bind parameters
        $stmt->bindValue(':id', $id, \PDO::PARAM_INT);

        try {
            $stmt->execute();
            return true; // Successful deletion
        } catch (\Exception $e) {
            // Handle the exception if needed
            return false; // Failed deletion
        }
    }
    public function findAllServicos()
    {
        $sql = "SELECT * FROM servicos";
        $stmt = Database::prepare($sql);

        try {
            $stmt->execute();
            // Return an array with all records from the table
            return $stmt->fetchAll(\PDO::FETCH_ASSOC);
        } catch (\Exception $e) {
            // Handle the exception if needed
            return []; // Return an empty array in case of an error
        }
    }
    public function find($id)
    {
        $sql = "SELECT * FROM servicos WHERE id_servicos_PK = :id";
        $stmt = Database::prepare($sql);
        $stmt->bindParam(':id', $id, \PDO::PARAM_INT);
        $stmt->execute();

        return $stmt->fetch(\PDO::FETCH_BOTH);
    }

    public function mostrarAtributos()
    {
        // Use a função get_object_vars para obter todos os atributos do objeto
        $atributos = get_object_vars($this);

        // Exiba os atributos
        foreach ($atributos as $nome => $valor) {
            echo "$nome: $valor <br>";
        }
    }
    public function buscarValoresSemelhantes($input, $selecao,$usuario_id) {
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
}
