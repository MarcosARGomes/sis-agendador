<?php
    $idEvento = $_GET["idEvento"]; #recuperando o id do registro a ser editado.
    $sql = "SELECT * FROM tbeventos WHERE idEvento = $idEvento";
    $rs = mysqli_query($conexao,$sql) or die ("Erro ao recuperar os dados do registro" . mysqli_error($conexao));
    $dados = mysqli_fetch_assoc($rs);
?>


<header>
    <h3>Editar Evento</h3>
</header>
    <div class="row">
        <div class="col-6">
            <form action="index.php?menuop=atualizar-evento" method="post"> <!-- enviando os dado para página de atualizar-evento para envio ao banco -->
                
                <div class="row">
                    <div class="mb-3 col-2">
                        <label class= "form-label" for="idEvento">ID</label>
                        <input class="form-control" type="text" name="idEvento" value="<?=$dados["idEvento"] ?>" readonly>
                    </div>
                </div>
                    <div class="mb-3">
                        <label class= "form-label" for="statusEvento">Status</label>
                        <div class="input-group">
                            <span class="input-group-text"><i class="bi bi-list-task"></i></span>
                            <input class="form-control" type="text" name="statusEvento" value="<?=$dados["statusEvento"] ?>">
                        </div>
                    </div>
                

                <div class="mb-3">
                    <label class= "form-label" for="tituloEvento">Titulo</label>
                    <div class="input-group">
                        <span class="input-group-text"><i class="bi bi-fonts"></i></span>
                        <input class="form-control" type="text" name="tituloEvento" value="<?=$dados["tituloEvento"] ?>"> <!-- Validação de e-mail no HTMl -->
                    </div>
                </div>

                <div class="mb-3">
                    <label class= "form-label" for="descricaoEvento">Descrição</label>
                    <div class="input-group">
                        <span class="input-group-text"><i class="bi bi-justify-left"></i></span>
                        <input class="form-control" type="text" name="descricaoEvento" value="<?=$dados["descricaoEvento"] ?>">
                    </div>
                </div>

                <div class="row">
                    <div class="mb-3 col-6">
                        <label class= "form-label" for="dataInicioEvento">Data de inicio</label>
                        <div class="input-group">
                            <span class="input-group-text"><i class="bi bi-calendar2-week"></i></span>
                            <input class="form-control" type="date" name="dataInicioEvento" value="<?=$dados["dataInicioEvento"] ?>">
                        </div>
                    </div>
                    
                    <div class="mb-3 col-6">
                        <label class= "form-label" for="horaInicioEvento">Hora de inicio</label>
                        <div class="input-group">
                            <span class="input-group-text"><i class="bi bi-clock"></i></span>
                            <input class="form-control" type="time" name="horaInicioEvento" value="<?=$dados["horaInicioEvento"] ?>">
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="mb-3 col-6">
                        <label class= "form-label" for="dataFimEvento">Data fim</label>
                        <div class="input-group">
                            <span class="input-group-text"><i class="bi bi-calendar2-week"></i></span>
                            <input class="form-control" type="date" name="dataFimEvento" value="<?=$dados["dataFimEvento"] ?>">
                        </div>
                    </div>
                    
                    <div class="mb-3 col-6">
                        <label class= "form-label" for="horaFimEvento">Hora de conclusão</label>
                        <div class="input-group">
                            <span class="input-group-text"><i class="bi bi-clock"></i></span>
                            <input class="form-control" type="time" name="horaFimEvento" value="<?=$dados["horaFimEvento"] ?>">
                        </div>
                    </div>
                </div>

                <div class="mb-3">
                    <input class="btn btn-outline-primary" type="submit" value="Atualizar" name="btnAtualizar">
                </div>
            </form>
        </div>
</div>
