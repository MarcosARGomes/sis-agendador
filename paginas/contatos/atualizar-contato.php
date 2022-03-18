<header>
    <h3>Atualizar Contato</h3>
</header>

<?php

    # Criando funções para armazenar as informações enviadas pelo metodo POST na pagina de cad-contatos.php
    $idContato = mysqli_real_escape_string($conexao,$_POST["idContato"]) ;
    $nomeContato = mysqli_real_escape_string($conexao,$_POST["nomeContato"]) ; #função mysqli_real_escape_string limpa a string de caracteres especiais.
    $emailContato = mysqli_real_escape_string($conexao,$_POST["emailContato"]) ;
    $telefoneContato = mysqli_real_escape_string($conexao,$_POST["telefoneContato"]) ;
    $enderecoContato = mysqli_real_escape_string($conexao,$_POST["enderecoContato"]) ;
    $sexoContato = mysqli_real_escape_string($conexao,$_POST["sexoContato"]) ;
    $dataNasciContato = mysqli_real_escape_string($conexao,$_POST["dataNasciContato"]) ;

    $sql = " UPDATE tbcontatos SET
        nomeContato = '$nomeContato', 
        emailContato = '$emailContato',
        telefoneContato = '$telefoneContato',
        enderecoContato = '$enderecoContato',
        sexoContato = '$sexoContato',
        dataNasciContato = '$dataNasciContato'
        WHERE idContato = '$idContato'
        
        ";

    mysqli_query($conexao,$sql) or die ("Erro ao atualizar o registro." . mysqli_error($conexao));
    #executando o sql

    echo "O registro foi atualizado com sucesso!";
    header ("Refresh:0.0001;url=index.php?menuop=contatos"); /*redirecionando para a pagina contatos.

?>
