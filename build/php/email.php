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
        $headers .= "From: site@neveseassociados.com.br\r\n"."X=Mailer:PHP/".phpversion(); // remetente
        $headers .= "Return-Path: site@neveseassociados.com.br\r\n"; // return-path                            

        if(mail($to, $email_subject, $body, $headers)){
            echo("<p style='text-align: center; color: var(--blue); font-size: 14px; font-weight: 700'>Seu e-mail foi enviado com sucesso!</p>"); 
                       
        }else {
            echo("<p style='text-align: center; color: red; font-size: 14px; font-weight: 700'>
                Houve algum problema por favor tente novamente!
            <p>");
        }
    }
?>  
