<?php

  $nombre = $_POST['nombre'];
  $mail = $_POST['mail'];
  $telefono = $_POST['telefono'];
  $mensaje = $_POST['mensaje'];

  $cuerpo = '<p style="margin-bottom: 15px;"> <span style="font-weight: bold;">Remitente:</span> ' . $nombre . '</p>';
  $cuerpo .= '<p style="margin-bottom: 15px;"> <span style="font-weight: bold;">Email:</span> ' . $mail . '</p>';
  $cuerpo .= '<p style="margin-bottom: 15px;"> <span style="font-weight: bold;">Telefono:</span> ' . $telefono . '</p>';
  $cuerpo .= '<p style="margin-bottom: 15px; line-height: 16px;"> <span style="font-weight: bold;">Mensaje:</span> ' . $mensaje . '</p>';

  $destino = 'desarrolloweb360@gmail.com';
  $asunto = 'Contacto web';

  $encabezados = 'MIME-Version: 1.0' . "\r\n";
  $encabezados .= 'Content-type:text/html;charset=UTF-8' . "\r\n";
  $encabezados .= 'From: ' . $nombre . '<' . $mail . '>' . "\r\n"; 

  mail( $destino, $asunto, $cuerpo, $encabezados );
  header("Location: index.html")

?>