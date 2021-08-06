<?php



if (isset($_POST['enviar'])) {

    $NombreUsuario = $_POST['nombreU'];
    $Apellido = $_POST['apellido'];
    $Mail = $_POST['mail'];
    $Telefono = $_POST['telefono'];
    $Asunto = "mensaje ejercicio portfolio";

    $headers  = 'MIME-Version: 1.0' . "\r\n";
    $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

    $headers .= 'From: '.$Mail."\r\n".
    'Reply-To: '.$Mail."\r\n" .
    'X-Mailer: PHP/' . phpversion();

    $Mensaje = '<html><body>';
    $Mensaje .= '<h3 style="color:#f40;">'.$NombreUsuario.'</h3>';
    $Mensaje .= '<h3 style="color:#f40;">'.$Apellido.'</h3>';
    $Mensaje .= '<h3 style="color:#f40;">'.$Mail.'</h3>';
    $Mensaje .= '<h3 style="color:#f40;">'.$_POST['msg'].'</h3>';
    $Mensaje .=  '</body></html>';
    
    

    // $Mensaje = $NombreUsuario."<br>" .$Apellido. "<br> ". $Mail ."<br>". $_POST['msg'] ;




        $to = "diegodelias@hotmail.com";


        mail($to, $Asunto, $Mensaje,$headers);

        header("location:index.html");
           
   
} else {

    header("location:index.html");
}

?>
