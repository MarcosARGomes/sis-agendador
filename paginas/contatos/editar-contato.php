<?php
    $idContato = $_GET["idContato"]; #recuperando o id do registro a ser editado.
    $sql = "SELECT * FROM tbcontatos c LEFT JOIN tbfotos f ON f.idContato_fk = c.idContato WHERE idContato = $idContato";
    $rs = mysqli_query($conexao,$sql) or die ("Erro ao recuperar os dados do registro" . mysqli_error($conexao));
    $dados = mysqli_fetch_assoc($rs);
?>


<header>
    <h3>Editar contato</h3>
</header>
    <div class="row">
        <div class="col-6">
            <form action="index.php?menuop=atualizar-contato" method="post"> <!-- enviando os dado para página de atualizar-contato para envio ao banco -->
                
                <div class="row">
                    <div class="mb-3 col-2">
                        <label class= "form-label" for="idContato">ID</label>
                        <input class="form-control" type="text" name="idContato" value="<?=$dados["idContato"] ?>" readonly> <!--somente leitura-->
                    </div>

                    <div class="mb-3 col-6">
                        <label class= "form-label" for="dataNasciContato">Data de Nascimento</label>
                        <div class="input-group">
                            <span class="input-group-text"><i class="bi bi-calendar2-week"></i></span>
                            <input class="form-control" type="date" name="dataNasciContato" value="<?=$dados["dataNasciContato"] ?>">
                        </div>
                    </div>

                </div>
                    <div class="mb-3">
                        <label class= "form-label" for="nomeContato">Nome</label>
                        <div class="input-group">
                            <span class="input-group-text"><i class="bi bi-person-circle"></i></span>
                            <input class="form-control" type="text" name="nomeContato" value="<?=$dados["nomeContato"] ?> " >
                        </div>
                    </div>
                

                <div class="mb-3">
                    <label class= "form-label" for="emailContato">E-mail</label>
                    <div class="input-group">
                        <span class="input-group-text"><i class="bi bi-envelope"></i></span>
                        <input class="form-control" type="email" name="emailContato" value="<?=$dados["emailContato"] ?> " required> <!-- Validação de e-mail no HTMl -->
                    </div>
                </div>

                <div class="mb-3">
                    <label class= "form-label" for="telefoneContato">Endereço</label>
                    <div class="input-group">
                        <span class="input-group-text"><i class="bi bi-mailbox"></i></span>
                        <input class="form-control" type="text" name="enderecoContato" value="<?=$dados["enderecoContato"] ?>">
                    </div>
                </div>

                <div class="row">
                    <div class="mb-3 col-5">
                        <label class= "form-label" for="sexoContato">Genero</label>
                        <div class="input-group">
                            <span class="input-group-text"><i class="bi bi-gender-ambiguous"></i></span>
                            <!-- Verificando a informação que vem do banco -->
                            <select class="form-select form-control" name="sexoContato" id="sexoContato">
                                <option <?php echo ($dados['sexoContato']=='')?'selected':''?> value="">Selecione o Genero</option>
                                <option <?php echo ($dados['sexoContato']=='M')?'selected':''?> value="M">Masculino</option>
                                <option <?php echo ($dados['sexoContato']=='F')?'selected':''?> value="F">Feminino</option>
                            </select>
                        </div>
                    </div>

                   
                    
                    <div class="mb-3 col-6 ">
                        <label class= "form-label" for="telefoneContato">Telefone</label>
                        <div class="input-group">
                            <span class="input-group-text"><i class="bi bi-telephone"></i></span>
                            <input class="form-control" type="text" name="telefoneContato" value="<?=$dados["telefoneContato"] ?>">
                        </div>
                    </div>
                </div>

                <div class="mb-3">
                    <input class="btn btn-outline-primary" type="submit" value="Atualizar" name="btnAtualizar">
                </div>
            </form>
        </div>

        <div class="col-6">
            <?php #Define uma foto padrão para os usuários que estão sem foto armazenadas.
                if($dados["nomeFotoContato"] == null || !file_exists('./paginas/contatos/fotos-contatos/'.$dados["nomeFotoContato"] )){
                    $nomeFoto = "Semfoto.jpg";
                    } else {
                        $nomeFoto = $dados["nomeFotoContato"] ;
                    }
                    
            ?>
            <div class="mb-3">
                <img id="foto-contato" class= 'img-fluid img thumbnail' src="./paginas/contatos/fotos-contatos/<?=$nomeFoto?>" alt="Foto do Contato">
            </div>

            <div class="mb-3">
                <button class="btn-sm btn btn-info" id="btn-editar-foto">
                    <i class="bi bi-camera-fill"></i> Editar Foto
                </button>
            </div>
            <div id="editar-foto">
                <form id="form-upload-foto" class="mb-3" action="" method="post" enctype="multipart/form-data"> <!-- enctype, necessario para upload de arquivos-->
                    <input type="hidden" name="idContato" value="<?=$idContato?>"><!-- fornece o id para inserir junto ao nome do arquivo e padronizar-->
                    <label class="form-label" for="arquivo">Selecione um arquivo de imagem da foto</label>
                        
                        <div class="input-group">
                            <input class="form-control" type="file" name="arquivo" id="arquivo">
                            <input id="btn-enviar-foto" class="btn btn-secondary" type="submit" value="Enviar">
                        </div>
                </form>
                <div id="mensagem" class="mb-3 alert alert-success">
                    
                </div>
                <div id="preloader" class="progress"><!--barra de status do upload da imagem-->
                    <div id="barra"
                    class="progress-bar bg-danger" 
                    role="progressbar" 
                    style="width: 0%" 
                    aria-valuenow="0" 
                    aria-valuemin="0" 
                    aria-valuemax="100">0%</div>
                </div>  
            </div>
    </div>
</div>
