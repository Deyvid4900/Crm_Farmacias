<link rel="stylesheet" href="../../modules/formCadastro/formcadastro.css">

<section class="formInit-bg">
    <div class="form-bg">
        <h1>Clientes</h1>
        <form>
            <div class="flexForm">
                <label for="nome">Nome</label>
                <input type="text" name="nome" id="nome" autocomplete="off">
                <label for="numero">N° Cliente</label>
                <input type="text" name="numero" id="numero" autocomplete="off">
                <label for="cpf">CPF</label>
                <input type="text" name="cpf" id="cpf" maxlength="11" autocomplete="off">
            <!-- mexer cpf validar formato -->
            </div>
            <div class="flexCol1">
            <div class="padDown">
                <label for="sx" class="aaaa">Sexo</label>
                <select name="sx" id="sx">
                    <option value=""></option>
                    <option
                    value="masculino">Masculino</option>
                    <option value="feminino">Feminino</option>
                </select>
            </div>
            <div class="padDown">
                <label for="profissao" class="aprof">Profissão</label>
                <input type="text" name="profissao" id="profissao">
            </div>
            <div>
                <label for="religiao" class="arelig">Religião</label>
                <input type="text" name="religiao" id="religiao">
            </div>
            </div>

        </form>
    </div>
</section>