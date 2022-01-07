<?php
include("connection.php");

$nombre = $_POST["nombre"];
$email = $_POST["email"];
$password = $_POST["password"];

$insert = "INSERT INTO users(name, email, password) VALUES ('$nombre', '$email', '$password')";

$result = mysqli_query($conexion, $insert);
if($result){
    echo "<script>alert('Usuário creado con éxito');
    window.location='/php'</script>";
}
else{
    echo "<script>alert('No se pudo crear el usuario'); window.history.go(-1);</>";
}

