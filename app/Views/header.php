<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="<?php echo base_url('/css/style.css') ?>" rel="stylesheet" type="text/css"/>
    <link rel="shortcut icon" href="<?php echo base_url("img/gamepad.png")?>">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Area Administrativa</title>
</head>

<body>

    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top text-white">
            <div class="container-fluid">
                <a class="navbar-brand ms-5" href="#">
                    <h2 class="w-75"><b>Etec</b><span>Games</span></h2>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                    <ul class="navbar-nav ms-auto me-5">
                        <li class="nav-item">
                            <a class="cu nav-link active" aria-current="page" href="<?php echo base_url('#') ?>">Home</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Funcionário
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                <li><a class="dropdown-item" href="<?php echo base_url('./FuncionarioController/listaCodFuncionario') ?>">Cadastro</a></li>
                                <li><a class="dropdown-item" href="<?php echo base_url('./FuncionarioController/buscaPrincipalFuncionario') ?>">Pesquisar</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Jogos
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                <li><a class="dropdown-item" href="#">Cadastro</a></li>
                                <li><a class="dropdown-item" href="#">Pesquisar</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Usuários
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                <li><a class="dropdown-item" href="<?php echo base_url('./UsuarioController/inserirUsuario') ?>">Cadastro</a></li>
                                <li><a class="dropdown-item" href="<?php echo base_url('./UsuarioController/todosUsuarios') ?>">Pesquisar Todos</a></li>
                                <li><a class="dropdown-item" href="<?php echo base_url('./UsuarioController/listaCodUsuario') ?>">Pesquisar</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Fornecedor
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                <li><a class="dropdown-item" href="<?php echo base_url('./FornecedorController/inserirFornecedor') ?>">Cadastro</a></li>
                                <li><a class="dropdown-item" href="<?php echo base_url('./FornecedorController/todosFornecedores') ?>">Pesquisar Todos</a></li>
                                <li><a class="dropdown-item" href="<?php echo base_url('./FornecedorController/listaCodFornecedor') ?>">Pesquisar</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <br>
    <br>
    <div class="container mt-5">