<br />
<div class="formulariogrande">
<h1 class="text-center fw-bold">Buscar Fornecedor</h1>
    <form method="Post">
        <div>
            <label for="codforn" class="form-label">Digite o código do Fornecedor:</label>
            <input type="number" name="codForn" id="codforn" class="form-control" placeholder="Exemplo: 123">
        </div>
        <div class="d-grid gap-2 mt-4 mb-4">
            <button type="submit" class="btn btn-success">Buscar</button>
        </div>
    </form>
    <?php 
    $codforn = isset($fornecedor->codForn) ? $fornecedor->codForn : "";
    $nomeforn = isset($fornecedor->nomeForn) ? $fornecedor->nomeForn : "";
    $emailforn = isset($fornecedor->emailForn) ? $fornecedor->emailForn : "";
    $foneforn = isset($fornecedor->foneForn) ? $fornecedor->foneForn : "";

    if($codforn) :
    ?>

    <hr>
    
    <table class="table rounded-3 p-5 mt-4 bg-white">
        <thead class="bg-secondary text-white">
            <th>Código</th>
            <th>Nome</th>
            <th>Email</th>
            <th>Telefone</th>
            <th>Alterar</th>
            <th>Deletar</th>
        </thead>
        <tbody>
            <tr>
                <td><?php echo ($codforn) ?></td>
                <td><?php echo ($nomeforn) ?></td>
                <td><?php echo ($emailforn) ?></td>
                <td><?php echo ($foneforn) ?></td>
                <td>
                    <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#alterarFornModal" codigo="<?php echo ($fornecedor->codForn); ?>" nome='<?php echo ($fornecedor->nomeForn); ?>' email='<?php echo ($fornecedor->emailForn); ?>' telefone='<?php echo ($fornecedor->foneForn); ?>'>
                        Alterar
                    </button>                
                </td>
                <td>
                    <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#deletarFornModal" codigo="<?php echo ($fornecedor->codForn); ?>" nome='<?php echo ($fornecedor->nomeForn) ?>'>
                        Deletar
                    </button>
                </td>
            </tr>
        </tbody>
    </table>
</div>
<?php endif ?>


<div class="modal fade" id="alterarFornModal" tabindex="-1" aria-labelledby="alterarFornModal" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h6 class="modal-title" id="alterarFornModal">Alterar informações do fornecedor:</h6>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form method="POST">
                <div class="modal-body">
                    <input type="hidden" name="codFornAlterar" class="codigo form-control" id="codfornecedor" readonly>
                    <div class="mb-3">
                        <label for="nome" class="col-form-label">Nome:</label>
                        <input type="text" name="nomeForn" class="nome form-control" id="nome">
                    </div>
                    <div class="mb-3">
                        <label for="email" class="col-form-label">Email:</label>
                        <input type="text" name="emailForn" class="email form-control" id="email">
                    </div>
                    <div class="mb-3">
                        <label for="telefone" class="col-form-label">Telefone:</label>
                        <input type="text" name="foneForn" class="telefone form-control" id="telefone">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                    <button type="submit" class="btn btn-primary">Alterar</button>
                </div>
            </form>
        </div>
    </div>
</div>

<div class="modal fade" id="deletarFornModal" tabindex="-1" aria-labelledby="deletarFornModal" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="deletarFornModal">Tem certeza que quer deletar o fornecedor?</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form method="POST">
                <div class="modal-footer">
                    <input type="hidden" name='codFornDel' value="<?php echo ($codforn); ?>">
                    <button type="submit" class="btn btn-danger">Sim</button>
                    <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Não</button>
                </div>
            </form>
        </div>
    </div>
</div>

<script>
    var alterarFornModal = document.getElementById('alterarFornModal')
    alterarFornModal.addEventListener('show.bs.modal', function(event) {
        var button = event.relatedTarget
        var codigo = button.getAttribute('codigo')
        var nome = button.getAttribute('nome')
        var email = button.getAttribute('email')
        var telefone = button.getAttribute('telefone')

        var Codigo = alterarFornModal.querySelector('.modal-body .codigo')
        Codigo.value = codigo

        var Nome = alterarFornModal.querySelector('.modal-body .nome')
        Nome.value = nome

        var Email = alterarFornModal.querySelector('.modal-body .email')
        Email.value = email

        var Telefone = alterarFornModal.querySelector('.modal-body .telefone')
        Telefone.value = telefone
    })

    var deletarFornModal = document.getElementById('deletarFornModal')
    deletarFornModal.addEventListener('show.bs.modal', function(event) {
        var button = event.relatedTarget;
        var codigo = button.getAttribute('codigo');
        var nome = button.getAttribute('nome');

        var modalTitle = deletarFornModal.querySelector('.modal-title');
        modalTitle.textContent = 'Tem certeza que deseja excluir o fornecedor ' + nome + '?';

        var Codigo = deletarFornModal.querySelector('.modal-footer .codigo');
        Codigo.value = codigo;
    })
</script>