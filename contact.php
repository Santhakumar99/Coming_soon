<?php
$to = "sandysanvi47@gmail.com";
$subject = "";
$txt = "Hello world!";
$headers = "From:sandysanvi47@gmail.com" . "\r\n" .
// "CC: somebodyelse@example.com";

mail($to,$subject,$txt,$headers);
?>