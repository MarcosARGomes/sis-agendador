<header>
    <h3>Excluir Evento</h3>
</header>

<?php

$idEvento = mysqli_real_escape_string($conexao,$_GET["idEvento"]) ;
$sql = "DELETE FROM tbeventos where idEvento = $idEvento";

mysqli_query($conexao,$sql) or die ("Erro ao excluir o evento". mysqli_error($conexao) );
echo("Registro excluido com sucesso");
 
header ("Refresh:0.0001;url=index.php?menuop=eventos"); /*redirecionando para a pagina eventos.


?>