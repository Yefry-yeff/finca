<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require_once 'C:\xampp\htdocs\fincas_cafe\vendor\autoload.php';

envioCorreo();
function envioCorreo(){
    
/* if (isset($_POST['btnEnviar'])){ */
    if(!empty($_POST['nombre']) && !empty($_POST['email']) && !empty($_POST['asunto']) && !empty($_POST['mensaje'])){
        $nombre = $_POST['nombre'];
        $email = $_POST['email'];
        $asunto = $_POST['asunto'];
        $mensaje = $_POST['mensaje'];

        try{
            $mail = new PHPMailer(true);


            /* $mail->SMTPDebug = SMTP::DEBUG_OFF; */
            $mail->isSMTP();
            $mail->Host = 'smtp.gmail.com';
            $mail->SMTPAuth = true;
            $mail->Username = 'humansys2021@gmail.com';
            $mail->Password = 'hkaoveqajevrioso';
            $mail->SMTPSecure = /* PHPMailer::ENCRYPTION_STARTTLS */ 'ssl';
            $mail->Port = 465;


            /* ENVIAR CORREO */
            $mail->setFrom('humansys2021@gmail.com');
            /* QUIEN RECIBE CORREO */
            $mail->addAddress('yefryyo@gmail.com');
            $mail->addCC('yefry21.yo@gmail.com');

            $mail->isHTML(true);
            $mail->Subject = $asunto;
            $mail->Body = 'Le escribe: '.$nombre.'<br><br> Correo: '.$email.'<br><br>
            <b>Mensaje: </b>'.$mensaje;
            $mail->send();

            echo 'se envió el correo con éxito';
        } catch (Exception $e){
            echo $mail->ErrorInfo;
        }
    }
/* } */

}
?>
    

    

