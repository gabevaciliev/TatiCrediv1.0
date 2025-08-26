<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Contato - TatiCredi</title>
    <link rel="stylesheet" href="css/contato.css">
</head>
<body>
    <header>
    <div class="container">
        <img src="img/logo.png" alt="Logo TatiCredi" class="logo">
         <nav>
            <a href="index.php">Início</a>
            <a href="sobre.php">Sobre</a>
            <a href="contato.php">Contato</a>
        </nav>
    </div>
</header>

<section>
    <h1><p>Fale Conosco</p></h1>
    <p>Preencha o formulário .</p>
</section>
<section class="formulario-contato">
    <div class="container">
        <h2>Envie sua mensagem</h2>
        <form action="enviar_email.php" method="POST" onsubmit="return validarFormulario()">
    <label for="nome">Nome:</label>
    <input type="text" id="nome" name="nome" placeholder="Seu nome completo" required>

    <label for="email">E-mail:</label>
    <input type="email" id="email" name="email" placeholder="seuemail@exemplo.com" required>

    <label for="telefone">Telefone:</label>
    <input type="tel" id="telefone" name="telefone" placeholder="(xx) xxxxx-xxxx" required>

    <label for="assunto">Assunto:</label>
    <input type="text" id="assunto" name="assunto" placeholder="Ex: Solicitação de crédito" required>

    <label for="mensagem">Mensagem:</label>
    <textarea id="mensagem" name="mensagem" rows="5" placeholder="Escreva sua mensagem..." required></textarea>

    <button type="submit">Enviar</button>
</form>

    </div>
</section>


    <footer> 
    <div class="container">
        <p>&copy; 2025 TatiCredi - Todos os direitos reservados.</p>
        <a href="https://www.instagram.com/taticredicm?igsh=MW13NjJ3ZDcxcThx" target="_blank">
            <img src="https://cdn-icons-png.flaticon.com/512/2111/2111463.png" alt="Instagram" class="social-icon insta-icon">
        </a>
        <a href="https://www.facebook.com/share/16g7N8vVxh/" target="_blank">
            <img src="https://cdn-icons-png.flaticon.com/512/733/733547.png" alt="Facebook" class="social-icon facebook-icon">
        </a>
        <a href="https://maps.app.goo.gl/MNv98FBDVobLJuqw6" target="_blank">
            <img src="https://cdn-icons-png.flaticon.com/512/684/684908.png" alt="Google Maps" class="social-icon maps-icon">
        </a>
    </div>
</footer>
</body>
</html>
