<!-- Required - O proprio HTML não deixa que o campo seja enviado vazio -->
<header>
    <h3><i class="bi bi-calendar-check"></i> Cadastro eventos</h3>
</header>

    <div class="row">
        <div class="col-6">
            <form action="index.php?menuop=inserir-evento" method="post"> <!-- enviando os dado para página de atualizar-evento para envio ao banco -->
                    <div class="mb-3">
                        <label class= "form-label" for="statusEvento">Status</label>
                        <div class="input-group">
                    <span class="input-group-text"><i class="bi bi-gender-ambiguous"></i></span>
                    <select class="form-control" name="statusevento" id="statusevento">
                        <option selected value="">Selecione o Status</option>
                        <option value="0">Aberto</option>
                        <option value="1">Concluido</option>
                    </select>
                </div>
                    </div>
                

                <div class="mb-3">
                    <label class= "form-label" for="tituloEvento">Titulo</label>
                    <div class="input-group">
                        <span class="input-group-text"><i class="bi bi-fonts"></i></span>
                        <input class="form-control" type="text" name="tituloEvento" required> 
                    </div>
                </div>

                <div class="mb-3">
                    <label class= "form-label" for="descricaoEvento">Descrição</label>
                    <div class="input-group">
                        <span class="input-group-text"><i class="bi bi-justify-left"></i></span>
                        <input class="form-control" type="text" name="descricaoEvento" required>
                    </div>
                </div>

                <div class="row">
                    <div class="mb-3 col-4">
                        <label class= "form-label" for="dataInicioEvento">Data inicio evento</label>
                        <div class="input-group">
                            <span class="input-group-text"><i class="bi bi-calendar2-week"></i></span>
                            <input class="form-control" type="date" name="dataInicioEvento" >
                        </div>
                    </div>
                    
                    <div class="mb-3 col-4">
                        <label class= "form-label" for="horaInicioEvento">Hora de Inicio</label>
                        <div class="input-group">
                            <span class="input-group-text"><i class="bi bi-clock"></i></span>
                            <input class="form-control" type="time" name="horaInicioEvento">
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="mb-3 col-4">
                        <label class= "form-label" for="dataFimEvento">Data fim evento</label>
                        <div class="input-group">
                            <span class="input-group-text"><i class="bi bi-calendar2-week"></i></span>
                            <input class="form-control" type="date" name="dataFimEvento" >
                        </div>
                    </div>
                    
                    <div class="mb-3 col-4">
                        <label class= "form-label" for="horaFimEvento">Hora de conclusão</label>
                        <div class="input-group">
                            <span class="input-group-text"><i class="bi bi-clock"></i></span>
                            <input class="form-control" type="time" name="horaFimEvento">
                        </div>
                    </div>
                </div>

                <div class="mb-3">
                    <input class="btn btn-outline-primary" type="submit" value="Adicionar" name="btnAdicionar">
                </div>
            </form>
        </div>
</div> 

