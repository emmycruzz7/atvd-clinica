<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Paciente</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background: url('https://png.pngtree.com/background/20230827/original/pngtree-3d-rendering-of-a-hospital-s-indoor-corridor-picture-image_4842146.jpg') no-repeat center center fixed;
            background-size: cover;
            color: #fff; /* Texto branco para contraste */
        }
        .container {
            background-color: rgba(46, 139, 87, 0.9); /* Fundo verde secundário para container com transparência */
            padding: 20px;
            border-radius: 10px;
        }
        .form-group img {
            max-width: 10%; /* Reduzir bastante o tamanho da imagem */
            height: auto;
        }
    </style>
</head>
<body>
<div class="form-group">
    <!-- Exemplo de imagem decorativa -->
    <img src="https://w7.pngwing.com/pngs/571/526/png-transparent-physician-medicine-health-care-logo-physical-therapy-symbol-miscellaneous-text-logo-thumbnail.png"
         alt="Imagem clinica"> 
</div>
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
        <button type="submit" class="btn btn-primary">Cadastrar</button>
    </form>
</div>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
