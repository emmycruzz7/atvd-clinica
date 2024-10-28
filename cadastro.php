<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Paciente</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #006400; /* Fundo verde escuro */
            color: #fff; /* Texto branco para contraste */
        }
        .container {
            background-color: #2e8b57; /* Fundo verde secundário para container */
            padding: 20px;
            border-radius: 10px;
        }
        .form-group img {
            max-width: 100%;
            height: auto;
        }
    </style>
</head>
<body>
<div class="container mt-5">
    <h2>Cadastro de Paciente</h2>
    <form action="processa_cadastro.php" method="post">
        <div class="form-group">
            <label for="nome">Nome Completo</label>
            <input type="text" class="form-control" id="nome" name="nome" required>
        </div>
        <div class="form-group">
            <label for="dataNascimento">Data de Nascimento</label>
            <input type="date" class="form-control" id="dataNascimento" name="data_nascimento" required>
        </div>
        <div class="form-group">
            <label for="email">E-mail</label>
            <input type="email" class="form-control" id="email" name="email" required>
        </div>
        <div class="form-group">
            <label for="telefone">Telefone</label>
            <input type="text" class="form-control" id="telefone" name="telefone" required>
        </div>
        <div class="form-group">
            <label for="endereco">Endereço</label>
            <input type="text" class="form-control" id="endereco" name="endereco" required>
        </div>
        <div class="form-group">
            <label for="sexo">Sexo</label>
            <select class="form-control" id="sexo" name="sexo" required>
                <option value="Masculino">Masculino</option>
                <option value="Feminino">Feminino</option>
                <option value="Outro">Outro</option>
            </select>
        </div>
        <!-- Exemplo de imagem decorativa -->
        <div class="form-group">
            <img src="https://w7.pngwing.com/pngs/571/526/png-transparent-physician-medicine-health-care-logo-physical-therapy-symbol-miscellaneous-text-logo-thumbnail.png" alt="Imagem clinica">
        </div>
        <button type="submit" class="btn btn-primary">Cadastrar</button>
    </form>
</div>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>