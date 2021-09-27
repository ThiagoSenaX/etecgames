<br />
<h1 class="text-center mb-0 fw-bold bg-info p-3 border border-dark rounded-top">Cadastrar Usuário</h1>
<form method="Post">

    <div class="container border border-dark rounded-bottom p-4 bg-light">
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" name="emailusu" aria-describedby="emailHelp">
            <div id="emailHelp" class="form-text">Nunca compartilhe seu email e senha com outros funcionários.</div>
        </div>
        <div class="mb-3">
            <label for="senha" class="form-label">Senha</label>
            <input type="password" class="form-control" id="senha" name="senhausu">
        </div>
        <div class="d-grid gap-2 mt-4">
            <button type="submit" class="btn btn-secondary text-center">Cadastrar</button>
        </div>
    </div>
</form>