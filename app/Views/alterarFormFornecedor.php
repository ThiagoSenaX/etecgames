<form method="POST">
    <div class="mb-3 col-2">
        <label class="form-label" for="codigousuarioinput">Código: </label>
        <input class="form-control text-center" type="text" readonly name="codUsuAlterar" id="codigousuarioinput" value="<?php echo($usuario->codusu)?>">
    </div>
    <div class="mb-3 col-8">
        <label class="form-label" class="mb-3" for="emailusuarioinput">Email: </label>
        <input class="form-control" type="email" name="emailUsu" id="emailusuarioinput" value="<?php echo($usuario->emailUsu)?>">
    </div>
    <div>
        <button type="submit" class="btn btn-warning">Alterar</button>
    </div>
</form>