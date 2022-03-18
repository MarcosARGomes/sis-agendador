<header>
    <h3>Inserir Eventos</h3>
</header>

<?php

    # Criando funções para armazenar as informações enviadas pelo metodo POST na pagina de cad-evento.php
    $tituloEvento = mysqli_real_escape_string($conexao,$_POST["tituloEvento"]) ; #função mysqli_real_escape_string limpa a string de caracteres especiais.
    $descricaoEvento = mysqli_real_escape_string($conexao,$_POST["descricaoEvento"]) ;
    $dataInicioEvento = mysqli_real_escape_string($conexao,$_POST["dataInicioEvento"]) ;
    $horaInicioEvento = mysqli_real_escape_string($conexao,$_POST["horaInicioEvento"]) ;
    $dataFimEvento = mysqli_real_escape_string($conexao,$_POST["dataFimEvento"]) ;
    $horaFimEvento = mysqli_real_escape_string($conexao,$_POST["horaFimEvento"]) ;
    

    $sql = "INSERT INTO tbeventos (
        tituloEvento, 
        descricaoEvento,
        dataInicioEvento,
        horaInicioEvento,
        dataFimEvento,
        horaFimEvento)
        VALUES(
            '$tituloEvento',
            '$descricaoEvento',
            '$dataInicioEvento',
            '$horaInicioEvento',
            '$dataFimEvento',
            '$horaFimEvento');
        ";

    mysqli_query($conexao,$sql) or die ("Erro ao executar a consulta." . mysqli_error($conexao));
    #executando o sql

    echo "O registro foi inserido com sucesso!";
?>
