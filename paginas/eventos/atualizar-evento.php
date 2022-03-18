<header>
    <h3>Atualizar Eventos</h3>
</header>

<?php

    # Criando funções para armazenar as informações enviadas pelo metodo POST na pagina de cad-contatos.php
    $idEvento = mysqli_real_escape_string($conexao,$_POST["idEvento"]) ;
    $tituloEvento = mysqli_real_escape_string($conexao,$_POST["tituloEvento"]) ; #função mysqli_real_escape_string limpa a string de caracteres especiais.
    $descricaoEvento = mysqli_real_escape_string($conexao,$_POST["descricaoEvento"]) ;
    $dataInicioEvento = mysqli_real_escape_string($conexao,$_POST["dataInicioEvento"]) ;
    $horaInicioEvento = mysqli_real_escape_string($conexao,$_POST["horaInicioEvento"]) ;
    $dataFimEvento = mysqli_real_escape_string($conexao,$_POST["dataFimEvento"]) ;
    $horaFimEvento = mysqli_real_escape_string($conexao,$_POST["horaFimEvento"]) ;
   

    $sql = " UPDATE tbeventos SET
        tituloEvento = '$tituloEvento', 
        descricaoEvento = '$descricaoEvento',
        dataInicioEvento = '$dataInicioEvento',
        horaInicioEvento = '$horaInicioEvento',
        dataFimEvento = '$dataFimEvento',
        horaFimEvento = '$horaFimEvento'
        WHERE idEvento = '$idEvento'
        
        ";

    mysqli_query($conexao,$sql) or die ("Erro ao atualizar o registro." . mysqli_error($conexao));
    #executando o sql

    echo "O registro foi atualizado com sucesso!";
    header ("Refresh:0.0001;url=index.php?menuop=eventos"); /*redirecionando para a pagina eventos.

?>
