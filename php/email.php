<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contato</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/main.css">
    <link rel="stylesheet" href="assets/css/email.css">
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
</head>
<body>
<div class="container">
    <h2>Obrigado por entrar em contato</h2>
  
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
        // $header = "From:site@neveseassociados.com.br". "\r\n". 
        //         "Reply-to:".$email. "\r\n"
        //         

        $headers  = "MIME-Version: 1.1\r\n";
        $headers .= "Content-type: text/plain; charset=UTF-8\r\n";
        $headers .= "From: site@neveseassociados.com.br\r\n"."X=Mailer:PHP/".phpversion();; // remetente
        $headers .= "Return-Path: site@neveseassociados.com.br\r\n"; // return-path
        $headers .= "Disposition-Notification-To:".$email. "\r\n";                    

        if(mail($to, $email_subject, $body, $headers)){
            echo("<p>Seu e-mail foi enviado com sucesso!</p>"); 
            echo $nome.$email.$subject.$mensagem;           
        }else {
            echo("<p>Houve algum problema no envio do seu e-mail por favor tente novamente</p>");
        }
    }
    ?> 
    <a href="../index.html" class="waves-effect waves-light btn">Voltar Para a Página Inicial</a>
</div>
</body>
</html>