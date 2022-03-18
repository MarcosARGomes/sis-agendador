<?php
    $idTarefa = $_GET["idTarefa"]; #recuperando o id do registro a ser editado.
    $sql = "SELECT * FROM tbtarefas WHERE idTarefa = $idTarefa";
    $rs = mysqli_query($conexao,$sql) or die ("Erro ao recuperar os dados do registro" . mysqli_error($conexao));
    $dados = mysqli_fetch_assoc($rs);
?>


<header>
    <h3>Editar tarefa</h3>
</header>
    <div class="row">
        <div class="col-6">
            <form action="index.php?menuop=atualizar-tarefa" method="post"> <!-- enviando os dado para página de atualizar-tarefa para envio ao banco -->
                
                <div class="row">
                    <div class="mb-3 col-2">
                        <label class= "form-label" for="idTarefa">ID</label>
                        <input class="form-control" type="text" name="idTarefa" value="<?=$dados["idTarefa"] ?>" readonly>
                    </div>
                </div>
                    <div class="mb-3">
                        <label class= "form-label" for="statusTarefa">Status</label>
                        <div class="input-group">
                            <span class="input-group-text"><i class="bi bi-list-task"></i></span>
                            <input class="form-control" type="text" name="statusTarefa" value="<?=$dados["statusTarefa"] ?>">
                        </div>
                    </div>
                

                <div class="mb-3">
                    <label class= "form-label" for="tituloTarefa">Titulo</label>
                    <div class="input-group">
                        <span class="input-group-text"><i class="bi bi-fonts"></i></span>
                        <input class="form-control" type="text" name="tituloTarefa" value="<?=$dados["tituloTarefa"] ?>"> <!-- Validação de e-mail no HTMl -->
                    </div>
                </div>

                <div class="mb-3">
                    <label class= "form-label" for="descricaoTarefa">Descrição</label>
                    <div class="input-group">
                        <span class="input-group-text"><i class="bi bi-justify-left"></i></span>
                        <input class="form-control" type="text" name="descricaoTarefa" value="<?=$dados["descricaoTarefa"] ?>">
                    </div>
                </div>

                <div class="row">
                    <div class="mb-3 col-6">
                        <label class= "form-label" for="dataConclusaoTarefa">Data de conclusão</label>
                        <div class="input-group">
                            <span class="input-group-text"><i class="bi bi-calendar2-week"></i></span>
                            <input class="form-control" type="date" name="dataConclusaoTarefa" value="<?=$dados["dataConclusaoTarefa"] ?>">
                        </div>
                    </div>
                    
                    <div class="mb-3 col-6">
                        <label class= "form-label" for="horaConclusaoTarefa">Hora de conclusão</label>
                        <div class="input-group">
                            <span class="input-group-text"><i class="bi bi-clock"></i></span>
                            <input class="form-control" type="time" name="horaConclusaoTarefa" value="<?=$dados["horaConclusaoTarefa"] ?>">
                        </div>
                    </div>
                </div>

                <div class="mb-3">
                    <input class="btn btn-outline-primary" type="submit" value="Atualizar" name="btnAtualizar">
                </div>
            </form>
        </div>
</div>
