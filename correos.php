<?php

    $destinatario= 'tomas.sangoy@gmail.com';
    //Esto es al correo al que se enviara el mensaje
    $nombre= $_POST['Name'];
    $asunto= $_POST['Subject'];
    $mensaje= $_POST['Message'];
    $email= $_POST['Email'];

    $header = "Enviado desde la pagina de Portafolio de Tomás Sangoy";
    $mensajeCompleto = "Mail para comunicarse: " . $email . "\n\n" .$mensaje . "\n\nAtentamente: " .$nombre;

    mail($destinatario, $asunto, $mensajeCompleto, $header, $email);
    echo "<script> alert('Correo enviado exitosamente') </script>";
    echo "<script> setTimeout(\"location.href='index.html'\",1000) </script>";
    ?>