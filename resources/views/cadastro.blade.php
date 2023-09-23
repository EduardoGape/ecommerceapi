<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário de Cadastro</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            display: flex;
            flex-direction: column;
            align-items: center;
            background-color: #f2f2f2;
        }
        
        .navbar {
            position: fixed;
            top: 0;
            width: 100%;
            z-index: 1000; 
        }

        .registration-form {
            width: 300px;
            padding: 30px;
            margin: 30px; /* Adjust according to your navbar height */
            border: 1px solid #ccc;
            background-color: #fff;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        }

        .registration-form input {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            outline: none;
        }

        .registration-form button {
            width: 100%;
            padding: 10px;
            background-color: #007bff;
            color: #fff;
            border: none;
            cursor: pointer;
        }

        .registration-form button:hover {
            background-color: #0056b3;
        }
    </style>
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
                    <a class="btn btn-primary" href="127.0.0.1:8000/menu">volta</a>
                </li>
                
            </ul>
        </div>
    </nav>

    <div class="registration-form">
        <h2>Cadastro</h2>
        <form action="#" method="post">
            <input type="text" name="username" placeholder="Nome de Usuário" required>
            <input type="email" name="email" placeholder="Endereço de Email" required>
            <input type="password" name="password" placeholder="Senha" required>
            <input type="password" name="confirm_password" placeholder="Confirme a Senha" required>
            <input type="checkbox" id="terms" required> <label for="terms">Aceito os Termos e Condições</label><br><br>
            <button type="submit">Cadastrar</button>
        </form>
        <p>Já é membro? <a href="#">Login</a></p>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>