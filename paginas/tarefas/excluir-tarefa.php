<header>
    <h3>Excluir tarefa</h3>
</header>

<?php

$idTarefa = mysqli_real_escape_string($conexao,$_GET["idTarefa"]) ;
$sql = "DELETE FROM tbtarefas where idTarefa = $idTarefa";

mysqli_query($conexao,$sql) or die ("Erro ao excluir o tarefa". mysqli_error($conexao) );
echo("Registro excluido com sucesso");
 
header ("Refresh:0.0001;url=index.php?menuop=tarefas"); /*redirecionando para a pagina tarefas.

?>