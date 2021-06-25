<?php 

include("conexiondb.php");

if (isset($_POST['save_task'])){
    $producto = $_POST['producto'];
    $Cantidad = $_POST['Cantidad'];
    $Direccion = $_POST['Direccion'];
    $Telefono = $_POST['Telefono'];
    

    $query = "INSERT INTO productos(producto, Cantidad, Direccion, Telefono) VALUES ('$producto', '$Cantidad','$Direccion','$Telefono')";
    $result =  mysqli_query($conexion, $query);
    if(!$result) {
    
    die("Query Falló");
}

   
    $_SESSION['message_type'] = 'success';

    header("Location: index.php");
}

?>