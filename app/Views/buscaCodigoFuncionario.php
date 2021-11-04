<br />
<h6 class="text-center m-3" style="color: lightsteelblue;">Busca por Código do Funcionário</h6>
<div class="formulario">
    <h1 class="text-center fw-bold mb-3">Cadastrar Funcionário</h1>
    <form method="Post">
        <div>
            <label for="codfun" class="form-label">Digite o código do Funcionário:</label>
            <input type="number" name="codFun" id="codfun" class="form-control" placeholder="Exemplo: 123">
        </div>
        <div class="d-grid gap-2 mt-4 mb-4">
            <button type="submit" class="btn btn-success">Buscar</button>
        </div>
    </form>
    <?php
    $request = service('request');

    $codfun = isset($funcionario->codFun) ? $funcionario->codFun : 0;
    $nomefun = isset($funcionario->nomeFun) ? $funcionario->nomeFun : "";
    $fonefun = isset($funcionario->foneFun) ? $funcionario->foneFun : "";


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
                <input type="text" required class="form-control border-0 text-white" value="<?= $nomefun ?>" style="background-color: #00000050;" id="nomeFun" name="nomeFun">
            </div>
            <div class="col-12 mb-3">
                <label for="foneFun" class="form-label">Telefone:</label>
                <input type="text" required class="form-control border-0 text-white" value="<?= $fonefun ?>" style="background-color: #00000050;" id="foneFun" name="foneFun">
            </div>
                    <div class="d-grid gap-2 mb-3">
                        <button type="submit" class="btn btn-warning text-center ">Alterar</button>
                    </div>
        </form>
        <form method="Post">
            <div class="d-grid gap-2">            
                    <input type="hidden" name="codFunDeletar" value="<?= $codfun ?>">
                    <button type="submit" class="btn btn-danger text-center ">Deletar</button>
            </div>
        </form>
</div>

</div>
<?php } ?>