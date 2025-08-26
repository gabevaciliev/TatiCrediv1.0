<?php
// Destinatário fixo
$destino = "taticredi@gmail.com";

// Pegando os campos enviados pelo formulário
$nome = $_POST['nome'];
$email = $_POST['email'];
$telefone = $_POST['telefone'];
$assunto = $_POST['assunto'];
$mensagem = $_POST['mensagem'];

// Montando o corpo do e-mail
$corpo = "Formulário de Contato TatiCredi\n\n";
$corpo .= "Nome: " . $nome . "\n";
$corpo .= "E-mail: " . $email . "\n";
$corpo .= "Telefone: " . $telefone . "\n";
$corpo .= "Assunto: " . $assunto . "\n";
$corpo .= "Mensagem: \n" . $mensagem;

// Cabeçalhos
$headers = "From: $email" . "\r\n" .
           "Reply-To: $email" . "\r\n" .
           "X-Mailer: PHP/" . phpversion();

// Enviando
if(mail($destino, "Novo contato - " . $assunto, $corpo, $headers)){
    echo "<script>alert('Mensagem enviada com sucesso!'); window.location.href='index.php';</script>";
} else {
    echo "<script>alert('Erro ao enviar. Tente novamente mais tarde.'); window.history.back();</script>";
}
?>
