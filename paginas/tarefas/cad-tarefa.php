<!-- Required - O proprio HTML não deixa que o campo seja enviado vazio -->
<header>
    <h3><i class="bi bi-list-task"></i> Cadastro tarefas</h3>
</header>

    <div class="row">
        <div class="col-6">
            <form action="index.php?menuop=inserir-tarefa" method="post" id="cadMsgTarefa"> <!-- enviando os dado para página de atualizar-tarefa para envio ao banco -->
                    <div class="mb-3">
                        <label class= "form-label" for="statusTarefa">Status</label>
                        <div class="input-group">
                    <span class="input-group-text"><i class="bi bi-gender-ambiguous"></i></span>
                    <select class="form-control" name="statustarefa" id="statustarefa">
                        <option selected value="">Selecione o Status</option>
                        <option value="0">Aberto</option>
                        <option value="1">Concluido</option>
                    </select>
                </div>
                    </div>
                

                <div class="mb-3">
                    <label class= "form-label" for="tituloTarefa">Titulo</label>
                    <div class="input-group">
                        <span class="input-group-text"><i class="bi bi-fonts"></i></span>
                        <input class="form-control" type="text" name="tituloTarefa" id="titulo" required> 
                    </div>
                </div>

                <div class="mb-3">
                    <label class= "form-label" for="descricaoTarefa">Descrição</label>
                    <div class="input-group">
                        <span class="input-group-text"><i class="bi bi-justify-left"></i></span>
                        <input class="form-control" type="text" name="descricaoTarefa" required>
                    </div>
                </div>

                <div class="row">
                    <div class="mb-3 col-6">
                        <label class= "form-label" for="dataConclusaoTarefa">Data de conclusão</label>
                        <div class="input-group">
                            <span class="input-group-text"><i class="bi bi-calendar2-week"></i></span>
                            <input class="form-control" type="date" name="dataConclusaoTarefa" id="conclusao" >
                        </div>
                    </div>
                    
                    <div class="mb-3 col-6">
                        <label class= "form-label" for="horaConclusaoTarefa">Hora de conclusão</label>
                        <div class="input-group">
                            <span class="input-group-text"><i class="bi bi-clock"></i></span>
                            <input class="form-control" type="time" name="horaConclusaoTarefa">
                        </div>
                    </div>
                </div>

                <div class="mb-3">
                    <input class="btn btn-outline-primary" type="submit" value="Adicionar" name="btnAdicionar">
                </div>
            </form>
        </div>
</div>

