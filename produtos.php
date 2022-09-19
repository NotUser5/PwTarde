<?php include "./cabecalho.php"; ?>

<h1>Lista de Produtos</h1>

<div class="card mt-4 mb-4 text-bg-dark">
    <div class="card-header">Produtos</div>
    <div class="card-body">
        <div class="row">
            <div class="col-2">
                <button class="btn btn-success">Novo Produto</button>
            </div>
            <div class="col-2">
                <select name="opcao" class="form-control">
                    <option selected="selected" value="0">Todos</option>
                    <option value="1">Por Nome</option>
                    <option value="2">Por Código</option>
                </select>
            </div>
            <div class="col-4">
                <input type="text" class="form-control" name="testoPesquisado" />
            </div>
            <div class="col-2">
                <button class="btn btn-primary">Pesquisar</button>
            </div>
        </div>
    </div>
</div>

<table class="table table-dark table-hover table-striped">
    <thead>
        <tr>
            <th>ID</th>
            <th>Produto</th>
            <th>Quantia</th>
            <!-- <th>Data de aquisição</th> -->
            <th></th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>1</td>
            <td>Pão de forma</td>
            <td>2</td>
            <!-- <td>18/09/2022</td> -->
            <td><a class="btn btn-outline-warning" >Editar</a></td>
            <td><a class="btn btn-outline-danger" >Excluir</a></td>
        </tr>
        <?php
            for($i=0;$i<10;$i++){
                ?>
                    <tr>
                        <td><?php echo $i; ?></td>
                        <td>Produto.<?php echo $i; ?></td>
                        <td><?php echo $i; ?></td>
                        <!-- <td>18/09/2022</td> -->
                        <td><a class="btn btn-outline-warning" >Editar</a></td>
                        <td><a class="btn btn-outline-danger" >Excluir</a></td>
                    </tr>
                <?php
            }
        ?>
    </tbody>
</table>

<?php include "./rodape.php"; ?>