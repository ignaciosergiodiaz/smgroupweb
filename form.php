<?php 
if(isset($_POST['submit'])){
    
    $to = "contacto@vocestoons.cl"; // this is your Email address
    $from = $_POST["correo"]; // this is the sender's Email address
    
    $nombre = $_POST["nombre"];
    $empresa = $_POST["empresa"];
    $mensaje = $_POST["mensaje"];

    
    $subject = "VocesToons";
    $subject2 = "Copy of your form submission";
    $message = $nombre . " "  . " Te a enviado este mensaje : " . "\n\n" . $_POST['mensaje'];
    $message2 = "Here is a copy of your message " . $nombre . "\n\n" . $_POST['mensaje'];

    $headers = "From:" . $from;
    $headers2 = "From:" . $to;

    mail($to,$subject,$message,$headers);
    mail($from,$subject2,$message2,$headers2); // sends a copy of the message to the sender

    echo "Gracias por enviarnos tu mensaje" . $nombre . ", Nos contactaremos lo mas pronto contigo.";
    // You can also use header('Location: thank_you.php'); to redirect to another page.
    }
?>