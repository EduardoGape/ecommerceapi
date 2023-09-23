<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu</title>
    
    <!-- Incluindo o CSS do Bootstrap -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="#">Meu Site</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarContent" aria-controls="navbarContent" aria-expanded="false" aria-label="Alterna navegação">
        <span class="navbar-toggler-icon"></span>
    </button>
    
    <div class="collapse navbar-collapse" id="navbarContent">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="btn btn-primary" href="127.0.0.1:8000/cadastro">Cadastro</a>
            </li>
            <li class="nav-item ml-2">
                <a class="btn btn-secondary" href="127.0.0.1:8000/login">Entrar</a>
            </li>
        </ul>
    </div>
</nav>

<div class="container-fluid">
    <div class="row">
        <!-- Barra Lateral Esquerda -->
        <nav class="col-md-3 d-md-block bg-light sidebar">
            <div class="position-sticky">
                <ul class="nav flex-column">
                    <li class="nav-item">
                        <a class="nav-link active" href="#">
                            Tópico 1
                        </a>
                    </li>
                </ul>
            </div>
        </nav>

        <!-- Conteúdo Principal com Cards -->
        <main class="col-md-9">
            <div class="row">
                <!-- Card 1 -->
                <div class="col-md-4">
                    <div class="card" style="width: 18rem; padding: 20px">
                        <img class="card-img-top" src="..." alt="Imagem do Produto 1">
                        <div class="card-body">
                            <h5 class="card-title">Produto 1</h5>
                            <p class="card-text">Descrição breve sobre o produto 1.</p>
                            <a href="produto.html" class="btn btn-primary">Ver mais</a>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
</div>

</div>

<!-- Incluindo o JavaScript do Bootstrap e o jQuery -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>