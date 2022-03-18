<?php
    $txt_pesquisa = (isset($_POST["txt_pesquisa"]))?$_POST["txt_pesquisa"] : ""; #Caso o campo de pesquisa esteja preenchido, $txt_pesquisa recebe o parametro, caso contrario ele não recebe nada.

?>

<header>
    <h3><i class="bi bi-calendar-check"></i> Eventos</h3>
</header>

<div class="row">
    <div class="col-8" >
        <!-- Campo para pesquisa de contatos -->
        <form action="index.php?menuop=eventos" method="post">
            <div class="input-group">
                <input class="form-control" type="text" name="txt_pesquisa" value="<?=$txt_pesquisa?>">
                <button class="btn btn-success btn-sm" type="submit">Pesquisar  <i class="bi bi-search"></i></button>
                </input>
            </div>
        </form>
    </div>

    <div class="col-4">
        <a class="btn btn-outline-secondary nb-2" href="index.php?menuop=cad-evento">Novo evento <i class="bi bi-list-task"></i></a>
    </div>
</div>

<div class="tabela">
    <table class="table table-dark table-hover table-bordered table-sm">
        <thead>
            <tr>
                <th clas="text-center">Status</th>
                <th clas="text-center">Titulo</th>
                <th clas="text-center">Descrição</th>
                <th clas="text-center">Inicio</th>
                <th clas="text-center">Fim</th>
                <th clas="text-center">Editar</th>
                <th clas="text-center">Excluir</th>


            </tr>
        </thead>
        <tbody>
            <?php

                $quantidade = 10 ;

                $pagina = (isset($_GET['pagina']))?(int)$_GET['pagina']:1; #quarda o número da pagina atual, se não houver nada vai para a página 1

                $inicio = ($quantidade * $pagina) - $quantidade;




                $sql = "SELECT idEvento,#Puxando todos os registros da tabela
                            statusEvento,
                            upper(tituloEvento) as tituloEvento, 
                            lower(descricaoEvento) as descricaoEvento,
                            DATE_FORMAT(dataInicioEvento,'%d/%m/%Y') as dataInicioEvento,
                            horaInicioEvento,
                            DATE_FORMAT(dataFimEvento,'%d/%m/%Y') as dataFimEvento,
                            horaFimEvento
                        FROM tbeventos
                        WHERE tituloEvento LIKE '%$txt_pesquisa%' OR descricaoEvento LIKE '%$txt_pesquisa%' OR DATE_FORMAT(dataInicioEvento,'%d/%m/%Y') LIKE '%$txt_pesquisa%' #Pesquisando no banco pelo titulo ou descrição.
                        ORDER BY statusEvento, dataInicioEvento ASC
                        LIMIT $inicio, $quantidade 
                        ";

                $rs = mysqli_query($conexao,$sql) or die("Erro ao executar a consulta" . mysqli_error($conexao)); 
                #rs vai guardar tudo que foi encontrado na consulta, primeiro vem a variavel de conexão $conexão definida no arquivo conexao.php e depois a variavel que esta fazendo a consulta, no caso $sql.

                while($dados = mysqli_fetch_assoc($rs)){ #dados recebe a função fetch assoc que faz a associação dos dados em rs linha por linha para passar ao formulario.
                # É preciso que o while pegue os dados da tabela entre chaves, para isso abrimos novamente o o php embaixo do formulario e fechamos chaves lá.
                
            
            ?>
            <tr>
                <td>
                    <a class="btn btn-secondary btn-sm" href="#">
                        <?php
                        if($dados['statusEvento']==0){ #Verificando se esta concluido ou não
                            echo '<i class="bi bi-square"></i>';
                        }else{
                            echo '<i class="bi bi-check-square"></i>';
                        }
                        ?>
                    </a>
                </td> 
                <!-- passamos $dados pegando o nome da coluna na tabela-->
                <td class="text-nowrap text-center"><?=$dados["tituloEvento"] ?> </td>
                <td class="text-nowrap text-center"><?=$dados["descricaoEvento"] ?></td>
                <td class="text-nowrap text-center"><?=$dados["dataInicioEvento"] ?></td>
                <td class="text-nowrap text-center"><?=$dados["dataFimEvento"] ?></td>
                <td class="text-nowrap text-center"><a class="btn btn-outline-warning btn-sm"href="index.php?menuop=editar-evento&idEvento=<?=$dados["idEvento"]?>"><i class="bi bi-pencil-square"></i></a></td> 
                <td class="text-nowrap text-center"><a class="btn btn-outline-danger btn-sm" href="index.php?menuop=excluir-evento&idEvento=<?=$dados["idEvento"]?>"><i class="bi bi-trash"></i></a></td> 

                <!-- Botão de editar envia como parametro o id do contato que esta sendo editado -->
            </tr>

            <?php
            }
            ?>
        </tbody>
    </table>
</div>
<ul class="pagination justify-content-center">
    <?php

        #Páginação

        $sqlTotal = "SELECT idEvento FROM tbeventos WHERE tituloEvento LIKE '%$txt_pesquisa%' OR descricaoEvento LIKE '%$txt_pesquisa%' OR DATE_FORMAT(dataInicioEvento,'%d/%m/%Y') LIKE '%$txt_pesquisa%'"; #Limitanto tambem a páginação para a pesquisa.
        $qrTotal = mysqli_query($conexao,$sqlTotal) or die(mysqli_error($conexao)); 
        $numTotal= mysqli_num_rows($qrTotal); #Guarda o número total de linhas da consulta
        $totalPagina = ceil($numTotal/$quantidade);#ceil arredonda o total para cima.

        echo "<li class='page-item'><span class='page-link'> Total de Registros:". $numTotal ."</span><li>";

        echo '<li class="page-item"> <a class="page-link" href="?menuop=eventos&pagina=1">Primeira Pagina</a> </li>';

        if($pagina > 6){
            ?>
            <li class="page-item"> <a class="page-link" href="?menuop=eventos&pagina=<?php $pagina -1?>"> << </a></li>;
            <?php
        }

        for($i=1;$i<=$totalPagina;$i++){
        
        if($i>=($pagina-5) && $i <= ($pagina+5)){
                if($i==$pagina){
                    echo "<li class='page-item active'> <span class='page-link'>$i </span></li>";
                }else{
                    echo "<li class='page-item'><a class='page-link' href=\"?menuop=eventos&pagina=$i\">$i</a></li>";
                }
        }
        }

        if($pagina < ($totalPagina - 5)){
            ?>
           <li class="page-item"> <a class="page-link"href="?menuop=eventos&pagina=<?php $pagina +1?>"> >> </a></li>
            <?php
        }

        echo "<li class='page-item'><a class='page-link' href=\"?menuop=eventos&pagina=$totalPagina\">Ultima pagina</a></li>";


    ?>
</ul>
