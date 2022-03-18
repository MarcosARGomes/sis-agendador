<header>
    <h3>Inserir Contato</h3>
</header>

<?php

    # Criando funções para armazenar as informações enviadas pelo metodo POST na pagina de cad-contatos.php
    $nomeContato = mysqli_real_escape_string($conexao,$_POST["nomeContato"]) ; #função mysqli_real_escape_string limpa a string de caracteres especiais.
    $emailContato = mysqli_real_escape_string($conexao,$_POST["emailContato"]) ;
    $telefoneContato = mysqli_real_escape_string($conexao,$_POST["telefoneContato"]) ;
    $enderecoContato = mysqli_real_escape_string($conexao,$_POST["enderecoContato"]) ;
    $sexoContato = mysqli_real_escape_string($conexao,$_POST["sexoContato"]) ;
    $dataNasciContato = mysqli_real_escape_string($conexao,$_POST["dataNasciContato"]) ;

    $sql = "INSERT INTO tbcontatos (
        nomeContato, 
        emailContato,
        telefoneContato,
        enderecoContato,
        sexoContato,
        dataNasciContato)
        VALUES(
            '$nomeContato',
            '$emailContato',
            '$telefoneContato',
            '$enderecoContato',
            '$sexoContato',
            '$dataNasciContato');
        ";

    mysqli_query($conexao,$sql) or die ("Erro ao executar a consulta." . mysqli_error($conexao));
    #executando o sql

    echo "O registro foi inserido com sucesso!";
?>
