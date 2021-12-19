<?php 

$conex_inversionistas = mysqli_connect("localhost","root","","prodesa_maqueta"); 

if(isset($_POST['enviar_inversionistas'])){
    $nombre_inversionistas = trim($_POST['nombre']);
    $apellido_inversionistas = trim($_POST['apellido']);
    $telefono_inversionistas = trim($_POST['telefono']);
    $email_inversionistas = trim($_POST['email']);
    $reside_inversionistas = trim($_POST['resideColombia']);
    $mensaje_inversionistas = trim($_POST['mensajeTwo']);
    $consulta_inversionistas = "INSERT INTO prodesa_inversionistas(nombre, apellido, telefono, email, reside_colombia, mensaje) VALUES ('$nombre_inversionistas','$apellido_inversionistas','$telefono_inversionistas','$email_inversionistas', '$reside_inversionistas', '$mensaje_inversionistas')";
    $resultado_inversionistas = mysqli_query($conex_inversionistas,$consulta_inversionistas);
    if($resultado_inversionistas){
        ?>
            <script>
                setTimeout( () => {window.location.href = "./gracias.php";}, 2000);
            </script>
        <?php
    }
    
}

?>