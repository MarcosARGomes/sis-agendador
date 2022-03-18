<header>
    <h3>Excluir contato</h3>
</header>

<?php

$idContato = mysqli_real_escape_string($conexao,$_GET["idContato"]) ;
$sql = "DELETE FROM tbcontatos where idCOntato = $idContato";

mysqli_query($conexao,$sql) or die ("Erro ao excluir o contato". mysqli_error($conexao) );
echo("Registro excluido com sucesso");

header ("Refresh:0.0001;url=index.php?menuop=contatos"); /*redirecionando para a pagina contatos.

?>

