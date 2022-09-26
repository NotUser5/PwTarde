<?php include "./cabecalho.php"; ?>
    
<?php
    if( isset($_GET["pesquisa"]) && !empty($_GET["pesquisa"]) ){
        $dados = file_get_contents("https://reserva.fatectq.edu.br/api/disciplinas/busca/".urlencode($_GET["pesquisa"]));
        $dados = json_decode($dados, true);
    }else{
        $dados = file_get_contents("https://reserva.fatectq.edu.br/api/disciplinas");
        $dados = json_decode($dados, true);
    }
//    echo "<pre>";
//    print_r($dados);
//    echo "</pre>";
?>

    <div class="row">
        <div class="col-10 offset-1">
            <div class="card mt-4 mb-4 text-bg-dark">
                <div class="card-header">Pesquisar Disciplinas</div>
                <div class="card-body">
                    <form action="./diciplinas.php" method="get">
                        <div class="row">
                            <div class="col-2">
                                <a href="" class="btn btn-outline-success">Nova Disciplina</a>
                            </div>
                            <div class="col-4">
                                <input type="text" name="pesquisa" class="form-control" />
                            </div>
                            <div class="col-2">
                                <button type="submit" class="btn btn-outline-primary">Pesquisar</button>
                            </div>
                        </div><!-- Fechamento da row -->
                    </form>
                </div><!-- Fechamento do card-body -->
            </div>

            <table class="table table-dark table-hover table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nome</th>
                        <th>Apelido</th>
                        <th>Sigla</th>
                        <th></th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        for($i = 0; $i < count($dados); $i++)
                        {
                    ?>
                    <tr>
                        <td> <?php echo $dados[$i]["disciplinaId"]; ?></td>
                        <td> <?php echo $dados[$i]["nome"]; ?></td>
                        <td> <?php echo $dados[$i]["apelido"]; ?></td>
                        <td> <?php echo $dados[$i]["sigla"]; ?></td>
                        <td> <a href="./editar_diciplina.php?id=<?php echo $dados[$i]["disciplinaId"]; ?>" class="btn btn-outline-warning">Editar</a></td>
                        <td> <a href="" class="btn btn-outline-danger">Excluir</a></td>
                    </tr>
                    <?php
                        }
                    ?>
                </tbody>
            </table>

        </div>
    </div>


<?php include "./rodape.php"; ?>