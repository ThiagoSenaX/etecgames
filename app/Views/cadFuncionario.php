<br />
<h6 class="text-center m-3" style="color: lightsteelblue;">Para cadastrar um funcionário, primeiro deve fazer o cadastro do usuário.</h6>
<div class="formulario">
<h1 class="text-center fw-bold mb-3">Cadastrar Funcionário</h1>
    <form method="Post">
        <div>
            <label for="codusu" class="form-label">Digite o código do Usuário:</label>
            <input type="number" name="codUsu" id="codusu" class="form-control" placeholder="Exemplo: 123">
        </div>
        <div class="d-grid gap-2 mt-4 mb-4">
            <button type="submit" class="btn btn-success">Buscar</button>
        </div>
    </form>
    <?php 
    $request = service('request');

    $codusuario = isset($usuario->codusu) ? $usuario->codusu : "";
    $emailusu = isset($usuario->emailUsu) ? $usuario->emailUsu : "";

    if($codusuario) : 
    ?>

    <hr>
    
    <form method="Post">
        <div class="col-12 mb-3">
            <label for="codUsu" class="form-label">Código do Usuário:</label>
            <input type="text" class="form-control border-0 text-white" value="<?=$usuario->codusu?>" readonly style="background-color: #00000050;" id="codUsu" name="codUsu" aria-describedby="codUsuHelp">
        </div>
        <div class="col-12 mb-3">
            <label for="emailUsu" class="form-label">E-mail do Usuário:</label>
            <input type="email" class="form-control border-0 text-white" value="<?=$usuario->emailUsu?>" readonly style="background-color: #00000050;" id="emailUsu" name="emailUsu" aria-describedby="emailUsuHelp">
        </div>
        <div class="col-12 mb-3">
            <label for="nome" class="form-label">Nome:</label>
            <input type="text" required class="form-control border-0 text-white" style="background-color: #00000050;" id="nome" name="nomefun" aria-describedby="nomeHelp">
        </div>
        <div class="col-12 mb-3">
            <label for="fone" class="form-label">Telefone:</label>
            <input type="text" required class="form-control border-0 text-white" style="background-color: #00000050;" id="fone" name="fonefun">
        </div>
        <div class="d-grid gap-2 mt-5">
            <button type="submit" class="btn btn-light text-center ">Cadastrar</button>
        </div>
    </form>
</div>
<?php endif?>