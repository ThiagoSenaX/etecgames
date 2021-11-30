<br />

<div class="accordion border-dark" id="accordionExample">
    <div class="accordion-item border-dark">
        <h2 class="accordion-header" id="headingOne">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                <h4>Busca por Código</h4>
            </button>
        </h2>
        <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
            <div class="accordion-body bg-dark">
                <div class="formularioroxo">

                    <h3 class="text-center fw-bold mb-3">Buscar Funcionário por Código</h3>
                    <form method="Post">
                        <div>
                            <label for="codfun" class="form-label">Digite o código do Funcionário:</label>
                            <input type="number" name="codFun" id="codfun" class="form-control" placeholder="Exemplo: 123">
                        </div>
                        <div class="d-grid gap-2 mt-4 mb-4">
                            <button type="submit" class="btn btn-success">Buscar</button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
    <div class="accordion-item border-dark">
        <h2 class="accordion-header" id="headingTwo">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                <h4>Busca por Nome</h4>
            </button>
        </h2>
        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
            <div class="accordion-body bg-dark">
                <div class="formularioroxo">

                    <h3 class="text-center fw-bold mb-3">Buscar Funcionário por Nome:</h3>
                    <form method="Post">
                        <div>
                            <label for="nomefun" class="form-label">Digite o nome do Funcionário:</label>
                            <input type="text" name="nomeFuncionario" id="nomefun" class="form-control" placeholder="Exemplo: João Almeida">
                        </div>
                        <div class="d-grid gap-2 mt-4 mb-4">
                            <button type="submit" class="btn btn-success">Buscar</button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>

<div class="formulariogrande mt-3 mb-3">
    <h1 class="text-center fw-bold mb-1">Resultado da Busca:</h1>
    <?php
    $request = service('request');

    $codfun = isset($funcionario->codFun) ? $funcionario->codFun : 0;
    $nomeFun = isset($funcionario->nomeFun) ? $funcionario->nomeFun : "";
    $foneFun = isset($funcionario->foneFun) ? $funcionario->foneFun : "";


    if ($codfun) {
    ?>

        <hr>

        <form method="Post">
            <div class="col-12 mb-3">
                <label for="codFun" class="form-label">Código do Funcionário:</label>
                <input type="text" class="form-control border-0 text-white" value="<?= $codfun ?>" readonly style="background-color: #00000050;" id="codFun" name="codFunAlterar" aria-describedby="codUsuHelp">
            </div>
            <div class="col-12 mb-3">
                <label for="nomeFun" class="form-label">Nome:</label>
                <input type="text" required class="form-control border-0 text-white" value="<?= $nomeFun ?>" style="background-color: #00000050;" id="nomeFun" name="nomeFun">
            </div>
            <div class="col-12 mb-3">
                <label for="foneFun" class="form-label">Telefone:</label>
                <input type="text" required class="form-control border-0 text-white" value="<?= $foneFun ?>" style="background-color: #00000050;" id="foneFun" name="foneFun">
            </div>
            <div class="d-grid gap-2 mb-3">
                <button type="submit" class="btn btn-warning text-center ">Alterar</button>
            </div>
        </form>
        <form method="Post" >
            <div class="d-grid gap-2">
                <input type="hidden" name="codFunDeletar" value="<?= $codfun ?>">
                <button type="submit" class="btn btn-danger text-center ">Deletar</button>
            </div>
        </form>
</div>



<?php 
}

$nomeFuncionario = isset($nomeFuncionario) ? $nomeFuncionario:'';

if($nomeFuncionario){ ?>
    <table class="table rounded-3 p-5 mt-4 bg-white">
        <thead class="bg-secondary text-white">
            <th>Código</th>
            <th>Nome</th>
            <th>Telefone</th>
            <th>Alterar</th>
            <th>Deletar</th>
        </thead>
        <tbody>
            <tr>
                <td><?php echo ($codfun) ?></td>
                <td><?php echo ($nomeFun) ?></td>
                <td><?php echo ($foneFun) ?></td>
                <td>
                    <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#alterarUsuModal" >Alterar</button>
                </td>
                <td>
                    <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#deletarUsuModal" >Deletar</button>
                </td>
            </tr>
        </tbody>
    </table>

<?php 
}
?>

</div>