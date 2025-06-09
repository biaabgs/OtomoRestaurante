<?php
// Verifica se o formulário foi enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Coletando os dados do formulário com segurança
    $nome = htmlspecialchars($_POST['nome']);
    $cpf = htmlspecialchars($_POST['cpf']);
    $telefone = htmlspecialchars($_POST['telefone']);
    $email = htmlspecialchars($_POST['email']);
    $data_reserva = $_POST['data_reserva'];
    $hora_reserva = $_POST['hora_reserva'];
    $quantidade_pessoas = (int) $_POST['quantidade_pessoas'];
    $observacoes = htmlspecialchars($_POST['observacoes']);
    $confirmacao = isset($_POST['confirmacao']) ? "Sim" : "Não";

    // Aqui você pode salvar em um banco de dados ou enviar por e-mail
    echo "<h1>Reserva Recebida</h1>";
    echo "<p>Obrigado, <strong>$nome</strong>! Sua reserva foi registrada com sucesso.</p>";
    echo "<p><strong>Data:</strong> $data_reserva às $hora_reserva</p>";
    echo "<p><strong>Quantidade de Pessoas:</strong> $quantidade_pessoas</p>";
    echo "<p><strong>Telefone:</strong> $telefone | <strong>Email:</strong> $email</p>";
    echo "<p><strong>Observações:</strong> $observacoes</p>";
} else {
    echo "<p>Formulário não enviado corretamente.</p>";
}

$pratos = []
?>