<?php
    $empresa=$_POST['companyName'];
    $nome=$_POST['name'];
    $email=$_POST['email'];
    $country=$_POST['country'];
    $product=$_POST['product'];
    $moq=$_POST['moq'];
    $etd=$_POST['etd'];
    $price=$_POST['price'];
   

    $mensagem= 'Esta mensagem foi enviada através do formulário<br><br>';
    $mensagem.='<b>Nome da Empresa: </b>'.$empresa.'<br>';
    $mensagem.='<b>Nome: </b> '.$nome.'<br>';
    $mensagem.='<b>E-Mail:</b> '.$email.'<br>';
    $mensagem.='<b>País:</b> '.$country.'<br>';
    $mensagem.='<b>Produto:</b> '.$product.'<br>';
    $mensagem.='<b>MOQ:</b> '.$moq.'<br>';
    $mensagem.='<b>ETD:</b> '.$etd.'<br>';
    $mensagem.='<b>Preço:</b> '.$price.'<br>';
    require("PHPMailer-master/src/PHPMailer.php");
    require("PHPMailer-master/src/SMTP.php");
    require ("PHPMailer-master/src/Exception.php");

$mail = new PHPMailer\PHPMailer\PHPMailer();
    $mail->isSMTP(); // Não modifique
    $mail->SMTPDebug = 2;	
    $mail->Host       = 'smtp.hostinger.com';  // SEU HOST (HOSPEDAGEM)
    $mail->SMTPAuth   = true;                        // Manter em true
    $mail->Username   = 'vicente@vnigro.net';   //SEU USUÁRIO DE EMAIL
    $mail->Password   = 'Vicente000@@##';                   //SUA SENHA DO EMAIL SMTP password
    $mail->SMTPSecure = 'tls';    //TLS OU SSL-VERIFICAR COM A HOSPEDAGEM
    $mail->Port       = 587;     //TCP PORT, VERIFICAR COM A HOSPEDAGEM
    $mail->CharSet = 'UTF-8';
  
    
    //Recipients
    $mail->setFrom('vicente@vnigro.net', 'Quote from Site');  //DEVE SER O MESMO EMAIL DO USERNAME
    $mail->addAddress('vicente@vnigro.net');     // QUAL EMAIL RECEBERÁ A MENSAGEM!
    // $mail->addAddress('ellen@example.com');    // VOCÊ pode incluir quantos receptores quiser
    $mail->addReplyTo($email, $nome);  //AQUI SERA O EMAIL PARA O QUAL SERA RESPONDIDO                  
    // $mail->addCC('cc@example.com'); //ADICIONANDO CC
    // $mail->addBCC('bcc@example.com'); //ADICIONANDO BCC

    // Attachments
    //$mail -> addAttachment($photo); //ADICIONANDO ANEXO
    // $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
    // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name


    // Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Mensagem do Formulário'; //ASSUNTO
    $mail->Body    = $mensagem;  //CORPO DA MENSAGEM
    $mail->AltBody = $mensagem;  //CORPO DA MENSAGEM EM FORMA ALT

    // $mail->send();
    if(!$mail->Send()) {
        //echo "<script>alert('Erro ao enviar o E-Mail');window.location.assign('index.php');</script>";
        echo "erro";
     }else{
        echo "<script>alert('E-Mail enviado com sucesso!');window.location.assign('index.php');</script>";
     }
     die
?>