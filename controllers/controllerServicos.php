<?php
include_once("../lib/vendor/autoload.php");
include_once("../models/ClassServicos.php");
include_once("../models/ClassPDF.php");
include_once("../models/ClassCliente.php");


use \Models\Servicos;
use \Models\Cliente;

session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // var_dump($_POST);
    $nome = $_POST["nome"];

    $objCliente = new Cliente;
    $idExaminado = $objCliente->getIdByName($nome);





    $genero = $_POST["sexo"];
    $idade = $_POST["dataNasc"];
    $telefone = $_POST["phone"];
    $email = $_POST["email"];
    $nomeResponsavel = $_POST["respo"];

    // Cuidados Farmacêutico
    $glicemiaCapilar = $_POST["glice"];
    $checkGli = isset($_POST["checkGli"]) ? $_POST["checkGli"] : "";
    $pressaoArterial = $_POST["pressao"];
    $checkPre = isset($_POST["checkPre"]) ? $_POST["checkPre"] : "";
    $temperaturaCorporal = $_POST["temp"];
    $checkTemp = isset($_POST["checkTemp"]) ? $_POST["checkTemp"] : "";

    // Injetáveis
    $aplicacaoInjetaveis = isset($_POST["apliInjeta"]) ? $_POST["apliInjeta"] : "";
    $medicamentoInjetavel = $_POST["medicamento"];
    $loteInjetavel = $_POST["lote"];
    $validadeInjetavel = $_POST["validade"];
    $posologiaInjetavel = $_POST["posologia"];
    $viaAdministracaoInjetavel = $_POST["viaAdm"];
    $nomePrescritorInjetavel = $_POST["prescritor"];

    // Inaloterapia
    $inaloterapia = isset($_POST["inaloCheck"]) ? $_POST["inaloCheck"] : "";
    $medicamentoInaloterapia = $_POST["medicamentoIna"];
    $loteInaloterapia = $_POST["loteInalo"];
    $validadeInaloterapia = $_POST["validadeInalo"];
    $posologiaInaloterapia = $_POST["posologiaInalo"];
    $nomePrescritorInaloterapia = $_POST["prescritorIna"];
    $crmCroInaloterapia = $_POST["crm"];

    // Parte Brinco
    $aplicacaoBrinco = isset($_POST["brincoCol"]) ? $_POST["brincoCol"] : "";
    $pistolaBrinco = $_POST["medicamentoBrinco"];
    $loteBrinco = $_POST["loteBrinco"];
    $cnpjBrinco = $_POST["validadeBrinco"];
    $ladoDireito = isset($_POST["ladoD"]) ? $_POST["ladoD"] : "";
    $ladoEsquerdo = isset($_POST["ladoE"]) ? $_POST["ladoE"] : "";

    // Assistência Domiciliar
    $assistenciaDomiciliar = isset($_POST["assCheck"]) ? $_POST["assCheck"] : "";

    // Acompanhamento Farmacoterapêutico
    $acompanhamentoFarmacoterapeutico = isset($_POST["acomCheck"]) ? $_POST["acomCheck"] : "";
    $numeroFicha = $_POST["ficha"];

    // Indicação Farmacêutica
    $indicacaoFarmaceutica = isset($_POST["indiCheck"]) ? $_POST["indiCheck"] : "";

    // Sinais e Sintomas
    $sinaisSintomas = $_POST["medicamentoIna"];  // Replace this with the correct field name

    // Plano de Acompanhamento
    $planoAcompanhamento = isset($_POST["dois"]) ? $_POST["dois"] : "";

    $sinaisSintomas = $_POST["medicamentoIna"];

    // Plano de Acompanhamento
    $planoAcompanhamento = isset($_POST["dois"]) ? $_POST["dois"] : "";

    // Data
    $data = date("Y-m-d H:i:s");

    $servico = new Servicos;
    // Set the attributes in the $servico object
    $servico->setNome($nome);
    $servico->setGenero($genero);
    $servico->setIdade($idade);
    $servico->setTelefone($telefone);
    $servico->setEmail($email);
    $servico->setNomeResponsavel($nomeResponsavel);

    // Cuidados Farmacêutico
    $servico->setGlicemiaCapilar($glicemiaCapilar);
    $servico->setglicemiaCapilar($checkGli);
    $servico->setPressaoArterial($pressaoArterial);
    $servico->setPressaoArterial($checkPre);
    $servico->setTemperaturaCorporal($temperaturaCorporal);
    $servico->setTemperaturaCorporal($checkTemp);

    // Injetáveis
    $servico->setAplicacaoInjetaveis($aplicacaoInjetaveis);
    $servico->setMedicamentoInjetavel($medicamentoInjetavel);
    $servico->setLoteInjetavel($loteInjetavel);
    $servico->setValidadeInjetavel($validadeInjetavel);
    $servico->setPosologiaInjetavel($posologiaInjetavel);
    $servico->setaplicacaoInjetaveis($aplicacaoInjetaveis);
    $servico->setnomePrescritorInjetavel($nomePrescritorInjetavel);

    // Inaloterapia
    $servico->setInaloterapia($inaloterapia);
    $servico->setMedicamentoInaloterapia($medicamentoInaloterapia);
    $servico->setLoteInaloterapia($loteInaloterapia);
    $servico->setValidadeInaloterapia($validadeInaloterapia);
    $servico->setPosologiaInaloterapia($posologiaInaloterapia);
    $servico->setnomePrescritorInaloterapia($nomePrescritorInaloterapia);
    $servico->setCrmCroInaloterapia($crmCroInaloterapia);

    // Parte Brinco
    $servico->setAplicacaoBrinco($aplicacaoBrinco);
    $servico->setPistolaBrinco($pistolaBrinco);
    $servico->setLoteBrinco($loteBrinco);
    $servico->setCnpjBrinco($cnpjBrinco);
    $servico->setLadoDireito($ladoDireito);
    $servico->setLadoEsquerdo($ladoEsquerdo);

    // Assistência Domiciliar
    $servico->setAssistenciaDomiciliar($assistenciaDomiciliar);

    // Acompanhamento Farmacoterapêutico
    $servico->setAcompanhamentoFarmacoterapeutico($acompanhamentoFarmacoterapeutico);
    $servico->setNumeroFicha($numeroFicha);

    // Indicação Farmacêutica
    $servico->setIndicacaoFarmaceutica($indicacaoFarmaceutica);

    // Sinais e Sintomas
    $servico->setSinaisSintomas($sinaisSintomas);

    // Plano de Acompanhamento
    $servico->setPlanoAcompanhamento($planoAcompanhamento);

    // Data
    $servico->setData($data);

    $servico->setIdCliente($idExaminado);
    if ($idExaminado == "" || $idExaminado == null || $idExaminado == false) {

        $objCliente->insertArray($_POST, $_SESSION['user_id']);
    }
    // Código para lidar com o botão Enviar

    $idFarmacia = $_SESSION["user_id"];
    $servico->setIdFarmacia($idFarmacia);


    $_POST["submit"] = 'false';
    // $servico->mostrarAtributos();
    if ($servico->insertServico()) {
        $response =  'Dados inseridos com sucesso';
    } else {
        $response = 'Falha ao inserir o evento';
    }
} else {
    // Se nenhum botão válido foi pressionado, retorne uma mensagem de erro
    $response = array(
        "error no Cadastro"
    );

    // Saída como JSON
}



echo $response;
