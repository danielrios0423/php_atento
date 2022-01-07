<?php
include("connection.php");

$id = $_POST['id'];
$nombre = $_POST["name"];
$email = $_POST["email"];
$password = $_POST["password"];

$update = "UPDATE users SET name='$nombre', email='$email', password='$password' WHERE id ='$id'";

$result = mysqli_query($conexion, $update);

if($result){
    echo "<script>alert('Usuário actualizado con éxito');
    window.location='/php'</script>";
}
else{
    echo "<script>alert('No se pudo actualizar el usuario'); window.history.go(-1);</>";
}

