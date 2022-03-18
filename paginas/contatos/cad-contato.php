<!-- Required - O proprio HTML não deixa que o campo seja enviado vazio -->
<header>
    <h3><i class="bi bi-person-square"></i> Cadastro de Contatos</h3>
</header>
<div>
    <span id="msgAlerta"></span>
    <form action="index.php?menuop=inserir-contato" method="post" id="cadMsgContato"> <!-- enviando os dado para página de Inserir-contato para envio ao banco -->
        <div class="mb-3">
            <label class= "form-label"for="nomeContato">Nome</label>
            <div class="input-group">
                <span class="input-group-text"><i class="bi bi-person-circle"></i></span>
                <input class="form-control"type="text" name="nomeContato" id="nome" required>
            </div>
        </div>

        <div class="mb-3">
            <label class= "form-label" for="emailContato">E-mail</label>
            <div class="input-group">
                <span class="input-group-text"><i class="bi bi-envelope"></i></span>
                <input class="form-control" type="email" name="emailContato" required > <!-- Validação de e-mail no HTMl -->
            </div>
        </div>

        
        <div class="mb-3">
            <label class= "form-label" for="enderecoContato">Endereço</label>
            <div class="input-group">
                <span class="input-group-text"><i class="bi bi-mailbox"></i></span>
                <input class="form-control" type="text" name="enderecoContato">
            </div>
        </div>
        <div class="row">
            <div class="mb-3 col-4" >
                <label class= "form-label" for="sexoContato">Genero</label>
                <div class="input-group">
                    <span class="input-group-text"><i class="bi bi-gender-ambiguous"></i></span>
                    <select class="form-control" name="sexoContato" id="sexoContato">
                        <option selected value="">Selecione o Genero</option>
                        <option value="M">Masculino</option>
                        <option value="F">Feminino</option>
                    </select>
                </div>
            </div>

            <div class="mb-3 col-4">
                <label class= "form-label" for="dataNasciContato">Data de Nascimento</label>
                <div class="input-group">
                    <span class="input-group-text"><i class="bi bi-calendar2-week"></i></span>
                    <input class="form-control" type="date" name="dataNasciContato" id="nascimento" >
                </div>
            </div>

            <div class="mb-3 col-4">
            
            <label class= "form-label" for="telefoneContato">Telefone</label>
            <div class="input-group">
                <span class="input-group-text"><i class="bi bi-telephone"></i></span>
                <input class="form-control" type="text" name="telefoneContato" required >
            </div>
        </div>
        </div>
        <div class="mb-3">
            <button class="btn btn-outline-primary" type="submit" value="Adicionar" name="btnAdicionar">
                Adicionar
            </button>
        </div>
    </form>
</div>
    
    <script src="../../js/validCont.js"></script>