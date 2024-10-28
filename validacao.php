<?php

$servename = "localhost";
$username = "root";
$password = "";
$dbname = "clinica";

$conn = new mysqli($servename, $username, $password, $dbname);

if ($conn->connect_error){
    die("conexão falhou: ". $conn->connect_error);
}

//conexao banco de dados


$nome = $_POST['nome'];
$data_nascimento = $_POST['data_nascimento'];
$email = $_POST['email'];
$telefone = $_POST['telefone'];
$endereco = $_POST['endereco'];
$sexo = $_POST['sexo'];
//captura de dados do formulário
if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
    die("E-mail inválido.");
}

if (!preg_match("/^[0-9]{10,11}$/", $telefone)) {
    die("Telefone deve cconter apenas números e ter 10 ou 11 dígitos");

}
//validação do email e telefone

$dataAtual = new DateTime();
$dataNasc = new DateTime();
$idade = $dataAtual->diff($dataNasc)->y;

if ($idade < 18){
    die("Paciente deve ser maior de idade.");
}
//validção para verificar  se é maior de  idade

$sql = "INSERT INTO pacientes (nome, data_nascimento, email, telefone, endereco, sexo) VALUES ('$nome', '$data_nascimento', '$email', '$endereco', '$sexo')";

if ($conn->query($sql) === TRUE){

    echo "Cadastro realizado com sucesso!";
}else{
    echo "Erro: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>