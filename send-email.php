<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Verifica se os campos do formulário estão preenchidos
    $nome = $_POST['nome'];
    $assunto = $_POST['assunto'];
    $mensagem = $_POST['mensagem'];

    // E-mail de destino (altere para seu e-mail)
    $emailDestino = "seu-email@dominio.com";  // Substitua com o seu e-mail

    // Assunto do e-mail
    $subject = "Mensagem de Contato - $assunto";

    // Corpo da mensagem
    $message = "Nome: $nome\n";
    $message .= "Assunto: $assunto\n\n";
    $message .= "Mensagem:\n$mensagem\n";

    // Cabeçalhos do e-mail
    $headers = "From: no-reply@seudominio.com" . "\r\n" .
               "Reply-To: devlucascantaruti@gmail.com" . "\r\n" .
               "Content-Type: text/plain; charset=UTF-8";

    // Enviar e-mail
    if (mail($emailDestino, $subject, $message, $headers)) {
        echo "<script>alert('Mensagem enviada com sucesso!'); window.location.href='index.html';</script>";
    } else {
        echo "<script>alert('Erro ao enviar a mensagem. Tente novamente mais tarde.'); window.location.href='index.html';</script>";
    }
}
?>