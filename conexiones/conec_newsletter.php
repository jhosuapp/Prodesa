<?php

$conex = mysqli_connect("localhost","root","","prodesa_maqueta"); 

if (isset($_POST['register'])) {
    if (strlen($_POST['correo']) >= 5) {
        $email = trim($_POST['correo']);
        $consulta = "INSERT INTO prodesa_data(email) VALUES ('$email')";
        $resultado = mysqli_query($conex,$consulta);
        if ($resultado) {
	    	?> 
	    	<script>
                setTimeout( () => {window.location.href = "./gracias.php";}, 2000);
            </script>
           <?php
	    }
    }
}
?>