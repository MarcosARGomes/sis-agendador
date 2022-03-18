<?php
set_time_limit(0);
include_once('../../../db/conexao.php');

$extensoes_validas = array(".jpg",".png",".bmp");#extensões validas.
$caminho_absoluto = "../fotos-contatos";#caminho onde sera salvo uma copia do arquivo.
$tamanho_bytes = 5000000;#tamanho maximo do arquivo

if(isset($_FILES['arquivo']['name'])):#isset verifica se as variaveis foram definidas, Verificando se o arquivo existe.
    $idContato = $_POST['idContato'];
    $nome_arquivo = $_FILES['arquivo']['name'];
    $extensao = strrchr($nome_arquivo,'.'); #recuperando a extensão do arquivo
    $tamanho_arquivo = $_FILES['arquivo']['size'];
    $arquivo_temporario = $_FILES['arquivo']['tmp_name'];
    $nome_arquivo_novo = $idContato . $extensao;#alterando o nome do arquivo para o id e extensão
    if($tamanho_arquivo > $tamanho_bytes):#Verifica tamanho do arquivo.
        die("Arquivo deve ter no máximo {$tamanho_bytes} bytes.;aviso");
    endif;

    if(!in_array($extensao,$extensoes_validas)):#Verifica Extensão do arquivo
        die("Extensão de arquivo de imagem inválida para o upload.;aviso");
    endif;

    if(move_uploaded_file($arquivo_temporario,"$caminho_absoluto/$nome_arquivo_novo")):#Movendo o arquivo para a pagina Fotos-contatos
        $sql = "UPDATE tbcontatos SET nomeFotoContato= '{$nome_arquivo_novo}' WHERE idContato = '{$idContato}'";
        mysqli_query($conexao,$sql);
        echo "./paginas/contatos/fotos-contatos/{$nome_arquivo_novo};concluido";
    else:
        die("O arquivo não pode ser copiado para o servidor.;erro");
    endif;
else:
    die("Selecione um arquivo de imagem para fazer o upload.;aviso");
endif;

