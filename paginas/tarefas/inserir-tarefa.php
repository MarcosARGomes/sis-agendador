<header>
    <h3>Inserir Tarefas</h3>
</header>

<?php

    # Criando funções para armazenar as informações enviadas pelo metodo POST na pagina de cad-tarefass.php
    $tituloTarefa = mysqli_real_escape_string($conexao,$_POST["tituloTarefa"]) ; #função mysqli_real_escape_string limpa a string de caracteres especiais.
    $descricaoTarefa = mysqli_real_escape_string($conexao,$_POST["descricaoTarefa"]) ;
    $dataConclusaoTarefa = mysqli_real_escape_string($conexao,$_POST["dataConclusaoTarefa"]) ;
    $horaConclusaoTarefa = mysqli_real_escape_string($conexao,$_POST["horaConclusaoTarefa"]) ;
    

    $sql = "INSERT INTO tbtarefas (
        tituloTarefa, 
        descricaoTarefa,
        dataConclusaoTarefa,
        horaConclusaoTarefa)
        VALUES(
            '$tituloTarefa',
            '$descricaoTarefa',
            '$dataConclusaoTarefa',
            '$horaConclusaoTarefa');
        ";

    mysqli_query($conexao,$sql) or die ("Erro ao executar a consulta." . mysqli_error($conexao));
    #executando o sql

    echo "O registro foi inserido com sucesso!";
?>
