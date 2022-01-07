<?php
include("connection.php");

$id = $_GET['id'];
$delate = "DELETE FROM users WHERE id = '$id'";

$result = mysqli_query($conexion, $delate);

if($result){
    header("Location: index.php");
}
else{
    echo "<script>alert('No se pudo eliminar el usuario'); window.history.go(-1);</>";
}



