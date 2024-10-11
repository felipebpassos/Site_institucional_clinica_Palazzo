<?php
// Importa a classe do PHPMailer
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Carrega o autoload do Composer para carregar as classes do PHPMailer
require 'vendor/autoload.php';

function sanitize_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

// Verifica se o formulário foi submetido
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['nome']) && isset($_POST['celular'])) {
    // Sanitiza as entradas
    $nome = sanitize_input($_POST["nome"]);
    $celular = sanitize_input($_POST["celular"]);
    
    // Sanitiza ou define valores padrão para campos opcionais
    $tratamento = isset($_POST["tratamento"]) && !empty($_POST["tratamento"]) ? sanitize_input($_POST["tratamento"]) : "Não informado";
    $mensagem = isset($_POST["mensagem"]) && !empty($_POST["mensagem"]) ? sanitize_input($_POST["mensagem"]) : "Nenhuma mensagem fornecida";

    // Cria uma nova instância do PHPMailer
    $mail = new PHPMailer(true);

    try {
        // Configurações do servidor SMTP
        $mail->isSMTP();
        $mail->Host = 'smtp.hostinger.com.br'; // Hostinger SMTP server
        $mail->SMTPAuth = true;
        $mail->Username = 'contato@clinicapalazzo.com.br'; // Seu e-mail
        $mail->Password = 'Winicius111084@'; // Sua senha de e-mail
        $mail->SMTPSecure = 'ssl'; // Use TLS encryption, `ssl` also accepted
        $mail->Port = 465; // TCP port to connect to

        // Define o remetente e o destinatário
        $mail->setFrom('contato@clinicapalazzo.com.br', 'Site Clínica Palazzo');
        $mail->addAddress('contato@clinicapalazzo.com.br');

        // Define o charset como UTF-8 para evitar problemas com acentuação
        $mail->CharSet = 'UTF-8';

        // Define o assunto e o corpo do e-mail
        $mail->Subject = 'Novo contato do site';
        $mail->Body = "Nome: $nome\nWhatsapp: $celular\nTratamento: $tratamento\nMensagem:\n$mensagem\n";

        // Envia o e-mail
        $mail->send();
        header("Location: https://clinicapalazzo.com.br?success=Mensagem+enviada+com+sucesso!");
        exit();
    } catch (Exception $e) {
        header("Location: https://clinicapalazzo.com.br?error=Erro+no+envio+do+email");
        exit();
    }
} else {
    header("Location: https://clinicapalazzo.com.br?error=Erro+no+envio+da+mensagem");
    exit();
}
