<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contato</title>

    <!-- Materialize UI Icons -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <link rel="stylesheet" href="../email.css">
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
</head>
<body>

<!-- Header -->
<header>
        <nav id="navbar">
            <div class="nav-wrapper blue darken-4">
                <a href="../index.html" class="brand-logo center">
                    <h1><img src="../assets/images/logo.png" alt="logo" width="100px"></h1>
                </a>
            </div>
        </nav>     
    </header>
<div class="container">
    <main>
    <h2>Obrigado por entrar em contato</h2><br>
  
    <?php 
    if (isset($_POST['email']) && !empty($_POST['email'])) {
    
        $nome = addslashes($_POST['name']);
        $subject = addslashes($_POST['subject']);
        $email = addslashes($_POST['email']);
        $mensagem = addslashes($_POST['message']); 

        // Corpo do Email
        $to = "contato@neveseassociados.com.br";
        $email_subject = "Contato - Neves & Associados";
        $body = "Nome: ".$nome. "\r\n".
                "Email: ".$email. "\r\n".
                "Assunto: ".$subject. "\r\n".
                "Mensagem: ".$mensagem. "\r\n";               

        $headers  = "MIME-Version: 1.1\r\n";
        $headers .= "Content-type: text/plain; charset=UTF-8\r\n";
        $headers .= "From: site@neveseassociados.com.br\r\n"."X=Mailer:PHP/".phpversion();; // remetente
        $headers .= "Return-Path: site@neveseassociados.com.br\r\n"; // return-path
        $headers .= "Disposition-Notification-To:".$email. "\r\n";                    

        if(mail($to, $email_subject, $body, $headers)){
            echo("<p>Seu e-mail foi enviado com sucesso!</p>"); 
                       
        }else {
            echo("<p>Houve algum problema no envio do seu e-mail por favor tente novamente</p>");
        }
    }
    ?> 
    <a href="../index.html" class="waves-effect waves-light btn blue darken-4">Voltar Para a Página Inicial</a>
    </main>    
</div>
<!-- Footer -->
    <footer class="page-footer blue darken-4">
        <div class="container">
            <div class="row">
                <div class="col s12 m8 l6 midias">
                    <h3 class="white-text ">Nossas Redes Sociais</h3><br>
                    <a href="https://www.instagram.com/neveseassociados/" class="grey-text text-lighten-4"
                        target="blank">
                        <img class="face" src="../assets/images/insta-logo.svg" alt="Facebook
                         Logo">
                    </a>
                    <a href="https://www.facebook.com/Neves-Associados-Gest%C3%A3o-e-consultoria-104852704616075"
                        class="grey-text text-lighten-4 " target="blank">
                        <img src="../assets/images/facebook-logo.svg" alt="Instagram Logo">

                    </a>
                    <a href="https://api.whatsapp.com/send?phone=558791242960&text=Ol%C3%A1%20eu%20gostaria%20de%20saber%20mais%20sobre%20os%20servi%C3%A7os%20prestados%20por%20voc%C3%AAs!"
                        class="grey-text text-lighten-4 whats" target="blank">
                        <img src="../assets/images/whatsapp-logo.svg" alt="Whatsapp Logo">
                    </a>
                </div>
                <div class="col s12 m4 l6 find">
                    <h3 class="white-text">Onde nos encontrar</h3><br>

                    <a class="grey-text text-lighten-4"
                        href="https://www.google.com/maps/place/Galeria+Manhattan+Center/@-9.4004717,-40.5009218,19.5z/data=!4m5!3m4!1s0x0:0x2e757044b5e97e7d!8m2!3d-9.4004056!4d-40.50096"
                        target="blank">
                        Galeria Manhattan Center, Sala 14,Rua Manoel Clementino,1002, Centro,
                        Petrolina-PE</a><br><br>

                    <p>Contato: (87) 99124-2960</p><br>

                    <p>Email: contato@neveseassociados.com.br</p>

                </div>
            </div>
        </div>
        <div class="footer-copyright">
            <div class="container">
                © 2021 Neves & Associados
                <a class="grey-text text-lighten-4 right" href="https://github.com/Augusto-Neves"
                    target="blank">Desenvolvido por <strong>Augusto Neves</strong> </a>
            </div>
        </div>
    </footer>
</body>
</html>