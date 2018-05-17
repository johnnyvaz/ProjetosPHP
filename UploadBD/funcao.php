<?php
// nome, cliente, emaildestino
$assunto='Envio de Banco de Dados';
function sendMail($nome,$cliente,$emaildest)
{
    require_once('phpmailer/class.phpmailer.php');
    $mail = new PHPMailer(true);

    $mail->IsSMTP();
    try {
      $mail->SMTPAuth   = true;                 
      $mail->Host       = 'smtp.gmail.com';     
      $mail->SMTPSecure = "tls";                #remova se nao usar gmail
      $mail->Port       = 587;                  #remova se nao usar gmail
      $mail->Username   = 'email@andeserp.com.br'; 
      $mail->Password   = 'senhadoemail';
      $mail->AddAddress($emaildest);
      $mail->AddReplyTo($emaildest);
      $mail->SetFrom('bancodedados@andeserp.com.br');
      $mail->Subject = $assunto;
      $mail->MsgHTML("Seu banco de dados j? chegou! <br> " . "Nome : " . $nome . "<br> Cliente : " . $cliente . "<br>"  );
      $mail->Send();     
      $envio = true;
    } catch (phpmailerException $e) {
      echo $e;
      $envio = false;
    } catch (Exception $e) {
      echo $e;
      $envio = false;
    }
    return $envio;
}
