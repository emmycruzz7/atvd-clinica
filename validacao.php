<?php
$servername = "localhost";
$username = "root";
$password = "@emmycruz15";
$dbname = "clinica";

// Conexão com o banco de dados
$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}

// Captura de dados do formulário
$nome = isset($_POST['nome']) ? $_POST['nome'] : '';
$data_nascimento = isset($_POST['data_nascimento']) ? $_POST['data_nascimento'] : '';
$email = isset($_POST['email']) ? $_POST['email'] : '';
$telefone = isset($_POST['telefone']) ? $_POST['telefone'] : '';
$endereco = isset($_POST['endereco']) ? $_POST['endereco'] : '';
$sexo = isset($_POST['sexo']) ? $_POST['sexo'] : '';

// Validação do e-mail
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    die("E-mail inválido.");
}

// Validação do telefone
if (!preg_match("/^[0-9]{10,11}$/", $telefone)) {
    die("Telefone deve conter apenas números e ter 10 ou 11 dígitos.");
}

// Validação da idade
$dataAtual = new DateTime();
$dataNasc = new DateTime($data_nascimento);
$idade = $dataAtual->diff($dataNasc)->y;

if ($idade < 18) {
    die("Paciente deve ser maior de idade.");
}

// Inserção dos dados no banco de dados
$sql = "INSERT INTO pacientes (nome, data_nascimento, email, telefone, endereco, sexo) VALUES ('$nome', '$data_nascimento', '$email', '$telefone', '$endereco', '$sexo')";

if ($conn->query($sql) === TRUE) {
    echo "Cadastro realizado com sucesso!";
} else {
    echo "Erro: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
