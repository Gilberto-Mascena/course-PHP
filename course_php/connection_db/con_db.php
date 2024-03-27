<?php

    $conn = mysqli_connect("db","root","root","sys") or die(mysqli_error($con));
    echo "Banco de dados conectado com sucesso!";
    $conn->close();

?>