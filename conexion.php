<?php
    $conn = new mysqli("localhost", "root", "", "universidad");
    if($conn){
        echo "Conexión exitosa";
    }else{
        echo "Hubo un error"
    }


?>