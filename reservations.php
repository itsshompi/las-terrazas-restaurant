<?php
if(isset($_POST['reservation_email'])){
	$mailTo = "francisconicolas.villegas@gmail.com";
	$subject = "Mensaje via Web Las Terrazas";
	$body = "Nuevo mensaje
<br><br>
FROM: ".$_POST['reservation_email']."<br>
NOMBRE: ".$_POST['reservation_name']."<br>
TELEFONO: ".$_POST['reservation_phone']."<br>
FECHA: ".$_POST['date']."<br>
HORA: ".$_POST['time']."<br>
COMENTARIO: ".$_POST['reservation_message']."<br>";
		$headers = "To: Las Terrazas <".$mailTo.">\r\n";
		$headers .= "From: ".$_POST['author']." <".$_POST['reservation_email'].">\r\n";
		$headers .='X-Mailer: PHP/' . phpversion();
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-type: text/html; charset=iso-8859-1\r\n";
		//envio destinatario
		$mail_success =  mail($mailTo, utf8_decode($subject), utf8_decode($body), $headers);
}
?>
