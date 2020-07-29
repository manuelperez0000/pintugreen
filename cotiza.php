<?php
    $text .= "Nombre: ".$_POST["nombre"]." | ";
    $text .= "Telefono: ".$_POST["telefono"]." | ";
    $text .= "Direccion: ".$_POST["direccion"]." | ";
    $text .= "Metros Cuadrados: ".$_POST["metros"]." | ";
    $text .= "Espesificaciones: ".$_POST["esp"];
    header("location:https://api.whatsapp.com/send?phone=573136347441&text=".$text);
?>