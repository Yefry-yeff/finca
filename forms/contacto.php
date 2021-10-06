<?php



if (isset($_POST['btnEnviar'])){

    if(!empty($_POST['nombre']) && !empty($_POST['email']) && !empty($_POST['asunto']) && !empty($_POST['mensaje'])){
        $nombre  = $_POST['nombre'];
        $email  = $_POST['email'];
        $asunto  = $_POST['asunto'];
        $mensaje = $_POST['mensaje'];


        $header = "From: yefryyo@gmail.com"."\r\n";
        $header.= "Reply-To: yefryyo@gmail.com"."\r\n";
        $header.= "X-Mailer: PHP/".phpversion();
        $mail = mail("yefry21yo@gmail.com", $asunto, $mensaje);


        if(){
            echo "<h4>Correo enviado</h4>";
        }
    }
}


?>