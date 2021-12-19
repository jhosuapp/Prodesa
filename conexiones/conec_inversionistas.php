<?php 

$conex_inversionistas = mysqli_connect("localhost","root","","prodesa_maqueta"); 

if(isset($_POST['enviar_inversionistas'])){
    $nombre_inversionistas = trim($_POST['nombre']);
    $apellido_inversionistas = trim($_POST['apellido']);
    $telefono_inversionistas = trim($_POST['telefono']);
    $email_inversionistas = trim($_POST['email']);
    $consulta_inversionistas = "INSERT INTO prodesa_inversionistas(nombre, apellido, telefono, email) VALUES ('$nombre_inversionistas','$apellido_inversionistas','$telefono_inversionistas','$email_inversionistas')";
    $resultado_inversionistas = mysqli_query($conex_inversionistas,$consulta_inversionistas);

    
}

?>