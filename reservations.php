<?php
if(isset($_POST['reservation_email'])){
	$mailTo = "lasterrazass@hotmail.com";
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
		$headers .= "Content-Type: text/html";
		//envio destinatario
		$mail_success =  mail($mailTo, utf8_decode($subject), utf8_decode($body), $headers);
}
?>
