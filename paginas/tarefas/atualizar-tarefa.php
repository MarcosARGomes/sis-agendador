<header>
    <h3>Atualizar Tarefa</h3>
</header>

<?php

    # Criando funções para armazenar as informações enviadas pelo metodo POST na pagina de cad-contatos.php
    $idTarefa = mysqli_real_escape_string($conexao,$_POST["idTarefa"]) ;
    $statusTarefa = mysqli_real_escape_string($conexao,$_POST["statusTarefa"]) ;
    $tituloTarefa = mysqli_real_escape_string($conexao,$_POST["tituloTarefa"]) ; #função mysqli_real_escape_string limpa a string de caracteres especiais.
    $descricaoTarefa = mysqli_real_escape_string($conexao,$_POST["descricaoTarefa"]) ;
    $dataConclusaoTarefa = mysqli_real_escape_string($conexao,$_POST["dataConclusaoTarefa"]) ;
    $horaConclusaoTarefa = mysqli_real_escape_string($conexao,$_POST["horaConclusaoTarefa"]) ;
   

    $sql = " UPDATE tbtarefas SET
        statusTarefa = '$statusTarefa',
        tituloTarefa = '$tituloTarefa', 
        descricaoTarefa = '$descricaoTarefa',
        dataConclusaoTarefa = '$dataConclusaoTarefa',
        horaConclusaoTarefa = '$horaConclusaoTarefa'
        WHERE idTarefa = '$idTarefa'
        
        ";

    mysqli_query($conexao,$sql) or die ("Erro ao atualizar o registro." . mysqli_error($conexao));
    #executando o sql

    echo "O registro foi atualizado com sucesso!";

header ("Refresh:0.0001;url=index.php?menuop=tarefas"); /*redirecionando para a pagina tarefas.

?>
