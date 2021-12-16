 <?php
header("Content-Type: text/html;charset=iso-8859-1");
$destinatario = $mail; 
$asunto = "Hemos recibido su justificante de pago correctamente."; 
$cuerpo = ' 
            <html> 
               <head> <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1"/>
                  <title>La subida del justificante de pago se ha realizado con &eacute;xito</title> 
               </head> 
               <body> 

               </body> 
            </html> 
         '; 

//para el envío en formato HTML 
$headers = "MIME-Version: 1.0\r\n"; 
$headers .= "Content-type: text/html; charset=iso-8859-1\r\n"; 

//dirección del remitente 
$headers .= "From: CIVICE <no-reply@ccsalud.com>\r\n"; 

//dirección de respuesta, si queremos que sea distinta que la del remitente 
//$headers .= "Reply-To: @\r\n"; 

//ruta del mensaje desde origen a destino 
//$headers .= "Return-path: @\r\n"; 

//direcciones que recibián copia 
//$headers .= "Cc: @\r\n"; 

//direcciones que recibirán copia oculta 
//$headers .= "Bcc: @\r\n"; 

mail($destinatario,$asunto,$cuerpo,$headers) 

?>